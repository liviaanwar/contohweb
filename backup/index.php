<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
    box-sizing: border-box;
  }
  .col {
    float: left;
    width:35%;
    margin:10px 10px;
    padding:10px;
    border-radius: 10px;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 15px;
    letter-spacing: -0.2px;
    word-spacing: -1.8px;
    color: #000000;
    font-weight: 700;
  }
  .row{
    align-items:center;
    text-align:center;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    font-family: Tahoma, Geneva, sans-serif;
  }
  </style>
</head>
<body>
  <center><h1>Widget Sederhana</h1></center>
  <div class="row">
    <div class="col" style="background-color:#DEB887;">
      <h2>Column 1</h2>
      <h3><center><a href="database.php" target="iframe_a1">Database</a></center></h3>
      <iframe src="database.php" height="300px" width="400px" name="iframe_a1"></iframe>
    </div>
    <div class="col" style="background-color:#DEB887;">
      <h2>Column 2</h2>
      <h3><center><a href="diagram.php" target="iframe_a2">Diagram</a></center></h3>
      <iframe src="diagram.php" height="300px" width="400px" name="iframe_a2"></iframe>
    </div>
    <div class="col" style="background-color:#DEB887;">
      <h2>Column 3</h2>
      <h3><center><a href="list.php" target="iframe_a3">List</a></center></h3>
  <iframe src="list.php" height="300px" width="400px" name="iframe_a3"></iframe>
    </div>
    <div class="col" style="background-color:#DEB887;">
      <h2>Column 4</h2>
      <h3><center><a href="yesno.php" target="iframe_a4">Yes No</a></center></h3>
  <iframe src="yesno.php" height="300px" width="400px" name="iframe_a4"></iframe>
    </div>
  </div>
</body>
</html>
