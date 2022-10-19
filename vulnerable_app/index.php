<?php

require("../vendor/autoload.php");
require("./Pet.php");

$pet_user;

if (isset($_POST['create'])) {
    $p = new Pet($_POST['name'], $_POST['age']);
    $ser = base64_encode(serialize($p));
    setcookie("pet", $ser);
}

if (isset($_COOKIE['pet'])) {
    $pet_user = unserialize(base64_decode($_COOKIE['pet']));
}
?>


<h1>Create your Pet!</h1>

<form method="POST">
    <input type="text" name="name" placeholder="pet name" /><br />
    <input type="text" name="age" placeholder="pet age" /><br />
    <input type="submit" name="create" value="CREATE" />
</form>

<?php if (isset($_COOKIE['pet'])) : ?>
    <h1>PET INFORMATION</h1>
    <p>Name: <?php echo $pet_user->name ?></p>
    <p>Age: <?php echo $pet_user->age ?></p>
<?php endif; ?>