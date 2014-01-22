(function ($) {
    Drupal.behaviors.awtar = {
        attach:function (context) {
            $('ul#main-menu li:nth-child(2)', context).addClass('second');
            $('ul#main-menu li:nth-child(3)', context).addClass('third');
            $('ul#main-menu li:nth-child(4)', context).addClass('forth');
            $('ul#main-menu li:nth-child(5)', context).addClass('fifth');
            $('#what-we-do div.views-row-first.grid-4', context).addClass('alpha');
            $('#what-we-do div.views-row-last.grid-4', context).addClass('omega');
            $('#what-we-do div.grid-4,#events-content .events-list', context).hover(function () {
                // $(this).css('background-color', '#fdfdfd');
                $(this).nextAll().css('opacity', '0.4');
                $(this).prevAll().css('opacity', '0.4');
            }, function () {
                $(this).css('opacity', '1');
                $(this).nextAll().css('opacity', '1');
                $(this).prevAll().css('opacity', '1');
            });

            $('#sidebar ul.menu li', context).each(function (index) {
                var numbers = new Array('-4', '-3', '-2', '-1', '0', '+1', '+2', '+3', '+4');
                var rand = numbers[Math.floor(Math.random() * 9)];

                $(this).css('-webkit-transform', 'rotate(' + rand + 'deg)');
                $(this).css('-moz-transform', 'rotate(' + rand + 'deg)');
                $(this).css('-ms-transform', 'rotate(' + rand + 'deg)');
                $(this).css('-o-transform', 'rotate(' + rand + 'deg)');
                $(this).css('transform', 'rotate(' + rand + 'deg)');
            });

            var oldStyle = '';
            $('#sidebar ul.menu li', context).hover(function () {
                oldStyle = $(this).attr('style');
                $(this).addClass('rotate').removeAttr('style');
            }, function () {
                $(this).removeClass('rotate').attr('style', oldStyle);
            });

            $('#what-we-do div.grid-4 h1.main-title', context).each(function (e) {
                $(this).addClass('color-' + e);
            });
        }
    };

})(jQuery);
