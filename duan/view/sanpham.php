<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
           
            <div class="boxtitle">Ten danh muc(san pham): <?=$tendm?></div>
            <div class="row boxcontent">
                    <?php
                    $i = 0;
                     foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $hinh = $imgpath . $img;
                        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo '<div class="boxsp ' . $mr . '">
                        <div class="row img"><a href="'.$linksp.'"><img src="' . $hinh . '" alt=""></a></div>
                        <p>$' . $price . '</p>
                        <a href="'.$linksp.'">Ten san pham:' . $name . '</a>
                    </div>';
                        $i++;
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