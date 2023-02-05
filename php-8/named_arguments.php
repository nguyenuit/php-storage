<?php
function say($lang = 'en', $message = 'Hi') {
    echo "message: ". $message. " lang: ". $lang;
}
say(message: "Nguyen says");
// say(message: "Nguyen says", lang: "vn");
?>