<?php

function insert_loaiphong($name, $gia)
{
    $sql = "insert into loaiphong(name,gia) values('$name','$gia')";
    pdo_execute($sql);
}
function delete_loaiphong($id)
{
    $sql = "delete from loaiphong where id=" . $id;
    pdo_execute($sql);
}
function loadall_loaiphong()
{
    $sql = "select * from loaiphong order by id desc";
    $dsloaiphong = pdo_query($sql);
    return $dsloaiphong;
}
function loadone_loaiphong($id)
{
    $sql = "select * from loaiphong where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_loaiphong($id, $name, $gia)
{
    $sql = "update loaiphong set name='" . $name . "',gia='" . $gia . "' where id=" . $id;
    pdo_execute($sql);
}
