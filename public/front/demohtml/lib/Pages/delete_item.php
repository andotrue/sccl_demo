<script language='php'>

function delete_item_confirm($user, $item_id) {
  if ($user && strlen($item_id)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if ($item) {
	include('Pages/delete_item.html');
      }
    }
  }
}

function delete_item_proceed($user, $item_id) {
  if ($user && strlen($item_id)) {
    $diary = $user->diary();
    if ($diary) {
      $item = $diary->itemWithId($item_id);
      if ($item) {
	$diary->deleteItem($item);
	if (!$diary->save()) {
	  $error_message = '削除に失敗しました';
	  include('Pages/delete_item.html');
	}
      }
    }
  }
}

switch ($action) {
  case 'confirm':
    delete_item_confirm($user, $item_id);
    break;
  case 'proceed':
    delete_item_proceed($user, $item_id);
    break;
}

</script>
