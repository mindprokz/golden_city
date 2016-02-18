$(document).ready(function() {

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
	$("#application").submit(function() {
		var data = {
			name : document.querySelector('input[name="name"]').value,
			email : document.querySelector('input[name="email"]').value,
			telephone : document.querySelector('input[name="telephone"]').value,
		}
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: data,
		}).done(function( value ) {
			$('#mail')[0].innerHTML = value;
			$('#mail').removeClass('not_visible_mail');
			setTimeout(function() {
				$("#form").trigger("reset");
			}, 1000);
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
		var myLatlng = new google.maps.LatLng(43.207504, 76.883809);
		var myCenterMarker = new google.maps.LatLng(43.207504, 76.883809);
		var myOptions = {
			zoom: 17,
			center: myLatlng,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map_canvas_main"), myOptions);

		var marker = new google.maps.Marker({
			position: myCenterMarker,
			map: map,
			icon: 'img/metka.png'
		});
	};
	//Инициализация карты
	initialize_main();

});
$('a[href^="#"]').on('click', function () {
	$('html, body').animate({ scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top }, 1000 );
	return false;
});