<?php
	
	$d->reset();
	$sql="select id,ten$lang as ten,tenkhongdau,thumb from #_news_list where hienthi=1 and type='tintuc' and noibat=1 order by stt,id desc";
	$d->query($sql);
	$news_list=$d->result_array();

?>
<div class="list_noibat">
    <ul>
        <li><a data="0">Tin Nhanh</a></li>
        <?php for($i=0;$i<count($news_list);$i++) {?>
            <li><a data="<?=$news_list[$i]['id']?>"><?=$news_list[$i]['ten']?></a></li>
        <?php }?>
    </ul>
</div>
<div class="wap_item">
<?php for($i=0,$count_product2=count($product2);$i<$count_product2;$i++){	?>

<?php } ?>
</div><!---END .wap_item-->
