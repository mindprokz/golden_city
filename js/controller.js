const app = angular.module('stone_app', []);

app.controller('main',['$scope', '$http', function($scope, $http){
	$scope.portfolio = [];
	$scope.limit_portfolio = 8;

	$scope.modal = {
		active_slide : 0,
		header : '',
		description : '',
		main_img : '',
		thumbnails : [],
		length_slide : null

	};
	
	$http.get('http://golden-city.kz/?json=get_category_posts&category_slug=port').then(function (value) {
		var posts_array = value.data.posts;
		console.log(posts_array[0].custom_fields.info_thumbnails1[0]);
		for(let i = 0, len = posts_array.length; i < len; i++){
			let obj = {};
			
				obj.image_bg = posts_array[i].thumbnail_images.large.url;
				obj.head_short = posts_array[i].custom_fields.info_head_short[0];
				obj.desc_short = posts_array[i].custom_fields.info_desc_short[0];
				obj.header = posts_array[i].title;
				obj.description = posts_array[i].content;
				obj.thumbnails = [];
				obj.thumbnails[0] = posts_array[i].custom_fields.info_thumbnails1[0];
				obj.thumbnails[1] = posts_array[i].custom_fields.info_thumbnails2[0];
				obj.thumbnails[2] = posts_array[i].custom_fields.info_thumbnails3[0];
				obj.thumbnails[3] = posts_array[i].custom_fields.info_thumbnails4[0];

			$scope.portfolio.push(obj);
		}
		$scope.modal.length_slide = value.data.length - 1;
	});

	$scope.open_modal = function (){
		document.querySelector('#modal').classList.remove('close');
	};
	$scope.update_modal = function (iter_index, open_modal){
		$scope.modal.active_slide = iter_index;
		$scope.modal.header = $scope.portfolio[iter_index].header;
		$scope.modal.description = $scope.portfolio[iter_index].description;
		$scope.modal.main_img = $scope.portfolio[iter_index].image_bg;
		$scope.modal.thumbnails = $scope.portfolio[iter_index].thumbnails;
		document.querySelector('#modal .wrapper .left > .wrap_img img').setAttribute('src', $scope.modal.main_img);
		if (open_modal) open_modal();
	};
	$scope.slide_left = function (){
		if( $scope.modal.active_slide !== 0){
			$scope.modal.active_slide -= 1;
			$scope.update_modal($scope.modal.active_slide);
		}
	};
	$scope.slide_right = function (){
		if( $scope.modal.active_slide !== $scope.modal.length_slide){
			$scope.modal.active_slide += 1;
			$scope.update_modal($scope.modal.active_slide);
		}
	};

	$scope.change_main_img = function(url){
		$scope.modal.main_img = url;
	};

	// события для закрывашки модального окна
  	document.querySelector('.closer').addEventListener('mouseenter',function (){
		this.parentNode.parentNode.setAttribute('style', 'opacity: 0.5')
	});
	document.querySelector('.closer').addEventListener('mouseleave',function (){
		this.parentNode.parentNode.setAttribute('style', 'opacity: 1')
	});
	document.querySelector('.closer').addEventListener('click',function (){
		this.parentNode.parentNode.classList.add('close');
	});


	var wrap_img = document.querySelectorAll('.wrap_elem_modal');
	[...wrap_img].forEach(function(num, item, arr){
		num.onclick = function(){
			$scope.modal.main_img = this.firstElementChild.getAttribute('src');
			document.querySelector('#modal .wrapper .left > .wrap_img img').setAttribute('src', $scope.modal.main_img);
		};
	});
	
	$scope.seeMore = function(){
		$scope.limit_portfolio += 8;
	}
}]);

app.controller('plitka_slider', ['$scope', function($scope){
	$scope.main_slider_images = {
		images : [
			'/img/plitka_1.jpg',
			'/img/plitka_2.jpg',
			'/img/plitka_3.jpg',
			'/img/plitka_4.jpg',
			'/img/plitka_5.jpg',
			'/img/plitka_6.jpg',
		],
		active : 0,
	};
	$scope.main_src = '/img/plitka_1.jpg';

	$scope.slide_left = function(){
		if ($scope.main_slider_images.active !== 0){
			$scope.main_slider_images.active -= 1;
			$scope.main_src = $scope.main_slider_images.images[$scope.main_slider_images.active];
			$scope.slider_button_update();
		}
	};

	$scope.slide_right = function(){
		if ($scope.main_slider_images.active !== 5) {
			$scope.main_slider_images.active += 1;
			$scope.main_src = $scope.main_slider_images.images[$scope.main_slider_images.active];
			$scope.slider_button_update();
		}
	};
	$scope.slider_button_update = function(){
		document.querySelector('#slider .left .list .icon.active').classList.remove('active');
		document.querySelectorAll('#slider .left .list .icon')[$scope.main_slider_images.active].classList.add('active');
	};
	$scope.button_click = function(index){
		$scope.main_slider_images.active = index;
		$scope.main_src = $scope.main_slider_images.images[$scope.main_slider_images.active];
		$scope.slider_button_update();
	};
}]);