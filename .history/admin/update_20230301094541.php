<?php  require_once  ?>
<?php



$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post= selectOne($id);
}