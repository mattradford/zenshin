$(document).ready(function(){
    // - 1.78 is the aspect ratio of the video
    // - This will work if your video is 1920 x 1080
    // - To find this value divide the video's native width by the height eg 1920/1080 = 1.78
    var aspectRatio = 1.78;

    var video = $('.embed-container iframe');
    var videoHeight = video.outerHeight();
    var newWidth = videoHeight*aspectRatio;
    var halfNewWidth = newWidth/2;

    video.css({"width":newWidth+"px","left":"50%","margin-left":"-"+halfNewWidth+"px"});

});

$(window).on('resize', function() {

    // Same code as on load
    var aspectRatio = 1.78;
    var video = $('.embed-container iframe');
    var videoHeight = video.outerHeight();
    var newWidth = videoHeight*aspectRatio;
    var halfNewWidth = newWidth/2;

    video.css({"width":newWidth+"px","left":"50%","margin-left":"-"+halfNewWidth+"px"});

});
