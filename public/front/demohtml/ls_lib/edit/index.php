<script language='php'>

require_once('../../lib/Init.conf');

require_once('Session.conf');
require_once('Classes/User.class');
require_once('Utils/String.class');
require_once('Utils/Web.class');
require_once('Utils/Form.class');

Web::DisguiseMyself();


$action = $_POST['action'];
session_start();
include('Pages/login.php');
if (!$login) {
  include('Pages/login.html');
} else if ($login->is_admin) {
  $user_id = $_POST['user_id'];
  if (!strlen($user_id)) $user_id = $_GET['u'];
  if (strlen($user_id)) $user = User::UserWithId($user_id, FALSE);
} else {
  $user = clone $login;
}

print session_name();

$page = $_POST['page'];
if (!strlen($page)) $page = $_GET['p'];
$page = basename($page);


print_r($_REQUEST);
print_r($GLOBALS['HTTP_RAW_POST_DATA']);
print $login;
print $login_id;
print $login_password;

if (!strlen($action)) $action = $_GET['a'];
foreach (array_keys($_POST) as $key) {
         #print $key;
  if (strpos($key, 'action_') !== FALSE) {

    $action = substr($key, strlen('action_'));
    break;
  }
}
$disp_year = $_POST['disp_year'];
if (!strlen($disp_year)) $disp_year = $_GET['y'];

$disp_month = $_POST['disp_month'];
if (!strlen($disp_month)) $disp_month = $_GET['m'];

$item_id = $_POST['item_id'];
if (!strlen($item_id)) $item_id = $_GET['i'];

if (!($login->is_admin)) {
  if (strpos($page, '_user') !== FALSE) {
    $page = NULL;
    $action = NULL;
  }
}
if (strlen($page)) include('Pages/' . $page . '.php');


// fallback

$page = NULL;
$action = NULL;
if ($login->is_admin) {
  if ($user) {
    include('Pages/edit_diary.php');
  } else {
    include('Pages/list_user.php');
  }
} else {
  include('Pages/edit_diary.php');
}
</script>
