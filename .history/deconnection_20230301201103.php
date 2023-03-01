function Logout()
{

    session_start();
    session_destroy();
    header('location:index.php?action=Home');
    exit();
}