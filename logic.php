<?php
$password_array = Array();
$word_list_array = Array();
$password = "";

if (!empty($_POST)) {
    $maxwords = (int)htmlspecialchars($_POST['maxwords']);


    if (isset($_POST['vocab_yes'])) {
        $page = rand(0, 14) * 2 + 1;   // select one set from 15 pages in the web site
    } else {
        $page = 1;
    }
    $filename = sprintf("http://www.paulnoll.com/Books/Clear-English/words-%02d-%02d-hundred.html", $page, $page + 1);
    $page_content = file_get_contents($filename);
    preg_match_all("|<li>\r\n(.*)\r\n(.*)</li>|U", $page_content, $out, PREG_PATTERN_ORDER);

    foreach ($out[1] as $key => $value) {
        $word_list_array[$key] = trim($value);
    }
// pick words from list by random
    $listlen = count($word_list_array) - 1;
    for ($i = 0; $i < $maxwords; $i++) {
        $password_array[$i] = $word_list_array[rand(0, $listlen)];
    }


// Number added
    if (isset($_POST['number_yes'])) {
        array_push($password_array, rand(0, 9));
        shuffle($password_array);
    }

// Symbol Added
    if (isset($_POST['symbol_yes'])) {
        $buffer = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");
        array_push($password_array, $buffer[rand(0, 9)]);
        shuffle($password_array);
    }

// trim and dash
    $CCpassword = implode("-", $password_array);
    $password = trim($CCpassword);

// CamelCase applied
    if (isset($_POST['camel_yes'])) {
        $CCpassword = ucwords($password);
        $password = $CCpassword;
    }
}
