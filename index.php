<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Body building Turkey</title>
<style type="text/css">
body 
{
	background-image:url('karsilama.png');
	background-repeat:no-repeat;
}
#deneme 
{
	position:absolute;
	left:75px;
	top:20px;
}
</style>
</head>
<body>
<?php
    //facebook application configuration -mahmud
    $fbconfig['appid' ] = "342994075723691";
    $fbconfig['secret'] = "fe29febdf7bc6460cb23261050c2a2a8";

    $fbconfig['baseUrl']    =   "http://bodybuildingturkey.herokuapp.com";// "http://thinkdiff.net/demo/newfbconnect1/iframe/sdk3";
    $fbconfig['appBaseUrl'] =   "http://apps.facebook.com/bodybuildingturkey";// "http://apps.facebook.com/thinkdiffdemo";

    
     
//     * If user first time authenticated the application facebook
//     * redirects user to baseUrl, so I checked if any code passed
//     * then redirect him to the application url 
//     * -mahmud
//     
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
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));
	$signedRequest = $facebook->getSignedRequest();
	if($signedRequest["page"]["liked"])
	{
?>
<script type="text/javascript" src="stmenu.js"></script>
<script type="text/javascript">
<!--
stm_bm(["menu1d08",950,"","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,2,3,0,0,100,"",-2,"",-2,50,0,0,"#999999","transparent","",3,0,0,"#000000"]);
stm_ai("p0i0",[0,"Duvara Git","","",-1,-1,0,"javascript:self.parent.location.href=\'https://www.facebook.com/Bodybuilding.Turkey?sk=wall\'","_self","","Duvara gitmek için tıklayınız ...","","",0,0,0,"","",0,0,0,1,1,"#FFFFF7",1,"#B5BED6",1,"round02_m.gif","round2a_m.gif",3,3,0,0,"#FFFFF7","#000000","#FFFFFF","#66FFFF","8pt 'Arial','Verdana'","8pt 'Arial','Verdana'",0,0,"round2_l.gif","round2a_l.gif","round02_r.gif","round2a_r.gif",5,5,21],125,0);
stm_aix("p0i1","p0i0",[0,"Resimler","","",-1,-1,0,"javascript:self.parent.location.href=\'https://www.facebook.com/media/albums/?id=243995755679940\'","_self","","Albümlere gitmek için tıklayınız ..."],125,0);
stm_bpx("p1","p0",[1,4]);
stm_aix("p1i0","p0i1",[0,"Albümler"],125,0);
stm_aix("p1i1","p0i0",[0,"Profil Resimleri","","",-1,-1,0,"javascript:self.parent.location.href=\'https://www.facebook.com/media/set/?set=a.243995949013254.60370.243995755679940&type=3\'","_self","","Profil resimlerine gitmek için tıklayınız ..."],125,0);
stm_ep();
stm_aix("p0i2","p0i0",[0,"Videolar","","",-1,-1,0,"javascript:self.parent.location.href=\'https://www.facebook.com/video/?id=243995755679940\'","_self","","Videolar sayfasına gitmek için tıklayınız ..."],125,0);
stm_aix("p0i3","p0i0",[0,"Bilgiler","","",-1,-1,0,"javascript:self.parent.location.href=\'https://www.facebook.com/Bodybuilding.Turkey?sk=info\'","_self","","Profil bilgileri sayfasına gitmek için tıklayınız ..."],120,0);
stm_ep();
stm_em();
//-->
</script>
<?php
    }
    else
    {
?>
<div id="deneme">
<font style="font-size:12px;color:#000000">
Hoşgeldiniz, sayfamızı beğenerek bize destek olmayı lütfen unutmayın.
</font>
</div>

<?php
    }
?>

</body>
</html>