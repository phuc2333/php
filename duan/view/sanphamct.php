<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
        <form style="margin: 30px 40px;" action="index.php?act=addtocart" method="post">
            <?php
            // echo '<pre>';
            // print_r($onesp);
            // echo '</pre>';

            extract($onesp);
            ?>
            <div class="boxtitle">Ten san pham:<?= $name ?></div>
            <div class="row boxcontent">
                <?php

                $hinh = $imgpath . $img;
               
               $cart['soluong'] = 1;
                echo ' <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name"  value="'.$name.'">
                <input type="hidden" name="price"  value="'.$price.'">
                <input type="hidden" name="img"  value="'.$img.'">
                <img src="' . $hinh . '" alt="error img"><br>
                Mo ta:  '.$mota.'
                <input type="number" min="1" max="10" name="soluong" value="'.$cart['soluong'].'"  class="num-order">
               <input class="gio" style="   border: 1px solid #333;
               
                width: 96px;
                height: 32px;margin-right: 30px;" type="submit" name="addtocart" value="Thêm giỏ hàng">';
                ?>
                </form>
            </div>
        </div>
    <!-- load du lieu binh luan -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
                $(document).ready(function() {
                    
                        txt = $("input").val();
                        $("#binhluan").load("view/binhluan/binhluanform.php", {
                            idpro: <?=$id?>
                        });
                    });
            
            </script>
        <div class="row mb" id="binhluan">
            <div class="boxtitle">Binh luan</div>
           
            <!-- <div class="row boxcontent">
            <iframe src="view/binhluan/binhluan.php?<?= $id ?>" frameborder="0" width="100%" height="300px"></iframe>
        </div> -->
        </div>
        <div class="row mb">
            <div class="boxtitle">San pham cung loai</div>
            <div class="row boxcontent">
                <?php
                foreach ($sp_cung_loai as  $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>