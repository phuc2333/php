<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
          
            <div class="boxtitle">Dang ky thanh vien</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                <input type="email" name="email" placeholder="email">
                <input type="text" name="user" placeholder="user">
                <input type="password" name="pass" placeholder="pass">
                <input type="submit" value="Dang ky" name="dangky">
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