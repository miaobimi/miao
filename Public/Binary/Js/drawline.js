function Drawline(){
	this.init();
}

Drawline.prototype = {

	MAS_Colors : {"3": "#00FF00" , "7" :'blue', "25" :'#FFA500'},
	
	init : function(){
		this.printChar();
		var invPrintChar=setInterval("this.printChar()",300000);	
	},

	printChar : function(){
		var obj=[];
		var item = { color: this.MAS_Colors["10"], daysCount: 3 };
		// var item = { color: MAS_Colors["3"], daysCount: 3 };
		obj.push(item);
		item = { color: this.MAS_Colors["7"], daysCount: 7 };
		obj.push(item);
		item = { color: this.MAS_Colors["25"], daysCount: 25 };
		obj.push(item);			
		
		//Curr_period 时间图 如 1分钟图 5分钟图
		//Curr_CharType  折线图类型 line
		// this.printSymbolChar(CurrSymbol,Curr_period,"cav_char",Curr_CharType,obj);
		this.printSymbolChar('XAUUSDbo',1,"cav_char",'line',obj);
	},

	getLocalStorage : function () {  
	    try {  
	        if( !! window.localStorage ) return window.localStorage;  
	    } catch(e) {  
	        return undefined;  
	    }  
	},

	isObj : function (str){
	   	if(str==null||typeof(str)=='undefined') return false; return true;
	},

	GetPeriodDefaultDays : function (period){
		if (period==1){return 1;} 
		if (period==5){return 3;} 
		if (period==15){return 7;} 
		if (period==30){return 7;}
		if (period==60){return 30;} 
		if (period==240){return 30;}
		if (period==1440){return 1460;} 
		if (period==10080){return 1460;} 
		if (period==43200){return 1460} 
	},

	GetTimeFormat : function (period){
		if (period==1){return "dd AA hh:mm";} //1 min
		if (period==5){return "dd AA hh:mm";} //5 min
		if (period==15){return "dd AA hh:mm";} //15 min
		if (period==30){return "dd AA hh:mm";} //30 min
		if (period==60){return "dd AA hh:mm";} //1 h
		if (period==240){return "dd AA hh:mm";}//4 h
		if (period==1440){return "dd AA yyy";} //1 d
		if (period==10080){return "dd AA yyy";} // 1 w
		if (period==43200){return "dd AA yyy";} // 1 M
	},

	getCharDatajax : function (v_symbol,v_period,olddatas,beforeSendCallBack,successCallback,errCallback) {
		var self = this;
		var data={
			quote: {                	
		    	symbol:v_symbol,
		    	datatype:v_period,
		    	xformat:'',
				yformat:'',
		    	low:0,
				high:0,
				digits:0
	    	},
	    	datas: []
	    }
		var fromtime=null;
		var now= parseInt((new Date()).getTime()/1000);
		if (!this.isObj(olddatas)|| olddatas.datas.length==0){
			fromtime=now- (86400*this.GetPeriodDefaultDays(v_period));
		}else{
			fromtime=olddatas.datas[olddatas.datas.length-1].quoteTime;
		}	
		$.ajax({
	        type: "Get", 
	        url: historyquotes, 
	        dataType: "json",
	        data : {
	        	symbol : v_symbol,
	        	period : v_period,
	        	from : fromtime,
	        	to : now,
	        	server : 0
	        },
	        beforeSend: function(){	 
	        	beforeSendCallBack();
	        }, 
	        success: function(json){	      
	        	console.log(json);return false;
	            if(self.isObj(json)&& json.error==''){ 
	            	if (!self.isObj(olddatas)){olddatas=data;}
	            	olddatas.quote.symbol=json.symbol;
	            	olddatas.quote.xformat=self.GetTimeFormat(json.period);
	            	olddatas.quote.yformat="";
	            	olddatas.quote.datatype=Number(json.period);
	            	olddatas.quote.digits=Number(json.digits);
	            	var dig=Math.pow(10,json.digits);
	            	//var d = new Date();
	        	    for (var i = 0; i < json.data.length; i++) {
	        	        var rawData = json.data[i];
	        	        var pClose;        	        
	        	        var $tmpopen=rawData[1]/dig;
	        	        if (i==0){pClose=Number($tmpopen);}else{pClose=Number(json.data[i-1][1]/dig);}       	        
	        	        var item = {
	        	            quoteTime:rawData[0],
	        	            preClose:pClose ,
	        	            open: fomatFloat(Number($tmpopen),json.digits),
	        	            high: fomatFloat(Number($tmpopen)+Number(rawData[2]/dig),json.digits),
	        	            low:  fomatFloat(Number($tmpopen)+Number(rawData[3]/dig),json.digits),
	        	            close: fomatFloat(Number($tmpopen)+Number(rawData[4]/dig),json.digits),
	        	            volume: Number(rawData[5]),
	        	            amount: 0,
	        	            isCurr:false
	        	        }
	        	        if (olddatas.datas.length == 0) {
	        	        	olddatas.low = item.low;
	        	        	olddatas.high = item.high;
	        	        } else {
	        	        	olddatas.high = Math.max(olddatas.high, item.high);
	        	        	olddatas.low = Math.min(olddatas.low, item.low);
	        	        }
	        	        olddatas.datas.push(item);
	        	    }
	            	return successCallback(olddatas);
	            }else{ 
	                return errCallback(json.error); 
	            } 
	        },error:function() 
	        {
	        	return errCallback("networkerror"); 
	        }
		})
		
	},

	//symb 信号
	//period 时间图 如 1分钟图 5分钟图
	//cavid canvas id
	//chartype  折线图类型 line
	printSymbolChar : function (symb,period,cavid,chartype,mas){  
		var db=this.getLocalStorage();   
		var datas=null;
		//clearInterval(invGetCurrQuotes);
		//invGetCurrQuotes=setInterval("GetCurrQuotes('"+CurrSymbol+"')",30000);
		if (db){
			this.getCharDatajax(
				symb,
				period,
				datas,
				function(){},
				function(d){
					var s=jsonToString(d);
					db.removeItem(symb+'-'+period);
					db.setItem(symb+'-'+period,s);				
					var symbstr=db.getItem(symb+'-'+period);
					CurrCharData=eval("(" + symbstr + ")");				
					if(CurrCharPainter==null)
					{
						CurrChar=new DrawKLine(cavid,CurrCharData,chartype,mas);
						CurrChar.draw();	
					}
					else
					{
						CurrCharPainter.data=CurrCharData;
						CurrCharPainter.implement.options.charType=chartype;
						CurrCharPainter.implement.options.MAS=mas
						CurrCharPainter.implement.options.dataRanges=null;
				        if(CurrCharPainter.symbol!=symb)
						{
							CurrChar=new DrawKLine(cavid,CurrCharData,chartype,mas);
							CurrChar.draw();
							CurrCharPainter.symbol=symb;
						}
						CurrCharPainter.paint();
					}										
				},
				function(er)
				{
					if(er!=null) alert(er);
				}
				);       				
		}  
		else //不支持本地存储只能每次都取全部sh
		{
			this.getCharDatajax(
					symb,
					period,
					datas,
					function(){},
					function(d){
						CurrCharData=d;
						
						if(CurrCharPainter==null)
						{
							CurrChar=new DrawKLine(cavid,CurrCharData,chartype,mas);			
							CurrChar.draw();		
						}
						else
						{
							CurrCharPainter.data=CurrCharData;
							CurrCharPainter.implement.options.charType=chartype;
							CurrCharPainter.implement.options.MAS=mas
							CurrCharPainter.paint();
						}										
					},
					function(er)
					{
						
						if(err!=null) CanvasTextOutCenter("cav_char",er);
					}
			);       			
		}	
	},

	ajaxReturn : function(url,data,before,callback){
		$.ajax({
			url : url,
			data : data,
			dataType : 'json',
			type : 'POST',
			beforeSend : function(){
				if(typeof before === 'function'){
					before();
				}
			},
			success : function(result){
				if(typeof callback === 'function'){
					callback(result);
				}
			},
			error : function(){
				layer.alert('network error');
			}
		})
	}
};