<?php include('_theme.config.php')?>
/*
* jQuery UI CSS Framework
* Copyright (c) 2009 AUTHORS.txt (http://ui.jquery.com/about)
* Dual licensed under the MIT (MIT-LICENSE.txt) and GPL (GPL-LICENSE.txt) licenses.
* To view and modify this theme, visit http://ui.jquery.com/themeroller/?ffDefault=Segoe+UI,+Arial,+sans-serif&fwDefault=bold&fsDefault=1.1em&cornerRadius=6px&bgColorHeader=333333&bgTextureHeader=12_gloss_wave.png&bgImgOpacityHeader=25&borderColorHeader=333333&fcHeader=ffffff&iconColorHeader=ffffff&bgColorContent=000000&bgTextureContent=05_inset_soft.png&bgImgOpacityContent=25&borderColorContent=666666&fcContent=ffffff&iconColorContent=cccccc&bgColorDefault=555555&bgTextureDefault=02_glass.png&bgImgOpacityDefault=20&borderColorDefault=666666&fcDefault=eeeeee&iconColorDefault=cccccc&bgColorHover=0078a3&bgTextureHover=02_glass.png&bgImgOpacityHover=40&borderColorHover=59b4d4&fcHover=ffffff&iconColorHover=ffffff&bgColorActive=f58400&bgTextureActive=05_inset_soft.png&bgImgOpacityActive=30&borderColorActive=ffaf0f&fcActive=ffffff&iconColorActive=222222&bgColorHighlight=eeeeee&bgTextureHighlight=03_highlight_soft.png&bgImgOpacityHighlight=80&borderColorHighlight=cccccc&fcHighlight=2e7db2&iconColorHighlight=4b8e0b&bgColorError=ffc73d&bgTextureError=02_glass.png&bgImgOpacityError=40&borderColorError=ffb73d&fcError=111111&iconColorError=a83300&bgColorOverlay=5c5c5c&bgTextureOverlay=01_flat.png&bgImgOpacityOverlay=50&opacityOverlay=80&bgColorShadow=cccccc&bgTextureShadow=01_flat.png&bgImgOpacityShadow=30&opacityShadow=60&thicknessShadow=7px&offsetTopShadow=-7px&offsetLeftShadow=-7px&cornerRadiusShadow=8px
*/
/* Component containers
----------------------------------*/
.ui-widget { font-family: <?php echo $themes["ffDefault"]?>; font-size: <?php echo $themes["fsDefault"]?>; }
.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: <?php echo $themes["ffDefault"]?>; font-size: 1em; }
.ui-widget-header { border: 1px solid #<?php echo $themes["borderColorHeader"]?>; background: #<?php echo $themes["bgColorHeader"]?> <?php echo texture_src("bgColorHeader","bgTextureHeader","bgImgOpacityHeader")?> 50% 50% repeat-x; color: #<?php echo $themes["fcHeader"]?>; font-weight: bold; }
.ui-widget-header a { color: #<?php echo $themes["fcHeader"]?>; }
.ui-widget-content { border: 1px solid #<?php echo $themes["borderColorContent"]?>; background: #<?php echo $themes["bgColorContent"]?> <?php echo texture_src("bgColorContent","bgTextureContent","bgImgOpacityContent")?> 50% 50% repeat-x; color: #<?php echo $themes["fcContent"]?>; }
.ui-widget-content a { color: #<?php echo $themes["fcContent"]?>; }

/* Interaction states
----------------------------------*/
.ui-state-default, .ui-widget-content .ui-state-default { border: 1px solid #<?php echo $themes["borderColorDefault"]?>; background: #<?php echo $themes["bgColorDefault"]?> <?php echo texture_src("bgColorDefault","bgTextureDefault","bgImgOpacityDefault")?> 50% 50% repeat-x; font-weight: <?php echo $themes["fwDefault"]?>; color: #<?php echo $themes["fcDefault"]?>; outline: none; }
.ui-state-default a { color: #<?php echo $themes["fcDefault"]?>; text-decoration: none; outline: none; }
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus { border: 1px solid #<?php echo $themes["borderColorHover"]?>; background: #<?php echo $themes["bgColorHover"]?> <?php echo texture_src("bgColorHover","bgTextureHover","bgImgOpacityHover")?> 50% 50% repeat; font-weight: <?php echo $themes["fwDefault"]?>; color: #<?php echo $themes["fcHover"]?>; outline: none; }
.ui-state-hover a { color: #<?php echo $themes["fcHover"]?>; text-decoration: none; outline: none; }
.ui-state-active, .ui-widget-content .ui-state-active { border: 1px solid #<?php echo $themes["borderColorActive"]?>; background: #<?php echo $themes["bgColorActive"]?> <?php echo texture_src("bgColorActive","bgTextureActive","bgImgOpacityActive")?> 50% 50% repeat; font-weight: <?php echo $themes["fwDefault"]?>; color: #<?php echo $themes["fcActive"]?>; outline: none; }
.ui-state-active a { color: #<?php echo $themes["fcActive"]?>; outline: none; text-decoration: none; }

/* Interaction Cues
----------------------------------*/
.ui-state-highlight, .ui-widget-content .ui-state-highlight {border: 1px solid #<?php echo $themes["borderColorHighlight"]?>; background: #<?php echo $themes["bgColorHighlight"]?> <?php echo texture_src("bgColorHighlight","bgTextureHighlight","bgImgOpacityHighlight")?> 50% 50% repeat; color: #<?php echo $themes["fcHighlight"]?>; }
.ui-state-error, .ui-widget-content .ui-state-error {border: 1px solid #<?php echo $themes["borderColorError"]?>; background: #<?php echo $themes["bgColorError"]?> <?php echo texture_src("bgColorError","bgTextureError","bgImgOpacityError")?> 50% 50% repeat; color: #<?php echo $themes["fcError"]?>; }
.ui-state-error-text, .ui-widget-content .ui-state-error-text { color: #<?php echo $themes["fcError"]?>; }
.ui-state-disabled, .ui-widget-content .ui-state-disabled { opacity: .35; filter:Alpha(Opacity=35); background-image: none; }
.ui-priority-primary, .ui-widget-content .ui-priority-primary { font-weight: bold; }
.ui-priority-secondary, .ui-widget-content .ui-priority-secondary { opacity: .7; filter:Alpha(Opacity=70); font-weight: <?php echo $themes["fwDefault"]?>; }

/* Icons
----------------------------------*/

/* states and images */
.ui-icon { width: 16px; height: 16px; background-image: <?php echo texture_src("iconColorContent")?>; }
.ui-widget-content .ui-icon {background-image: <?php echo texture_src("iconColorContent")?>; }
.ui-widget-header .ui-icon {background-image: <?php echo texture_src("iconColorHeader")?>; }
.ui-state-default .ui-icon { background-image: <?php echo texture_src("iconColorDefault")?>; }
.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {background-image: <?php echo texture_src("iconColorHover")?>; }
.ui-state-active .ui-icon {background-image: <?php echo texture_src("iconColorActive")?>; }
.ui-state-highlight .ui-icon {background-image: <?php echo texture_src("iconColorHighlight")?>; }
.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {background-image: <?php echo texture_src("iconColorError")?>; }

/* positioning */
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-off { background-position: -96px -144px; }
.ui-icon-radio-on { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-tl { -moz-border-radius-topleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-left-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-tr { -moz-border-radius-topright: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-right-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-bl { -moz-border-radius-bottomleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-left-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-br { -moz-border-radius-bottomright: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-right-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-top { -moz-border-radius-topleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-left-radius: <?php echo $themes["cornerRadius"]?>; -moz-border-radius-topright: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-right-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-bottom { -moz-border-radius-bottomleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-left-radius: <?php echo $themes["cornerRadius"]?>; -moz-border-radius-bottomright: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-right-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-right {  -moz-border-radius-topright: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-right-radius: <?php echo $themes["cornerRadius"]?>; -moz-border-radius-bottomright: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-right-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-left { -moz-border-radius-topleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-top-left-radius: <?php echo $themes["cornerRadius"]?>; -moz-border-radius-bottomleft: <?php echo $themes["cornerRadius"]?>; -webkit-border-bottom-left-radius: <?php echo $themes["cornerRadius"]?>; }
.ui-corner-all { -moz-border-radius: <?php echo $themes["cornerRadius"]?>; -webkit-border-radius: <?php echo $themes["cornerRadius"]?>; }

/* Overlays */
.ui-widget-overlay { background: #<?php echo $themes["bgColorOverlay"]?> <?php echo texture_src("bgColorOverlay","bgTextureOverlay","bgImgOpacityOverlay")?> 50% 2% repeat-x; opacity: .<?php echo $themes["opacityOverlay"]?>;filter:Alpha(Opacity=<?php echo $themes["opacityOverlay"]?>); }
.ui-widget-shadow { margin: <?php echo $themes["offsetTopShadow"]?> 0 0 <?php echo $themes["offsetLeftShadow"]?>; padding: <?php echo $themes["thicknessShadow"]?>; background: #<?php echo $themes["bgColorShadow"]?> <?php echo texture_src("bgColorShadow","bgTextureShadow","bgImgOpacityShadow")?> 50% 50% repeat; opacity: .<?php echo $themes["opacityShadow"]?>;filter:Alpha(Opacity=<?php echo $themes["opacityShadow"]?>); -moz-border-radius: <?php echo $themes["cornerRadiusShadow"]?>; -webkit-border-radius: <?php echo $themes["cornerRadiusShadow"]?>; }

<?php ob_start();?>
/* Component containers
----------------------------------*/
.ui-widget { font-family: Verdana,Arial,sans-serif; font-size: 1.23em; }
.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: Verdana,Arial,sans-serif; font-size: 1em; }
.ui-widget-header { border: 1px solid #a11212; background: #ccc345 url(../images/?new=ccc345&w=40&h=100&f=png&q=100&fltr[]=over|textures/01_flat.png|0|0|75.2) 50% 50% repeat-x; color: #406ac4; font-weight: bold; }
.ui-widget-header a { color: #406ac4; }
.ui-widget-content { border: 1px solid #c643d0; background: #cde797 url(../images/?new=cde797&w=40&h=40&f=png&q=100&fltr[]=over|textures/07bdiagonals_medium.png|0|0|72.9) 50% 50% repeat-x; color: #5faace; }
.ui-widget-content a { color: #5faace; }

/* Interaction states
----------------------------------*/
.ui-state-default, .ui-widget-content .ui-state-default { border: 1px solid #d3d3d3; background: #1d0606 url(../images/?new=1d0606&w=1&h=400&f=png&q=100&fltr[]=over|textures/02_glass.png|0|0|74.4) 50% 50% repeat-x; font-weight: normal; color: #691111; outline: none; }
.ui-state-default a { color: #691111; text-decoration: none; outline: none; }
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus { border: 1px solid #df2a8d; background: #7d1eb3 url(../images/?new=7d1eb3&w=40&h=40&f=png&q=100&fltr[]=over|textures/08_diagonals_thick.png|0|0|77.11) 50% 50% repeat; font-weight: normal; color: #ee81a6; outline: none; }
.ui-state-hover a { color: #ee81a6; text-decoration: none; outline: none; }
.ui-state-active, .ui-widget-content .ui-state-active { border: 1px solid #e76e6e; background: #f9c3f9 url(../images/?new=f9c3f9&w=21&h=21&f=png&q=100&fltr[]=over|textures/14_loop.png|0|0|66.4) 50% 50% repeat; font-weight: normal; color: #df4949; outline: none; }
.ui-state-active a { color: #df4949; outline: none; text-decoration: none; }

/* Interaction Cues
----------------------------------*/
.ui-state-highlight, .ui-widget-content .ui-state-highlight {border: 1px solid #fcefa1; background: #14120b url(../images/?new=14120b&w=13&h=13&f=png&q=100&fltr[]=over|textures/19_layered_circles.png|0|0|52.9) 50% 50% repeat; color: #ca869e; }
.ui-state-error, .ui-widget-content .ui-state-error {border: 1px solid #f4b4b4; background: #f7c0ab url(../images/?new=f7c0ab&w=12&h=10&f=png&q=100&fltr[]=over|textures/20_3D_boxes.png|0|0|95.7) 50% 50% repeat; color: #d4b0b0; }
.ui-state-error-text, .ui-widget-content .ui-state-error-text { color: #d4b0b0; }
.ui-state-disabled, .ui-widget-content .ui-state-disabled { opacity: .35; filter:Alpha(Opacity=35); background-image: none; }
.ui-priority-primary, .ui-widget-content .ui-priority-primary { font-weight: bold; }
.ui-priority-secondary, .ui-widget-content .ui-priority-secondary { opacity: .7; filter:Alpha(Opacity=70); font-weight: normal; }

/* Icons
----------------------------------*/

/* states and images */
.ui-icon { width: 16px; height: 16px; background-image: url(../images/?new=789f2d&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-widget-content .ui-icon {background-image: url(../images/?new=789f2d&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-widget-header .ui-icon {background-image: url(../images/?new=915f5f&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-state-default .ui-icon { background-image: url(../images/?new=a82cb5&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {background-image: url(../images/?new=d6b3c4&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-state-active .ui-icon {background-image: url(../images/?new=7e1616&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-state-highlight .ui-icon {background-image: url(../images/?new=2e83ff&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }
.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {background-image: url(../images/?new=683131&w=256&h=240&f=png&fltr[]=rcd|256&fltr[]=mask|icons/icons.png); }

/* positioning */
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-off { background-position: -96px -144px; }
.ui-icon-radio-on { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-tl { -moz-border-radius-topleft: 4.1px; -webkit-border-top-left-radius: 4.1px; }
.ui-corner-tr { -moz-border-radius-topright: 4.1px; -webkit-border-top-right-radius: 4.1px; }
.ui-corner-bl { -moz-border-radius-bottomleft: 4.1px; -webkit-border-bottom-left-radius: 4.1px; }
.ui-corner-br { -moz-border-radius-bottomright: 4.1px; -webkit-border-bottom-right-radius: 4.1px; }
.ui-corner-top { -moz-border-radius-topleft: 4.1px; -webkit-border-top-left-radius: 4.1px; -moz-border-radius-topright: 4.1px; -webkit-border-top-right-radius: 4.1px; }
.ui-corner-bottom { -moz-border-radius-bottomleft: 4.1px; -webkit-border-bottom-left-radius: 4.1px; -moz-border-radius-bottomright: 4.1px; -webkit-border-bottom-right-radius: 4.1px; }
.ui-corner-right {  -moz-border-radius-topright: 4.1px; -webkit-border-top-right-radius: 4.1px; -moz-border-radius-bottomright: 4.1px; -webkit-border-bottom-right-radius: 4.1px; }
.ui-corner-left { -moz-border-radius-topleft: 4.1px; -webkit-border-top-left-radius: 4.1px; -moz-border-radius-bottomleft: 4.1px; -webkit-border-bottom-left-radius: 4.1px; }
.ui-corner-all { -moz-border-radius: 4.1px; -webkit-border-radius: 4.1px; }

/* Overlays */
.ui-widget-overlay { background: #e8b0b0 url(../images/?new=e8b0b0&w=600&h=600&f=png&q=100&fltr[]=over|textures/22_spotlight.png|0|0|21.8) 50% 2% repeat-x; opacity: .10.2;filter:Alpha(Opacity=10.2); }
.ui-widget-shadow { margin: -8.6px 0 0 -8.5px; padding: 8.2px; background: #c25151 url(../images/?new=c25151&w=60&h=60&f=png&q=100&fltr[]=over|textures/23_fine_grain.png|0|0|5.3) 50% 50% repeat; opacity: .30.7;filter:Alpha(Opacity=30.7); -moz-border-radius: 8.3px; -webkit-border-radius: 8.3px; }
<?php $content = ob_get_clean();
function _callback($match){
                preg_match_all('/"([^"]*)"/i',$match[0],$out);
               $markup = join(',',$out[0]); 
                $markup =  '<'.'?php echo texture_src('.$markup.')?'.'>';
                return $markup;
}

foreach($themes as $key=>$value){
        $content = str_replace($value,'<'.'?php echo $themes["'.$key.'"]?'.'>',$content);
}
        $content = preg_replace_callback('/url\([^\)]*\)/i',_callback,$content);
//echo $content;
?>