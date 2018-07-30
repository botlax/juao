
var setREVStartSize1 = function() {
    var tpopt = new Object();
    tpopt.startwidth = 0;
    tpopt.startheight = 0;
    tpopt.container = jQuery('#rev_slider_4_1');
    tpopt.fullScreen = "on";
    tpopt.forceFullWidth = "off";
    tpopt.container.closest(".rev_slider_wrapper").css({
        height: tpopt.container.height()
    });
    tpopt.width = parseInt(tpopt.container.width(), 0);
    tpopt.height = parseInt(tpopt.container.height(), 0);
    tpopt.bw = tpopt.width / tpopt.startwidth;
    tpopt.bh = tpopt.height / tpopt.startheight;
    if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
    if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
    if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
    if (tpopt.bh > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    if (tpopt.bw > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
    if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
    if (tpopt.fullScreen == "on") {
        tpopt.height = tpopt.bw * tpopt.startheight;
        var cow = tpopt.container.parent().width();
        var coh = jQuery(window).height();
        if (tpopt.fullScreenOffsetContainer != undefined) {
            try {
                var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                jQuery.each(offcontainers, function(e, t) {
                    coh = coh - jQuery(t).outerHeight(true);
                    if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                })
            } catch (e) {}
        }
        tpopt.container.parent().height(coh);
        tpopt.container.height(coh);
        tpopt.container.closest(".rev_slider_wrapper").height(coh);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
        tpopt.container.css({
            height: "100%"
        });
        tpopt.height = coh;
    } else {
        tpopt.container.height(tpopt.height);
        tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
    }
};
setREVStartSize1();
jQuery.noConflict();
var revapi4;
jQuery(document).ready(function() {
    if (jQuery('#rev_slider_4_1').revolution == undefined) {
        revslider_showDoubleJqueryError('#rev_slider_4_1');
    } else {
        revapi4 = jQuery('#rev_slider_4_1').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 0,
            startheight: 0,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            simplifyAll: "off",
            navigationType: "none",
            navigationArrows: "none",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            nextSlideOnWindowFocus: "off",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            drag_block_vertical: false,
            keyboardNavigation: "off",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "off",
            fullScreen: "on",
            spinner: "spinner0",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            forceFullWidth: "off",
            fullScreenAlignForce: "on",
            minFullScreenHeight: "",
            hideTimerBar: "on",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
    }
});



//---------------------------------------------


var setREVStartSize2 = function() {
    var tpopt2 = new Object();
    tpopt2.startwidth = 0;
    tpopt2.startheight = 0;
    tpopt2.container = jQuery('#rev_slider_5_1');
    tpopt2.fullScreen = "on";
    tpopt2.forceFullWidth = "off";
    tpopt2.container.closest(".rev_slider_wrapper").css({
        height: tpopt2.container.height()
    });
    tpopt2.width = parseInt(tpopt2.container.width(), 0);
    tpopt2.height = parseInt(tpopt2.container.height(), 0);
    tpopt2.bw = tpopt2.width / tpopt2.startwidth;
    tpopt2.bh = tpopt2.height / tpopt2.startheight;
    if (tpopt2.bh > tpopt2.bw) tpopt2.bh = tpopt2.bw;
    if (tpopt2.bh < tpopt2.bw) tpopt2.bw = tpopt2.bh;
    if (tpopt2.bw < tpopt2.bh) tpopt2.bh = tpopt2.bw;
    if (tpopt2.bh > 1) {
        tpopt2.bw = 1;
        tpopt2.bh = 1
    }
    if (tpopt2.bw > 1) {
        tpopt2.bw = 1;
        tpopt2.bh = 1
    }
    tpopt2.height = Math.round(tpopt2.startheight * (tpopt2.width / tpopt2.startwidth));
    if (tpopt2.height > tpopt2.startheight && tpopt2.autoHeight != "on") tpopt2.height = tpopt2.startheight;
    if (tpopt2.fullScreen == "on") {
        tpopt2.height = tpopt2.bw * tpopt2.startheight;
        var cow = tpopt2.container.parent().width();
        var coh = jQuery(window).height();
        if (tpopt2.fullScreenOffsetContainer != undefined) {
            try {
                var offcontainers = tpopt2.fullScreenOffsetContainer.split(",");
                jQuery.each(offcontainers, function(e, t) {
                    coh = coh - jQuery(t).outerHeight(true);
                    if (coh < tpopt2.minFullScreenHeight) coh = tpopt2.minFullScreenHeight
                })
            } catch (e) {}
        }
        tpopt2.container.parent().height(coh);
        tpopt2.container.height(coh);
        tpopt2.container.closest(".rev_slider_wrapper").height(coh);
        tpopt2.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
        tpopt2.container.css({
            height: "100%"
        });
        tpopt2.height = coh;
    } else {
        tpopt2.container.height(tpopt2.height);
        tpopt2.container.closest(".rev_slider_wrapper").height(tpopt2.height);
        tpopt2.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt2.height);
    }
};
setREVStartSize2();
jQuery.noConflict();
var revapi4;
jQuery(document).ready(function() {
    if (jQuery('#rev_slider_5_1').revolution == undefined) {
        revslider_showDoubleJqueryError('#rev_slider_5_1');
    } else {
        revapi5 = jQuery('#rev_slider_5_1').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 0,
            startheight: 0,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            simplifyAll: "off",
            navigationType: "none",
            navigationArrows: "none",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            nextSlideOnWindowFocus: "off",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            drag_block_vertical: false,
            keyboardNavigation: "off",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "off",
            fullScreen: "on",
            spinner: "spinner0",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            forceFullWidth: "off",
            fullScreenAlignForce: "on",
            minFullScreenHeight: "",
            hideTimerBar: "on",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
    }
});