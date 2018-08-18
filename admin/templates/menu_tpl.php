<div class="logo"> <a href="#" target="_blank" onclick="return false;"><img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

  
  <li class="categories_li <?php if($_GET['com']=='news' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">       
        <?php phanquyen_menu('Quản lý tin tức','news','man','tintuc'); ?>
         <?php phanquyen_menu('Quản lý danh mục','news','man_danhmuc','tintuc'); ?>
         <?php phanquyen_menu('Quản lý danh mục cấp 2','news','man_list','tintuc'); ?>
        <?php phanquyen_menu('Quản lý chia sẻ','news','man','duan'); ?>
    </ul>
  </li>
  
   <li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Quản lý Video','video','man',''); ?>
        <?php phanquyen_menu('Cập nhật giới thiệu','about','capnhat','about'); ?>
        <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
        <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>
    </ul>
  </li>   
      <li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
     		<?php phanquyen_menu('Cập nhật logo','background','capnhat','banner'); ?>
            <?php phanquyen_menu('Cập nhật quảng cáo top','background','capnhat','banner_mobi'); ?>
            <?php phanquyen_menu('Quản lý quảng cáo','slider','man_photo','quangcao'); ?>
            <?php phanquyen_menu('Quản lý quảng cáo footer','slider','man_photo','quangcaoft'); ?>
     </ul>
     </li>

     <li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>
         <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
  </li>
</ul>
