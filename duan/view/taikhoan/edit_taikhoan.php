<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
          <?php
          if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
            extract($_SESSION['user']);

          } 
          ?>
            <div class="boxtitle">Cap nhat thong tin tai khoan</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=edit_taikhoan" method="post">
                <input type="email" name="email" placeholder="email" value="<?=$email?>">
                <input type="text" name="user" placeholder="user" value="<?=$user?>">
                <input type="password" name="pass" placeholder="pass" value="<?=$pass?>">
                <input type="text" name="address" placeholder="address" value="<?=$address?>">
                <input type="number" name="tel" placeholder="phone number"value="<?=$tel?>">

                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cap nhat" name="capnhat">

                <input type="reset" value="nhap lai">
                </form>
                <?php if(isset($thongbao)) echo $thongbao;?>
            </div>
        </div>
        
    </div>
  
   
   
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>