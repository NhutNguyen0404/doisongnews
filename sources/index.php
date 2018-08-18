<?php  if(!defined('_source')) die("Error");

	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau, photo from #_news_danhmuc where type='tintuc' and hienthi=1 and noibat=1 order by stt,id desc";		
	$d->query($sql);
	$danhmuc_news = $d->result_array();	
	$url_link = getCurrentPageURL();

?>