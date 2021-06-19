
<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/x-icon" href="http://education-html.themerex.net/images/favicon.ico" />
<title><?php echo $page_title;?> | Education Center</title>
<?php include('include/allcss.php')?>
<style>
/* .isotope_wrap .isotope_column_4 {
width: 27.9%;
} */
.isotope_wrap .isotope_item {
padding-right: 17px;
padding-bottom: 50px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
opacity: 0;
filter: alpha(opacity=0);
}
</style>
</head>

<body class="<?php echo ($this->is_homepage? 'home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide' : 'page body_style_fullscreen body_filled article_style_boxed top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide');?>">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
<!-- Body -->
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <?php include('include/header.php'); ?>
		<?php include($page_content.'.php'); ?>
        <!-- /Content without sidebar -->
		<?php include('include/footer.php');?>
        <!-- /Contacts Footer -->
		<!-- Copyright -->
    </div>
</div>
		<!-- /Copyright -->
<?php include('include/script.php')?>     
	

</body>

</html>