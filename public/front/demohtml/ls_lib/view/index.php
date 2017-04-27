<script language='php'>

require_once('../../lib/Init.conf');

require_once('Classes/User.class');
require_once('Utils/String.class');
require_once('Utils/Web.class');

Web::DisguiseMyself();

$user_id = $_POST['user_id'];
if (!strlen($user_id)) $user_id = $_GET['u'];
if (strlen($user_id)) $user = User::UserWithId($user_id);

$page = $_POST['page'];
if (!strlen($page)) $page = $_GET['p'];
$page = basename($page);

$disp_year = $_POST['disp_year'];
if (!strlen($disp_year)) $disp_year = $_GET['y'];

$disp_month = $_POST['disp_month'];
if (!strlen($disp_month)) $disp_month = $_GET['m'];

$item_id = $_POST['item_id'];
if (!strlen($item_id)) $item_id = $_GET['i'];


if (strpos($page, 'view_') !== 0) {
  $page = NULL;
}


if (strlen($page)) include('Pages/' . $page . '.php');


// fallback

$page = NULL;

include('Pages/view_diary.php');

</script>
