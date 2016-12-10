jQuery(document).ready(function() {
    placeholder = jQuery("#form > input").attr("placeholder");
    jQuery("#form").click(function() {
        jQuery("#form > input").focus();
    });
    jQuery("#lupa").click(function() {
        return false;
    });
    jQuery("#form > input").focus(function() {
        jQuery(this).animate({
            width: "250px"
        }, 300);
        jQuery(this).attr("placeholder", "");
        jQuery("#form").css("max-width", "294px");
        jQuery("#lupa > img").show(300);
    });
    jQuery("#form > input").focusout(function() {
        jQuery(this).animate({
            width: "150px"

        }, 300, function () {
            jQuery("#form").css("max-width", "194px");
        });
        jQuery("#lupa > img").hide(300);
        jQuery(this).attr("placeholder", placeholder);
    });
});