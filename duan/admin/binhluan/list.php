<div class="row adddm">
    <div class="row frmtitle">
        <H1>DANH SÁCH TAI KhOAN</H1>
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>Noi dung binh luan</th>
                    <th>user</th>
                    <th>id pro</th>
                    <th>Ngay binh luan</th>

                    <th></th>


                </tr>

                <?php
              
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl =  "index.php?act=suabl&id=" . $id;
                    $xoabl =  "index.php?act=xoabl&id=" . $id;
                    $tenuserBinhluan = get_tenuser($iduser);
                    //print_r( $tenuserBinhluan);


                    
                         
                  
     
                    echo    '<tr>
                    
                            <td><input type="checkbox" name="" id=""></td>
                            
                            <td>' . $id . '</td>
                           
                            <td>' . $noidung . '<br>  
                            
                             
                            
                            </td>
                           
                            <td>' . $tenuserBinhluan . '</td>
                            <td>' . $idpro . '</td>
                            <td>' . $ngaybinhluan . '</td>
                           
                            <td><a href="' . $suabl . '"><input type="button"  style="    background-color: green;
                            width: 30px;
                            height: 30px;" class="icon"></a> <a href="' . $xoabl . '"><input type="button"  style="    background-color: red;
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
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>