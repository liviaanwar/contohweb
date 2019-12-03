<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <style type="text/css">
    body {
      background-color: #FFFFFF;
    }
    table {
      font-family: Arial, Helvetica, sans-serif;
      margin: auto;
      font-size: 13px;
      letter-spacing: -0.2px;
      word-spacing: -1.8px;
      color: #000000;
      font-weight: 700;
      }
    h2 {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 18px;
      letter-spacing: -0.2px;
      word-spacing: -1.8px;
      color: #000000;
      font-weight: 700;
  </style>
</head>
<body>
    <center><h2>Widget Database </h2></center>
    <?php
$konek = mysqli_connect("localhost","root","","sederhana");
$batas   = 5;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}
$query  = "SELECT * FROM user LIMIT $posisi,$batas";
$tampil = mysqli_query($konek, $query);

echo "<table>
      <tr><th>No</th><th>Nama</th><th>Umur</th></tr>";
$no = $posisi+1;
while ($data=mysqli_fetch_array($tampil)){
  echo "<tr>
          <td>$no</td>
          <td>$data[nama]</td>
          <td>$data[umur]</td>
        </tr>";
  $no++;
} 
echo "</table>";
 
$query2     = mysqli_query($konek, "select * from user");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);

echo "<br><center> Halaman : ";

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
 echo " <a href=\"database.php?halaman=$i\">$i</a> | ";
}
else{ 
 echo " <b>$i</b> | "; 
}
echo "<p>Total nama : <b>$jmldata</b> orang</p>";
?>
</center>
  </body>
</html>
