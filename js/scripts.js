var quinte = {
    init: function(){
        quinte.nav.init();
    }
};

quinte.nav = {

    el: {
        trigger: jQuery('.site-header-nav-trigger'),
        expanded: jQuery('.expanded-site-header'),
        container: jQuery('body')
    },

    init: function(){
        quinte.nav.el.trigger.click(function(){
            quinte.nav.toggle();
        })
        jQuery(document).keyup(function(e){
            var e = e.keyCode;
            quinte.nav.close(e)
        })
    },

    toggle: function(){
        quinte.nav.el.expanded.slideToggle();
        quinte.nav.el.container.toggleClass('js-nav-expanded')
    },

    close: function(code){
        if (code == 27) {
            quinte.nav.el.expanded.slideUp();
            quinte.nav.el.container.removeClass('js-nav-expanded');
        }
    }

}

quinte.init();
