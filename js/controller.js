const app = angular.module('stone_app', []);

app.controller('main',['$scope', '$http', function($scope, $http){
	$scope.portfolio = [];
	$scope.limit_portfolio = 4;

	$scope.modal = {
		active_slide : 0,
		header : '',
		description : '',
		main_img : '',
		thumbnails : [],
		length_slide : null

	};
	$http.get('test.json').then(function (value) {
		$scope.portfolio = value.data; 
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
		$scope.limit_portfolio += 4;
	}
}]); 