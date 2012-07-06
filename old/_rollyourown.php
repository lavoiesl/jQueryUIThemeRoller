<?php 
include('_theme.config.php');
//echo texture_select('bb');
?>
<!-- 
Download theme button -->
<!-- Download theme button -->
<a href="/download?themeParams=" id="downloadTheme" class="corner-all"><span class="icon"></span><strong>Download</strong> theme</a>

<form method="get" action="/" id="themeConfig">
        <fieldset class="clearfix">

                <div class="theme-group clearfix" id="global-font">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <a href="#">Font Settings</a>
                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group clearfix">
                                        <label for="ffDefault">Family</label>
                                        <input type="text" name="ffDefault" id="ffDefault" class="ffDefault" value="<?php echo $themes["ffDefault"]?>" size="8" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fwDefault">Weight</label>
                                        <select name="fwDefault" class="fwDefault" id="fwDefault">
                                                <option value="<?php echo $themes["fwDefault"]?>" selected="selected"><?php echo $themes["fwDefault"]?></option>
                                                <option value="bold" >bold</option>
                                        </select>
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fsDefault">Size</label>
                                        <input type="text" name="fsDefault" id="fsDefault" class="fsDefault" value="<?php echo $themes["fsDefault"]?>"  size="3" />
                                </div>
                        </div><!-- /theme group content -->
                </div><!-- /theme group -->

                <div class="theme-group clearfix" id="global-corners">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <a href="#">Corner Radius</a>
                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group field-group-corners clearfix">
                                        <label for="cornerRadius">Corners:</label>
                                        <input type="text" value="<?php echo $themes["cornerRadius"]?>" name="cornerRadius" id="cornerRadius" class="cornerRadius" />
                                </div>
                                <p id="cornerWarning"><em><strong>Note:</strong> ThemeRoller uses CSS3 border-radius for corner rounding, which is not currently supported by Internet Explorer.</em></p>

                        </div><!-- /theme group content -->
                </div><!-- /theme group -->

                <div class="theme-group clearfix" id="Header">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-widget-header">abc</div>
                                <a href="#">Header/Toolbar</a>

                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHeader" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHeader" id="bgColorHeader" class="hex" value="<?php echo $themes["bgColorHeader"]?>" />
                                        <?php echo texture_select("bgTextureHeader",$themes["bgTextureHeader"])?>

                                        <input type="text" name="bgImgOpacityHeader" class="opacity" value="<?php echo $themes["bgImgOpacityHeader"]?>" />
                                        <span class="opacity-per">%</span>

                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHeader">Border</label>
                                        <input type="text" name="borderColorHeader" id="borderColorHeader" class="hex" value="<?php echo $themes["borderColorHeader"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHeader">Text</label>
                                        <input type="text" name="fcHeader" id="fcHeader" class="hex" value="<?php echo $themes["fcHeader"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">
                                        <label for="iconColorHeader">Icon</label>
                                        <input type="text" name="iconColorHeader" id="iconColorHeader" class="hex" value="<?php echo $themes["iconColorHeader"]?>" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->			

                <div class="theme-group clearfix" id="ContentArea">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <div class="state-preview corner-all ui-widget-content">abc</div>
                                <a href="#">Content</a>
                        </div><!-- /theme group Content -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorContent" class="background">Background color &amp; texture</label>

                                        <input type="text" name="bgColorContent" id="bgColorContent" class="hex" value="<?php echo $themes["bgColorContent"]?>" />
                                        <?php echo texture_select("bgTextureContent",$themes["bgTextureContent"])?>

                                        <input type="text" name="bgImgOpacityContent" class="opacity" value="<?php echo $themes["bgImgOpacityContent"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorContent">Border</label>
                                        <input type="text" name="borderColorContent" id="borderColorContent" class="hex" value="<?php echo $themes["borderColorContent"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">

                                        <label for="fcContent">Text</label>
                                        <input type="text" name="fcContent" id="fcContent" class="hex" value="<?php echo $themes["fcContent"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorContent">Icon</label>
                                        <input type="text" name="iconColorContent" id="iconColorContent" class="hex" value="<?php echo $themes["iconColorContent"]?>" size="6" />
                                </div>

                        </div><!-- /theme group content -->

                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Default">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-default">abc</div>
                                <a href="#">Clickable: default state</a>

                        </div><!-- /theme group Default -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorDefault" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorDefault" id="bgColorDefault" class="hex" value="<?php echo $themes["bgColorDefault"]?>" />
                                        <?php echo texture_select("bgTextureDefault",$themes["bgTextureDefault"])?>

                                        <input type="text" name="bgImgOpacityDefault" class="opacity" value="<?php echo $themes["bgImgOpacityDefault"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorDefault">Border</label>
                                        <input type="text" name="borderColorDefault" id="borderColorDefault" class="hex" value="<?php echo $themes["borderColorDefault"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcDefault">Text</label>
                                        <input type="text" name="fcDefault" id="fcDefault" class="hex" value="<?php echo $themes["fcDefault"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorDefault">Icon</label>
                                        <input type="text" name="iconColorDefault" id="iconColorDefault" class="hex" value="<?php echo $themes["iconColorDefault"]?>" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Hover">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-hover">abc</div>
                                <a href="#">Clickable: hover state</a>
                        </div><!-- /theme group Hover -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHover" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHover" id="bgColorHover" class="hex" value="<?php echo $themes["bgColorHover"]?>" />
                                        <?php echo texture_select("bgTextureHover",$themes["bgTextureHover"])?>

                                        <input type="text" name="bgImgOpacityHover" class="opacity" value="<?php echo $themes["bgImgOpacityHover"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>

                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHover">Border</label>
                                        <input type="text" name="borderColorHover" id="borderColorHover" class="hex" value="<?php echo $themes["borderColorHover"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHover">Text</label>
                                        <input type="text" name="fcHover" id="fcHover" class="hex" value="<?php echo $themes["fcHover"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">
                                        <label for="iconColorHover">Icon</label>
                                        <input type="text" name="iconColorHover" id="iconColorHover" class="hex" value="<?php echo $themes["iconColorHover"]?>" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Active">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <div class="state-preview corner-all ui-state-active">abc</div>
                                <a href="#">Clickable: active state</a>
                        </div><!-- /theme group Active -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorActive" class="background">Background color &amp; texture</label>

                                        <input type="text" name="bgColorActive" id="bgColorActive" class="hex" value="<?php echo $themes["bgColorActive"]?>" />
                                        <?php echo texture_select("bgTextureActive",$themes["bgTextureActive"])?>

                                        <input type="text" name="bgImgOpacityActive" class="opacity" value="<?php echo $themes["bgImgOpacityActive"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorActive">Border</label>
                                        <input type="text" name="borderColorActive" id="borderColorActive" class="hex" value="<?php echo $themes["borderColorActive"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">

                                        <label for="fcActive">Text</label>
                                        <input type="text" name="fcActive" id="fcActive" class="hex" value="<?php echo $themes["fcActive"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorActive">Icon</label>
                                        <input type="text" name="iconColorActive" id="iconColorActive" class="hex" value="<?php echo $themes["iconColorActive"]?>" size="6" />
                                </div>

                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Highlight">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-highlight">abc</div>
                                <a href="#">Highlight</a>

                        </div><!-- /theme group Highlight -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHighlight" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHighlight" id="bgColorHighlight" class="hex" value="<?php echo $themes["bgColorHighlight"]?>" />
                                        <?php echo texture_select("bgTextureHighlight",$themes["bgTextureHighlight"])?>

                                        <input type="text" name="bgImgOpacityHighlight" class="opacity" value="<?php echo $themes["bgImgOpacityHighlight"]?>" />
                                        <span class="opacity-per">%</span>

                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHighlight">Border</label>
                                        <input type="text" name="borderColorHighlight" id="borderColorHighlight" class="hex" value="<?php echo $themes["borderColorHighlight"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHighlight">Text</label>
                                        <input type="text" name="fcHighlight" id="fcHighlight" class="hex" value="<?php echo $themes["fcHighlight"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">
                                        <label for="iconColorHighlight">Icon</label>
                                        <input type="text" name="iconColorHighlight" id="iconColorHighlight" class="hex" value="<?php echo $themes["iconColorHighlight"]?>" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->			

                <div class="theme-group clearfix" id="Error">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <div class="state-preview corner-all ui-state-error">abc</div>
                                <a href="#">Error</a>
                        </div><!-- /theme group Error -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorError" class="background">Background color &amp; texture</label>

                                        <input type="text" name="bgColorError" id="bgColorError" class="hex" value="<?php echo $themes["bgColorError"]?>" />
                                        <?php echo texture_select("bgTextureError",$themes["bgTextureError"])?>

                                        <input type="text" name="bgImgOpacityError" class="opacity" value="<?php echo $themes["bgImgOpacityError"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorError">Border</label>
                                        <input type="text" name="borderColorError" id="borderColorError" class="hex" value="<?php echo $themes["borderColorError"]?>" size="6" />
                                </div>

                                <div class="field-group clearfix">

                                        <label for="fcError">Text</label>
                                        <input type="text" name="fcError" id="fcError" class="hex" value="<?php echo $themes["fcError"]?>" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorError">Icon</label>
                                        <input type="text" name="iconColorError" id="iconColorError" class="hex" value="<?php echo $themes["iconColorError"]?>" size="6" />
                                </div>

                        </div><!-- /theme group content -->

                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Overlay">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <a href="#">Modal Screen for Overlays </a>
                        </div><!-- /theme group Overlay -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">

                                        <label for="bgColorOverlay" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorOverlay" id="bgColorOverlay" class="hex" value="<?php echo $themes["bgColorOverlay"]?>" />
                                        <?php echo texture_select("bgTextureOverlay",$themes["bgTextureOverlay"])?>

                                        <input type="text" name="bgImgOpacityOverlay" class="opacity" value="<?php echo $themes["bgImgOpacityOverlay"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>

                                <div class="field-group field-group-opacity clearfix">
                                        <label for="opacityOverlay">Overlay Opacity:</label>
                                        <input type="text" name="opacityOverlay" id="opacityOverlay" class="opacity" value="<?php echo $themes["opacityOverlay"]?>" />
                                        <span class="opacity-per">%</span>

                                </div>	
                        </div><!-- /theme group Overlay -->
                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Shadow">
                        <div class="theme-group-header state-default">

                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <a href="#">Drop Shadows</a>
                        </div><!-- /theme group Shadow -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorShadow" class="background">Background color &amp; texture</label>

                                        <input type="text" name="bgColorShadow" id="bgColorShadow" class="hex" value="<?php echo $themes["bgColorShadow"]?>" />
                                        <?php echo texture_select("bgTextureShadow",$themes["bgTextureShadow"])?>

                                        <input type="text" name="bgImgOpacityShadow" id="bgImgOpacityShadow" class="opacity" value="<?php echo $themes["bgImgOpacityShadow"]?>" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-opacity clearfix">
                                        <label for="opacityShadow">Shadow Opacity:</label>
                                        <input type="text" name="opacityShadow" id="opacityShadow" class="opacity" value="<?php echo $themes["opacityShadow"]?>" />
                                        <span class="opacity-per">%</span>

                                </div>	
                                <div class="field-group clearfix">
                                        <label for="thicknessShadow">Shadow Thickness:</label>
                                        <input type="text" name="thicknessShadow" id="thicknessShadow" class="offset" value="<?php echo $themes["thicknessShadow"]?>" />
                                </div>	
                                <div class="field-group clearfix">
                                        <label for="offsetTopShadow">Top Offset:</label>
                                        <input type="text" name="offsetTopShadow" id="offsetTopShadow" class="offset" value="<?php echo $themes["offsetTopShadow"]?>" />
                                </div>	
                                <div class="field-group clearfix">

                                        <label for="offsetLeftShadow">Left Offset:</label>
                                        <input type="text" name="offsetLeftShadow" id="offsetLeftShadow" class="offset" value="<?php echo $themes["offsetLeftShadow"]?>" />
                                </div>						
                                <div class="field-group field-group-corners clearfix">
                                        <label for="cornerRadiusShadow">Corners:</label>
                                        <input type="text" value="<?php echo $themes["cornerRadiusShadow"]?>" name="cornerRadiusShadow" id="cornerRadiusShadow" class="cornerRadius" />
                                </div>
                        </div><!-- /theme group Shadow -->

                </div><!-- /theme group -->						

                <button type="submit" name="submit" id="submitBtn">Preview Changes</button>		
        </fieldset>
