<?php

	$d->reset();
	$sql_slider = "select ten$lang as ten,mota$lang as mota,thumb, tenkhongdau, id from #_news where hienthi=1 and type='tintuc' and noibat = 1  order by stt,id desc limit 0,4";
	$d->query($sql_slider);
	$tinnb=$d->result_array();
	
?>
<div class="tin_nb wap_conten">
    <div class="tin_nb_item_rg">
        <?php for($i=0;$i<count($tinnb);$i++) {?>
            <div class="tin_nb_item">
                 <p class="zoom_hinh tin_img"><a href="tin-tuc/<?=$tinnb[$i]['tenkhongdau']?>-<?=$tinnb[$i]['id']?>.html" title="<?=$tinnb[$i]['ten']?>"><img src="<?php if($tinnb[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tinnb[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tinnb[$i]['ten']?>" /></a>  </p>    
                 <div class="tin_nb_info">
                    <h3><a href="tin-tuc/<?=$tinnb[$i]['tenkhongdau']?>-<?=$tinnb[$i]['id']?>.html" title="<?=$tinnb[$i]['ten']?>"><?=$tinnb[$i]['ten']?></a></h3>
                    <div class="mota"><?=$tinnb[$i]['mota']?></div>  
                </div>
            </div>  
        <?php } ?>
         <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>