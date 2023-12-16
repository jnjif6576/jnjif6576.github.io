/*
    ColorBox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#c35jflhott, #zadkg0lOverlay, #zadkg0lWrapper{position:absolute; top:0; left:0; z-index:99999; overflow:hidden;}
#zadkg0lOverlay{position:fixed; width:100%; height:100%;}
#zadkg0lMiddleLeft, #zadkg0lBottomLeft{clear:left;}
#zadkg0lContent{position:relative;}
#zadkg0lLoadedContent{overflow:auto;}
#zadkg0lTitle{margin:0;}
#zadkg0lLoadingOverlay, #zadkg0lLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#zadkg0lPrevious, #zadkg0lNext, #zadkg0lClose, #zadkg0lSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}
#c35jflhott, #zadkg0lContent, #zadkg0lLoadedContent{box-sizing:content-box;}

/* 
    User Style:
    Change the following styles to modify the appearance of ColorBox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#zadkg0lOverlay{background:#000;}
#c35jflhott{}
    #zadkg0lContent{margin-top:20px;}
        .cboxIframe{background:#fff;}
        #zadkg0lError{padding:50px; border:1px solid #ccc;}
        #zadkg0lLoadedContent{border:5px solid #000;}
        #zadkg0lTitle{position:absolute; top:-20px; left:0; color:#ccc;}
        #zadkg0lCurrent{position:absolute; top:-20px; right:0px; color:#ccc;}
        #zadkg0lSlideshow{position:absolute; top:-20px; right:90px; color:#fff;}
        #zadkg0lPrevious{position:absolute; top:50%; left:5px; margin-top:-32px; background:url(images/controls.png) no-repeat top left; width:28px; height:65px; text-indent:-9999px;}
        #zadkg0lPrevious:hover{background-position:bottom left;}
        #zadkg0lNext{position:absolute; top:50%; right:5px; margin-top:-32px; background:url(images/controls.png) no-repeat top right; width:28px; height:65px; text-indent:-9999px;}
        #zadkg0lNext:hover{background-position:bottom right;}
        #zadkg0lLoadingOverlay{background:#000;}
        #zadkg0lLoadingGraphic{background:url(images/loading.gif) no-repeat center center;}
        #zadkg0lClose{position:absolute; top:5px; right:5px; display:block; background:url(images/controls.png) no-repeat top center; width:38px; height:19px; text-indent:-9999px;}
        #zadkg0lClose:hover{background-position:bottom center;}