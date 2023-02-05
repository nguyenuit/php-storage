<?php
echo match(8.0){
    '8.0' => 'oh no!',
    8.0 => 'This is expected result'
}
?>