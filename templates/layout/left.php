<?php

	$d->reset();
	$sql_tinmoi = "select id,ten$lang as ten,tenkhongdau,thumb,mota$lang as mota,ngaytao,luotxem from #_news where type='tintuc' and hienthi=1 and noibat=1 order by stt,id desc";
	$d->query($sql_tinmoi);
	$tinmoi = $d->result_array();

	$d->reset();
	$sql_hotro = "select ten$lang as ten,dienthoai,email,yahoo,skype from #_yahoo where hienthi=1 order by stt,id desc";
	$d->query($sql_hotro);
	$hotro = $d->result_array();
    
    $d->reset();
   	$sql_quangcao = "select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='quangcao1' order by stt,id desc";
	$d->query($sql_quangcao);
	$quangcao1 = $d->result_array();	
    
    $d->reset();
    $sql_quangcao = "select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='quangcao2' order by stt,id desc";
	$d->query($sql_quangcao);
	$quangcao2 = $d->result_array();


?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#tinmoi ul').slick({
		  	lazyLoad: 'ondemand',
        	infinite: false,//Hiển thì 2 mũi tên
			accessibility:true,
			vertical:true,//Chay dọc
		  	slidesToShow: 4,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true
      });
	});
</script>

<div id="hotro" class="danhmuc">
<?php for($i=0,$count_quangcao=count($quangcao1);$i<$count_quangcao;$i++){	?>  	  
        <a href="<?=$quangcao1[$i]['link']?>"><img style="width: 100%;" src="<?php if($quangcao1[$i]['photo']!=NULL) echo _upload_hinhanh_l.$quangcao1[$i]['photo']; else echo 'images/noimage.gif';?>" alt="<?php if($quangcao1[$i]['ten']!='') echo $quangcao1[$i]['ten'];else echo $company['ten']?>" /></a>
<?php } ?>
</div><!---END #danhmuc-->
<div id="tinmoi" class="danhmuc control_slick_doc">
<div class="tieude">Tin tức</div>
	<ul>
    	<?php for($i = 0, $count_tinmoi = count($tinmoi); $i < $count_tinmoi; $i++){ ?>
    		<li>
            	<a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$tinmoi[$i]['thumb']?>" alt="<?=$tinmoi[$i]['ten']?>" /></a>
                <h4><a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><?=$tinmoi[$i]['ten']?></a></h4>
                <p class="ngaytao"><i class="fa fa-calendar" aria-hidden="true"></i><?=make_date($tinmoi[$i]['ngaytao'],'-')?></p>
                <div class="clear"></div>
            </li>
        <?php } ?>
    </ul>
</div>

<div id="hotro" class="danhmuc">
<?php for($i=0,$count_quangcao=count($quangcao2);$i<$count_quangcao;$i++){	?>  	  
        <a href="<?=$quangcao[$i]['link']?>"><img style="width: 100%;" src="<?php if($quangcao2[$i]['photo']!=NULL) echo _upload_hinhanh_l.$quangcao2[$i]['photo']; else echo 'images/noimage.gif';?>" alt="<?php if($quangcao2[$i]['ten']!='') echo $quangcao2[$i]['ten'];else echo $company['ten']?>" /></a>
<?php } ?>
</div><!---END #danhmuc-->

<div id="video" class="danhmuc">
<div class="tieude">VIDEO CLIP</div>
	<div class="load_video">
	<script type="text/javascript">
		$(document).ready(function(e) {
			$(window).scroll(function(){
				if(!$('.load_video').hasClass('load_video2'))
				{
					$('.load_video').addClass('load_video2');
					$('.load_video').load( "ajax/video.php");
				}
			 });
        });
	</script>
    </div><!---END .load_video-->
</div><!---END #video-->
