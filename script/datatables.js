jQuery( document ).ready(function() {
	var table = jQuery('#developers').dataTable({
			 "bProcessing": true,
			 "sAjaxSource": "load_data.php",
			  "bPaginate":true,
			  "sPaginationType":"full_numbers",
			  "iDisplayLength": 5,//lenth which you will print
			 "aoColumns": [
					{ mData: 'id' } ,
					{ mData: 'firstname' },
					{ mData: 'name' },
					{ mData: 'description' },
					{ mData: 'date_created' },
					// { mData: 'address' },
					// { mData: 'designation' },
					// { mData: 'skills' }
			]
	});   
});