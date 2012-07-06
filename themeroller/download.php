<?php 
class MyZipArchive extends ZipArchive
{
    /**
     *
     * Adds a directory recursively.
     *
     * @param string $filename The path to the file to add.
     *
     * @param string $localname Local name inside ZIP archive.
     *
     */
    public function addDir($filename, $localname)
    {
        $this->addEmptyDir($localname);
        $iter = new RecursiveDirectoryIterator($filename);

        foreach ($iter as $fileinfo) {
            if (! $fileinfo->isFile() && !$fileinfo->isDir()) {
                continue;
            }

            $method = $fileinfo->isFile() ? 'addFile' : 'addDir';
            $this->$method($fileinfo->getPathname(), $localname . '/' .
                $fileinfo->getFilename());
        }
    }
}
$download =true;
include_once('_theme.config.php');
	//ui-bg_glass_55_fbf9ee_1x400  ui-bg_name_opacity_color_widthxheight.png
	//ui-icons_222222_256x240.png
	//print_r($themes);
	$url = explode('/',$_SERVER["HTTP_REFERER"]);
	array_pop($url);
	$url = join("/",$url);
	$src = get_src("bgColorLayout","bgTextureLayout","bgImgOpacityLayout");
	$na = get_name("bgColorLayout","bgTextureLayout","bgImgOpacityLayout");
//////////////////create dir
	$cachedir = dirname(__FILE__).'/cache';
	if(!file_exists($cachedir)) 
	mkdir($cachedir,0777);// create cache dir
	$time = (string)microtime(true)*100;
	$themedir = $cachedir."/c".$time;
	if(!file_exists($themedir)) 
	mkdir($themedir,0777);// create theme dir	
	$themeimages = $themedir."/images";
	if(!file_exists($themeimages)) 
	mkdir($themeimages,0777);// create theme images dir	
///////////////////	

////////////////create images
	$image = $url.'/'.$src;
	//$cont = file_get_contents($image);
	//file_put_contents($themeimages."/".$na,$cont);
	//print_r($l);
	//print_r($themedir);
foreach($themes as $theme=>$val){
	if(strstr($theme,"Texture")){
	  $img_texture = $theme;
	  $img_color = str_replace("Texture","Color",$theme);
	  $img_opacity = str_replace("Texture","ImgOpacity",$theme);
	  $img_path = $themeimages."/".get_name($img_color,$theme,$img_opacity);
	  $img_url = $url.'/'.get_src($img_color,$theme,$img_opacity);
	  $cont = file_get_contents($img_url);
	  file_put_contents($img_path,$cont);
	}
	if(strstr($theme,"icon")){
	  $img_path = $themeimages."/".get_name($theme);
	  $img_url = $url.'/'.get_src($theme);
	  $cont = file_get_contents($img_url);
	  file_put_contents($img_path,$cont);
	}

     }
	/////////////create css
	ob_start();
	include("parseTheme.css.php");
	$css = ob_get_clean();
        file_put_contents($themedir."/ui.theme.css",$css);
	////////////////////////
	////////////zip
	//$z = new PHPZip();
	//$z -> Zip($themedir, $cachedir."/c".$time.".zip");
	$zip_name = $time.".zip";
	$zip_path = $cachedir."/c".$zip_name;
	$zip = new MyZipArchive;
	
if ($zip->open($zip_path,ZIPARCHIVE::CREATE) === TRUE) {
    $zip->addDir($themedir, 'theme');
    $zip->close();
    header('Content-type: application/zip');
    header("Content-length: " . filesize($zip_path));
    header('Content-Disposition: attachment; filename="theme' . $zip_name . '"');
    readfile($zip_path);
} else {
    echo 'failed';
}
?>
	
