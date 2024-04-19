<?php
$dalTablegestionentidad_ugrights = array();
$dalTablegestionentidad_ugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask", "autoInc" => "0");
$dalTablegestionentidad_ugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestionentidad_ugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page", "autoInc" => "0");
$dalTablegestionentidad_ugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName", "autoInc" => "0");
$dalTablegestionentidad_ugrights["GroupID"]["key"]=true;
$dalTablegestionentidad_ugrights["TableName"]["key"]=true;

$dal_info["dbusers_at_localhost__gestionentidad_ugrights"] = &$dalTablegestionentidad_ugrights;
?>