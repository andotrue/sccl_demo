<script language='php'>

function edit_user_create() {
  include('Pages/edit_user.html');
}

function edit_user_edit($user) {
  if ($user) {
    $user_id = $user->id;
    $name = $user->name;
    $is_active_ = ($user->is_active) ? 'YES' : 'NO';
    $comment = $user->comment;
    include('Pages/edit_user.html');
  }
}

function edit_user_save($user) {
  $user_id = $_POST['user_id'];
  $password_1 = trim($_POST['password_1']);
  $password_2 = trim($_POST['password_2']);
  $name = String::Normalize($_POST['name']);
  $is_active_ = trim($_POST['is_active_']);
  $is_active = ($is_active_ == 'YES');
  $comment = String::Normalize($_POST['comment']);

  if (!strlen($name) || !strlen($is_active_)) {
    $error_message = '必要な項目をすべて入力してください';
  } else if (!($user) && (!strlen($password_1) || !strlen($password_2))) {
    $error_message = '必要な項目をすべて入力してください';
  } else if ($password_1 != $password_2) {
    $error_message = 'Password を確認してください';
  } else {
    if (!($user)) {
      $user = new User();
      $user_id = $user->id;
    }
    $user->setPassword($password_1);
    $user->name = $name;
    $user->is_active = $is_active;
    $user->comment = $comment;
    if (!$user->save()) {
      $error_message = '保存に失敗しました';
    }
  }
  include('Pages/edit_user.html');
}

switch ($action) {
  case 'create':
    edit_user_create();
    break;
  case 'edit':
    edit_user_edit($user);
    break;
  case 'save':
    edit_user_save($user);
    break;
}

</script>
