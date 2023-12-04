<div class="row mb">
            <div class="menu-main mb">
                <?php include "view/menu-main.php"?>
            </div>
<div class="boxtrai1 mr">  
    <div class="row mb">
            
            <div class="boxtitle">
                <h1 class="spct text-size">CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="boxcontent row formtaikhoan">

                <?php 
                    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>

                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb">
                        Email
                        <input type="email" name="email" id="email" value="<?=$email?>" required>
                    </div>
                    <div class="row mb">
                        Username
                        <input type="text" name="user" value="<?=$user?>" required>
                    </div>
                    <div class="row mb">
                        Password
                        <input type="password" name="pass" value="<?=$pass?>" required id="pass">
                        <input type="checkbox" onclick="showPassword()"> Show Password
                        <script>
                        function showPassword() {
                            var pass = document.getElementById("pass");
                            if (pass.type === "password") {
                                pass.type = "text";
                            } else {
                                pass.type = "password";
                            }
                        }
                        </script>
                    </div>
                    <div class="row mb">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address?>" required>
                    </div>
                    <div class="row mb">
                        Số điện thoại
                        <input type="text" name="tel" value="<?=$tel?>" required>
                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
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
        
        
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"?>;
    </div>
</div>