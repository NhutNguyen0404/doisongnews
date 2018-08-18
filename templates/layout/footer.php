<?php	

	$d->reset();
	$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
	$d->query($sql_contact);
	$company_contact = $d->fetch_array();
    
   	$d->reset();
	$sql_contact = "select noidung$lang as noidung from #_about where type='about' limit 0,1";
	$d->query($sql_contact);
	$company_gioithieu = $d->fetch_array();
    
    $d->reset();
    $sql_quangcao = "select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='quangcaoft' order by stt,id desc limit 0,1";
	$d->query($sql_quangcao);
	$quangcaoft = $d->fetch_array();	

?>
<div class="wap_conten footer">
    <div class="col-3">
        <a href=""><img src="<?=_upload_hinhanh_l.$row_banner['photo']?>" /></a>
        <?=$company_gioithieu['noidung']?>
    </div>
    <div class="col-3">
        
        <?=$company_contact['noidung']?>
    </div>
    <div class="col-3">
        <a href="<?=$quangcaoft['link']?>"><img style="width: 100%;" src="<?php if($quangcaoft['photo']!=NULL) echo _upload_hinhanh_l.$quangcaoft['photo']; else echo 'images/noimage.gif';?>" alt="<?php if($quangcaoft['ten']!='') echo $quangcaoft['ten'];else echo $company['ten']?>" /></a>
    </div>
    <div class="clear"></div>
</div>