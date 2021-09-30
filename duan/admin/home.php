<div style="display: flex; color: whitesmoke;justify-content: center;">
    <div style=" background-color: #037BFF; width: 25%;    padding: 30px;
    line-height: 30px;">
        <h3>ĐƠN HÀNG THÀNH CÔNG</h3>
        <small style="font-size: 15px;">
        <?php
      
        if (isset( $soluongDonThanhCong)) {
           echo  $soluongDonThanhCong;
        }?>
        </small>
        <p>Đơn giao dịch thành công</p>
    </div>
    <div style="background-color: #DD3545;width: 25%;    padding: 30px;
    line-height: 30px;">
        <h3>ĐANG XỬ LÝ</h3>
        <small style="font-size: 15px;">
        <?php
      
      if (isset( $soluongDangXuLy)) {
         echo  $soluongDangXuLy;
      }?>
    </small>
        <p>Số lượng đơn đang xử lý</p>
    </div>
    <div style="background-color: #27A547;width: 25%;    padding: 30px;
    line-height: 30px;">
        <h3>DOANH SỐ</h3>
        <small style="font-size: 15px;">
        <?php
      
      if (isset( $doanhthu)) {
         echo  $doanhthu ." VNĐ";
      }?>
    </small>
        <p>Doanh số hệ thống</p>
    </div>
    <div style="background-color: #333541;width: 25%;    padding: 30px;
    line-height: 30px;">
        <h3>ĐANG GIAO HÀNG</h3>
        <small style="font-size: 15px;">
        <?php
      
      if (isset($soluongDangGiaoHang)) {
         echo $soluongDangGiaoHang;
      }?>
    </small>
        <p>Số đơn đang giao</p>
    </div>
</div>