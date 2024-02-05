<?php

    unset($_SESSION['logit']);
    session_destroy();

?>

<script>
    window.location.href = "index.php";
</script>