<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'login'){
    include "";
}elseif($page == 'register'){
    include "";
}elseif($page == 'dashboard'){
    include "";
}

?>