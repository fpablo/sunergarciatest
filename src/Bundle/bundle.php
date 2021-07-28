<?php
	// Set session
	session_start();
	
	require __DIR__ . '/../../vendor/autoload.php';
	use jcobhams\NewsApi\NewsApi;
	$gen = new \RandomUser\Generator();
	
	if(isset($_POST['records-limit'])){
		$_SESSION['records-limit'] = $_POST['records-limit'];
	}
	$ApiKey = "4306137ab40d49ec85001d191339de5c";
	$q = "apple";
	$sources = null;
	$domains = null;
	$excludeDomains = null;
	$from = "2021-07-27";
	$to = "2021-07-27";
	$language = null;
	$sort_by = null;
	$page_size = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10;
	$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
	$country = "us";
	$category = "general";

	$newsapi = new NewsApi($ApiKey);
	$all_articles = $newsapi->getEverything($q, $sources,$domains , $excludeDomains, $from, $to, $language, $sort_by,  $page_size, $page);
	$Status = $all_articles->status;
	$TotalResults = 100; //Limit Dev
	$Articles = $all_articles->articles;

	$totoalPages = ceil($TotalResults / $page_size);
	// Prev + Next
	$prev = $page - 1;
	$next = $page + 1;
?>