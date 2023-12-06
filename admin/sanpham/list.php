<div class="box-right">
                <div class="row frmtitle mb">
                    <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
                </div>
                <form action="index.php?act=listsp" method="post">
                                <div class="mb10">
                                    <input class="tk-form" type="text" name="kyw" placeholder="Nhập tên sản phẩm">
                                    <select class="tk-form-sl" name="iddm" id="">
                                        <option value="0" selected>Tất cả</option>
                                        <?php 
                                            foreach ($listdanhmuc as $danhmuc){
                                                extract($danhmuc);
                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                            }
                                        ?>
                                    </select>
                                    <input class="tk-form-bt" type="submit" name="listok" value="Check">
                                </div>
                                
                </form>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">

                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MÃ SP</th>
                                        <th>TÊN SẢN PHẨM<th>
                                        <th>HÌNH ẢNH<th>
                                        <th>GIÁ<th>
                                        <th>GIÁ CŨ<th>
                                        <th>LƯỢT XEM<th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php 
                                        foreach($listsanpham as $sanpham){
                                            extract($sanpham);
                                            $suasp = "index.php?act=suasp&id=".$id;
                                            $xoasp = "index.php?act=xoasp&id=".$id;
                                            $hinhpath = "../upload/".$img;
                                            if(is_file($hinhpath)){
                                                $hinh = "<img src='".$hinhpath."' height = '60px'>";
                                            }else{
                                                $hinh = "No Photo";
                                            }
                                            ?>
                                                <tr>
                                                    <td><input type="checkbox" name="approve[]" id="myCheck" onclick="myFunction()">
                                                        <p id="text" style="display:none">Checkbox is CHECKED!</p>
                                                    <script>
                                                        function myFunction() {
                                                        // Get the checkbox
                                                        var checkBox = document.getElementById("myCheck");
                                                        // Get the output text
                                                        var text = document.getElementById("text");

                                                        // If the checkbox is checked, display the output text
                                                        if (checkBox.checked == true){
                                                            text.style.display = "block";
                                                        } else {
                                                            text.style.display = "none";
                                                        }
                                                        }
                                                    </script>
                                                    </td>
                                                    <td><?=$id?></td>
                                                    <td><?=$name?></td>
                                                    <td></td>
                                                    <td><?=$hinh?></td>
                                                    <td></td>
                                                    <td><?=$price?></td>
                                                    <td></td>
                                                    <td><?=$price_old?></td>
                                                    <td></td>
                                                    <td><?=$luotxem?></td>
                                                    <td>
                                                        <a href="<?=$suasp?>"><input class="mr5" type="button" value="Sửa"></a>  
                                                        <a href="<?=$xoasp?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input type="button" value="Xóa"></a>   
                                                    </td>
                                                </tr>
                                        <?php } ?>  
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb10 mt10" >
                            <input type="button" id="toggle" onClick="do_this();" class="mr5" value="Chọn tất cả">
                            <input type="button" class="mr5" value="Xóa các mục tất tả">
                            <a href="index.php?act=addsp"><input type="button" value="Thêm mới"></a>   
                            
                            <!-- Check all -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                function do_this() {

                                    var checkboxes = document.getElementsByName('approve[]');
                                    var button = document.getElementById('toggle');

                                    if (button.value == 'Chọn tất cả') {
                                        for (var i in checkboxes) {
                                            checkboxes[i].checked = 'FALSE';
                                        }
                                        button.value = 'Bỏ chọn tất cả'
                                    } else {
                                        for (var i in checkboxes) {
                                            checkboxes[i].checked = '';
                                        }
                                        button.value = 'Chọn tất cả';
                                    }
                                }
                    
                </script>
                        </div>
                    </form> 
                </div>
        </div>
        </div>