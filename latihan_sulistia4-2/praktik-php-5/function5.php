<html>
    <head>
        <title>Writing PHP function which returns value</title>
    </head>
    <body>
        <?php

        function printMe($param = NULL)
        {
            print $param;
        }
        printMe("This is text");
        printMe();
        ?>
    </body>
</html>