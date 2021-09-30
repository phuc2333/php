<div class="row adddm">
    <div class="row frmtitle">
        <H1>DANH SÁCH LOẠI HÀNG</H1>
    </div>
    <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo ' <option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="ok">
        </form>
    <div class="row frmcontent">
        
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>


                    <th></th>
                </tr>

                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp =  "index.php?act=suasp&id=" . $id;
                    $xoasp =  "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' alt='' height = '80'>";
                    } else {
                        $hinh = "No photo picture";
                    }
                    $formatprice = currency_format($price,'vnđ');
                    echo    '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $formatprice . '</td>
                            <td>' . $luotxem . '</td>

                            <td><a href="' . $suasp . '"><input class="icon" style="    background-color: green;
                            width: 30px;
                            height: 30px;" type="button"></a> <a href="' . $xoasp . '">
                            <input type="button" style="    background-color: red;
                            width: 30px;
                            height: 30px;"  class="button-add"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>