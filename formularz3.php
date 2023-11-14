<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularz</title>
</head>
<body>
    <style>.error{color:#FF0000;}</style>

    <?php 
    $nameErr=$emailErr=$genderErr=$websiteErr="";
    $name=$email=$gender=$comment=$website="";
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:<input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">*<?php echo $nameErr;?></span>
        <br><br>
        E-mail:<input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">*<?php echo $emailErr;?></span>
        <br><br>
        Website:<input type="text" name="website" value="<?php echo $website;?>">
        <span class="error">*<?php echo $websiteErr;?></span>
        <br><br>
        Command:<textarea name="comment" row="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        <input type="radio" name="gender" <?php if?> value="Female">
        <input type="radio" name="gender" value="Male">
        <input type="radio" name="gender" value="Other">
        <input type="submit" value="submit">
    </form>
    Your input
</body>
</html>