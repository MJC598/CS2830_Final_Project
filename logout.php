<?php
    //adapted to fit my needs, exact same as the one in class structure wise

	if(!session_start()){
        header("Location: error.php");
        exit;
    }

    //destroying all session data
    $_SESSION = array();
    
    // If the session was propagated using a cookie, remove that cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', 1,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();

	header("Location: login.php");
	exit;
?>
