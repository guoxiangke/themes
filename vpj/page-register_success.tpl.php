<?php
if ($uid) {
	drupal_goto('UCenter');
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
		<?php print $head
		?>
		<title><?php print $head_title
			?></title>
		<?php print $styles
		?>
		<?php print $scripts
		?>
		<!--[if lt IE 7]>
		<?php print phptemplate_get_ie_styles(); ?>
		<![endif]-->
	</head>
	<body>
		<div id="header-region" class="vp-clear-block">
			<?php
			include (path_to_theme() . '/vp_page-top.tpl.php');
			?>
		</div>
		<div class="vp-body">
		<div class="vp-body-inner"> 
			<?php if( $messages ) :
			?>
			<div class="messages status">
				<?php print $messages;?>
			</div>
			<?php endif;?>
			<div class="sfxzvp-body-inner">
	    <div class="sfxzbody-inner-head">
			<div class="sfxzselecthead">
				<div class="sfxzselectbu">1.身份确认</div>
				<div class="sfxzselectbu">2.完善信息</div>
				<div class="sfxzselectbu">3.等待确认</div>
				<div class="sfxzsltpic3"><img src="/<?php echo path_to_theme()?>/images/logo.gif" alt="" /></div>
				<div class="sfxzselectbu2">4.成功注册</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="ddym">
		    <div class="ddymts">我们的工作人员将于24小时内与你取得联系，确认你在微铺街的唯一身份
			<p>Thank you for applying for an account. Your account is currently pending approval by the site administrator.
Once it has been approved, you will receive an e-mail containing further instructions.</p>
</div>
			<div class="ddbtn"><a class="overbtn">完成注册</a></div>
		</div>
    </div>
		</div>   
		</div>
		
		<div id="footer" class="footer">
			<?php print $footer_message . $footer
			?>
		</div>
		<?php print $closure
		?>
	</body>
</html>