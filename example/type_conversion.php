<html>
    <body>
        <?php
        /* 형변환 */
        $a = 100;
        echo gettype($a);
        settype($a, 'double');
        echo '<br />';
        echo gettype($a);
        ?>
    </body>
</html>