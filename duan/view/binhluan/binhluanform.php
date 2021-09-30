<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

//Lay gio hien tai va dinh dang format
$date = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
$getdatetime = $date->format('d-m-Y H:i:s a');

$idpro = $_REQUEST['idpro'];
$dsbl = loadAll_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="row mb">
        <div class="boxtitle">BINH LUAN</div>
        <div class="boxcontent2 menudoc">
            <table>
                <?php
       
                foreach ($dsbl as $bl) {
                    extract($bl);
                    
                    echo '<tr><td>
                       ' . $noidung . '
                       
                    </td>';
                    echo '<td>
                       ' . $iduser . '
                    </td>';
                    echo '<td>
                       ' . $ngaybinhluan . '
                    </td></tr>';
                
                }
                ?>

            </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">



                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gui binh luan">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = $getdatetime;

           insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>

</body>

</html>