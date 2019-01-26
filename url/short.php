<?php
    session_start();
    require_once 'classes/shorten.php';

    $s =new shorten;
    if(isset( $_POST['url']) && ($_POST['grp']=="Custom")){
        $url=$_POST['url'];
        $code=$_POST['keyword'];
        if ($code= $s->custURL($code,$url)){
            $_SESSION['feedback']='<p>Great!! Your Shrtened URL is<br><h3><a href="http://localhost/url/'.$code.'">http://localhost/url/'.$code.'</a></h3></p>';
        }
        else{
            $_SESSION['feedback']="<p style='color:red'>Please try another keyword</p>";
        }    
    }
    else{
        $url=$_POST['url'];
        
        if ($code= $s->makeCode($url)){
            $_SESSION['feedback']='<p>Great!! Your Shrtened URL is<br><h3><a href="http://localhost/url/'.$code.'">http://localhost/url/'.$code.'</a></h3></p>';
        }
        else{
            $_SESSION['feedback']="<p>Oops! Something went wrong please try again.</p>";
        }    
    }
    header("LOCATION:index.php");
?>