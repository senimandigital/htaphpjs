<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_senimandigital = "localhost";
$database_senimandigital = "senimandigital_2011_08_19";
$username_senimandigital = "root";
$password_senimandigital = "vertrigo";
$senimandigital = mysql_pconnect($hostname_senimandigital, $username_senimandigital, $password_senimandigital) or trigger_error(mysql_error(),E_USER_ERROR);

if  (!isset($_SESSION))
    {
     session_start();
     $session_id =  session_id();
    }

if  (in_array($_SERVER['HTTP_HOST'], array('localhost', 'senimandigital.kom', '192.18.0.1')))
    {
 	 $hostname_senimandigital = "localhost";
	 $database_senimandigital = "senimandigital_2011_08_19";
         if($_GET['database']) {
         $database_senimandigital = $_GET['database'];
         }
	 $username_senimandigital = "root";
	 $password_senimandigital = "vertrigo";
	 $senimandigital = mysql_pconnect($hostname_senimandigital, $username_senimandigital, $password_senimandigital) or trigger_error(mysql_error(),E_USER_ERROR);

	 $WEBSITE['HOSTING']['FOLDER']   = 'D:\Server\php\senimandigital_2011-09-21\sistem\senimandigital\1.0.0\javascript\\';
	 $WEBSITE['HOSTING']['SISTEM']   = 'D:\Server\php\senimandigital_2011-09-21\sistem\senimandigital\1.0.0\javascript\\';

	 $WEBSITE['DOMAIN']['ROOT']    = 'senimandigital_2011-09-21';

	 $WEBSITE['DOMAIN']['SITE']      = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/';
	 $WEBSITE['DOMAIN']['AJAX']      = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/ajax/';
	 $WEBSITE['DOMAIN']['ANGGOTA']   = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/anggota/';
	 $WEBSITE['DOMAIN']['APLIKASI']  = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/aplikasi/';
	 $WEBSITE['DOMAIN']['BPM']       = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/bpm/';
	 $WEBSITE['DOMAIN']['CMS']       = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/cms/';
	 $WEBSITE['DOMAIN']['DEVELOPER'] = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/developer/';
	 $WEBSITE['DOMAIN']['ERD']       = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/erd/';
	 $WEBSITE['DOMAIN']['FLOWCHART'] = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/flowchart/';
	 $WEBSITE['DOMAIN']['FRAMEWORK'] = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/framework/';
	 $WEBSITE['DOMAIN']['GAMBAR']    = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/gambar/';
	 $WEBSITE['DOMAIN']['GENERATOR'] = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/generator/';
	 $WEBSITE['DOMAIN']['MODUL']     = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/modul/';
	 $WEBSITE['DOMAIN']['MANAJEMEN'] = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/manajemen/';
	 $WEBSITE['DOMAIN']['PERUSAHAAN']= $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/perusahaan/';
	 $WEBSITE['DOMAIN']['PROFILE']   = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/profile/';
	 $WEBSITE['DOMAIN']['PROYEK']    = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/proyek/';
	 $WEBSITE['DOMAIN']['SISTEM']    = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/sistem/';
	 $WEBSITE['DOMAIN']['SOURCE']    = $_SERVER['HTTP_HOST'] .'/'. $WEBSITE['DOMAIN']['ROOT'] .'/source/';
	}
 $WEBSITE['META']['TITLE']       = 'senimandigital.com';

 $WEBSITE['STYLE']['HEADER'] = '<style>
