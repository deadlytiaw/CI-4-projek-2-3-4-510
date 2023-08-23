<html>
    <body>
        <?php
        $marks = array (
            "mohammad" => array
            (
                "physics" => 35,
                "maths" => 30,
                "chemistry" => 39,
            ),
            "qadir" => array
            (
                "pyhsics" => 30,
                "maths" => 32,
                "chesmistry" => 29
            ),
            "zara" => array
            (
                "pyhsics" => 31,
                "maths" => 22,
                "chesmistry" => 39
            )
            );
            /* Accessing multi-dimensional array values */
            echo "Marks for mohammad in physics : " ;
            echo $marks ['mohammad']['physics']. "<br/>";
            echo "Marks for qadir in maths : " ;
            echo $marks ['qadir']['maths']. "<br/>";
            echo "Marks for zara in chesmistry : " ;
            echo $marks ['zara']['chesmistry']. "<br/>";
        ?>
    </body>
</html>