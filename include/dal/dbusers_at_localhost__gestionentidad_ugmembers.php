<?php
$dalTablegestionentidad_ugmembers = array();
$dalTablegestionentidad_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["GroupID"]["key"]=true;
$dalTablegestionentidad_ugmembers["Provider"]["key"]=true;
$dalTablegestionentidad_ugmembers["UserName"]["key"]=true;

$dal_info["dbusers_at_localhost__gestionentidad_ugmembers"] = &$dalTablegestionentidad_ugmembers;
?>