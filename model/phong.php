<?php
function insert_phong($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "insert into phong(name, price, img, nguoilon, treem, mota, checkin, checkout) values('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}

function delete_phong($id)
{
    $sql = "delete from phong where id = " . $id;
    pdo_query($sql);
}

function loadall_phong($kyw = "", $iddm = 0)
{
    $sql = "select * from phong where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    return $listphong = pdo_query($sql);
}

function loadall_phong_bieudo($kyw = "", $iddm = 0)
{
    $sql = "select *, count(bl.id) 'soBinhLuan' from phong sp
    join binhluan bl on bl.idpro = sp.id
    where 1
    group by sp.id
    ;
    ";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by sp.id desc";
    return $listphong = pdo_query($sql);
}
function loadall_phong_top10()
{
    $sql = "select * from phong where 1 order by luotxem desc limit 0,10";

    return $listphong = pdo_query($sql);
}
function loadall_phong_home()
{
    $sql = "select * from phong where 1 order by id desc limit 0, 15";

    return $listphong = pdo_query($sql);
}

function loadone_phong($id)
{
    $sql = "select * from phong where id = " . $id;
    return $sp = pdo_query_one($sql);
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id = " . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function load_phong_cungloai($id, $iddm)
{
    $sql = "select * from phong where iddm = " . $iddm . " and id <> " . $id;
    return $listphong = pdo_query($sql);
}

function update_phong($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = "update phong set iddm = '" . $iddm . "', name = '" . $tensp . "', price = '" . $giasp . "', mota = '" . $mota . "', img = '" . $hinh . "' where id =" . $id;
    } else {
        $sql = "update phong set iddm = '" . $iddm . "', name = '" . $tensp . "', price = '" . $giasp . "', mota = '" . $mota . "' where id =" . $id;
    }

    pdo_execute($sql);
}
