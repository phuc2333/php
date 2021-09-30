<div class="row mb ">

    <div class="boxtrai mr">
    <form action="index.php?act=updatecart" method="POST">
        <div class="row mb">
          
            <div class="boxtitle">Giỏ hàng</div>
            
            <div class="row boxcontent frmcontent">
                   <table>
                
                  <?php
                  viewcart(1); 
                  ?>
                   </table>
            </div>
        </div>
    <div class="row mb bill">
       <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a>
       <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
       <a href="index.php?act=updatecart"><input type="submit" id="btn_updatecart" name="btn_updatecart" value="Cập nhật giỏ hàng"></a>
    </div>
    </form>
    <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a>
    </div>

    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>