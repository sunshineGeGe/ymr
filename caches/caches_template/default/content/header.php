<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html5>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet"/>
</head>
<body>
<!-- 导航 star -->
<div class="header" style="padding:0;">
	<div class="warp clear">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<div class="logo"><!--<img src='<?php echo IMG_PATH;?>images/logo.png' />--></div>
		<ul>
		<li><a href="<?php echo siteurl($siteid);?>" class="cur">首页</a></li>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
		<?php $n++;}unset($n); ?>
		</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
	</div>
</div>
<!-- 导航 end -->
