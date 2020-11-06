<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>

    
    <form action="postRegister" method="post">
    
        <label for="name">Name</label><br>
        <input type="text" name="name"><br>
        <?php if(isset($errors['name'])): ?> 
        <span><?=$errors['name'];?></span><br>
        <?php endif;?>
        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <?php if(isset($errors['email'])): ?> 
        <span><?=$errors['email'];?></span><br>
        <?php endif;?>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br><br>
        <?php if(isset($errors['password'])): ?> 
        <span><?=$errors['password'];?></span><br>
        <?php endif;?>
        <input type="submit" name="submit" value="Register"><br>
    </form>
</body>

</html>