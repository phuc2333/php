<div class="row adddm">
            <div class="row frmtitle">
                <H1>DANH SÁCH TAI KhOAN</H1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TK</th>
                            <th>User Name</th>
                            <th>Pass</th>
                            <th>Email</th>
                            <th>Dia chi</th>
                            <th>Dien thoai</th>
                            <th>Vai tro</th>
                            <th></th>


                        </tr>
                        
                        <?php
                          foreach($listtaikhoan as $tk){
                              extract($tk);
                              $suatk =  "index.php?act=suatk&id=".$id;
                              $xoatk =  "index.php?act=xoatk&id=".$id;
                           if($role == 0){
                               $quyen = 'Khách hàng';
                               echo    '<tr>
                               <td><input type="checkbox" name="" id=""></td>
                               <td>'.$id.'</td>
                               <td>'.$user.'</td>
                               <td>'.$pass.'</td>
                               <td>'.$email.'</td>
                               <td>'.$address.'</td>
                               <td>'.$tel.'</td>
                               
                               <td><p style="color: white;
                               background-color: green;
                               text-align: center;
                               border-radius: 10px 10px;
                               height: 28px;
                               line-height: 27px;">'.$quyen.'<p></td>
                               <td>
                               <a href="'.$suatk.'">
                               <input type="button" style="    background-color: green;
                               width: 30px;
                               height: 30px;" class="icon"></a> 
                               <a href="'.$xoatk.'"><input type="button" style="    background-color: red;
                               width: 30px;
                               height: 30px;"  class="button-add"></a>
                               </td>
                           </tr>';
                           }
                           else {
                               $quyen = 'Admin';
                               echo    '<tr>
                               <td><input type="checkbox" name="" id=""></td>
                               <td>'.$id.'</td>
                               <td>'.$user.'</td>
                               <td>'.$pass.'</td>
                               <td>'.$email.'</td>
                               <td>'.$address.'</td>
                               <td>'.$tel.'</td>
                               
                               <td><p style="color: white;
                               background-color: red;
                               text-align: center;
                               border-radius: 10px 10px;
                               height: 28px;
                               line-height: 27px;">'.$quyen.'</p></td>
                               <td>
                               <a href="'.$suatk.'">
                               <input type="button" style="    background-color: green;
                               width: 30px;
                               height: 30px;" class="icon"></a> 
                               <a href="'.$xoatk.'"><input type="button" style="    background-color: red;
                               width: 30px;
                               height: 30px;"  class="button-add"></a>
                               </td>
                           </tr>';
                           }
                       
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