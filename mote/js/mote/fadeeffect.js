jQuery(function(){
  var gal_banner = jQuery("#banner-gallery");
  var gal_list   = jQuery("#imageGallery li");
  init_gal();
    gal_list.mouseenter(function(){
      if(!(jQuery(this).is(".current"))){
        gal_list.removeClass("current");
        jQuery(this).addClass("current");
        gal_banner.find("li").hide();
        gal_banner.find("#"+jQuery(this).data('id')+"").fadeIn("2000");
      }
    });

    function init_gal(){
      gal_list.each(function(){

        var title       = (jQuery(this).data("title") != '' ? "<span class='title'>" + jQuery(this).data("title") + "</span>" : "");
        var caption     = (jQuery(this).data("caption") != '' ? "<span class='caption'>" + jQuery(this).data("caption") + "</span>" : "");
        var description = (jQuery(this).data("description") != '' ? "<span class='description'>" + jQuery(this).data("description") + "</span>" : "");

        var list = "<li id='"+jQuery(this).data("id")+"'><img src='"+jQuery(this).data('src')+"'><div class='img-caption'><p>"+title+caption+description+"</p></div></li>"
        gal_banner.append(list);
      });
      gal_banner.find("li").hide();
      gal_banner.find("li:first").fadeIn("slow");
      gal_list.find(".first").addClass("current");
    }

});
