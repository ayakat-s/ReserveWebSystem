<?php

$err_msg = "";

if (isset($_POST['login'])) {
    $userid = $_POST['userid']
    $password = $_POST['password']
    try {
        $db = new PDO('mysql:host=localhost;dbname=sample' , '', '');
        $sql = 'select count(*) from users where userid=:userid and password=:password';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':userid',$userid);
        $stmt->bindValue(':password',$password);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt = null;
        $db = null;

        if ($result[0] != 0) {
            header('Location: '); //ホーム画面に遷移
            exit; 
        } else {
            $err_msg ="ユーザIDまたはパスワードに誤りがあります。"
        }
       
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}
