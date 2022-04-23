<?php
if(!isset($_POST["text"]))
{
        http_response_code(400);
        echo "Error";
        return;
}

$text = $_POST["text"];
echo "Number of words: ". str_word_count($text), "<br>";
echo "Number of symbols: ". iconv_strlen($text), "<br>";
