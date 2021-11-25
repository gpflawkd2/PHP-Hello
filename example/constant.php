<html>
    <body>
        <?php
        /**
         * Define Constants(상수)
         *  - 대문자로 생성
         *  1) const
         *  2) define
         */

        const CONSTANT  = 'Hi';
        var_dump(CONSTANT);

        define('TITLE','PHP Tutorial');
        echo TITLE;
        //define('TITLE','JAVA Tutorial');  //ERROR

        /**
         * Magic Constants
         */

        echo __FILE__;  //현재 파일 정보
        echo __LINE__;  //라인 수
        echo __DIR__;   //부모 디렉터리

        ?>
    </body>
</html>