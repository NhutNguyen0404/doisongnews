<?php
	
	$d->reset();
	$sql="select ten$lang as ten,tenkhongdau,id from #_news_danhmuc where hienthi=1 and type='tintuc' order by stt,id desc";
	$d->query($sql);
	$news_danhmuc=$d->result_array();
	
?>
<!--Hover menu-->
<script language="javascript" type="text/javascript">
	$(document).ready(function() { 
		//Hover vào menu xổ xuống
		$("#menu ul li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
			},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"});
			}); 
		$("#menu ul li").hover(function(){
				$(this).find('>a').addClass('active2'); 
			},function(){ 
				$(this).find('>a').removeClass('active2'); 
		}); 
		//Click vào danh mục xổ xuống
		$("#danhmuc ul li a").click(function(){
			if($(this).parents('li').children('ul').find('li').length>0)
			{
				$("#danhmuc ul li ul").hide(300);
				
				if($(this).hasClass('active'))
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').hide(300); 
					$(this).removeClass('active');
				}
				else
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').show(300); 
					$(this).addClass('active');
				}
				return false;
			}
		});
	});  
</script>
<!--Hover menu-->

<nav id="menu_mobi" style="height:0; overflow:hidden;"></nav>
<div class="header"><a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
</div>

<nav id="menu">
<ul>

    <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><i class="fa fa-home" aria-hidden="true"></i></a></li>
	<?php for($i = 0, $count_product_danhmuc = count($news_danhmuc); $i < $count_product_danhmuc; $i++){ ?>
    <li><a href="tin-tuc/<?=$news_danhmuc[$i]['tenkhongdau']?>-<?=$news_danhmuc[$i]['id']?>"><?=$news_danhmuc[$i]['ten']?></a>
        <?php	
            $d->reset();
            $sql_product_list="select ten$lang as ten,tenkhongdau,id from #_news_list where hienthi=1 and id_danhmuc='".$news_danhmuc[$i]['id']."' order by stt,id desc";
            $d->query($sql_product_list);
            $product_list=$d->result_array();	
            if(count($product_list)>0) {														
        ?>
            <ul>    
                 <?php for($j = 0, $count_product_list = count($product_list); $j < $count_product_list; $j++){ ?>
                        <li><a href="tin-tuc/<?=$product_list[$j]['tenkhongdau']?>-<?=$product_list[$j]['id']?>/"><?=$product_list[$j]['ten']?></a></li>
                 <?php } ?>
             </ul>
         <?php } ?>
    </li>
    <?php } ?>
    <li><a class="<?php if($_REQUEST['com'] == 'vi-deo') echo 'active'; ?>" href="video.html">video</a></li>
    <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
</ul>

</nav>