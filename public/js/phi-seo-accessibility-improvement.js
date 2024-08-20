(function($) {
    'use strict';
  
    $(document).ready(function() {

        console.log('phi seo accessibility improvement script loaded!');

        $('.fa-phone').closest('a').attr('aria-label', 'Telephone number');

		$('img').closest('a').attr('aria-label', 'Custom Image');

        $('.pfi-spec-procedures-mobile-section').find('a').attr('aria-label', 'Learn More Icon Button');

        $('.pfi-spec-procedures-section').find('a').attr('aria-label', 'Learn More Icon Button');
        
        $('.pap-toggle').find('a').attr('href', '#');
        
        const ele_logo_links = $('.custom-logo-link');
        ele_logo_links.attr('aria-label', "Custom logo");
    });

})(jQuery);