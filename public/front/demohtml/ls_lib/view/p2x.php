<?
require_once('../../lib/Init.conf');

require_once('Classes/User.class');
require_once('Classes/Diary.class');
require_once('Utils/String.class');
require_once('Utils/Web.class');

//Web::DisguiseMyself();


$user_id = @$_POST['user_id'];
if (!strlen($user_id)) $user_id = $_GET['u'];
if (strlen($user_id)) $user = User::UserWithId($user_id);
$page = @$_POST['page'];
if (!strlen($page)) $page = @$_GET['p'];
$page = basename($page);

$disp_year = @$_POST['disp_year'];
if (!strlen($disp_year)) $disp_year = @$_GET['y'];

$disp_month = @$_POST['disp_month'];
if (!strlen($disp_month)) $disp_month = @$_GET['m'];

$item_id = @$_POST['item_id'];
if (!strlen($item_id)) $item_id = @$_GET['i'];


if (strpos($page, 'view_') !== 0) {
  $page = NULL;
}


// fallback

//$page = NULL;
if ($user) {
  $diary = $user->diary();
  if ($diary) {
    if (!strlen($disp_year) || !strlen($disp_month)) {
      $latest_item = $diary->latestItem();
      if ($latest_item) {
		$disp_year = $latest_item->year;
		$disp_month = $latest_item->month;
      } else {
		$today = getdate();
		$disp_year = $today['year'];
		$disp_month = $today['mon'];
      }
    }
    //include('Pages/view_diary.html');
  }
}

	@$items = $diary->itemsWithYearAndMonth($disp_year, $disp_month);
	$sums = Diary::SumUpSpendingsByType($items);
	$total = 0;
	$max = 0;
	foreach ($sums as $sum) { 
		$total += $sum['amount']; $max = ($max > $sum['amount']) ? $max : $sum['amount'];
	}
	header("Content-type:text/xml");
	
?>
<?='<?xml version="1.0" encoding="EUC-JP" ?>'."\n"; ?>
<?
	
	$count=0;
	$item_latest=array();
	foreach($items as $k){
		if($count==0){
			$item_latest = $k;
		}
		else{
			break;
		}
		$count++;
	}
?>
<rss>
	<channel>
		<price><?=$total?></price>
		<latest>
			<year><?=$item_latest->year?></year>
			<month><?=$item_latest->month?></month>
			<day><?=$item_latest->day?></day>
			<date><![CDATA[<?=$item_latest->year."Ç¯".$item_latest->month."·î".$item_latest->day."Æü"?>]]></date>
		</latest>
	</channel>
</rss>
