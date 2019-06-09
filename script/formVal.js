/*
	* File Name    : formVal.js
	* Author       : Amber Bantatua
	* Date Created : 21 January 2013
	* Version      : 1.0
	* Last Modified: 
	* Description  : External javascript actions 
*/

	
	function checkData(theForm) {
		
	var errMsg="";
	
	if(theForm.your_name.value=="") {
	errMsg=errMsg + "Name cannot be blank. \n";
	}
	
	if(theForm.your_email.value=="") {
	errMsg=errMsg + "Email address needs to be entered. \n";
	}
			
	else {
			
	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(theForm.your_email.value))) {
	errMsg=errMsg + "Invalid email address. \n";
	}
	}
	
	if(errMsg !="") {
	alert(errMsg);
	return false;
	}
	else {
	return true;
	}

	}
	