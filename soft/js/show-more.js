$(document).ready(function() {
    var showChar = 345;
    var showCharLg = 200;
    var showCharSm = 100;
    var showCharXs = 70;
    var ellipsestext = "...";
    var moretext = "Continue Reading →";
    var lesstext = "Read Less →";
    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ ' </span><span class="morecontent"><span>' + h + '</span>  <a href="" class="morelink font-20 text-deepgreen text-bolder">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
    });
    
    $('.more-lg').each(function() {
        var content = $(this).html();
 
        if(content.length > showCharLg) {
 
            var c = content.substr(0, showCharLg);
            var h = content.substr(showCharLg-1, content.length - showCharLg);
 
            var html = c + '<span class="moreellipses">' + ellipsestext + ' </span><span class="morecontent"><span>' + h + '</span>  <a href="" class="morelink text-deepgreen text-bolder">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
    });
    
    $('.more-sm').each(function() {
        var content = $(this).html();
 
        if(content.length > showCharSm) {
 
            var c = content.substr(0, showCharSm);
            var h = content.substr(showCharSm-1, content.length - showCharSm);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ ' </span><span class="morecontent"><span>' + h + '</span>  <a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
    });
    
    $('.more-xs').each(function() {
        var content = $(this).html();
 
        if(content.length > showCharXs) {
 
            var c = content.substr(0, showCharXs);
            var h = content.substr(showCharXs-1, content.length - showCharXs);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ ' </span><span class="morecontent"><span>' + h + '</span>  <a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});