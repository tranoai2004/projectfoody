<?php 
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="box-right">
            <div class="row frmtitle">
                <h1>CẬP NHẬT TÌNH TRẠNG ĐƠN HÀNG</h1>
            </div>
            <div class="row frmcontent">

                <form action="index.php?act=updatebill" onsubmit="return validateForm();" method="post">
                    <div class="kh-all">
                        <div>
                            <div class="row mb kh-one">
                            <strong>Tình trạng đơn hàng</strong>
                            <!-- if(isset($bill_stt))  -->
                                <input type="text" name="bill_stt" id="bill_stt" value="<?php echo $bill_status;?>">
                                <p style="color: red;" id="bill_stt_err"></p>
                            </div>
                            <div>
                                <b>0</b>. Đơn hàng mới
                                <b>1</b>. Đang xử lý
                                <b>2</b>. Đang giao hàng
                                <b>3</b>. Đã giao hàng
                            </div>
                            <div class="row mb kh-one">
                    </div>
                    <div class="row mb mt10 ">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>">
                        <input type="submit" class="mr5" onclick="validateForm()" value="Cập nhật" name="capnhat">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                        if(isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
    </div>

    <script>
    function validateForm() {
        let bill_stt = document.getElementById("bill_stt").value;
        
        let text;
        if (bill_stt == ""){
            text = "Số bạn điền vào không hợp lệ";
            document.getElementById("bill_stt_err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("bill_stt_err").innerHTML = text;
        }
        
        
    }
</script>
</div>
</div>