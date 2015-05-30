$(function(){
	$('#schoolCitySelector').on('change',function(event){
		GetSchoolLocation($(this).val());
	});
	$('#schoolLocationSelector').on('change',function(event){
		GetSchoolList($('#schoolCitySelector').val(),$(this).val());
	});
});

var GetSchoolLocation	=	function(schoolCityID){
	var AjaxObject	= new Object();
	AjaxObject.actionScriptURL	=	'Template/web/php/GetData.php?op=1&param='+schoolCityID;
	AjaxObject.sendMethod	=	'GET';
	AjaxObject.callBack	=	function(Response){
		Response	=	JSON.parse(Response);
		$('#schoolLocationSelector').html('<option selected="selected">Select Location</option>');
		for(i=0;i<Response.length;i++){
			$('#schoolLocationSelector').append('<option value='+Response[i]['locationId']+'>'+Response[i]['locationName']+'</option>');
		}
		$('#schoolListDiv').find('ul').html('');
	};
	send_remoteCall(AjaxObject);
};

var GetSchoolList	=	function(schoolCityID, schoolLocationID){
	var AjaxObject	= new Object();
	AjaxObject.actionScriptURL	=	'Template/web/php/GetData.php?op=2&param[]='+schoolCityID+'&param[]='+schoolLocationID;
	AjaxObject.sendMethod	=	'GET';
	AjaxObject.callBack	=	function(Response){
		Response	=	JSON.parse(Response);
		$('.homeCenterTop').css('display','none');
		$('#schoolListDiv').css('display','block');
		for(i=0;i<Response.length;i++){
			$('#schoolListDiv').find('ul').append('<li value='+Response[i]['schoolId']+'><a href="./?view=single&action=school&param='+Response[i]['schoolId']+'">'+Response[i]['schoolName']+'</a></li>');
		}
	};
	send_remoteCall(AjaxObject);
};