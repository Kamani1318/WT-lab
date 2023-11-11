<?php
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);
echo $name;
echo $age;
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
name=John">Click Me</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for ="name"> Name: </label>
    <input type="text" name="name"> 
</div>
<div>
    <label for ="age"> Name: </label>
    <input type="text" name="age"> 
</div>
<input type="submit" value="Submit" name="submit">
</form>