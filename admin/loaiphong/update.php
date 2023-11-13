<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI PHÒNG</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="name" placeholder="nhập vào tên" value="<?php if(isset($name) && ($name!="")) echo $name?>">
           </div>
           <div class="row2 mb10">
            <label>Giá </label> <br>
            <input type="text" name="gia" placeholder="nhập vào giá" value="<?php if(isset($gia) && ($gia!="")) echo $gia?>">
           </div>
           <div class="row2 mb10">
            <label>Id khách sạn </label> <br>
            <input type="text" name="idks" placeholder="nhập vào idks" value="<?php if(isset($idks) && ($idks!="")) echo $idks?>">
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
         <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php 
           if(isset($thongbao) && ($thongbao!="")){
            echo $thongbao;
           }
           ?>
          </form>
         </div>
        </div>