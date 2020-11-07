'use strict';
console.log('main.js startUp!!');


$(function() {
    $('html,body').animate({ scrollTop: 0 }, '1');
});


//ヘッダー　フェードイン
$(window).on('load',function () {
	var img = $('.index-kv-img').height();
	$(window).scroll(function () {
		if ($(this).scrollTop() > img / 2) {
			$('body #header').fadeOut();
		} else {
			$('body #header').fadeIn();
		}
	});
});

// 背景ちょっとづつぼかすやつ
$(window).on('scroll load', function (e) {
	var img = $('.top-kv-img').height();
	var concept = $('.index_about').height();
	var scrollnow = $(window).scrollTop();
	var scrollblur = (img + 30 * scrollnow) / img - 1;
	var scrollopacity = 1 - (scrollnow / 1500);
	var blur = Math.floor(scrollblur);
	$('.top-kv-img #img').css('-webkit-filter', 'blur(' + blur + 'px)');
	$('.top-kv-img #img').css('filter', 'blur(' + blur + 'px)');
	$('.top-kv-img #img').css('opacity', scrollopacity);
});

// これはわからん
$(function () {
	$('a[href^="#"]').click(function () {
		var speed = 500; // ミリ秒
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({
			scrollTop: position
		}, speed);
		return false;
	});
});

// ハンバーガーにクラスをつける
$(window).on('load',function () {
	$('#header-trigger a').click(function () {
		$(this).toggleClass('active');
		$('#gnav_trigger a').addClass('active');
		$('.overlay').fadeToggle(300);
		$('#gnav').animate({
			width: 'toggle'
		}, 300);
    });
});

// ハンバーガーの閉じるボタンの処理
$('#gnav_trigger a, .overlay').click(function () {
    $('#header-trigger a').removeClass('active');
    $('#gnav_trigger a').removeClass('active');
    $('.overlay').fadeToggle(300);
    $('#gnav').animate({
        width: 'toggle'
    }, 300);
});

// ----------------------------タトゥーモーダル表示------------------------------------
$(function($){
	// 画像タグ選択時発動
	$('.gallary-inner a').click(function (){
		var img_src = $(this).find('img').attr('src');

		// 中央よせ
		var s_position = $(window).scrollTop();
		var h_html = $('body').outerHeight();
		var h_window =$(window).height();
		var w_width = $(window).width();
		var w_overlay_box = $('#overlay_box').width();

		// width高さ調整
		if(s_position == 0){
			s_position = '30%';

		}else{
			//　無理やりtopの高さ増やしている
			s_position = s_position + 100 + 'px';
		}

		if (h_window > h_html) {
			var height = h_window;
		} else {
			var height = h_html;
		}

		$('#overlay').css({'width':w_width + 'px', 'height':height + 'px'},1000).fadeIn();
		$('#overlay_box').css({'top':s_position,'left':((w_width - w_overlay_box)/2)+ 'px'}).fadeIn();
		$('#overlay img').attr({'src':img_src});

	});

	// 外枠判定
	var flag = false;
	$('#overlay_box').hover(function(){
		flag = true;
	}, function(){
		flag = false;
	});

	// 外枠クリック
	$('#overlay').click(function(){
		if (flag == false) {
			$('#overlay').fadeOut();
		}
	});
});

// 読み込んだら常に頭から表示する
window.onload = function() {
	var popup = document.getElementById('js-popup');
	if (!popup) return;
	popup.classList.add('is-show');

	var blockBg = document.getElementById('js-block-bg');
	var closeBtn = document.getElementById('js-close-btn');

	closePopUp(blockBg);
	closePopUp(closeBtn);

	function closePopUp(elem){
		if(!elem) return;
		elem.addEventListener('click', function(){
			popup.classList.remove('is-show');
		})
	}
}

window.addEventListener('DOMContentLoaded', (event) => {
	var submitBtn = document.getElementById('submit-btn');
	console.log(submitBtn);
	$(function(){
		$('.test-btn').on('click',function(){
			$('.done-modal').fadeIn();
			return false;
		});
		$('.extension-btn').on('click',function(){
			$('.extension-modal').fadeIn();
			return false;
		});
		$('.done-modal-close,.done-modal-confirm').on('click',function(){
			$('.done-modal').fadeOut();
			return false;
		});
	});
	
	const stripe_checkout_result_vm = new Vue({
		el: '.zoom-window',
		data:{
		  url : ""
		},
		mounted(){
		  localStorage.setItem('cast_id', '18');
		  this.getZoomUri();
		},
		methods:{
		  getZoomUri: async function () {
			var castId = localStorage.getItem('cast_id');
	
			{
			  const url = "https://shirocha.ga/api/v1/get_zoom_uri?cast_id=" + castId;
	
			  const result = await axios.get(url).catch(err => {
				console.log("予期せぬエラー get_zoom cast_id: " + castId);
				console.log(err);
			  });
			  //this.url = result.data.guest_uri;
			 
				this.url = "https://us04web.zoom.us/wc/74790473105/join?prefer=0&un=e222be8239c0a447845a60a842bf359aaaadf7028b2ad5f85a03cd2c428557a2&userEmail=87afa5c3a6e52430859232118e8ad31c835c1f47e4b15c9fe50748026a9e77d2&zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnQiLCJ1aWQiOiJsRzJsd1pXVVFOU25DZ3V1a0l4dmhBIiwiaXNzIjoid2ViIiwic3R5IjoxLCJ3Y2QiOiJ1czA0IiwiY2x0IjowLCJzdGsiOiJCZXl1QjV4NnV5QnBHaW9VOGtHa1VwMDE1ZERtMWVXT01YRGw0YjFoOVE4LkVnSUFBQUZ6aFlPRDZRQUFIQ0FnT0RJMGVHTldaa3BDV1RGSlJUVTROVFZSZVdoR1VIUmxiM0l2YlZsblREQUFERE5EUWtGMWIybFpVek56UFFSMWN6QTAiLCJleHAiOjE1OTU2ODAwNTUsImlhdCI6MTU5NTY3Mjg1NSwiYWlkIjoiT2FtaGc4RENSMFc5VmI3dm02QW53USIsImNpZCI6IiJ9.D-00dLiTPer1tO7Ii7_6Y-MdRvDFed_FPm1R6rTzubY";
			  //document.getElementById("chatFrame").src = result.data.guest_uri;
			}
			//localStorage.setItem('cast_id', '-1');
		}
	}
	});
	
	var btn = document.getElementById('topBtn');
	 
	btn.addEventListener('click', function() {
	 var result = window.confirm('zoomが終了してしまいます。本当にトップに戻りますか？');
		
		if( result=== true ) {
			location.href = "[url]/top/";
		};
		
	});
	});

	