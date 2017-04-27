<?php
	echo "debug";
	
	// ライブラリの読み込み
	require_once 'google-api-php-client/src/Google/autoload.php';
	
	// サービスアカウントのメールアドレス
	$service_account_email = 'sccl-demo@ga-api-sccl-demo.iam.gserviceaccount.com';
	
	// 秘密キーファイルの読み込み
	$key = file_get_contents('GA-API sccl-demo-ace11cb56032.p12');
	
	// プロファイル(ビュー)ID
	$profile = '130648215';
	
	// Googleクライアントのインスタンスを作成
	$client = new Google_Client();
	$analytics = new Google_Service_Analytics($client);
	
	// クレデンシャルの作成
	$cred = new Google_Auth_AssertionCredentials(
			$service_account_email,
			array(Google_Service_Analytics::ANALYTICS_READONLY),
			$key
	);
	$client->setAssertionCredentials($cred);
	if($client->getAuth()->isAccessTokenExpired()) {
		$client->getAuth()->refreshTokenWithAssertion($cred);
	}
	
	$result = $analytics->data_ga->get(
			'ga:' . $profile // アナリティクス ビュー ID
			//,'7daysAgo'       // データの取得を開始する日付は7日前
			,'2016-10-01'       // データの取得を開始する日付は7日前
			,'2016-10-03'      // データの取得を終了する日付は昨日
			//'ga:sessions'     // セッション数を取得する
			,'ga:pageviews'
			//,array('dimensions'=>'ga:browser,ga:city')
			,array('dimensions'=>'ga:pagePath')
		);
	
	// 結果を出力
	//var_dump($result);
	var_dump($result -> rows);
	//echo $result -> rows[0][0];
?>