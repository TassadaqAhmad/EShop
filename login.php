
<form method="post">
    <input type="text" name="usernm" id="">
    <input type="password" name="userpw" id="">
    <br>
    <?php
        if (isset($_POST['logmit']) && !isset($_SESSION['login'])) {
            echo "wrong username or password";
        }
    ?>
    <br>
    <input type="submit" name="logmit" value="Login">
</form>