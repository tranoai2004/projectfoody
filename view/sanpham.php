
<div class="row mb" >
<div class="menu-main mb">
                <?php include "menu-main.php"?>
            </div>
            <div class="boxtrai1 mr">  

            

                <div class="row mb">
 
                        <div class="boxtitle">
                            <h1 class="spct text-size">SẢN PHẨM</h1>
                         
                            <p class="spct text-size1"><?=$tendm?></p>
                        </div>
                        <div class="boxcontent row">
                            <div class="boxsp1">
                                <?php 
                                    foreach ($dssp as $sp){
                                        extract($sp);
                                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                                        $hinh  = $img_path.$img;
                                        echo '
                                        
                                        <a href="'.$linksp.'" class="boxsp">
                                            <div class="sp9">
                                                <img class="sp9-anh"   src="'.$hinh.'" alt="">
                                        
                                                <h1>'.$name.'</h1>
                                                <div style="display: flex;justify-content: center;align-items: center;">
                                                    <p><b>'.$price.'</b><ins>đ</ins></p> &nbsp  &nbsp  &nbsp
                                                    <p style="color:gray"><del>'.$price_old.'</del><ins>đ</ins></p>
                                                </div>
                                            </div>
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="soluong" value="1">
                                                <input type="hidden" name="price" value="'.$price.'">
                                                <input type="submit" name="addtocart" id="addtocart" value="Thêm vào giỏ hàng" style="font-size: 1vw;">
                                            </form>       
                                        </a>
                                        
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxphai">
                    <?php include "boxright.php"?>;
                </div>
        </div>