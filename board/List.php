<?php
$connection = new PDO('mysql:host=localhost;dbname=opentutorials', 'root', 'Phr8611!');

$stmt = $connection->prepare('SELECT * FROM topic');
$stmt->execute();

$list = $stmt->fetchAll();

/*
// 한 행씩 출력
$list = $stmt->fetch();

echo $list[0];
echo $list['title'];

echo "<br />";

$list = $stmt->fetch();

echo $list[0];
echo $list['title'];

exit;
*/


if(!empty($_GET['id'])) {
    $stmt = $connection->prepare('SELECT * FROM topic WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $id = $_GET['id'];
    $stmt->execute();

    $topic = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            body {
                font-size: 0.8em;
                font-family: dotum;
                line-height: 1.6em;
            }
            header {
                border-bottom: 1px solid #ccc;
                padding: 20px 0;
            }
            nav {
                float: left;
                margin-right: 20px;
                min-height: 1000px;
                min-width:150px;
                border-right: 1px solid #ccc;
            }
            nav ul {
                list-style: none;
                padding-left: 0;
                padding-right: 20px;
            }
            article {
                float: left;
            } 
            .description{
                width:500px;
            }
        </style>
    </head>
   
    <body id="body">
        <div>
            <nav>
                <ul>
                    <?php
                    foreach($list as $row) {

                        //input 값에 대한 보안처리(escaping)
                        //echo htmlspecialchars('<a href="#">test</a>');  //입력값 그대로 화면에 출력
                        //echo '<a href="#">test</a>';

                        echo "<li><a href=\"?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";
                        //echo "<li><a href=\"./list.php?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";
                    }
                    ?>
                </ul>
                <ul>
                    <li><a href="Write.php">추가</a></li>
                </ul>
            </nav>
            <article>
                <?php
                if(!empty($topic)){
                ?>
                <h2><?=htmlspecialchars($topic['title'])?></h2>
                <div class="description">
                    <?=htmlspecialchars($topic['description'])?>
                </div>
                <div>
                    <a href="Modify.php?id=<?=$topic['id']?>">수정</a>
                    <form method="POST" action="Process.php?mode=delete">
                        <input type="hidden" name="id" value="<?=$topic['id']?>" />
                        <input type="submit" value="삭제" />
                    </form>
                </div>
                <?php
                }
                ?>
            </article>
        </div>
    </body>
</html>