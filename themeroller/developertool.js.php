if(!window.jquitr){jquitr = {};}
jquitr.trString = '';
/*jquitr.s1 =document.createElement('script');
jquitr.s2 =document.createElement('script');
jquitr.s1.setAttribute('src','http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js');
jquitr.s2.setAttribute('src','http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.2/jquery-ui.min.js');
document.getElementsByTagName('head')[0].appendChild(jquitr.s1);
document.getElementsByTagName('head')[0].appendChild(jquitr.s2);
//once jq and ui are loaded...
jquitr.s1.onload = function(){
	jquitr.s2.onload = function(){
		jquitr.addThemeRoller();
	}
}
*/
$(function(){
		jquitr.addThemeRoller();

});

//add dev tool to page
jquitr.addThemeRoller = function(){
	if(jQuery('#inline_themeroller').size() > 0){
		jQuery('#inline_themeroller').fadeIn();
	}
	else {
		jQuery('<div id="inline_themeroller" style="display: ; position: fixed; background: #111; top: 25px; right: 25px; padding: 22px 0 15px 4px;width: 245px;height:400px; -webkit-border-radius: 6px; -moz-border-radius: 6px; z-index: 9999999;">'+
			'<a href="#" class="closeTR" style="font-family: Verdana, sans-serif; font-size: 10px; display: block; position: absolute; right: 0; top: 2px; text-align: right; background: url(http://jqueryui.com/themeroller/developertool/icon_bookmarklet_close.gif) 0 2px no-repeat; width: 16px;height: 16px; color: #fff; text-decoration: none;" title="Close ThemeRoller"></a>'+
			'<iframe name="trApp" src="appinterface.php'+'#'+jquitr.getHash()+'" style="background: transparent; overflow: auto; width: 240px;height:100%;border: 0;" frameborder="0" ></iframe>'+
			'</div>')
			.appendTo('body')
			.draggable({
				start: function(){
					jQuery('<div id="div_cover" />').appendTo('#inline_themeroller').css({width: jQuery(this).width(), height: jQuery(this).height(), position: 'absolute', top: 0, left:0});
				},
				stop: function(){
					jQuery('#div_cover').remove();
				},
				opacity: 0.6,
				cursor: 'move'
			})
			.resizable({
				start: function(){
					jQuery(this).find('iframe').hide();
				},
				stop: function(){
					jQuery(this).find('iframe').show();
				},
				handles: 's'
			})
			.find('a.closeTR').click(function(){
				jquitr.closeThemeRoller();
			})
			.end()
			.find('.ui-resizable-s').css({
				background: 'url(http://jqueryui.com/themeroller/developertool/icon_bookmarklet_dragger.gif) 50% 50% no-repeat',
				border: 'none',
				height: '14px',
				dipslay: 'block',
				cursor: 'resize-s',
				bottom: '-3px'
			})
			.end()
			.css('cursor', 'move')
			.fadeIn();
		}
		jquitr.reloadCSS();		
}
//close dev tool
jquitr.closeThemeRoller = function(){
	jQuery('#inline_themeroller').fadeOut();
};
//get current url hash
jquitr.getHash = function(){
	var currSrc = window.location.hash;
	if(currSrc.indexOf('#') > -1){currSrc = currSrc.split('#')[1];}
	return currSrc;
};
//recursive reload call
jquitr.reloadCSS = function(){
	var currSrc = jquitr.getHash();
	if(jquitr.trString != currSrc && currSrc != ''){
		jquitr.trString = currSrc;
		var cssLink = '<link href="parseTheme.css.php?'+ currSrc +'" type="text/css" rel="Stylesheet" />';
		//works for both 1.6 final and early rc's
		if( jQuery("link[href*=parseTheme.css.php], link[href=ui.theme.css]").size() > 0){
			jQuery("link[href*=parseTheme.css.php]:last, link[href=ui.theme.css]:last").eq(0).after(cssLink);
		}
		else {
			jQuery("head").append(cssLink);
		}
		if( jQuery("link[href*=parseTheme.css.php]").size() > 3){
			jQuery("link[href*=parseTheme.css.php]:first").remove();
		}
	}
	setTimeout(jquitr.reloadCSS, 1000);
}
