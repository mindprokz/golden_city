$(document).ready(function() {
	$(".fancybox").click(function() {
		$(".fancybox").fancybox({
			maxWidth: 800,
			maxHeight: 800,
			fitToView: false,
			width: '80%',
			height: '80%',
			autoSize: false,
			closeClick: false,
			openEffect: 'fade',
			closeEffect: 'fade',
			helpers: {
				title: {
					type: 'inside'
				}
			}
		});
	});
	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));
	
	//$('#app').on('click',function() {
    //
	//});
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$(".application").submit(function(event) {
		event.preventDefault();
		var data = {
			name : document.querySelector('input[name="name"]').value,
			email : document.querySelector('input[name="email"]').value,
			telephone : document.querySelector('input[name="telephone"]').value,
		}
		$.ajax({
			type: "POST",
			url: "http://golden-city.kz/wp-content/themes/Golden_theme/mail.php",
			data: data,
		}).done(function( value ) {
			$('#mail')[0].innerHTML = value;
			$('#mail').removeClass('not_visible_mail');
			setTimeout(function() {
				$(".application").trigger("reset");
			}, 1000);
			setTimeout(function() {
				$('#mail')[0].setAttribute('style', 'opacity: 0;');
				setTimeout(function() {
					$('#mail').addClass('not_visible_mail');
				}, 500);
			}, 5000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	function initialize_main() {
		var myLatlng = new google.maps.LatLng(50.087412, 72.918180);
		var myCenterMarker = new google.maps.LatLng(50.087412, 72.918180);
		var myOptions = {
			zoom: 14,
			center: myLatlng,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map_canvas_main"), myOptions);

		var marker = new google.maps.Marker({
			position: myCenterMarker,
			map: map,
			icon: 'http://golden-city.kz/wp-content/themes/Golden_theme/img/metka.png'
		});
	};
	//Инициализация карты
	initialize_main();

});
$('a[href^="#"]').on('click', function () {
	$('html, body').animate({ scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top }, 1000 );
	return false;
});