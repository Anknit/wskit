$(function(){
	$('#eventCitySelector').on('change',function(event){
		GetEventList($(this).val());
	});
});

var GetEventList	=	function(CityID){
	var AjaxObject	= new Object();
	AjaxObject.actionScriptURL	=	'Template/web/php/GetData.php?op=3&param='+CityID;
	AjaxObject.sendMethod	=	'GET';
	AjaxObject.callBack	=	function(Response){
		Response	=	JSON.parse(Response);
		$('.homeCenterTop').css('display','none');
		$('#eventListDiv').css('display','block');
		for(i=0;i<Response.length;i++){
			$('#eventListDiv').find('ul').append('<li value='+Response[i]['eventId']+'><a href="./?view=single&action=event&param='+Response[i]['eventId']+'">'+Response[i]['eventName']+'</a><span>'+Response[i]['eventDate']+'</span></li>');
		}
	};
	send_remoteCall(AjaxObject);
};