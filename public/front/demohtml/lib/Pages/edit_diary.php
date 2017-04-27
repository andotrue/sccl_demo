<script language='php'>

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
    include('Pages/edit_diary.html');
  }
}

</script>
