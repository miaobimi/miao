<?php 

namespace Com;

	Class Mt{
		const OP_BUY = 0;
		const OP_SELL = 1;
		const T_PLUGIN_MASTER = 'password';
		const CMD_NEW_ACCOUNT = 'A_N-MASTER=%s|IP=%s|GROUP=%s|NAME=%s|PASSWORD=%s|INVESTOR=%s|EMAIL=%s|COUNTRY=%s|STATE=%s|CITY=%s|ADDRESS=%s|COMMENT=%s|PHONE=%s|PHONE_PASSWORD=%s|STATUS=%s|ZIPCODE=%s|ID=%s|LEVERAGE=%s|AGENT=%s|SEND_REPORTS=%s|DEPOSIT=%s';
		const CMD_NEW_ORDER ='T_A-LOGIN=%s|VOLUME=%s|PRICE=%f|SYMBOL=%s|CMD=%u|SL=%f|TP=%f';//cmd=(OP_BUY OR OP_SELL)
		const CMD_NEW_BINARYORDER ='B_A-LOGIN=%s|VOLUME=%s|PRICE=%f|SYMBOL=%s|CMD=%u|CYCLE=%s|PWD=%s';//cmd=(OP_UP OR OP_DOWN) 二元开单	
		const CMD_CLOSE_ORDER ='T_C-ORDER=%u|VOLUME=%u|PRICE=%f';
		const CMD_CANCEL_PENDINGORDER ='T_CP-ORDER=%u';
		const CMD_ACTIVE_PENDINGORDER ='T_AP-ORDER=%u|PRICE=%f';
		const CMD_UPDATEORDER ='T_U-ORDER=%u|PRICE=%f|SL=%f||TP=%f';
		const CMD_NEW_PENDINGORDER ='T_P-LOGIN=%u|VOLUME=%u|PRICE=%f|SYMBOL=%s|EXPRIED=%s|CMD=%u|SL=%f|TP=%f';//cmd=(OP_BUY OR OP_SELL)
		
		const CMD_GET_HISTORYQUOTES ='G_SHQ-SYMBOL=%s|PERIOD=%u|FROM=%s|TO=%s'; //获取 symbol的历史报价
		const CMD_GET_SYMBOLDIGITS ='G_SD-SYMBOL=%s'; //获取symbol小数位
		const CMD_GET_SYMBOLSTOPLEV ='G_SSL-SYMBOL=%s'; //获取symbol.stopslevel差点
		const CMD_GET_ORDERLIST ='G_OL-LOGIN=%u|ISCLOSE=%u|FROM=%s|TO=%s'; //获取用户的下单列表
		const CMD_GET_SYMBOLS ='G_SL'; //获取系统支持的Symbols 返回列表
		const CMD_GET_WEBREGEDITGROUPS ='G_WG'; //获取插件支持的WebRegeditGoups 返回列表
		const CMD_QUERY_DEALCOMFIRMSTATE ='Q_O-ID=%s'; //查询 dealer处理状态
		
		
		const CMD_GET_SYMBOLINFORMATION ='G_SI-SYMBOL=%s'; //获取系统支持的Symbol信息	
		const CMD_GET_TRADEHISTORY =	'USERHISTORY-login=%u|password=%s|from=%s|to=%s'; //获取系统支持的Symbols 返回列表		
		const CMD_LOGIN ='U_L-LOGIN=%s|PWD=%s|IP=%s|VER=%s';
		const CMD_USERINFO ='G_UI-LOGIN=%s|PWD=%s'; //获取用户信息	
		const CMD_GET_QUOTES ='QUOTES-%s';	
		const CMD_SERVERTIME ='G_T';	//获取MT服务器时间
		
		const CMD_TRANSFERACCOUNT ='C_TA-SLOGIN=%u|DLOGIN=%s|SPWD=%s|VALUES=%f';	//用户转账
		const CMD_CHANGEPASSWORD ='C_UP-LOGIN=%u|NPWD=%s|OPWD=%s';	//用户用户修改密码
		
		const CMD_IPS_DISPOSE ='C_DA-LOGIN=%u|AMOUNT=%s|IPSBILLNO=%s|SIGUATURE=%s';	//IPS入金
		
		const _DEBUG = 0;

		private $MQ_CLEAR_STARTTIME;
		private $MQ_CLEAR_NUMBER;
		private $T_CACHEDIR;
		private $T_CACHETIME;
		private $T_TIMEOUT; //打开一个网络连接 的超时时间

		public function __construct(){
			
			
			$this->MQ_CLEAR_STARTTIME = 0; // time
			$this->MQ_CLEAR_NUMBER = 0;    // deleted files counter

			$this->T_CACHEDIR = './cache/';
			$this->T_CACHETIME = 5;
			$this->T_TIMEOUT = 5; 

		}

		function quotes(){
			$cmd= sprintf(self::CMD_GET_QUOTES,join(',',(array)$EXPORT_SYMBOLS).',');
			$q=iconv("UTF-8","GBK",$cmd);
			$res = MQ_Query($q);
		}

		/**
		 * 创建新账户
		 * @return [type] [description]
		 */
		function createAccount($params){
			$cmd= sprintf(self::CMD_NEW_ACCOUNT,self::T_PLUGIN_MASTER,
				$_SERVER[REMOTE_ADDR],$params['group'],
				$params['name'],$params['password'],
				$params['inverstor'],$params['email'],
				$params['country'],$params['state'],$params['city'],
				$params['address'],$params['comment'],
				$params['phone'],$params['phonepassword'],
				$params['status'],$params['zipcode'],$params['id'],
				$params['leverage'],$params['agent'],
				$params['sendreport'],$params['deposit']);
			
			$res = $this->MQ_QueryEx($cmd);
		}

		function historyquotes($symbol,$period,$from,$to){
			if(isset($symbol)&& isset($period) && isset($from) && isset($to)){
				$cmd=sprintf(CMD_GET_HISTORYQUOTES,$symbol,$period,$from,$to);	
				// $chachedir=	'../'.$HISTORYQUOTESDIR.'/'.$Servers[$_GET['server']]['ip'].'_'.$Servers[$_GET['server']]['port'].'/';
				// $cachefilename=$chachedir.$symbol.'_'.$period.'.data';
				if (!file_exists($chachedir)){
					//mkdir('../'.$HISTORYQUOTESDIR.'/'.$Servers[$_GET['server']]['ip'].'_'.$Servers[$_GET['server']]['port'].'/');
				}		
				if (file_exists($cachefilename) && (time()-filemtime($cachefilename))<=5){	
					// $res=file_get_contents($cachefilename);	
					// $ReadHistorycachefile=true;	
				}else{
					$res =$this->MQ_QueryEx($cmd);
					$ReadHistorycachefile=false;			
				}				
			}	
		}

		

		//+------------------------------------------------------------------+
		//| Cached Request to MetaTrader Server (web-services API)           |
		//+------------------------------------------------------------------+
		function MQ_Query($query,$cacheDir=T_CACHEDIR,$cacheTime=T_CACHETIME,$cacheDirPrefix=''){
		   //return MQ_QueryEx($query,$cacheDir,$cacheTime,$cacheDirPrefix);
		    $ret = '';
		    $fName = $cacheDir.$cacheDirPrefix.crc32($query); // cache file name
			//--- Is there a cache? Has its time not expired yet?
		    if(file_exists($fName) && (time()-filemtime($fName))<$cacheTime){
		      $ret = file_get_contents($fName);
		    }else{
		        $ptr=@fsockopen('115.28.137.28',443,$errno,$errstr,T_TIMEOUT); 
		        if($ptr){
					//--- If having connected, request and collect the result
		            if(fputs($ptr,"W$query\r\nQUIT\r\n")!=FALSE){
		                while(!feof($ptr)){
		                    if(($line=fgets($ptr,128))=="end\r\n") break;
		                    $ret .= $line;
		                } 
		                fclose($ptr);
		                p($ret);die;
		     //     		if ($cacheTime>0){
							// //--- If there is a prefix (login, for example), create a nonpresent directory for storing the cache
				   //          if ($cacheDirPrefix!='' && !file_exists($cacheDir.$cacheDirPrefix)){
				   //              foreach(explode('/',$cacheDirPrefix) as $tmp){
				   //                  if ($tmp=='' || $tmp[0]=='.') continue;
				   //                  $cacheDir .= $tmp.'/';
				   //                  if (!file_exists($cacheDir)) @mkdir($cacheDir);
				   //              }
				   //          }
							// //--- save result into cache
				   //          $fp=@fopen($fName,'w');
				   //          if($fp) { fputs($fp,$ret); fclose($fp); 
				   //      }
				    }
		        }else{
					//--- if connection fails, show the old cache (if there is one) or return with the error 
		            // if(file_exists($fName)){             
		            //     touch($fName);
		            //     $ret = file_get_contents($fName);
		            // }else{
		            //     $ret = '!!!CAN\'T CONNECT!!!';
		            // }
		        }
		    }
		     //echo filemtime(T_CACHEDIR.'.clearCache').'<br>';
		     //--- clear cache every 3 sec (for such frequency of calls)
		    // if(!file_exists($cacheDir.'.clearCache') || (time()-filemtime($cacheDir.'.clearCache'))>=3){
		    //   ignore_user_abort(true);
		    //   if (file_exists($cacheDir.'.clearCache'))
		    //   {   	
		    //   	touch($cacheDir.'.clearCache');
		    //   }
		    //   global $MQ_CLEAR_STARTTIME;
		    //   $MQ_CLEAR_STARTTIME = time();
		    //   MQ_ClearCache(realpath($cacheDir));
		    //   ignore_user_abort(false);
		    // }

		   return $ret;
		}

		Public function MQ_QueryEx($query,$cacheDirPrefix=''){
		   $ret = '';
		   
		   $fName = $this->T_CACHEDIR.$cacheDirPrefix.crc32($query); // cache file name

		//--- Is there a cache? Has its time not expired yet?
		   if(file_exists($fName) && (time()-filemtime($fName))<$this->T_CACHETIME){
		      $ret = file_get_contents($fName);
		   }else{
		     //echo $Current_ServerIndex;
		      $ptr=@fsockopen("115.28.137.28",443,$errno,$errstr,$this->T_TIMEOUT); 
		     
		      if($ptr){
		//--- If having connected, request and collect the result
		        $cmd=$query;
		      	//$cmd=EncryptData($cmd);  //加密命令
		         if(fputs($ptr,"W$cmd\r\nQUIT\r\n")!=FALSE)
		             while(!feof($ptr)){
		              //if(($line=fgets($28);ptr,128))=="end\r\n") break;
		                $line=fgets($ptr,128);
               			$ret .= $line;
		             } 
		         fclose($ptr);
		          p($ret);die;
		   //      if ($cacheTime>0){
					// //--- If there is a prefix (login, for example), create a nonpresent directory for storing the cache
		   //          if ($cacheDirPrefix!='' && !file_exists($cacheDir.$cacheDirPrefix))
		   //            {
		   //             foreach(explode('/',$cacheDirPrefix) as $tmp)
		   //               {
		   //                if ($tmp=='' || $tmp[0]=='.') continue;
		   //                $cacheDir .= $tmp.'/';
		   //                if (!file_exists($cacheDir)) @mkdir($cacheDir);
		   //               }
		   //            }
					// //--- save result into cache
		   //          $fp=@fopen($fName,'w');
		   //          if($fp) { fputs($fp,$ret); fclose($fp); }
		   //         }
		   //      }else{
					// //--- if connection fails, show the old cache (if there is one) or return with the error 
		   //        if(file_exists($fName)){             
		   //           touch($fName);
		   //           $ret = file_get_contents($fName);
		   //        }else{
		   //           $ret = '!!!CAN\'T CONNECT!!!';
		   //        }
		   //      }
		     }
		     //echo filemtime(T_CACHEDIR.'.clearCache').'<br>';
		//--- clear cache every 3 sec (for such frequency of calls)
		   // if(!file_exists($cacheDir.'.clearCache') || (time()-filemtime($cacheDir.'.clearCache'))>=3)
		   //   {
		   //    ignore_user_abort(true);
		   //    if (file_exists($cacheDir.'.clearCache'))
		   //    {   	
		   //    	touch($cacheDir.'.clearCache');
		   //    }
		   //    global $MQ_CLEAR_STARTTIME;
		   //    $MQ_CLEAR_STARTTIME = time();
		   //    $this->MQ_ClearCache(realpath($cacheDir));
		   //    ignore_user_abort(false);
		   //   }  
		   //   if($ret!= '!!!CAN\'T CONNECT!!!')
		   //   {
		   // 		$ret= DecryptData($ret); //解密结果
		   //   }
		   return $ret;
		  }

		  //+------------------------------------------------------------------+
			//| Clear cache                                                      |
			//+------------------------------------------------------------------+
			function MQ_ClearCache($dirName)
			  {
			   if(empty($dirName) || ($list=glob($dirName.'/*'))===false || empty($list)) return;
			//---
			   global $MQ_CLEAR_NUMBER,$MQ_CLEAR_STARTTIME;
			   $size = sizeof($list);
			   foreach($list as $fileName)
			     {
			      $baseName = basename($fileName);
			      if ($baseName[0]=='.') continue;
			      if (is_dir($fileName))
			        {
			//--- go through all cache directories recursively
			         MQ_ClearCache($fileName);
			         if ($MQ_CLEAR_NUMBER>=T_CLEAR_DELNUMBER) return; // by recursion check condition for function exit 
			        }
			      elseif(($MQ_CLEAR_STARTTIME-filemtime($fileName))>T_CACHETIME)
			        {
			//--- if the file time is expired, delete it and, if the limit of deleted files has been exceeded, exit
			         //@unlink($fileName);
			         if (++$MQ_CLEAR_NUMBER>=T_CLEAR_DELNUMBER) return;
			         --$size;
			        }
			     }
			//--- delete empty directory
			   $tmp = realpath(T_CACHEDIR);
			   if (!empty($tmp) && $size<=0 && strlen($dirName)>strlen($tmp) && $dirName!=$tmp) @rmdir($dirName);
			  }

		 //格式化某个字符串
		function FormatNumber($N,$c){
			$temp=''+$N;
			while(strlen($temp)<$c)
			{
				$temp='0'.$temp;
			}
			return $temp;
		}

		function __destory(){

		}
	}

?>