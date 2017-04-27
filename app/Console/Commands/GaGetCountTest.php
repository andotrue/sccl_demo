<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;


/*
* 1. $ php artisan make:command GaGetCountTest --command="GaGetCountTest"
* 2. app/Console/Kernel.phpにコマンド名追記
* 3. $ php artisan GaGetCountTest Ymd
*/

class GaGetCountTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GaGetCountTest {target_date}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    	$target_date = $this->argument('target_date');
    	 
    	if(!$target_date){
    		$today = date('Y-m-d');
    		$target_date = $today;
    	}
    	else{
    		//$this->info("target_date1=====>".$target_date);
    		$target_date = strtotime($target_date);
    		//$this->info("target_date2=====>".$target_date);
    		if(!$target_date || !isset($target_date)){
    			$this->error('日付初期エラーの為終了。yyyymmddでお願いします。');
    			exit;
    		}
    		$target_date = date('Y-m-d', $target_date);
    	}
    	$this->info("target_date=====>".$target_date);
    		 
    		
    	$ga_root_dir = base_path() . "/ga";

    	echo env("GA_SERVICE_ACCOUNT_EMAIL","")."\r\n";
    	echo env("GA_KEY_FILE","")."\r\n";

        // ライブラリの読み込み
        //require_once $ga_root_dir.'/google-api-php-client/src/Google/autoload.php';

        // サービスアカウントのメールアドレス
        $service_account_email = env("GA_SERVICE_ACCOUNT_EMAIL","");

        // 秘密キーファイルの読み込み
        $key = file_get_contents($ga_root_dir.'/'.env("GA_KEY_FILE",""));

        // プロファイル(ビュー)ID
        $profile = env("GA_PROFILE","");

        // Googleクライアントのインスタンスを作成
        $client = new \Google_Client($ga_root_dir."/tool_php.ini");
        $analytics = new \Google_Service_Analytics($client);

        // クレデンシャルの作成
        $cred = new \Google_Auth_AssertionCredentials(
        		$service_account_email,
        		array(\Google_Service_Analytics::ANALYTICS_READONLY),
        		$key
        );
        $client->setAssertionCredentials($cred);
        if($client->getAuth()->isAccessTokenExpired()) {
        	$client->getAuth()->refreshTokenWithAssertion($cred);
        }

        // データの取得
        $from = $target_date;
        $to = $target_date;
        $dimensions = 'ga:pagePath, ga:pageTitle, ga:dimension1';
        //$metrics = 'ga:pageviews';
        $metrics = 'ga:users';
        $option = array(
					'dimensions' => $dimensions ,
					//'max-results' => 10 ,
					//'sort' => '-ga:pageviews' ,
					//	'start-index' => 50,	// 取得開始位置
				) ;
        $result = $analytics->data_ga->get( 'ga:' . $profile , $from , $to , $metrics , $option ) ;
        
        /*
        $result = $analytics->data_ga->get(
        		'ga:' . $profile // アナリティクス ビュー ID
        		//,'7daysAgo'       // データの取得を開始する日付は7日前
        		,'2017-01-10'       // データの取得を開始する日付は7日前
        		//,'yesterday'      // データの取得を終了する日付は昨日
                ,'2017-01-10'      // データの取得を終了する日付は昨日
        		//'ga:sessions'     // セッション数を取得する
        		,'ga:pageviews'
        	    //,array('dimensions'=>'ga:browser,ga:city')
        		//,array('dimensions'=>'ga:pagePath')//パス単位でのデータ
                ,array('dimensions'=>'ga:pagePath,ga:pageTitle,ga:dimension1')//パス＆カスタムディメンション(UserId)単位のデータ
        );
        */
        $resultJ = json_encode($result -> rows);

        // 結果を出力
        //var_dump($result);
        var_dump($result -> rows);
        //var_dump($resultJ);
        //var_dump($result -> rows[0]);
        //echo $result -> rows[0][0];

        /*
        //結果をcache化
        $key_name = 'ga_total_result';
        $value = $resultJ;
        $minutes = 60 * 60;
        if (\Cache::has($key_name)) {
            $value = \Cache::get($key_name);
            echo "exist cache data!\r\n";
            //var_dump($value);
        }
        else{
            echo "not exist cache data!\r\n";
            \Cache::put($key_name, $value, $minutes);
        }
        */

    }
}
