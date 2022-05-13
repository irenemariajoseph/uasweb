<?php


require "conn.php";

$co_produkid = "halo";
$id = "halo";


masukkan_konfirmasi(
    // $_POST['prod_id'],
    $co_produkid,
    // $_POST['id'],
    $id,
    $_POST['conama'],
    $_POST['coemail'],
    $_POST['cotelp'],
    $_POST['copemb'],
    $_POST['copickup'],
    $_POST['cotglpickup'],
    $_POST['cojampickup']
);



function masukkan_konfirmasi($prod_id, $id,  $coname, $coemail, $cotelp, $copemb, $copickup, $cotglpickup, $cojampickup)
{
    return alert($prod_id, $id,  $coname, $coemail, $cotelp, $copemb, $copickup, $cotglpickup, $cojampickup);


    try {

        // $con = GetConnection();

        // $query = "SELECT * FROM  tbl_produk WHERE prod_id like ?";

        // $result = $con->prepare($query);
        // $result->execute([$prod_id]);

        // $row = $result->fetch();


        // if ($row['prod_id'] != null && $row['prod_id'] == $prod_id) {
        //     $pesanbrg = $row['coname'];

        //     return alert("Email telah ada di DB kami");
        // } else {

        //     if (isset($daftarrole) && $daftarrole == 'SEMANGATKERJA_ADMIN') {
        //         $daftarrole = 'admin';
        //     } else {
        //         $daftarrole = 'user';
        //     }

        //     $daftarpass =  password_hash($_POST['daftarpass'], PASSWORD_BCRYPT);


        $conn = GetConnection();

        $sql =  "INSERT INTO tbl_pesan ( prod_id, user_id, username, email, no_telp, jenis_pemb, cara_pickup, tgl_pickup, jam_pickup) VALUES (?,?,?,?,?,?,?,?,?)";
        $result = $conn->prepare($sql);

        $result->execute([$prod_id, $id,  $coname, $coemail, $cotelp, $copemb, $copickup, $cotglpickup, $cojampickup]);

        // header('Location: pesanan.php');
    } catch (Exception $e) {
        return "error";
    }
}
