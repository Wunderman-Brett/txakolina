!function($){function t(){return window.open("https://www.facebook.com/sharer/sharer.php?u="+$(this).attr("href"),"facebookWindow","height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0"),!1}function e(){return window.open("https://plus.google.com/share?url="+$(this).attr("href"),"googleplusWindow","height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0"),!1}function a(){var t=encodeURIComponent($(this).attr("data-title"));return window.open("http://twitter.com/intent/tweet?text="+t+" "+$(this).attr("href"),"twitterWindow","height=370,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0"),!1}var n=$(window);n.load(function(){$("body").fadeIn().addClass("loaded")}),$(document).ready(function(){var o=$("#wpadminbar").height()||0,i=$("#home-hero").height(),s;$(".site-navigation").css("top",o),s=i<n.height()?i:n.height(),$(".site-description").css("top",s/2),$("#home-hero").css("top",o),$(".home #page").css("margin-top",s),$(".site-header").affix({offset:{top:s}}),$(".post").matchHeight(),$("#content").fitVids(),$(".nano").nanoScroller(),$("#site-navigation .menu-item-has-children > a").after('<button class="site-navigation-dropdown" aria-expanded="false"></button>'),$("#site-navigation .current-menu-ancestor > button").addClass("toggle-on"),$("#site-navigation .current-menu-ancestor > .sub-menu").addClass("toggled-on"),$(".site-navigation-dropdown").click(function(t){var e=$(this);t.preventDefault(),e.toggleClass("toggle-on"),e.next(".sub-menu").slideToggle(),e.attr("aria-expanded","false"===e.attr("aria-expanded")?"true":"false")}),$(".gallery-icon a").each(function(){$(this).attr("href",$(this).find("img").attr("src").replace("-800x600","")),$(this).attr("title",$(this).parent(".gallery-icon").next("figcaption").text())}),$(".site-navigation-close").on("click",function(){$("#site-navigation").removeClass("site-navigation-open"),$("#overlay").removeClass("overlay-open")}),$("#txakolina-menu").on("click",function(){return $("#overlay").addClass("overlay-open"),$("#site-navigation").addClass("site-navigation-open"),!1}),$("#txakolina-search-button").on("click",function(){return n.width()>992?$(".navbar-menu-container").hasClass("present")?$(".navbar-menu-container").removeClass("present").fadeOut(0,function(){$(".txakolina-search").fadeIn("slow"),$(".txakolina-search-button").find("i.fa-search").removeClass("fa-search").addClass("fa-close")}):$(".txakolina-search").fadeOut(0,function(){$(".navbar-menu-container").fadeIn(1e3).addClass("present"),$(".txakolina-search-button").find("i.fa-close").removeClass("fa-close").addClass("fa-search")}):$(".txakolina-search").fadeToggle("fast"),!1}),$("#overlay").on("click",function(){$("#site-navigation").removeClass("site-navigation-open"),$("#overlay").removeClass("overlay-open")}),$(".post-social-wrapper").hover(function(){$(this).find($(".post-social")).fadeIn()},function(){$(this).find($(".post-social")).fadeOut()}),($("a.facebook-share").length>0||$("a.twitter-share").length>0||$("a.googleplus-share").length>0)&&($(".facebook-share").click(t),$(".twitter-share").click(a),$(".googleplus-share").click(e))})}(jQuery);