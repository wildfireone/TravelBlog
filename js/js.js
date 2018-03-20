// JavaScript Document

function delete_picture(id){
	
	if(id ==''){
	alert('no picture selected to delete.');
	return false;	
	}
	var pageurl = "./delete_picture_form.php?id="+id;
	var resp = $.ajax({
                url: pageurl,
                dataType: "text",
                async: false
            }).responseText;
						
	if(resp=='success'){
		location.reload();
	}
	
	if(resp =='error'){
		alert('error in deleting the picture.');	
	}

}


