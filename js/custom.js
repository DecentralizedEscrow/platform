/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// открытие вкладок при переходе по соответствующей ссылке
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
} 
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
 
/** ******  left menu  *********************** **/
$(function () {
    $('#sidebar-menu li ul').slideUp();
    $('#sidebar-menu li').removeClass('active');

    $('#sidebar-menu li').on('click touchstart', function() {
        var link = $('a', this).attr('href');

        if(link) { 
            window.location.href = link;
        } else {
            if ($(this).is('.active')) {
                $(this).removeClass('active');
                $('ul', this).slideUp();
            } else {
                $('#sidebar-menu li').removeClass('active');
                $('#sidebar-menu li ul').slideUp();
                
                $(this).addClass('active');
                $('ul', this).slideDown();
            }
        }
    });
	
	menuResize();
	$(window).on('resize', menuResize);

    // $('#menu_toggle').click(function () {
        // if ($('body').hasClass('nav-md')) {
            // $('body').removeClass('nav-md').addClass('nav-sm');
            // $('.left_col').removeClass('scroll-view').removeAttr('style');
            // $('.sidebar-footer').hide();

            // if ($('#sidebar-menu li').hasClass('active')) {
                // $('#sidebar-menu li.active').addClass('active-sm').removeClass('active');
            // }
        // } else {
            // $('body').removeClass('nav-sm').addClass('nav-md');
            // $('.sidebar-footer').show();

            // if ($('#sidebar-menu li').hasClass('active-sm')) {
                // $('#sidebar-menu li.active-sm').addClass('active').removeClass('active-sm');
            // }
        // }
    // });
	
	// меню по клику
	$('#menu_toggle').click(function () {
		$('.nav-xs .leftCol.col-fixed').toggle();
		$('.top_nav').toggleClass('active');
		// $('.top_nav .msgh').toggleClass('hidden');
	});
	// хайд меню при клике по странице
	$(document).click(function(e) {
		var target = e.target;
		if ($(window).width() < 600) {
			if ((!$(target).is('.leftCol') && !$(target).is('#menu_toggle')) && (!$(target).parents().is('.leftCol') && !$(target).parents().is('#menu_toggle'))) {
				$('.leftCol').hide();
				$('.top_nav').removeClass('active');
			}
		}
	});
	// хайд при скролле
	// var prev = 0;
	// var $window = $(window);
	// var nav = $('.top_nav.navbar-fixed-top');
	// $window.on('scroll', function(){
		// if ($(window).width() < 600) {
		  // var scrollTop = $window.scrollTop();
		  // nav.toggleClass('hidden', scrollTop > prev);
		  // prev = scrollTop;
		 // $('.leftCol').hide();
		 // $('.top_nav').removeClass('active');
		// }
	// });
});

// Функция ресайза меню
function menuResize() {
	if($(window).width() < 1200 && $(window).width() > 600){
		// $('.accMode').addClass('hidden');
		$('body').removeClass('nav-md').removeClass('nav-xs').addClass('nav-sm');
		$('.left_col').removeClass('scroll-view').removeAttr('style');
		$('.top_nav').removeClass('navbar-fixed-top');
		$('.sidebar-footer').hide();

		if ($('#sidebar-menu li').hasClass('active')) {
			$('#sidebar-menu li.active').addClass('active-sm').removeClass('active');
		}
	} else if ($(window).width() < 600) {
		$('body').removeClass('nav-md').removeClass('nav-sm').addClass('nav-xs');
		$('.top_nav').addClass('navbar-fixed-top');
	} else {
		// $('.accMode').removeClass('hidden');
		$('body').removeClass('nav-sm').removeClass('nav-xs').addClass('nav-md');
		$('.top_nav').removeClass('navbar-fixed-top');
		$('.sidebar-footer').show();

		if ($('#sidebar-menu li').hasClass('active-sm')) {
			$('#sidebar-menu li.active-sm').addClass('active').removeClass('active-sm');
		}
	}
}

