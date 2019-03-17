<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload</title>
    <style>
    input[type="submit" i]{
    margin: 0 auto;
    display: block;
    padding: 50px;
    font-size: 2em;
    font-weight: bold;
    cursor: pointer;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 100%);
    color: white;
    }
    </style>
</head>
<body>
    <!-- Display contact form -->
<form method="post" action="mail.php" enctype="multipart/form-data" style="
    margin:  5vw;
">
 
 <div class="form-group">
     <input type="file" name="attachment" class="form-control" style="font-size: 2em;border: 5px solid #0658ad;padding: 10px;width: 100%;">
 </div>
 <div class="submit" style="
    margin-top:  10vh;
">
     <input type="submit" name="submit" class="btn" value="SUBMIT" style="">
 </div>
</form>

</body>
</html>