<?php
    if(isset($_POST['submit-cari-akun'])) {
        $_SESSION['session_pencarian'] = $_POST['keyword'];
        $keyword = $_SESSION['session_pencarian'];
    }else {
        $keyword = ['session_pencarian'];
    }

    $query = mysqli_query($conn,"SELECT nim FROM regist where nim='$nim'");

?>