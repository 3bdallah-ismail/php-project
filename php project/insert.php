<html>

<head>
  <link rel="stylesheet" href="css\stlye.css">
</head>

<body>
  <div class="div">
    <h2 class="title1"> Join in</h2>
  </div>
  <div class="div1">
  </div>
  <form action="docinsert.php" method="post" enctype="multipart/form-data">
    <div class="div2">
      <h2>doctors</h2>
      <input type="text" name="docinput" Placeholder="wirte you name">
      <br>
      <input type="text" name="docinput1" Placeholder="phone">
      <br>
      <button class="bt1" name="docbt">Add</button>
      <br>
     
    </div>
  </form>
  <form action="nusing.php" method="post">
    <div class="div2">
      <h2>nursing</h2>
      <input type="text" name="nusinput" Placeholder="wirte you name">
      <br>
      <input type="text" name="nusinput1" Placeholder="phone">
      <br>
    
      <button class="bt1" name="nusbt">Add</button>
      <br>
    
    </div>
  </form>
  <form action="patients.php" method="post">
    <div class="div2">
      <h2>patients</h2>

      <input type="text" name="patinput" Placeholder="wirte you name">
      <br>
      <input type="text" name="patinput1" Placeholder="phone">
      <br>
      <button class="bt1" name="patbt">Add</button>
      <br>
    
    </div>
  </form>

</body>

</html>