<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
    
            <div class="boxtitle">Cảm ơn</div>
            <div class="row boxcontent">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
        if (isset($bill) && is_array($bill)) {
            extract($bill);
        }
        ?>
        <div class="row mb">

            <div class="boxtitle">Thông tin đơn hàng</div>
            <div class="row boxcontent">
                <h2>DAM-<?= $bill['id']; ?></h2>
                <h2>Ngày đặt hàng-<?= $bill['ngaydathang']; ?></h2>
                <h2>Tổng đơn hàng-<?= $bill['total']; ?></h2>
                <h2>Phương thức thanh toán
                <?php if ($bill['bill_pttt'] == 1)
                {
                  echo "Tra tien khi nhan hang";
                }
                elseif ($bill['bill_pttt'] == 2) {
                    echo "Chuyen khoan ngan hang";
                }
                elseif ($bill['bill_pttt'] == 3) {
                    echo "Thanh toan online";
                }
                 ?></h2>

            </div>
        </div>
        <div class="row mb">

            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?= $bill['bill_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?= $bill['bill_address']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $bill['bill_email']; ?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?= $bill['bill_tel']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb">

            <div class="boxtitle">Chi tiết giỏ hàng</div>
            <div class="row boxcontent">
                <table>
                    
                    <?php
                      show_chitiet_bill($billct); 
                    ?>
                </table>

            </div>
        </div>
        
    </div>

    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>