<?php
require_once "koneksi.php";
$sql = mysqli_query($conn, "select * from mahasiswa");
while($r=mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
$data[] = array(
"nim" => $r["nim"],
"nama" => $r["nama"],
"gender" => $r["gender"],
"jurusan" => $r["jurusan"],
"bidang_minat" => $r["bidang_minat"]
);
}
$json = array(
"result" => "success",
"data" => $data
);
echo json_encode($json);
?>