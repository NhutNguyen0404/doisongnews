<?php

	$d->reset();
	$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
	$d->query($sql_banner);
	$row_banner = $d->fetch_array();
	
	$d->reset();
	$sql_banner_mobi = "select photo$lang as photo from #_background where type='banner_mobi' limit 0,1";
	$d->query($sql_banner_mobi);
	$banner_mobi = $d->fetch_array();
			
?>
<div class="wap_conten">
    <div class="logo"><a href=""><img src="<?=_upload_hinhanh_l.$row_banner['photo']?>" /></a></div>
    <div class="qc_baner">
    <a href=""><img src="<?=_upload_hinhanh_l.$banner_mobi['photo']?>" /></a>
    </div>
    <div class="clear"></div>
</div>
