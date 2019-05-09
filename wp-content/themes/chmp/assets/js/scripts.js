/*
$.ajax({
	url: window.wp.ajax_url,
	data: data,
	type: 'post',
	success: function (response) {
		if (response.error) {
			alert('Ошибка сервера, попробуйте еще раз.');
			return;
		}
		alert('Заказ отправлен.');
	},
	error: function (jqXHR, textStatus, errorThrown) {
		alert('Ошибка сервера, попробуйте еще раз.');
	}
});*/

 
 $('#submit_chmp').click(function () {
	 var name = $('#name_form').val();
	 var phone = $('#phone_form').val();
	 
	 var data = {
		 action: 'sendmail',
		 name: name,
		 phone: phone
	 };
	 $.ajax({
		 url: window.wp.ajax_url,
		 data: data,
		 type: 'post',
		 success: function (response) {
			 if (response.error) {
				 alert('Ошибка сервера, попробуйте еще раз.');
				 return;
			 }
			 alert('Контакты отправлены.');
		 },
		 error: function (jqXHR, textStatus, errorThrown) {
			 alert('Ошибка сервера.');
		 }
		
		
	 });
 });