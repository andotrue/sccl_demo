<script language='php'>

function edit_profile_edit($user, $disp_year, $disp_month) {
  if ($user) include('Pages/edit_profile.html');
}

function edit_profile_save($user, $disp_year, $disp_month) {
  if ($user) {
    $user->comment = String::Normalize($_POST['comment']);
    if (!$user->save()) {
      $error_message = '保存に失敗しました';
    }
    include('Pages/edit_profile.html');
  }
}

switch ($action) {
  case 'edit':
    edit_profile_edit($user, $disp_year, $disp_month);
    break;
  case 'save':
    edit_profile_save($user, $disp_year, $disp_month);
    break;
}

</script>