// copy to clipboard
function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
	var targetId = "_hiddenCopyText_";
	var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
	var origSelectionStart, origSelectionEnd;
	if (isInput) {
		// can just use the original source element for the selection and copy
		target = elem;
		origSelectionStart = elem.selectionStart;
		origSelectionEnd = elem.selectionEnd;
	} else {
		// must use a temporary form element for the selection and copy
		target = document.getElementById(targetId);
		if (!target) {
			var target = document.createElement("textarea");
			target.style.position = "absolute";
			target.style.left = "-9999px";
			target.style.top = "0";
			target.id = targetId;
			document.body.appendChild(target);
		}
		target.textContent = elem.textContent;
	}
	// select the content
	var currentFocus = document.activeElement;
	target.focus();
	target.setSelectionRange(0, target.value.length);
	
	// copy the selection
	var succeed;
	try {
		  succeed = document.execCommand("copy");
	} catch(e) {
		succeed = false;
	}
	// restore original focus
	if (currentFocus && typeof currentFocus.focus === "function") {
		currentFocus.focus();
	}
	
	if (isInput) {
		// restore prior selection
		elem.setSelectionRange(origSelectionStart, origSelectionEnd);
	} else {
		// clear temporary content
		target.textContent = "";
	}
	copyNotice();
	return succeed;
}
	
	var inProcess = false;
	function copyNotice() {
		$('body').append('<div class="copyPopup">Скопировано</div>');
		var mx = event.pageX - 40;
		var my = event.pageY - 30;
		if (inProcess) return false;
		inProcess = true;
		$('.copyPopup').css({'left' : mx, 'top' : my});
		$('.copyPopup').animate({
			opacity: 0,
			top: "-=50"
		  }, 1400, function() {
			$('.copyPopup').remove();
			inProcess = false;
		  });
	}

/* Sidebar Menu active class */
$(function () {
    var url = window.location;
    $('#sidebar-menu a[href="' + url + '"]').parent('li').addClass('current-page');
    $('#sidebar-menu a').filter(function () {
        return this.href == url;
    }).parent('li').addClass('current-page').parent('ul').slideDown().parent().addClass('active');
});

/** ******  /left menu  *********************** **/
/** ******  right_col height flexible  *********************** **/
$(".right_col").css("min-height", $(window).height());
$(window).resize(function () {
    $(".right_col").css("min-height", $(window).height());
});
/** ******  /right_col height flexible  *********************** **/



/** ******  tooltip  *********************** **/
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
/** ******  /tooltip  *********************** **/
/** ******  progressbar  *********************** **/
if ($(".progress .progress-bar")[0]) {
    $('.progress .progress-bar').progressbar(); // bootstrap 3
}
/** ******  /progressbar  *********************** **/
/** ******  switchery  *********************** **/
if ($(".js-switch")[0]) {
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function (html) {
        var switchery = new Switchery(html, {
            color: '#26B99A'
        });
    });
}
/** ******  /switcher  *********************** **/
/** ******  collapse panel  *********************** **/
// Close ibox function
$('.close-link').click(function () {
    var content = $(this).closest('div.x_panel');
    content.remove();
});

