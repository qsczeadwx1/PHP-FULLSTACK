<?php

session_name("kim");
session_start();

// session 파기
session_destroy();

// session 정보 삭제(session이 파기 되는것은 아님)
session_unset(); // session 전체 정보 삭제
unset($_SESSION["del"]); // session 특정 요소 삭제
?>