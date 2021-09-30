<div class="row mb ">
    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">Đơn hàng của tôi</div>
            <div class="row boxcontent  frmcontent">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>

                    </tr>

                    <?php
                   
                    if (is_array($listbill)) {
                      

                        foreach ($listbill as $bill) {
                           extract($bill);
                           $ttdh = get_ttdh($bill['bill_status']);
                           $count = load_cart_count($bill['id']);
                          
                           extract($count);

                            echo '
                    <tr>
                        <td>DAM-'.$bill['id'].'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$bill['total'].'</td>
                        <td>'.$ttdh.'</td>
                  </tr>';
                        }
                    }
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