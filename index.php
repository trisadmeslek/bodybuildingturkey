<?php
    //facebook application configuration -mahmud
    $fbconfig['appid' ] = "342994075723691";
    $fbconfig['secret'] = "fe29febdf7bc6460cb23261050c2a2a8";

    $fbconfig['baseUrl']    =   "http://bodybuildingturkey.herokuapp.com";// "http://thinkdiff.net/demo/newfbconnect1/iframe/sdk3";
    $fbconfig['appBaseUrl'] =   "http://apps.facebook.com/bodybuildingturkey";// "http://apps.facebook.com/thinkdiffdemo";

    
    /* 
     * If user first time authenticated the application facebook
     * redirects user to baseUrl, so I checked if any code passed
     * then redirect him to the application url 
     * -mahmud
     */
	 echo  "code kontrol<br>";
    if (isset($_GET['code'])){
        header("Location: " . $fbconfig['appBaseUrl']);
        exit;
    }
    //~~
    
    //
    if (isset($_GET['request_ids'])){
        //user comes from invitation
        //track them if you need
    }
    
    $user            =   null; //facebook user uid
    try{
        include_once "facebook.php";
    }
    catch(Exception $o){
        echo '<pre>';
        print_r($o);
        echo '</pre>';
    }
    // Create our Application instance.
	echo "facebook nesnesi oluşturma<br>";
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));

    //Facebook Authentication part
	echo "kullanıcı alma <br>";
    $user       = $facebook->getUser();
	
    // We may or may not have this data based 
    // on whether the user is logged in.
    // If we have a $user id here, it means we know 
    // the user is logged into
    // Facebook, but we don't know if the access token is valid. An access
    // token is invalid if the user logged out of Facebook.
    echo "giriş adresini alma <br>";
    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'user_likes'
            )
    );
	
    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
		print_r($user_profile);
      } catch (FacebookApiException $e) {
        //you should use error_log($e); instead of printing the info on browser
        d($e);  // d is a debug function defined at the end of this file
        $user = null;
      }
    }

   // if (!$user) {
//        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
//        exit;
//    }
    
    //get user basic description
    echo "kullanıcı değişkeniyle kullanıcı bilgileri";
    $userInfo           = $facebook->api("/$user");
	echo "<br><br><br><br><br><br><br><br><br>";
	print_r($userInfo);
    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
?>
