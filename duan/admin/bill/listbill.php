<div class="row adddm">
    <div class="row frmtitle">
        <H1>DANH SÁCH HÓA ĐƠN ĐẶT HÀNG</H1>
    </div>
   <form action="index.php?act=danhsachhoadon" method="post">
    <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
    <input type="submit" value="tìm kiếm" name="listok">
   </form>
    <div class="row frmcontent">
        
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ Đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>GIÁ trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>

                </tr>
                <?php
                
                 $i = 1;
                foreach ($listbill as $bill) {
                    extract($bill);
                    $suabl =  "index.php?act=updatebill&id=" . $id;
                    $xoabl =  "index.php?act=xoadondat&id=" . $id;
                    $kh = $bill["bill_name"].'
                    <br>'.$bill["bill_email"].'
                    <br>'.$bill["bill_address"].'
                    <br>'.$bill["bill_tel"];
                    $countsp = load_cart_count($bill['id']);
                    extract($countsp);
                    $ttdh = get_ttdh($bill["bill_status"]);

                    $gia = currency_format($bill['total'],"");
                    if ($i % 2 != 0) {
                        echo ' <tr>
                    <td><input type="checkbox"></td>
                    <td>DAM-'.$bill['id'].'</td>
                    
                    <td>'.$kh.'</td>
                    <td>'.$soluong.'</td>
                    <td><Strong>'.$gia.'</Strong>VNĐ</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td>
                    <a href="' . $suabl . '"><input type="button"  style="    background-color: green;
                            width: 30px;
                            height: 30px;" class="icon"></a> <a href="' . $xoabl . '"><input type="button"  style="    background-color: red;
                            width: 30px;
                            height: 30px;"  class="button-add"></a>
                    </td>
                    </tr>
                  ';
                    }
                    
                   else {
                    echo ' <tr style="background-color: #f3f2f3;">
                    <td><input type="checkbox"></td>
                    <td>DAM-'.$bill['id'].'</td>
                    
                    <td>'.$kh.'</td>
                    <td>'.$soluong.'</td>
                    <td><Strong>'.$gia.'</Strong>VNĐ</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td>
                    <a href="' . $suabl . '"><input type="button"  style="    background-color: green;
                            width: 30px;
                            height: 30px;" class="icon"></a> <a href="' . $xoabl . '"><input type="button"  style="    background-color: red;
                            width: 30px;
                            height: 30px;"  class="button-add"></a>
                    </td>
                    </tr>
                  ';
                   }
                  $i++;
                } 
                ?>
               
            

            </table>
        </div>
  
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            
        </div>
    </div>
</div>