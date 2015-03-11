<?php

// OAuthライブラリの読み込み
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//認証情報４つ
$consumerKey = "XXXXXX";
$consumerSecret = "XXXXXX";
$accessToken = "XXXXXX";
$accessTokenSecret = "XXXXXX";

//接続
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//ツイート
$res = $connection->post("statuses/update", array("status" => "テストメッセージ"));

//レスポンス確認
var_dump($res);
