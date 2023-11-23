<?php
    function insert_sanpham($tensp,$giasp,$giasp_old,$hinh,$mota,$iddm){
        $sql="insert into sanpham(name,price,price_old,img,mota,iddm) values('$tensp','$giasp','$giasp_old','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "delete from sanpham where id =".$id;
        pdo_execute($sql);
    }

    function hh_all(){
        $sql = "select * from sanpham";
        return pdo_query($sql);
    }

    function loadall_sanpham_top6(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,6";
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }
    function hh_selectall_home($sl){
        $sql = "select * from sanpham where 1 order by id desc  limit ". $sl .','. 9 ;
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm > 0){
            $sql.=" and iddm = '".$iddm."'";
        }
        $sql.=" order by id";
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm >0){
            $sql = "select * from danhmuc where id =".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id =".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql = "select * from sanpham where iddm = ".$iddm."  and id <> ".$id;
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }

    function sp_update_view($id){
        $sql = "update sanpham set luotxem = luotxem + 1 where id = ".$id;
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$giasp_old,$mota,$hinh){
        if($hinh != ""){
            $sql="update sanpham set iddm = '".$iddm."',name = '".$tensp."', price = '".$giasp."', price_old = '".$giasp_old."', mota = '".$mota."', img = '".$hinh."' where id =".$id;
        }      
        else{
            $sql="update sanpham set iddm = '".$iddm."',name = '".$tensp."', price = '".$giasp."', price_old = '".$giasp_old."', mota = '".$mota."' where id =".$id;
        }    
        pdo_execute($sql);
    }
?>