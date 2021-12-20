(function ($) {
	$.fn.isInTheViewport = function () {
		var deviation = 100;
		if (deviation < 0 && -deviation > document.documentElement.clientHeight / 2) {
			deviation = document.documentElement.clientHeight / 2;
		}
		var elementHeight = $(this)[0].offsetHeight;
		var bounding = $(this)[0].getBoundingClientRect();
		return (
			bounding.top + deviation >= -elementHeight &&
			bounding.bottom - deviation <= (window.innerHeight || document.documentElement.clientHeight) + elementHeight
		);
	};

	function lazyLoadBgImages() {
		$('[lazy="loading-bg-img"]').each(function () {
			var $this = $(this);
			if ($(this).isInTheViewport()) {
				var $src = $this.data('src');
				var $downloadingImage = $('<img>');
				$downloadingImage.attr('src', $src);
				$downloadingImage.on('load', function () {
					$this.css({
						'background-image': function () {
							return 'url(' + $src + ')';
						}
					});
					$this.attr('lazy', 'bg-img-loaded');
				});
			}
		});
	}

	function lazyLoadAssets() {
		$('[lazy="loading"]').each(function () {
			var $this = $(this);
			if ($(this).isInTheViewport()) {
				var $img = $this.find("img");
				var $src = $img.data("src");
				$img.attr("src", $src);
				$img.on('load', function () {
					$this.attr("lazy", "loaded");
					$img.addClass("fade-in");
				});
			}
		});
	}

	function hashSome() {
		var hashString = window.location.hash;
		if (hashString.length) {
			var $target = hashString.split("#")[1];
			var $item = "." + $target;
			if ($($item).length) {
				var pst = $($item).offset().top;
				if ($target == 'entry') {
					$('html,body').stop().animate({
							scrollTop: pst
						},
						0
					);
				} else {
					$('html,body').stop().animate({
							scrollTop: pst - 100
						},
						1000
					);
				}
			}
		}
	}

	function hashChangeFunction() {
		var a = $('.header ul a,.drop-down-menu a,a.flink');
		if ($('body').hasClass('home')) {
			a.each(function () {
				$(this).on('click', function (event) {
					event.preventDefault();
					$('.menu-status').prop('checked', false);
					var $this = $(this);
					var $id = $this.attr("href");
					var target = $id.split("#")[1];
					var $item = "." + target;
					var pst = $($item).offset().top;
					$('html,body').stop().animate({
							scrollTop: pst - 100
						},
						1000
					);
				});
			})

		}
	}

	function hashServiceFunction() {
		var a = $(".service .pic_item a");
		a.on("click", function (event) {
			event.preventDefault();
			var $this = $(this);
			var $id = $this.attr("href");
			var $item = "." + $id;
			var pst = $($item).offset().top;
			$("html,body").stop().animate({
				scrollTop: pst - 30
			}, 1000);
		});
	}

	function scroll() {
		var dis = $(window).scrollTop();
		if ($('body').hasClass('home')) {
			if (dis > 50) {
				$('body').addClass('fixed');
			} else {
				$('body').removeClass('fixed');
			}
		}
		if (dis > 1000) {
			$('.top').addClass('show');
		} else {
			$('.top').removeClass('show');
		}
	}

	function click() {
		$('.top').on('click', function () {
			$('body,html').animate({
					scrollTop: 0
				},
				2000
			);
		});
	}

	function navAction() {
		$('body').append('<div class="drop-down-menu"><nav class="top_nav"></nav></div>');
		$('.drop-down-menu nav').html($('.header nav').html());
	}

	function splitStrings() {
		var a = $('.secttl h2');
		a.each(function () {
			var str = '';
			var b = $(this).text();
			for (var i = 0; i < b.length; i++) {
				var character = b.charAt(i);
				str += '<span class="animation-string">' + character + '</span>';
			}
			$(this).html(str);
		});
	}

	function animateContentNormal() {
		var $object = $('.secttl');
		$object.each(function () {
			var $this = $(this);
			if ($this.length) {
				var $a = $(this).offset().top;
				var $b = $(window).scrollTop();
				var $c = $(window).height() * 0.7;
				var $d = $(window).height();
				var $selfHeight = $(this).height();
				if ($b > $a - $c || $b > $a - $d + $selfHeight) {
					$this.addClass('show');
					setTimeout(function () {
						for (var i = 0; i < $this.find('.animation-string').length; i++) {
							(function (n) {
								setTimeout(function () {
									$this.find('.animation-string').eq(n).addClass('showString');
									if (n == $this.find('span').length - 1) {
										setTimeout(function () {
											//	$('.footer-part .bottom-line > *').addClass('do');
										}, 300);
									}
								}, n * 30);
							})(i);
						}
					}, 400);
				}
			}
		});
	}

	function subpage() {
		if ($('.lecturers-layer').length) {
			$('.lecturers-layer').addClass('active');
		}
	}

	function hero() {
		setTimeout(function () {
			$('.hero').addClass('active');
		}, 100);
	}
	$(function () {
		navAction();
		lazyLoadBgImages();
		hashChangeFunction();
		hashServiceFunction()
		scroll();
		click();
		animateContentNormal();
		splitStrings();
		lazyLoadAssets();
		subpage();
	});
	$(window).on('load', function () {
		hero();
		hashSome();
	});
	$(window).on('scroll', function () {
		lazyLoadBgImages();
		scroll();
		animateContentNormal();
		lazyLoadAssets();
	});
})(jQuery);