<script language='php'>

if ($user) {
  $diary = $user->diary();
  if ($diary) {
    if (strlen($disp_year) && strlen($disp_month)) {
      $spending_type = $_POST['spending_type'];
      if (!strlen($spending_type)) $spending_type = $_GET['st'];
      if (strlen($spending_type)) {
	include('Pages/view_spendings.html');
      }
    }
  }
}

</script>
