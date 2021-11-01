<html>
    <body>
        <?php
        /* == : 동등 비교 연산자(true, false) */
        echo "1==2 : ";
        var_dump(1==2); #false
        echo '<br />';
        echo "1==1 : ";
        var_dump(1==1); #true
        echo '<br />';
        echo '"one"=="two" : ';
        var_dump("one"=="two"); #false
        echo '<br />';
        echo '"one"=="one" : ';
        var_dump("one"=="one"); #true
        echo '<br />';
        ?>
        <br />
        <?php
        /* != : 부정 비교 연산자(true, false) */
        echo "1!=2 : ";
        var_dump(1!=2); #true
        echo '<br />';
        echo "1!=1 : ";
        var_dump(1!=1); #false
        echo '<br />';
        echo '"one"!="two" : ';
        var_dump("one"!="two"); #true
        echo '<br />';
        echo '"one"!="one" : ';
        var_dump("one"!="one"); #false
        echo '<br />';
        ?>
    </body>
</html>