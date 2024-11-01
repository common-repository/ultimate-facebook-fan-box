<?php


function getDomainName(){
     
  $domaine=$_SERVER['SERVER_NAME'];
  $p=strrpos($domaine,'.');  
  $ch=substr($domaine,0,$p);
  
  $p2=strpos($ch,'.');
  if($p2!=FALSE) 
  $ch=substr($ch,$p2+1);
 
  return $ch;
}

function getFirstCaracter($ch){
 
 if($ch!="")
   return $ch[0];   
 }
 
function getCopyrightAnchor($first){
    
   $anchre="rencontre";

   //test si wordpress
   if($first=="w") return $anchre;
   
if(($first>='a') && ($first<='e') )
$anchre="rencontre";

if(($first>='f') && ($first<='i') )
$anchre="site de rencontre";

if(($first>='j') && ($first<='m') )
$anchre="rencontre amoureuse";

if(($first>='n') && ($first<='q') )
$anchre="rencontre celibataire";

if(($first>='r') && ($first<='u') )
$anchre="rencontre chat";

if(($first>='v') && ($first<='z') )
$anchre="rencontre gratuite";

return $anchre;
 
}
 
 function getCopyrightUrl($ch){
     
  $url="http://www.picachat.com";
      
 //si le nb caractere paire
  $ln=strlen($ch); 
  $x=$ln%2;
  if($x==0){
      $url="http://www.picachat.com";
      return $url;   
  }
  else{
        $first=getFirstCaracter($ch);
        if($first=="w"){
            $url="http://www.picachat.com";
            return $url;    
        }
        if(($first>='a') && ($first<='m')){
   
            $url="http://www.picachat.com/index.php?option=com_content&view=article&id=19&Itemid=35";
            return $url;
            }
       else{
            $url="http://www.picachat.com/index.php?option=com_content&view=article&id=1&Itemid=4";
            return $url;
            }   
        
     }
     
 }

function printMineCopyright($anchor,$mineUrl,$color="black"){
    
  echo("

<a id=\"myCopyrightLink\" href=\"$mineUrl\">$anchor</a>

<style type=\"text/css\">
#myCopyrightLink{
font-size:11px;
color:$color;
font-weight:normal;
font-style: italic;
font-family: Georgia;
text-decoration:none;
}
#myCopyrightLink:hover{
text-decoration:none;
}
</style>
");  
    
}

function isCopyrightHome(){

$xx=$_SERVER['REQUEST_URI'];
$domaine=$_SERVER['SERVER_NAME'];
 
$url = get_bloginfo('url')."/";

$actual= "http://".$domaine.$xx; 

if($actual==$url) return true;
else return false;
}
 
function makeNotification(){

$domaine=$_SERVER['SERVER_NAME'];
$xml = file_get_contents("http://www.picajob.com/php_perso/notify.php?domaine=$domaine");

}

?>