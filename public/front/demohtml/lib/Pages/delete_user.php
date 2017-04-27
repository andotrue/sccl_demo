<script language='php'>

function delete_user_confirm($user) {
  if ($user) include('Pages/delete_user.html');
}

function delete_user_proceed(&$user) {
  if ($user) {
    if (!$user->delete()) {
      $error_message = '削除に失敗しました';
      include('Pages/delete_user.html');
    }
    $user = NULL;
  }
}

switch ($action) {
  case 'confirm':
    delete_user_confirm($user);
    break;
  case 'proceed':
    delete_user_proceed($user);
    break;
}

</script>
