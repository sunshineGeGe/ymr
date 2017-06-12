<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>luara.left.css" />
<script src="<?php echo JS_PATH;?>jquery.luara.0.0.1.min.js"></script>
<div class="warp banner">
    <div id="focus">
        <ul>
            <li>
                <a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>images/1.jpg" width="1047" height="300"></a>
                <p> </p>
            </li>
            <li>
                <a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>images/2.jpg" width="1047" height="300"></a>
                <p> </p>
            </li>
            <li>
                <a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>images/3.jpg" width="1047" height="300"></a>
                <p></p>
            </li>
            <li>
                <a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>images/4.jpg" width="1047" height="300"></a>
                <p></p>
            </li>
        </ul>
    </div>
</div>
<div class="content clear warp">
    <div class="cont-l">
        <div class="mb15 sort">
            <h2 class="clear"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=7">画家简介</a><span></span></h2>
            <div class="small-sort clear" style="text-align:center;">
                <img src="http://yongmanran.cname02.com/files/pic/201552321819.jpg" style="width:210px;height:auto;">
            </div>
            <h2 class="clear"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=7">勇满然</a></h2>
            <div class="small-sort clear">
                <p>故宫博物院紫禁城书画艺术协会国画家</p>
                <p>中国国际书画院名誉院长 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <!-- <p>国家一级美术师</p> -->
                <p>勇满然，生于1942年，号卧龙岗人。曾深造于中国艺术研究院中国画名家班。勇满然从艺50余年擅长花鸟，尤其擅长松、竹、梅兼工山水，是一位学者型画家。勇满然师前贤，法自然，以高古、古意、古雅为美学追求，近二十年来跋涉十多万里......</p>
            </div>
        </div>
        <div class="mb15 sort">
            <h2 class="clear"><a href="#">艺术家风采</a><span></span></h2>
            <div class="example2" style="width:285px;height:345px">
                <ul>
                    <li><img src="<?php echo IMG_PATH;?>images/renwu_01.png" style="width:285px;height:345px" alt="1" /></li>
                    <li><img src="<?php echo IMG_PATH;?>images/renwu_02.jpg" style="width:285px;height:345px" alt="2" /></li>
                    <li><img src="<?php echo IMG_PATH;?>images/renwu_05.jpg" style="width:285px;height:345px" alt="3" /></li>
                    <li><img src="<?php echo IMG_PATH;?>images/renwu_06.jpg" style="width:285px;height:345px" alt="4" /></li>
                </ul>
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cont-r">
        <div class=" hot mb15">
            <h1>四大系列作品<span></span>
                <!--<a class="arrow-r" href="javascript:;"></a><a class="arrow-l" href="javascript:;"></a>-->
            </h1>
            <div class=" gongsi-show">
                <div class="clear">
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=9"><img onload="resetImage(this)" src="<?php echo IMG_PATH;?>images/1_mei.jpg" alt="梅" title="名梅系列" /></a>
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=10"><img onload="resetImage(this)" src="<?php echo IMG_PATH;?>images/2_song.jpg" alt="松" title="名松系列" /></a>
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11"><img onload="resetImage(this)" src="<?php echo IMG_PATH;?>images/3_shan.jpg" alt="山" title="名山系列" /></a>
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12"><img onload="resetImage(this)" src="<?php echo IMG_PATH;?>images/4_yang.jpg" alt="胡杨" title="胡杨系列" /></a>
                </div>
            </div>
        </div>
        <h3 class="clear">
            <div class="clear"><a class="act" href="#">新作欣赏</a></div>
            <span><a class="more" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=16">查看更多</a></span>
        </h3> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=180540818ef756bac7fd98394e74f018&action=lists&catid=16&num=4&order=id+DESC&page=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval(1) ? intval(1) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'16','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'16','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="photo-list picbig" style="padding-top:20px;">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li style="width:170px;">
                <div class="img-wrap">
                    <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>" /></a>
                </div>
                <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <h3 class="clear">
            <div class="clear"><a class="act" href="#">专家评语</a></div>
            <span><a class="more" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14">查看更多</a></span>
        </h3> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7a9701622c186cd868b5973b34726e48&action=lists&catid=14&num=3&order=id+DESC&page=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval(1) ? intval(1) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'14','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'14','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="hot-job" id="hot-job">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="clear">
                <div class="hot-2">
                    <p class="p1"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></p>
                    <p class="p2"><?php echo $r['description'];?>......</p>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <h3 class="clear">
            <div class="clear"><a class="act" href="#">著作与证书</a></div>
            <span><a class="more" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13">查看更多</a></span>
        </h3> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4b1b0b7fe58adfdbeb92fca570a34a73&action=lists&catid=13&num=4&order=id+DESC&page=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval(1) ? intval(1) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'13','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'13','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="photo-list picbig" style="padding-top:20px;">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li style="width:170px;">
                <div class="img-wrap">
                    <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>" /></a>
                </div>
                <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <h3 class="clear">
            <div class="clear"><a class="act" href="#">教学视频</a></div>
            <span><a class="more" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15">查看更多</a></span>
        </h3> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562b31d4e03654c6df63468b5e23e006&action=lists&catid=15&num=4&order=id+DESC&page=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval(1) ? intval(1) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="photo-list picbig" style="padding-top:20px;">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li style="width:170px;">
                <div class="img-wrap">
                    <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>" /></a>
                </div>
                <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
            </li>
            <?php $n++;}unset($n); ?>
    </div>
</div>
<script type="text/javascript">
function resetImage(obj) {

    var imageobj = $(obj);
    var width = imageobj.width();
    var height = imageobj.height();

    if (width > 0 && height > 0) {
        var pWidth = imageobj.parent().width();
        var pHeight = imageobj.parent().height();
        var biLi = Math.floor(width / height * 100) / 100;
        var pBiLi = Math.floor(pWidth / pHeight * 100) / 100;
        if (biLi > pBiLi) {
            imageobj.css({
                'width': pWidth,
                'height': Math.floor(pWidth / biLi * 100) / 100,
                'margin-top': (pHeight - Math.floor(pWidth / biLi * 100) / 100) / 2,
                'margin-bottom': 5,
            });
        } else if (biLi < pBiLi) {
            imageobj.css({
                'width': Math.floor(pHeight * biLi * 100) / 100,
                'height': pHeight,
                'margin-left': (pWidth - Math.floor(pHeight * biLi * 100) / 100) / 2,
                'margin-bottom': 5,
            });
        } else if (biLi == pBiLi) {
            imageobj.css({
                'width': pWidth,
                'height': pHeight,
                'margin-bottom': 5,
            });
        }
    }




    $(".example2").luara({
        width: "285",
        height: "345",
        interval: 4500,
        selected: "seleted",
        deriction: "left"
    });

}
</script>
<?php include template("content","footer"); ?>
