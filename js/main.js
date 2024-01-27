jQuery(function($) {

    $('.sidebar-dropdown > a').click(function(e) {
        if ($('.page-wrapper').hasClass('pinned') === false || window.matchMedia("(max-width: 769px)").matches) {
            if ($(this).parent().hasClass('active')) {
                let elementsActive = $(this).parent().find('.active')
                elementsActive.each(function () {
                    $(this).removeClass('active')
                    $(this).children().children('.menu-dropdown').css('transform', 'rotate(0)')
                })
                let allSubmenu = $(this).parent().find('.sidebar-submenu')
                allSubmenu.each(function () {
                    $(this).slideUp(200);
                })
            }
            $(this).prev('.sidebar-submenu').slideUp(200);
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active');
                $(this).next('.sidebar-submenu').slideUp(200);
                $(this).children('.menu-dropdown').css('transform', 'rotate(0)')
            } else {
                $(this).next('.sidebar-submenu').slideDown(200);
                $(this).parent().addClass('active');
                $(this).children('.menu-dropdown').css('transform', 'rotate(-90deg)')
            }
        } else {
            if ($(this).parents('ul').length !== 1) {
                if ($(this).parent().hasClass('active')) {
                    let elementsActive = $(this).parent().find('.active')
                    elementsActive.each(function () {
                        $(this).removeClass('active')
                        $(this).children().children('.menu-dropdown').css('transform', 'rotate(0)')
                    })
                    let allSubmenu = $(this).parent().find('.sidebar-submenu')
                    allSubmenu.each(function () {
                        $(this).slideUp(200);
                    })
                }
                $(this).prev('.sidebar-submenu').slideUp(200);
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().removeClass('active');
                    $(this).next('.sidebar-submenu').slideUp(200);
                    $(this).children('.menu-dropdown').css('transform', 'rotate(0)')
                } else {
                    $(this).next('.sidebar-submenu').slideDown(200);
                    $(this).parent().addClass('active');
                    $(this).children('.menu-dropdown').css('transform', 'rotate(-90deg)')
                }
            }
        }
    });




    $('#pin-sidebar').click(function() {
        $('.sidebar-dropdown').each(function () {
            $(this).removeClass('active')
        })
        $('.sidebar-submenu').each(function () {
            $(this).slideUp(200)
        })
        $('.sidebar-dropdown .menu-dropdown').each(function () {
            $(this).css('transform', 'rotate(0)')
        })
        if ($('.page-wrapper').hasClass('pinned')) {
            $('.page-wrapper').removeClass('pinned');
        } else {
            $('.page-wrapper').addClass('pinned');
        }
    });



    if (
        !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator.userAgent
        )
    ) {
        $('.sidebar-content').mCustomScrollbar({
            axis: 'y',
            autoHideScrollbar: true,
            scrollInertia: 300,
        });
        $('.sidebar-content').addClass('desktop');
    }
});