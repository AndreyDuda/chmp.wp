var $links = $('.scroll-menu a');

$links.on('click', function(e) {
	e.preventDefault();
	$('.scroll-menu li').removeClass('active');
	var link = $(this);
	var $target = $(link.attr('href'));
	$(this).closest('li').addClass('active');
	if ($target.length > 0) {
		$('html, body').animate({
			scrollTop: $target.offset().top - 70
		}, 700);
	}
	
});





$('#submit_chmp').click(function () {
	 var name = $('#name_form').val();
	 var phone = $('#phone_form').val();
	 
	 
	 if (name.length < 2) {
		
		alert('Укажите Ваше имя.');
		return;
	 }
	if(phone.length < 10 || phone.length > 12){
		
		alert('Неверно указан телефон.');
		return;
	}
	 
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
	
	$('#name_form').val('');
	$('#phone_form').val('');
 });

// Cache selectors
var lastId,
	topMenu = $(".scroll-menu"),
	topMenuHeight = topMenu.outerHeight() + 15,
	// All list items
	menuItems = topMenu.find("a"),
	// Anchors corresponding to menu items
	scrollItems = menuItems.map(function() {
		var item = $($(this).attr("href"));
		if (item.length) {
			return item;
		}
	});

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e) {
	var href = $(this).attr("href"),
		offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
	$('html, body').stop().animate({
		scrollTop: offsetTop
	}, 300);
	e.preventDefault();
});

// Bind to scroll
$(window).scroll(function() {
	// Get container scroll position
	var fromTop = $(this).scrollTop() + topMenuHeight;
	
	// Get id of current scroll item
	var cur = scrollItems.map(function() {
		if ($(this).offset().top < fromTop)
			return this;
	});
	// Get the id of the current element
	cur = cur[cur.length - 1];
	var id = cur && cur.length ? cur[0].id : "";
	
	if (lastId !== id) {
		lastId = id;
		// Set/remove active class
		menuItems
			.parent().removeClass("active")
			.end().filter("[href='#" + id + "']").parent().addClass("active");
	}
});


$("input#phone_form").keydown(function(event){
	
	if (event.key!= ''&& event.key!= ' ' && event.key >= 0 && event.key < 10 || event.key == 'Backspace' || event.key =='ArrowRight' || event.key =='ArrowLeft'){
	
	}else{
		event.preventDefault();
	}
	
});

$("input#name_form").keydown(function(event){
	var name = $('#name_form').val();
	if (event.key == ' '){
		$('#name_form').val(name.trim());
	}else if(event.key != 0 && event.key != 1 && event.key != 2 && event.key != 3 && event.key != 4 && event.key != 5 && event.key != 6 && event.key != 7 && event.key != 8 && event.key != 9){
	
	}else {
		event.preventDefault();
	}
	
});