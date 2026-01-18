session_start(); //starting of the session
//session storing
$_SESSION['username'] = "JohnDoe";
$_SESSION['user_id'] = 101;
$_SESSION['is_logged_in'] = true;
//accessing session variables
echo "Username: " . $_SESSION['username'] . "<br>";
echo "User ID: " . $_SESSION['user_id'] . "<br>";
echo "Logged In: " . ($_SESSION['is_logged_in'] ? 'Yes' : 'No') . "<br>";
//remvoing a session variable
unset($_SESSION['user_id']);
//destoring the session
session=();
session_destroy();