body{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
}
.DataList, .button{
	box-shadow: 5px 5px 5px #888888;
	border:1px solid #000000;

	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.DataList th{
	background-color:#999999;
	text-align:center;
	color:#ffffff;
    padding: 5px;

    background:-o-linear-gradient(bottom, #999999 5%, #007f3f 100%);
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #999999), color-stop(1, #007f3f) );
	background:-moz-linear-gradient( center top, #999999 5%, #007f3f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999", endColorstr="#007f3f");	background: -o-linear-gradient(top,#999999,007f3f);
}
.DataList td{
    padding: 2px;
}
.DataList tr:nth-child(odd){
	background-color:#d4ffaa;
}
.DataList tr:hover{
	background-color:#00CC00;
}
.button{
    display: inline-block;
    text-decoration: none;
    font: bold 12px/12px HelveticaNeue, Arial;
    padding: 8px 11px;
    color: #555;
    border: 1px solid #dedede;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.button.green{
    background: #b7d770;
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr="#cae285", endColorstr="#9fcb57"); /*  IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#cae285), to(#9fcb57)); /*  WebKit */
    background: -moz-linear-gradient(top,  #cae285, #9fcb57);
    border-color: #adc671 #98b65b #87aa4a;
    color: #5d7731;
    text-shadow: 0 1px 0 #cfe5a4;
}
.button.green:hover{
    background: #b9d972;
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr="#b8d872", endColorstr="#b9d972"); /*  IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#b8d872), to(#b9d972)); /*  WebKit */
    background: -moz-linear-gradient(top,  #b8d872, #b9d972);
    border-color: #8bb14d #83a648 #7d9e45;
    text-shadow: 0 1px 0 #d5e8aa;
}
h3
{
color:#8AC007;
font-size:22px;
margin-top:10px;
margin-bottom:10px;
font-weight:normal;
/* text-shadow: 2px 2px 2px #99CC66; */
}
</style>
';
 $fotter = '<tr><td><fieldset><div align="center"><a href="'. $WEBSITE['DOMAIN']['SITE'] .'">senimandigital</a></div></fieldset></td></tr>';
 $WEBSITE['TEMPLATE']['FOTTER'] = $fotter;
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

//stoping xss,union and clike injection
if  (!function_exists('stripos'))
    {
     function stripos_clone($haystack, $needle, $offset=0)
     {
      $return = strpos(strtoupper($haystack), strtoupper($needle), $offset);
      if ($return === false) { return false; } else { return true; }
	 }
    }
else{
     // But when this is PHP5, we use the original function
     function stripos_clone($haystack, $needle, $offset=0)
	      {
               $return = stripos($haystack, $needle, $offset=0);
                if  ($return === false)
                    {
                     return false;
		    }
                else{
                     return true;
		    }
              }
   }

if (isset($_SERVER['QUERY_STRING']) && (!stripos_clone($_SERVER['QUERY_STRING'], "ad_click")))
   {
    $queryString = $_SERVER['QUERY_STRING'];
    if (stripos_clone($queryString,'%20union%20') OR stripos_clone($queryString,'/*') OR stripos_clone($queryString,'*/union/*') OR stripos_clone($queryString,'c2nyaxb0') OR stripos_clone($queryString,'+union+') OR (stripos_clone($queryString,'cmd=') AND !stripos_clone($queryString,'&cmd')) OR (stripos_clone($queryString,'exec') AND !stripos_clone($queryString,'execu')) OR stripos_clone($queryString,'concat'))
       {
        if ($_SERVER['PHP_SELF'] <> '/teknologi/virtual/file.php')
        die('Illegal Operation');
       }
   }

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck']))
   {
    $_SESSION['PrevUrl'] = $_GET['accesscheck'];
   }

if (isset($_POST['username']))
   {
    $loginUsername = $_POST['username'];
    $password      = $_POST['password'];
    $MM_fldUserAuthorization = "";
    $MM_redirectLoginSuccess = "#";
    $MM_redirectLoginFailed  = "anggota/login/";
    $MM_redirecttoReferrer   = true;
    mysql_select_db($database_senimandigital, $senimandigital);
  
    $LoginRS__query=sprintf("SELECT anggota_username, 
                                    anggota_password
                              FROM   anggota
                              WHERE  anggota_username='%s' 
                              AND    anggota_password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password));
   
    $LoginRS       = mysql_query($LoginRS__query, $senimandigital) or die(mysql_error());
    $loginFoundUser = mysql_num_rows($LoginRS);
    if ($loginFoundUser)
       {
         $loginStrGroup = "";
         $_SESSION['MM_Username']  = $loginUsername;
         $_SESSION['MM_UserGroup'] = $loginStrGroup;	      
         $_SESSION['MM_SessionId'] = $session_id;

	     $sessionusername_anggota = "-1";
	     if (isset($_SESSION['MM_Username']))
	        {
		     $sessionusername_anggota = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
	        }
	     mysql_select_db($database_senimandigital, $senimandigital);
         $query_anggota = sprintf("SELECT anggota.anggota_id FROM anggota WHERE anggota.anggota_username = '%s'", $sessionusername_anggota);
	     $anggota = mysql_query($query_anggota, $senimandigital) or die(mysql_error());
	     $row_anggota = mysql_fetch_assoc($anggota);
	     $totalRows_anggota = mysql_num_rows($anggota);

         mysql_select_db($database_senimandigital, $senimandigital);
         $query_ambil_tanggal = "SELECT UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 1 HOUR)) AS kadaluarsa";
         $ambil_tanggal = mysql_query($query_ambil_tanggal, $senimandigital) or die(mysql_error());
         $row_ambil_tanggal = mysql_fetch_assoc($ambil_tanggal);
         $totalRows_ambil_tanggal = mysql_num_rows($ambil_tanggal);

         $sessionid_session = "-1";
         if (isset($session_id))
            {
             $sessionid_session = (get_magic_quotes_gpc()) ? $session_id : addslashes($session_id);
            }
         mysql_select_db($database_senimandigital, $senimandigital);
         $query_session = sprintf("SELECT sessions.session_id FROM sessions WHERE sessions.session_id = '%s'", $sessionid_session);
         $session = mysql_query($query_session, $senimandigital) or die(mysql_error());
         $row_session = mysql_fetch_assoc($session);
         $totalRows_session = mysql_num_rows($session);

         if ($totalRows_session == 0)
	        {
             $sessionSQL = "INSERT sessions 
                            SET    session_expiration = '". $row_ambil_tanggal['kadaluarsa'] ."',
                                   session_domain     = 'site',
                                   session_id         = '". $session_id ."',
                                   anggota_id         = '". $row_anggota['anggota_id'] ."'
                           ";
            }
         if ($totalRows_session > 0)
            {
             $sessionSQL = "UPDATE sessions 
                            SET    session_expiration = '". $row_ambil_tanggal['kadaluarsa'] ."',
                                   session_domain     = 'site',
                                   anggota_id         = '". $row_anggota['anggota_id'] ."'
                            WHERE  session_id         = '". $session_id ."'
                           ";
            }
         mysql_select_db($database_senimandigital, $senimandigital);
         $Result1 = mysql_query($sessionSQL, $senimandigital) or die(mysql_error());

         if (isset($_SESSION['PrevUrl']) && true)
            {
             $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
            }
         header("Location: " . $MM_redirectLoginSuccess );
        }
    else{
         header("Location: ". $MM_redirectLoginFailed );
        }
   }

if ((isset($_GET['Logout'])) && ($_GET['Logout']=="true"))
   {
    $sessionusername_anggota_login = "-1";
    if  (isset($_SESSION['MM_Username']))
        {
         $sessionusername_anggota_login = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
        }
    mysql_select_db($database_senimandigital, $senimandigital);
    $query_anggota_login = sprintf("SELECT anggota.anggota_id FROM anggota WHERE anggota.anggota_username = '%s'", $sessionusername_anggota_login);
    $anggota_login = mysql_query($query_anggota_login, $senimandigital) or die(mysql_error());
    $row_anggota_login = mysql_fetch_assoc($anggota_login);
    $totalRows_anggota_login = mysql_num_rows($anggota_login);

    $deleteSQL = "DELETE 
                  FROM  sessions 
                  WHERE anggota_id = '". $row_anggota_login['anggota_id'] ."'
                 ";
    mysql_select_db($database_senimandigital, $senimandigital);
    $Result1 = mysql_query($deleteSQL, $senimandigital) or die(mysql_error());

    $_SESSION['MM_Username']  = NULL;
    $_SESSION['MM_UserGroup'] = NULL;
    $_SESSION['PrevUrl']      = NULL;
    $_SESSION['MM_SessionId'] = NULL;
    unset($_SESSION['MM_Username']);
    unset($_SESSION['MM_UserGroup']);
    unset($_SESSION['PrevUrl']);
    unset($_SESSION['MM_SessionId']);
	
    $logoutGoTo = "". $WEBSITE['DOMAIN']['SITE'] ."";
    if ($logoutAction)
	   {
	    $logoutGoTo = $logoutAction;
	   }
    if ($logoutGoTo)
       {
        header("Location: $logoutGoTo");
        exit;
       }
  }

if(isset($_SESSION['MM_Username']) && isset($_SESSION['MM_SessionId']))
  {
   $query_anggota = "SELECT anggota.anggota_id
                     FROM   anggota
                     WHERE  anggota.anggota_username = '". $_SESSION['MM_Username'] ."'
                    ";
   mysql_select_db($database_senimandigital, $senimandigital);
   $anggota = mysql_query($query_anggota, $senimandigital) or die(mysql_error());
   $row_anggota = mysql_fetch_assoc($anggota);
   $totalRows_anggota = mysql_num_rows($anggota);

   if($totalRows_anggota > 0)
     {
      $query_session = "SELECT MAX(session_expiration) as session_expiration
                        FROM   sessions
                        WHERE  anggota_id = '". $row_anggota['anggota_id'] ."'
                       ";
      mysql_select_db($database_senimandigital, $senimandigital);
      $session = mysql_query($query_session, $senimandigital) or die(mysql_error());
      $row_session = mysql_fetch_assoc($session);
      $totalRows_session = mysql_num_rows($session);
	
      $query_session = "SELECT *
                        FROM  sessions
                        WHERE session_id         = '". $_SESSION['MM_SessionId'] ."'
                        AND   session_expiration > UNIX_TIMESTAMP(NOW())
                       ";
      mysql_select_db($database_senimandigital, $senimandigital);
      $session = mysql_query($query_session, $senimandigital) or die(mysql_error());
      $row_session = mysql_fetch_assoc($session);
      $totalRows_session = mysql_num_rows($session);
	
      if ($totalRows_session == 0)
         {
            $_SESSION['MM_Username']  = NULL;
            $_SESSION['MM_UserGroup'] = NULL;
            $_SESSION['PrevUrl']      = NULL;
            $_SESSION['MM_SessionId'] = NULL;
            unset($_SESSION['MM_Username']);
            unset($_SESSION['MM_UserGroup']);
            unset($_SESSION['PrevUrl']);
            unset($_SESSION['MM_SessionId']);
            $logoutGoTo = "". $WEBSITE['DOMAIN']['SITE'] ."";
            if($logoutGoTo)
			  {
               header("Location: $logoutGoTo");
               exit;
              }
         }

      if (($totalRows_session > 0) && ($row_session['anggota_id'] == $row_anggota['anggota_id']))
         {
          $query_ambil_tanggal = "SELECT UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 1 HOUR)) AS kadaluarsa";
          mysql_select_db($database_senimandigital, $senimandigital);
          $ambil_tanggal = mysql_query($query_ambil_tanggal, $senimandigital) or die(mysql_error());
          $row_ambil_tanggal = mysql_fetch_assoc($ambil_tanggal);
          $totalRows_ambil_tanggal = mysql_num_rows($ambil_tanggal);
	
          $updateSQL = "UPDATE sessions
                        SET    session_expiration = '". $row_ambil_tanggal['kadaluarsa'] ."'
                        WHERE  anggota_id         = '". $row_anggota['anggota_id'] ."'
                       ";
          mysql_select_db($database_senimandigital, $senimandigital);
          $Result1 = mysql_query($updateSQL, $senimandigital) or die(mysql_error());
         }
     $row_anggota_session       = $row_anggota;
     $totalRows_anggota_session = $totalRows_session;
    }
  }

function bulan_indo($date){
$date = str_pad($date,2,"0",STR_PAD_LEFT);
$bln_array = array ('01'=>'Januari',
					'02'=>'Februari',
					'03'=>'Maret',
					'04'=>'April',
					'05'=>'Mei',
					'06'=>'Juni',
					'07'=>'Juli',
					'08'=>'Agustus',
					'09'=>'September',
					'10'=>'Oktober',
					'11'=>'November',
					'12'=>'Desember'
			);

return $bln_array[$date];
}

function tanggal_indo($tanggal){
$array_tanggal = explode('-', $tanggal);
return $array_tanggal[2] .' '. bulan_indo($array_tanggal[1]) .' '. $array_tanggal[0];
}
?>
