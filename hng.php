<?php

$input = @file_get_contents("php://input");
$data = json_decode($input, true);

if (empty($data))
{
    // $returnArr = array("errorCode" => "401", "status" => "false", "ResponseMsg" => "Something Went Wrong!");
    $returnArr = array("slackUsername" => "isaacojerumu", "backend" => true, "age" => 22, "bio" => "Backend developer @ HNG");
} else
{
    // $returnArr = array();
}

echo json_encode($returnArr);
