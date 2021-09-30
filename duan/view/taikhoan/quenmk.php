<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
          
            <div class="boxtitle">Dang ky thanh vien</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                <input type="email" name="email" placeholder="email">
                <input type="submit" value="Gui" name="guiemail">
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