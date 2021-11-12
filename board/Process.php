<?php

//mysql_connect(서버 ip, username, password)
//mysql_connect('localhost', 'root', '111111');
//mysql_select_db('opentutorials');

$connection = new PDO('mysql:host=127.0.0.1;dbname=opentutorials', 'root', 'Phr8611!', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

switch($_GET['mode']){
    case 'write':
        $stmt = $connection->prepare("INSERT INTO topic (title, description, created) VALUES (:title, :description, now())");
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':description',$description);
 
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stmt->execute();
        //echo "저장완료";

        //페이지 이동
        header("Location: List.php"); 
        break;

    case 'delete':
        $stmt = $connection->prepare('DELETE FROM topic WHERE id = :id');
        $stmt->bindParam(':id', $id);
 
        $id = $_POST['id'];
        $stmt->execute();

        header("Location: List.php"); 
        break;

    case 'modify':
        $stmt = $connection->prepare('UPDATE topic SET title = :title, description = :description WHERE id = :id');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
 
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $stmt->execute();

        header("Location: List.php?id={$_POST['id']}");
        break;
}
?>