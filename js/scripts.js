// Expanded header

function expandedHeader() {
    var $trigger = jQuery('.site-header-nav-trigger'),
        $expanded = jQuery('.expanded-site-header'),
        $container = jQuery('body');

    $trigger.click(function() {
        $expanded.slideToggle();
        $container.toggleClass('js-nav-expanded')
    })

    jQuery(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $expanded.slideUp();
            $container.removeClass('js-nav-expanded');
        }
    })
}

expandedHeader();