<?php
        header('content-type: text/css');

$fanBoxColor=$_GET['fanBoxColor'];
$textColor=$_GET['textColor'];
$countFansSize=$_GET['countFansSize']."px";
$imgWidth=$_GET['imgWidth']."px";
$betweenImg=$_GET['betweenImg']."px";
$fanLinkColor=$_GET['fanLinkColor'];
$url=$_GET['url'];



$textShadow=$_GET['textShadow'];
if($textShadow==1) $ch1="text-shadow: 0px 1px 4px #000;";
else $ch1="";

echo("
    
    .fan_box .full_widget { 
        background: none; border: none;
 background-color:$fanBoxColor;
  
    }
    .fan_box .connections_grid .grid_item {
        padding: 0 8px 10px 8px;
        padding-right:$betweenImg;
        padding-left:0px;
        width:$imgWidth;
    }
    .fan_box .connections_grid .grid_item a img {
        /*    box-shadow: 0px 0px 10px #333; -moz-box-shadow: 0px 0px 10px #333; -webkit-box-shadow: 0px 0px 10px #333;*/
            width:$imgWidth;
        }
    

    .fan_box .full_widget .connect_top {
         background: url($url/images/blue.png);
         border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; 
    }

    
    .fan_box .connections .connections_grid {
        padding-top:16px;
    }
    .fan_box .connections {
        border-top: none;
        padding:15px 0 0;
        color: $textColor;
        font: italic $countFansSize Georgia;
        text-align: center;
        $ch1
    }
        .fan_box .connections span.total {
            color: $textColor;
    
        }
        
    .fan_box .connections_grid .grid_item .name {
        color: $fanLinkColor;
        font-size: 11px;

    }
    .fan_box .profileimage {
        margin: 0;
        
    }




");

?>