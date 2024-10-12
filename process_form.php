<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    header("Location: obrigado.html");
    exit();
}
?>
<?php
echo "O servidor PHP está funcionando!";
?>
