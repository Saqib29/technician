

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<form id="user" class="input-group" action="" method="post">
         To:
        <input type="text" class="input-field" placeholder="User Name" name="username">
          <br><br>
          Message:                     
        <input type="text" class="input-field" placeholder="message" name="message" >
         <br> <br>
        <button type="submit" name="submit" class="submit-btn">Send</button>

        <?php 
 include'messagepass.php';

?>

</body>
</html>



