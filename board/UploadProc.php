<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>   
    <body>
        <?php

        //var_dump($_FILES);
        // array(1) { ["userfile"]=> array(5) { ["name"]=> string(12) "서명_2.png" ["type"]=> string(9) "image/png" ["tmp_name"]=> string(41) "D:\GitHub\PHP-Hello\upload\tmp\php143.tmp" ["error"]=> int(0) ["size"]=> int(6698) } }

        //ini_set() : php의 설정을 runtime으로 지정
        //ini_set("display_errors", "On");

        $uploaddir = 'D:\GitHub\PHP-Hello\upload\file\\';
        $uploadfilenameStr = explode(".", $_FILES['userfile']['name']);
        $uploadfilename = $uploadfilenameStr[0]."_".date("YmdHis").".".$uploadfilenameStr[1];

        echo $uploadfilename;

        //exit;   //종료(뒤에 있는 코드 실행 안됨)

        //basename(): 정확하게 파일의 실제이름을 의미하도록 하기 위함(경로를 제외하고 파일의 이름만 가지고옴)
        //$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);   //업로드 파일명 설정
        $uploadfile = $uploaddir . $uploadfilename;

        //echo $uploadfile;

        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
        } else {
            print "파일 업로드 공격의 가능성이 있습니다!\n";
        }
        echo '자세한 디버깅 정보입니다.';
        print_r($_FILES);
        print "</pre>";
        ?>
        <!-- src="file/ 상대경로 -->
        <img src="file/<?=$uploadfilename?>"/>
    </body>
</html>