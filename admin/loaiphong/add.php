<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LOẠI PHÒNG</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST">
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="name" placeholder="nhập vào tên">
           </div>
           <div class="row2 mb10">
            <label>Giá </label> <br>
            <input type="text" name="gia" placeholder="nhập vào giá">
           </div>
           <div class="row2 mb10">
            <input type="text" name="idks" placeholder="" hidden>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
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