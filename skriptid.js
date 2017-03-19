window.onload = function() {
    $('.pic').on('click', function () {
        var tmpImg = new Image();
        var src = $(this).attr('src');
        tmpImg.src=src;
        var orgWidth = tmpImg.width;
        var orgHeight = tmpImg.height;
        if(orgWidth>$(window).width()-200 || orgHeight > $(window).height()-200) {
            var picAspect = orgWidth / orgHeight;
            var newWidth;
            var newHeight;
            if (picAspect > 1) {
                newWidth = $(window).width() - 200;
                newHeight = newWidth/picAspect
                if(newHeight>$(window).height()-200){
                    newHeight = $(window).height()-200;
                    newWidth = newHeight*picAspect;
                }
            }
            else if (picAspect < 1) {
                newHeight = $(window).height() - 200;
                newWidth = newHeight*picAspect;
                if(newWidth>$(window).width() - 200){
                    newWidth = $(window).width() - 200;
                    newHeight = newWidth/picAspect
                }
            }
            $('.bigPic').css("display", "block").width(newWidth).height(newHeight);
        }
        else {
            $('.bigPic').css("display", "block").width(orgWidth).height(orgHeight);
        }

        $('#bigPicInside').attr("src", src)
    });
    $('.bigPic').on('click', function () {
        $('.bigPic').css("display", "none");
    });

}
