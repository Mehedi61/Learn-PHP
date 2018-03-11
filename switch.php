<?php

    $num = 5.15;
    $type = gettype($num);

    switch ($type) {
	
	case double:
	    echo "Value of num is double";
	    break;
	
	case integer:
	    echo "Value of num is integer";
            break;
    }

?>
