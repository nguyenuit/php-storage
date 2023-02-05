<?php
// php 7
strlen([]); // Warning: strlen() expects parameter 1 to be string, array given
array_chunk([], -1); // Warning: array_chunk(): Size parameter expected to be greater than 0

// php 8
strlen([]); // TypeError: strlen(): Argument #1 ($str) must be of type string, array given
array_chunk([], -1); // ValueError: array_chunk(): Argument #2 ($length) must be greater than 0
?>