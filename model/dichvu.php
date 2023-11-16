<?php

function insert_dvphong($name, $gia, $mota){
    $sql = "insert into dichvu(name, gia, mota) values('$name', '$gia', '$mota')";
    pdo_execute($sql);
}
function delete_dvphong($id){
    $sql="delete from dichvu where id=".$id;
    pdo_execute($sql);
}
function loadall_dvphong(){
    $sql="select * from dichvu order by id desc";
    $dvphong=pdo_query($sql);
    return $dvphong ;
}
function loadone_dvphong($id){
    $sql="select * from dichvu where id=".$id;
    $dv=pdo_query_one($sql);
    return $dv;
}
function update_dvphong($id ,$name, $gia, $mota){
    $sql = "update dichvu set name='".$name."', mota='".$mota."', gia='".$gia."' where id=".$id;
    pdo_execute($sql);
}
?>