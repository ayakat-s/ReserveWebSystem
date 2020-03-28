<?php

if (isset($_POST['signup'])) {
    $userid = $_POST['userid']
    $user_surname = $_POST['user_surname']
    $user_givenname = $_POST['user_givenname']
    $password = $_POST['password']
    try {
        $db = new PDO('mysql:host=localhost;dbname=sample' , '', '');
        $sql = 'insert into users(userid, user_surname, user_givenuname, password) values(?, ?, ?, ?)';
        $stmt = $db->prepare($sql);
        $stmt->execute(array($userid, $user_surname, $user_givenuname, $password));
        $stmt = null;
        $db = null;

        header('Location: '); //ホーム画面に遷移
        exit;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

