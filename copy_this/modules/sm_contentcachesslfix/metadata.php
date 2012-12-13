<?php

$sMetadataVersion = "1.0";
 
$aModule = array(
	"id"			=> "sm_contentcachesslfix",
	"title"			=> "[SM] Contentcache - HTTP/HTTPS FIX",
	"description"	=> "Contentcache - HTTP/HTTPS FIX | Extend the ViewId with the parameter '|ssl', if the Website is called via HTTPS",
	"version"		=> "1.0.1",
	"author"		=> "SHOPMACHER",
	"extend"		=> array(
						"info"              => "sm_contentcachesslfix/views/sm_contentcachesslfix_views",
    					"start"             => "sm_contentcachesslfix/views/sm_contentcachesslfix_views",
    					"details"           => "sm_contentcachesslfix/views/sm_contentcachesslfix_views",
    					"alist"             => "sm_contentcachesslfix/views/sm_contentcachesslfix_views",
    					"vendorlist"        => "sm_contentcachesslfix/views/sm_contentcachesslfix_views",
	),
);