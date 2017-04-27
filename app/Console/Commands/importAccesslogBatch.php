<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Illuminate\Console\Input\InputArgument;
use App\Accesslog;

/*
 * 1. $ php artisan make:command importAccesslogBatch --command="importAccesslogBatch"
 * 2. app/Console/Kernel.phpにコマンド名追記
 * 3. $ php artisan importAccesslogBatch Ymd
 */

class importAccesslogBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importAccesslogBatch {target_date}';

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
//    	var_dump($this->arguments());exit;
    	$target_date = $this->argument('target_date');
    	
    	if(!$target_date){
	    	$yesterday = date('Y-m-d', strtotime('-1 day'));
	    	$target_date = $yesterday;
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

    	$types = array("pageviews", "uniqueDimensionCombinations");
    	foreach($types as $type)
    	{
    		$this->info("type=====>".$type);
    		
	    	$data = $this->getGaData($target_date, $type);
        	$resultJ = json_encode($data -> rows);
	        // 結果を出力
	        var_dump($data['rows']);

	        
	        if(!isset($data["rows"])){
	        	$this->info('対象データが無いため終了します');
	        	continue;
	        }
	        foreach($data["rows"] as $c => $row)
	        {
	        	$this->info( "$c : pagePath:".$row[0].",pageTitle:".$row[1].",dimension1:".$row[2].",count:".$row[3]);
	        	 
	        	$dataCheck = Accesslog::where([
	        			['logdate', '=', $target_date],
	        			['userId', '=', $row[2]],
	        			['type', '=', $type],
	        			['pagePath', '=', $row[0]],
	        			['pageTitle', '=', $row[1]],
	        	])->get();
	        	//var_dump($dataCheck[0]);exit;
	        	 
	        	if(isset($dataCheck[0]))
	        	{
	        		$this->line("record exist!!" . $dataCheck[0]->id);
	        		$accesslog = Accesslog::findOrFail($dataCheck[0]->id);
	        		$accesslog->pageTitle = $row[1];
	        		$accesslog->count = $row[3];
	        	}
	        	else{
	        		$accesslog = new Accesslog();
	        		$accesslog->logdate = $target_date;
	        		$accesslog->userId = $row[2];
	        		$accesslog->type = $type;
	        		$accesslog->pagePath = $row[0];
	        		$accesslog->pageTitle = $row[1];
	        		$accesslog->count = $row[3];
	        	}
	        	 
	        	$accesslog->save();
	        }
    	}
		exit;
    	
        
    }
    
    public function getGaData($date = "", $type = "")
    {
    	$ga_root_dir = base_path() . "/ga";
    
    	echo env("GA_SERVICE_ACCOUNT_EMAIL","")."\r\n";
    	echo env("GA_KEY_FILE","")."\r\n";
    
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
        $from = $date;
        $to = $date;
        $dimensions = 'ga:pagePath, ga:pageTitle, ga:dimension1';//パス＆カスタムディメンション(UserId)単位のデータ
        $metrics = 'ga:'.$type;
        $option = array(
					'dimensions' => $dimensions ,
					//'max-results' => 10 ,
					//'sort' => '-ga:pageviews' ,
					//	'start-index' => 50,	// 取得開始位置
				) ;
        $result = $analytics->data_ga->get( 'ga:' . $profile , $from , $to , $metrics , $option ) ;
    	
    	return $result;
    }
}