// Collapse ibox function
$('.collapse-link').click(function () {
    var x_panel = $(this).closest('div.x_panel');
    var button = $(this).find('i');
    var content = x_panel.find('div.x_content');
    content.slideToggle(200);
    (x_panel.hasClass('fixed_height_390') ? x_panel.toggleClass('').toggleClass('fixed_height_390') : '');
    (x_panel.hasClass('fixed_height_320') ? x_panel.toggleClass('').toggleClass('fixed_height_320') : '');
    button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    setTimeout(function () {
        x_panel.resize();
    }, 50);
});
/** ******  /collapse panel  *********************** **/
/** ******  iswitch  *********************** **/
if ($("input.flat")[0]) {
    $(document).ready(function () {
        $('input.flat').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });
}
/** ******  /iswitch  *********************** **/
/** ******  star rating  *********************** **/
// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function ($, window) {
    var Starrr;

    Starrr = (function () {
        Starrr.prototype.defaults = {
            rating: void 0,
            numStars: 5,
            change: function (e, value) {
            }
        };

        function Starrr($el, options) {
            var i, _, _ref,
                    _this = this;

            this.options = $.extend({}, this.defaults, options);
            this.$el = $el;
            _ref = this.defaults;
            for (i in _ref) {
                _ = _ref[i];
                if (this.$el.data(i) != null) {
                    this.options[i] = this.$el.data(i);
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on('mouseover.starrr', 'span', function (e) {
                return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
            });
            this.$el.on('mouseout.starrr', function () {
                return _this.syncRating();
            });
            this.$el.on('click.starrr', 'span', function (e) {
                return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
            });
            this.$el.on('starrr:change', this.options.change);
        }

        Starrr.prototype.createStars = function () {
            var _i, _ref, _results;

            _results = [];
            for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
            }
            return _results;
        };

        Starrr.prototype.setRating = function (rating) {
            if (this.options.rating === rating) {
                rating = void 0;
            }
            this.options.rating = rating;
            this.syncRating();
            return this.$el.trigger('starrr:change', rating);
        };

        Starrr.prototype.syncRating = function (rating) {
            var i, _i, _j, _ref;

            rating || (rating = this.options.rating);
            if (rating) {
                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                    this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                }
            }
            if (rating && rating < 5) {
                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                    this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                }
            }
            if (!rating) {
                return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
            }
        };

        return Starrr;

    })();
    return $.fn.extend({
        starrr: function () {
            var args, option;

            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function () {
                var data;

                data = $(this).data('star-rating');
                if (!data) {
                    $(this).data('star-rating', (data = new Starrr($(this), option)));
                }
                if (typeof option === 'string') {
                    return data[option].apply(data, args);
                }
            });
        }
    });
})(window.jQuery, window);

$(function () {
    return $(".starrr").starrr();
});

$(document).ready(function () {

    $('#stars').on('starrr:change', function (e, value) {
        $('#count').html(value);
    });


    $('#stars-existing').on('starrr:change', function (e, value) {
        $('#count-existing').html(value);
    });

});
/** ******  /star rating  *********************** **/
/** ******  table  *********************** **/
$('table input').on('ifChecked', function () {
    check_state = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    check_state = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var check_state = '';
$('.bulk_action input').on('ifChecked', function () {
    check_state = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    check_state = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input#check-all').on('ifChecked', function () {
    check_state = 'check_all';
    countChecked();
});
$('.bulk_action input#check-all').on('ifUnchecked', function () {
    check_state = 'uncheck_all';
    countChecked();
});

function countChecked() {
    if (check_state == 'check_all') {
        $(".bulk_action input[name='table_records']").iCheck('check');
    }
    if (check_state == 'uncheck_all') {
        $(".bulk_action input[name='table_records']").iCheck('uncheck');
    }
    var n = $(".bulk_action input[name='table_records']:checked").length;
    if (n > 0) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        $('.action-cnt').html(n + ' Records Selected');
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}
/** ******  /table  *********************** **/
/** ******    *********************** **/
/** ******    *********************** **/
/** ******    *********************** **/
/** ******    *********************** **/
/** ******    *********************** **/
/** ******    *********************** **/
/** ******  Accordion  *********************** **/

$(function () {
    $(".expand").on("click", function () {
        $(this).next().slideToggle(200);
        $expand = $(this).find(">:first-child");

        if ($expand.text() == "+") {
            $expand.text("-");
        } else {
            $expand.text("+");
        }
    });
});

/** ******  Accordion  *********************** **/

/** ******  scrollview  *********************** **/
$(document).ready(function () {

    $(".scroll-view").niceScroll({
        touchbehavior: true,
        cursorcolor: "rgba(42, 63, 84, 0.35)"
    });

});
/** ******  /scrollview  *********************** **/

/** ******  NProgress  *********************** **/
if (typeof NProgress != 'undefined') {
    $(document).ready(function () {
        NProgress.start();
    });

    $(window).load(function () {
        NProgress.done();
    });
}
/** ******  NProgress  *********************** **/