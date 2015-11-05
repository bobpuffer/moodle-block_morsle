<?php
require_once realpath(dirname(__FILE__) . '/../../config.php');
require_once("$CFG->dirroot/repository/morsle/lib.php");
$morsle = new repository_morsle(1);
$course = strtolower("'60301-ACCTG-250-A'");
$status = $morsle->m_calendar($course);
?>