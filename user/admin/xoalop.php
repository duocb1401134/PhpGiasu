<?php
require '../../libs/recruit.php';
if (isset($_GET["p"])) {
    $recruit = new Recruit();
    $recruit->delete_recruit($_GET["p"]);
    header('Location: /giasu/user/index.php?admin=6');
}
