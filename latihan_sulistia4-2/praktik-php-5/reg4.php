<?php
$line = "Vi is the greatest word processor ever created!";
// perform a case-Insensitive search fpr the word "Vi"
if (preg_match("/\bVi\b/i", $line, $match)):
    print "match found!";
endif;
?>