<div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
<div class="box-right">
                <div class="row frmtitle mb10">
                    <h1>CHI TIẾT ĐƠN HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">

                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>MÃ ĐƠN HÀNG</th>
                                        <th>TÊN SẢN PHẨM<th>
                                        <th>ẢNH<th>
                                        <th>SỐ LƯỢNG<th>
                                        <th>Giá tiền<th> 
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php   
                                        foreach($listbill as $bill){
                                            extract($bill);                                 
                                            $photo = "./upload/".$img;
                                            if(!is_file($photo)){
                                                $hinhanh = "<img src='".$photo."' height = '60px'>";
                                            }else{
                                                $hinhanh = "<img src='".$photo."' height = '60px'>";
                                            }
                                            ?>
                                            <tr>
                                                    <td><?=$id?></td>
                                                    <td><?=$idbill?></td>
                                                    <td><?=$name?></td>
                                                    <td></td>
                                                    <td><?=$hinhanh?></td>
                                                    <td></td>
                                                    <td><?=$soluong?></td>
                                                    <td></td>
                                                    <td><?=$price?></td>
                                                    <td></td>
                                                </tr>
                                                <?php }
                                         ?>
                                </tbody>
                                <a href="index.php?act=mybill"><input style="margin-bottom:10px ;" type="button" type="button" value="Quay lại"></a> 
                            </table>
                            
                        </div>
                        
                    </form> 
                </div>
        </div>
    </div>