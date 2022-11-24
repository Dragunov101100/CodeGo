<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceApp</title>
</head>
<body>
    <h1>FaceApp</h1>
    <form  method = get>
    <label for="ImgSize">Select Photo Size:</label>
     <input type="range" id="ImgSize" name="ImgSize"  min="10" max="100" step="10">
    <br>
    <br>
    <label for="BColor">Select Boarder Color:</label>
    <input type="color" name="BColor" id="BColor">
    <br><br>
   <button type="submit" name="btnsubmit">Submit</button>
    <br><br>
    <?php
    if(isset($_GET['btnsubmit'])){
        $ImageRangeSize = 60;
        $ImageRangeSize = $_GET['ImgSize'];
        $border = $_GET['BColor'];
    }
    ?>
  
    <img src="../FaceApp/cat.jpg" style="width: <?php echo $ImageRangeSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 5px; border-style: solid;">

    </form>
</body>
</html>