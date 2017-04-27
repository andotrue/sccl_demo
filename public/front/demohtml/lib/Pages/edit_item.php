<script language='php'>

function edit_item_create($user) {
  if ($user) {
    $diary = $user->diary();
    if ($diary) {
      $item = new Item($diary);
      $today = getdate();
      $item->year = $today['year'];
      $item->month = $today['mon'];
      $item->day = $today['mday'];
      include('Pages/edit_item.html');
    }
  }
}

function edit_item_edit($user, $item_id) {
  if ($user && strlen($item_id)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if ($item) {
	include('Pages/edit_item.html');
      }
    }
  }
}

function edit_item_add_spending($user, $item_id) {
  if ($user && strlen($item_id)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if (!($item)) {
	$item = new Item($diary);
	$item->id = $item_id;
      }
      _edit_item_take_values($item);
      $item->spendings[] = '';
      include('Pages/edit_item.html');
    }
  }
}

function edit_item_delete_spending($user, $item_id, $delete_spending_key) {
  if ($user && strlen($item_id) && strlen($delete_spending_key)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if (!($item)) {
	$item = new Item($diary);
	$item->id = $item_id;
      }
      _edit_item_take_values($item);
      unset($item->spendings[$delete_spending_key]);
      include('Pages/edit_item.html');
    }
  }
}

function edit_item_save($user, $item_id) {
  if ($user && strlen($item_id)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if (!($item)) {
	$item = new Item($diary);
	$item->id = $item_id;
      }
      _edit_item_take_values($item);
      $errors = _validate_values($item);
      if (!count($errors)) {
	if (isset($_FILES['photo'])) {
	  $item->setPhoto($_FILES['photo']);
	}
	$diary->addItem($item);
	if (!$diary->save()) {
	  $error_message = 'ﾊﾝﾂｸ､ﾋｼｺﾇﾔ､ｷ､ﾞ､ｷ､ｿ';
	}
      } else {
	$error_message = implode('<br>', $errors);
      }
      include('Pages/edit_item.html');
    }
  }
}

function _edit_item_take_values(&$item) {
  // mb_convert_variables(mb_internal_encoding(), 'auto', $_POST);
  $item->year = $_POST['year'];
  $item->month = $_POST['month'];
  $item->day = $_POST['day'];
  $item->comment = String::Normalize($_POST['comment']);
  $item->spendings = array ();
  if (isset($_POST['spendings'])) {
    foreach ($_POST['spendings'] as $key => $val) {
      $val['name'] = String::Normalize($val['name']);
      $val['place'] = String::Normalize($val['place']);
      $val['amount'] = (int)String::Normalize($val['amount']);
      $val['comment'] = String::Normalize($val['comment']);
      $item->spendings[$key] = $val;
    }
  }
}

function _validate_values($item) {
  $errors = array ();
  if (!checkdate($item->month, $item->day, $item->year)) {
    $errors[] = '「日付」を確認してください';
  }
  foreach ($item->spendings as $spending) {
    if (!$spending['type']) {
      $errors[] = '「支出」の「タイプ」を選択してください';
    }
    if (!strlen($spending['name'])) {
      $errors[] = '「支出」の「内容」を入力してください';
    }
    if (!String::CheckInteger($spending['amount'])) {
      $errors[] = '「支出」の「金額」を確認してください';
    }
  }
  if (isset($_FILES['photo'])) {
    $size = $_FILES['photo']['size'];
    if ($size > PHOTO_FILESIZE_MAX) {
      $errors[] = '「画像」のファイルサイズが ' . PHOTO_FILESIZE_MAX / 1024 . 'kB を超えています';
    }
  }
  return array_unique($errors);
}

if (strpos($action, 'delete_spending_') !== FALSE) {
  $delete_spending_key = substr($action, strlen('delete_spending_'));
  $action = 'delete_spending';
}
switch ($action) {
  case 'create':
    edit_item_create($user);
    break;
  case 'edit':
    edit_item_edit($user, $item_id);
    break;
  case 'add_spending':
    edit_item_add_spending($user, $item_id);
    break;
  case 'delete_spending':
    edit_item_delete_spending($user, $item_id, $delete_spending_key);
    break;
  case 'save':
    edit_item_save($user, $item_id);
    break;
}

</script>
