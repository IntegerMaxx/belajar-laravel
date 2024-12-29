<style>
    h1 {
        color: red;
    }
</style>

<?php
/*=====HEREDOC=====*/
$method = "heredoc";
echo <<<TEST
<h1>TEST HEREDOC</h1>
Kita saat ini sedang mencoba menulis teks panjang pada php<br>
keren kan...<br>
dengan menggunakan fitur $method penggunaan ' ataupun " dan <br>
tidak perlu menggunakan backslash
<br> <br>
TEST;

/*=====NOWDOC=====*/
$method2 = "nowdoc";
echo <<<'TEKS2'
            Kita saat ini mencoba penulisan teks pada php<br>
            dengan menggunakan fitur $method2 penggunaan ' ataupun " tidak 
            perlu menggunakan backslash
        TEKS2;
?>