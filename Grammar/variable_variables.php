<html>
    <body>
        <?php

        /**
         * Variable Variables(가변변수): 변수의 값을 변수로 변경할 수 있는 기능
         */

        $title = 'subject';
        //$subject = 'PHP tutorial';
        $$title = 'PHP tutorial';
        //${$title} = 'PHP tutorial';
        echo $subject;
        ?>
    </body>
</html>