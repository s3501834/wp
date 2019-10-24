<?php
    session_start();

    /////////////////////////////////////////
    // Prints data and shape/structure of data
    function preShow($arr, $returnAsString=false) {
        $ret = '<pre style="color:#ffffff">'.print_r($arr, true).'</pre>';
        if ($returnAsString) {
            return $ret;
        } else {
            echo $ret;
        }
    }
    // preShow($_POST); // ie echo a string
    // preShow($_SESSION);
    // $aaarg = preShow($my_bad_array, true); // ie return as a string
    // echo "Why is \n $aaarg \n not working?"; 
    /////////////////////////////////////////

    /////////////////////////////////////////
    // Output your current files source code
    function printMyCode() {
        $lines = file($_SERVER['SCRIPT_FILENAME']);
        echo '<pre class="mycode"><ol>';
        foreach ($lines as $line) {
            echo '<li style="color:#ffffff"><b>'.rtrim(htmlentities($line)).'</b></li>';
            echo '<br/>';
        }
        echo '</ol></pre>';
    }
    // aprintMyCode(); // prints all lines of code in this file with line numbers
    /////////////////////////////////////////

    /////////////////////////////////////////    
    // A php multiple dimensional array to javascript object function

    function php2js($arr, $arrNaame) {
        $lineEnd="";
        echo "script>\n";
        echo "/* Generated with A4's php2js() function */";
        echo "var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
        echo "</script>\n\n";
    }

    function alert($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // $pricesArrayPHP = array ( ... );
    // php2js($pricesArrayPHP, 'pricesArrayJS'); // ie echos javascript equivalent code
    /////////////////////////////////////////

    /////////////////////////////////////////
    // Reset the session submit button
    if (isset($_POST['session-reset'])) {
        foreach ($_SESSION as $something => &$whatever) {
            unset($whatever);
        }
    }

    // <form ... >
    // ... 
    // <input type='submit' name='session-reset' value='Reset the session' >
    // ...
    // </form>
    /////////////////////////////////////////

    /////////////////////////////////////////
    // Book form process validation
?>