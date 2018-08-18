<?php for($i=0;$i<count($danhmuc_news);$i++) {?>
<?php
    $d->reset();
    $sql_slider = "select ten$lang as ten,mota$lang as mota,photo, tenkhongdau, ngaytao from #_news where hienthi=1 and type='tintuc' and id_danhmuc = ".$danhmuc_news[$i]['id']." order by stt,id desc limit 0,5";
    $d->query($sql_slider);
    $tindm=$d->result_array();
?>
    <div class="tieude_giua" <?php if(!empty($danhmuc_news[$i]['photo'])) {?> style="border-bottom: 2px solid <?=$danhmuc_news[$i]['photo']?> ;" <?php } ?>><div <?php if(!empty($danhmuc_news[$i]['photo'])) {?> style="background:<?=$danhmuc_news[$i]['photo']?> ; border-bottom: 2px solid <?=$danhmuc_news[$i]['photo']?> ;" <?php } ?>><?=$danhmuc_news[$i]['ten']?></div></div>
    <div class="wap_item">
         <div class="item_dm_left">
            <div class="item_dm">
                <p class="zoom_hinh tin_img"><a href="tin-tuc/<?=$tindm[0]['tenkhongdau']?>-<?=$tindm[0]['id']?>.html" title="<?=$tindm[0]['ten']?>"><img src="<?php if($tindm[0]['photo']!=NULL)echo _upload_tintuc_l.$tindm[0]['photo'];else echo 'images/noimage.png';?>" alt="<?=$tindm[$j]['ten']?>" /></a></p>      
                <div class="tin_dm_info">
                        <h3><a href="tin-tuc/<?=$tindm[0]['tenkhongdau']?>-<?=$tindm[0]['id']?>.html" title="<?=$tindm[0]['ten']?>"><?=$tindm[0]['ten']?></a></h3>
                        <div class="ngaytao"><?=date('d-m-Y',$tindm[0]['ngaytao'])?></div>
                        <div class="mota"><?=$tindm[0]['mota']?></div>  
                </div>
            </div>
         </div>
         <div class="item_dm_right">
        <?php for($j=1;$j<count($tindm);$j++) { ?>
            <div class="item_dm">
            <p class="zoom_hinh tin_img"><a href="tin-tuc/<?=$tindm[$j]['tenkhongdau']?>-<?=$tindm[$j]['id']?>.html" title="<?=$tindm[$j]['ten']?>"><img src="<?php if($tindm[$j]['photo']!=NULL)echo _upload_tintuc_l.$tindm[$j]['photo'];else echo 'images/noimage.png';?>" alt="<?=$tindm[$j]['ten']?>" /></a></p>      
            <div class="tin_dm_info">
                    <h3><a href="tin-tuc/<?=$tindm[$j]['tenkhongdau']?>-<?=$tindm[$j]['id']?>.html" title="<?=$tindm[$j]['ten']?>"><?=$tindm[$j]['ten']?></a></h3>
                    <div class="ngaytao"><?=date('d-m-Y',$tindm[$j]['ngaytao'])?></div>
                    <div class="mota"><?=$tindm[$j]['mota']?></div>  
            </div>
            <div class="clear"></div>
            </div>
        <?php } ?>
        </div>
        <div class="clear"></div>
    </div>
<?php } ?>