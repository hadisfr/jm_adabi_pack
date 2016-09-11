/*
	jm_adabi Joomla 3.5+ template

	© Hadi Safari 2016
	hadisafari76[at]gmail.com
*/
jQuery(document).ready(function(){
	jQuery("#navbar_btn").on("click", function(){
		jQuery("#navbar").toggleClass("show");
	});
	(function contactform(){
		jQuery(".accordion-toggle").each(function(){
			jQuery(this).addClass("collapsed");
			jQuery(jQuery(this).attr("href")).addClass("hide");
			jQuery(jQuery(this).attr("href")).addClass("in");
			jQuery(jQuery(this).attr("href")).css("height", "auto");
		});
		jQuery(".accordion-toggle").on("click", function(){
			jQuery(this).toggleClass("collapsed");
			jQuery(jQuery(this).attr("href")).toggleClass("hide");
			jQuery(jQuery(this).attr("href")).toggleClass("in");
			jQuery(jQuery(this).attr("href")).css("height", "auto");
		});
	})();
});