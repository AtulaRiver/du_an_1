<div class="row2">
         <div class="row2 font_title">
          <h1>Đăng nhập tài khoản</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=dangnhap" method="POST">
           <div class="row2 mb10">
            <label>User</label> <br>
            <input type="text" name="user" placeholder="Nhập vào user...">
           </div>
           <div class="row2 mb10">
            <label>Password</label> <br>
            <input type="password" name="pass" placeholder="Nhập vào password...">
           </div>
           <div class="row2 mb10">
            <input type="checkbox" name="">
            <label>Ghi nhớ tài khoản </label> 
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="dangnhap" value="Đăng Nhập">
           </div>
          </form>
          <h2 class="thongbao">
          <?php 
           if(isset($thongbao) && ($thongbao!="")){
            echo $thongbao;
           }
           ?>
           </h2>
         </div>
        </div>