</form>

<?php ob_start();?>
<form method="get" action="/" id="themeConfig">
        <fieldset class="clearfix">

                <div class="theme-group clearfix" id="global-font">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <a href="#">Font Settings</a>
                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group clearfix">
                                        <label for="ffDefault">Family</label>
                                        <input type="text" name="ffDefault" id="ffDefault" class="ffDefault" value="Verdana,Arial,sans-serif" size="8" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fwDefault">Weight</label>
                                        <select name="fwDefault" class="fwDefault" id="fwDefault">
                                                <option value="normal" selected="selected">normal</option>
                                                <option value="bold" >bold</option>
                                        </select>
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fsDefault">Size</label>
                                        <input type="text" name="fsDefault" id="fsDefault" class="fsDefault" value="1.23em"  size="3" />
                                </div>
                        </div><!-- /theme group content -->
                </div><!-- /theme group -->

                <div class="theme-group clearfix" id="global-corners">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>

                                <a href="#">Corner Radius</a>
                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group field-group-corners clearfix">
                                        <label for="cornerRadius">Corners:</label>
                                        <input type="text" value="4.1px" name="cornerRadius" id="cornerRadius" class="cornerRadius" />
                                </div>
                                <p id="cornerWarning"><em><strong>Note:</strong> ThemeRoller uses CSS3 border-radius for corner rounding, which is not currently supported by Internet Explorer.</em></p>

                        </div><!-- /theme group content -->
                </div><!-- /theme group -->

                <div class="theme-group clearfix" id="Header">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-widget-header">abc</div>
                                <a href="#">Header/Toolbar</a>

                        </div><!-- /theme group header -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHeader" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHeader" id="bgColorHeader" class="hex" value="ccc345" />
                                        <select name="bgTextureHeader" class="texture"></select>

                                        <input type="text" name="bgImgOpacityHeader" class="opacity" value="75.2" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHeader">Border</label>
                                        <input type="text" name="borderColorHeader" id="borderColorHeader" class="hex" value="a11212" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHeader">Text</label>
                                        <input type="text" name="fcHeader" id="fcHeader" class="hex" value="406ac4" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorHeader">Icon</label>
                                        <input type="text" name="iconColorHeader" id="iconColorHeader" class="hex" value="915f5f" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->			

                <div class="theme-group clearfix" id="ContentArea">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-widget-content">abc</div>
                                <a href="#">Content</a>
                        </div><!-- /theme group Content -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorContent" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorContent" id="bgColorContent" class="hex" value="cde797" />
                                        <select name="bgTextureContent" class="texture"></select>

                                        <input type="text" name="bgImgOpacityContent" class="opacity" value="72.9" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorContent">Border</label>
                                        <input type="text" name="borderColorContent" id="borderColorContent" class="hex" value="c643d0" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcContent">Text</label>
                                        <input type="text" name="fcContent" id="fcContent" class="hex" value="5faace" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorContent">Icon</label>
                                        <input type="text" name="iconColorContent" id="iconColorContent" class="hex" value="789f2d" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Default">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-default">abc</div>
                                <a href="#">Clickable: default state</a>

                        </div><!-- /theme group Default -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorDefault" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorDefault" id="bgColorDefault" class="hex" value="1d0606" />
                                        <select name="bgTextureDefault" class="texture"></select>

                                        <input type="text" name="bgImgOpacityDefault" class="opacity" value="74.4" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorDefault">Border</label>
                                        <input type="text" name="borderColorDefault" id="borderColorDefault" class="hex" value="d3d3d3" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcDefault">Text</label>
                                        <input type="text" name="fcDefault" id="fcDefault" class="hex" value="691111" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorDefault">Icon</label>
                                        <input type="text" name="iconColorDefault" id="iconColorDefault" class="hex" value="a82cb5" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Hover">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-hover">abc</div>
                                <a href="#">Clickable: hover state</a>
                        </div><!-- /theme group Hover -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHover" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHover" id="bgColorHover" class="hex" value="7d1eb3" />
                                        <select name="bgTextureHover" class="texture"></select>

                                        <input type="text" name="bgImgOpacityHover" class="opacity" value="77.11" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHover">Border</label>
                                        <input type="text" name="borderColorHover" id="borderColorHover" class="hex" value="df2a8d" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHover">Text</label>
                                        <input type="text" name="fcHover" id="fcHover" class="hex" value="ee81a6" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorHover">Icon</label>
                                        <input type="text" name="iconColorHover" id="iconColorHover" class="hex" value="d6b3c4" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Active">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-active">abc</div>
                                <a href="#">Clickable: active state</a>
                        </div><!-- /theme group Active -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorActive" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorActive" id="bgColorActive" class="hex" value="f9c3f9" />
                                        <select name="bgTextureActive" class="texture"></select>

                                        <input type="text" name="bgImgOpacityActive" class="opacity" value="66.4" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorActive">Border</label>
                                        <input type="text" name="borderColorActive" id="borderColorActive" class="hex" value="e76e6e" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcActive">Text</label>
                                        <input type="text" name="fcActive" id="fcActive" class="hex" value="df4949" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorActive">Icon</label>
                                        <input type="text" name="iconColorActive" id="iconColorActive" class="hex" value="7e1616" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->	

                <div class="theme-group clearfix" id="Highlight">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-highlight">abc</div>
                                <a href="#">Highlight</a>
                        </div><!-- /theme group Highlight -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorHighlight" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorHighlight" id="bgColorHighlight" class="hex" value="14120b" />
                                        <select name="bgTextureHighlight" class="texture"></select>

                                        <input type="text" name="bgImgOpacityHighlight" class="opacity" value="52.9" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorHighlight">Border</label>
                                        <input type="text" name="borderColorHighlight" id="borderColorHighlight" class="hex" value="fcefa1" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcHighlight">Text</label>
                                        <input type="text" name="fcHighlight" id="fcHighlight" class="hex" value="ca869e" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorHighlight">Icon</label>
                                        <input type="text" name="iconColorHighlight" id="iconColorHighlight" class="hex" value="2e83ff" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->			

                <div class="theme-group clearfix" id="Error">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <div class="state-preview corner-all ui-state-error">abc</div>
                                <a href="#">Error</a>
                        </div><!-- /theme group Error -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorError" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorError" id="bgColorError" class="hex" value="f7c0ab" />
                                        <select name="bgTextureError" class="texture"></select>

                                        <input type="text" name="bgImgOpacityError" class="opacity" value="95.7" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-border clearfix">
                                        <label for="borderColorError">Border</label>
                                        <input type="text" name="borderColorError" id="borderColorError" class="hex" value="f4b4b4" size="6" />
                                </div>
                                <div class="field-group clearfix">

                                        <label for="fcError">Text</label>
                                        <input type="text" name="fcError" id="fcError" class="hex" value="d4b0b0" size="6" />
                                </div>
                                <div class="field-group clearfix">
                                        <label for="iconColorError">Icon</label>
                                        <input type="text" name="iconColorError" id="iconColorError" class="hex" value="683131" size="6" />
                                </div>
                        </div><!-- /theme group content -->

                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Overlay">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <a href="#">Modal Screen for Overlays </a>
                        </div><!-- /theme group Overlay -->
                        <div class="theme-group-content corner-bottom clearfix">
                                <div class="field-group field-group-background clearfix">

                                        <label for="bgColorOverlay" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorOverlay" id="bgColorOverlay" class="hex" value="e8b0b0" />
                                        <select name="bgTextureOverlay" class="texture"></select>

                                        <input type="text" name="bgImgOpacityOverlay" class="opacity" value="21.8" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-opacity clearfix">
                                        <label for="opacityOverlay">Overlay Opacity:</label>
                                        <input type="text" name="opacityOverlay" id="opacityOverlay" class="opacity" value="10.2" />
                                        <span class="opacity-per">%</span>

                                </div>	
                        </div><!-- /theme group Overlay -->
                </div><!-- /theme group -->		

                <div class="theme-group clearfix" id="Shadow">
                        <div class="theme-group-header state-default">
                                <span class="icon icon-triangle-1-e">Collapse</span>
                                <a href="#">Drop Shadows</a>
                        </div><!-- /theme group Shadow -->
                        <div class="theme-group-content corner-bottom clearfix">

                                <div class="field-group field-group-background clearfix">
                                        <label for="bgColorShadow" class="background">Background color &amp; texture</label>
                                        <input type="text" name="bgColorShadow" id="bgColorShadow" class="hex" value="c25151" />
                                        <select name="bgTextureShadow" class="texture"></select>

                                        <input type="text" name="bgImgOpacityShadow" id="bgImgOpacityShadow" class="opacity" value="5.3" />
                                        <span class="opacity-per">%</span>
                                </div>
                                <div class="field-group field-group-opacity clearfix">
                                        <label for="opacityShadow">Shadow Opacity:</label>
                                        <input type="text" name="opacityShadow" id="opacityShadow" class="opacity" value="30.7" />
                                        <span class="opacity-per">%</span>

                                </div>	
                                <div class="field-group clearfix">
                                        <label for="thicknessShadow">Shadow Thickness:</label>
                                        <input type="text" name="thicknessShadow" id="thicknessShadow" class="offset" value="8.2px" />
                                </div>	
                                <div class="field-group clearfix">
                                        <label for="offsetTopShadow">Top Offset:</label>
                                        <input type="text" name="offsetTopShadow" id="offsetTopShadow" class="offset" value="-8.6px" />
                                </div>	
                                <div class="field-group clearfix">

                                        <label for="offsetLeftShadow">Left Offset:</label>
                                        <input type="text" name="offsetLeftShadow" id="offsetLeftShadow" class="offset" value="-8.5px" />
                                </div>						
                                <div class="field-group field-group-corners clearfix">
                                        <label for="cornerRadiusShadow">Corners:</label>
                                        <input type="text" value="8.3px" name="cornerRadiusShadow" id="cornerRadiusShadow" class="cornerRadius" />
                                </div>
                        </div><!-- /theme group Shadow -->

                </div><!-- /theme group -->						

                <button type="submit" name="submit" id="submitBtn">Preview Changes</button>		
        </fieldset>
</form>
<?php $content = ob_get_clean();
foreach($themes as $key=>$value){
        $content = str_replace($value,'<'.'?php echo $themes["'.$key.'"]?'.'>',$content);
$content = preg_replace('/<select name="([^"]*)" class="texture"><\/select>/i','<'.'?php echo texture_select("$1",$themes["$1"])?'.'>',$content);
}
//echo $content;
?>
