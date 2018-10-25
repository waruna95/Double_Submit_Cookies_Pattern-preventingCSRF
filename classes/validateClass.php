<!--
IT15060822
W.M.W.G.Wijesundara
-->
<?php
if(isset($_POST['uname'],$_POST['psw'])){

	if($_POST['uname'] == 'user' && $_POST['psw'] == 'user123'){
        ob_start();
        session_start();
        
        $_SESSION['USERNAME'] = $uname;
        $_SESSION['LOG'] = "in";

        $_SESSION['TOKEN'] = base64_encode(openssl_random_pseudo_bytes(32));
        $session_id = session_id();
        
		setcookie('ssd_session',$session_id,time()+60*60*24*365,'/');
        setcookie('ssd_csrf',$_SESSION['TOKEN'],time()+60*60*24*365,'/');
        
        header("location: ../views/home.php");
	}
	else{
		header("location: ../index.php?er=check again Username and Password");
	}
}
?>