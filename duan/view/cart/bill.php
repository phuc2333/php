<div class="row mb ">
    <div class="boxtrai mr">
    <form action="index.php?act=billConfirm" method="post">
        <div class="row mb">

            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class="row boxcontent billform">
            
                <table>
                <?php
            if (isset($_SESSION['user'])) {
                 $name = $_SESSION['user']['user'];
                $address = $_SESSION['user']['address'];
                $email = $_SESSION['user']['email'];
                $tel = $_SESSION['user']['tel'];

            } 
            else {
                $name = "";
                $address = "";
                $email = "";
                $tel = "";
            }
            ?>
                    <tr>
                        <td>Nguoi dat hang</td>
                        <td><input type="text" name="name" id="" value="<?=$name?>"></td>
                    </tr>
                    <tr>
                        <td>Dia chi</td>
                        <td><input type="text" name="address" id="" value="<?=$address?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                    </tr>
                    <tr>
                        <td>Dien thoai</td>
                        <td><input type="text" name="tel" id="" value="<?=$tel?>"></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row mb">

            <div class="boxtitle">Phương thức thanh toán</div>
            <div class="row boxcontent billform">
                <table>
                    <tr>
                        <td><input type="radio" value="1" name="pttt" checked>Tra tien khi nhan hang</td>
                    </tr>
                    <tr>
                        <td><input type="radio" value="2" name="pttt" >Chuyen khoan ngan hang</td>
                    </tr><tr>
                        <td><input type="radio" value="3" name="pttt" >Thanh toan online</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb">
           
           <div class="boxtitle">Giỏ hàng</div>
           <div class="row boxcontent  frmcontent">
                  <table>
                  
                  <?php
                   viewcart(0);
                  ?>
                  </table>
           </div>
       </div>
        <div class="row mb bill">
            <a href="index.php?act=billConfirm"><input type="submit" name="yes" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
             
        </div>
        </form>
    </div>

    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>