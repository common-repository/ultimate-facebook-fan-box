<?php

$params=$instance;

function getUniversalParam($tab,$param){
       $x = empty($tab[$param]) ? '' : apply_filters($param, $tab[$param]);
       return $x; 
     }

       
    
       $lang_locale = getUniversalParam($params, 'locale_lang' ) ;
        if ($lang_locale=="0")  {$lang_locale1='ca_ES';}
        if ($lang_locale=="1")  {$lang_locale1='cs_CZ';}
        if ($lang_locale=="2")  {$lang_locale1='cy_GB';}
        if ($lang_locale=="3")  {$lang_locale1='da_DK';}
        if ($lang_locale=="4")  {$lang_locale1='de_DE';}
        if ($lang_locale=="5")  {$lang_locale1='eu_ES';}
        if ($lang_locale=="6")  {$lang_locale1='en_PI';}
        if ($lang_locale=="7")  {$lang_locale1='en_UD';}
        if ($lang_locale=="8")  {$lang_locale1='ck_US';}
        if ($lang_locale=="9")  {$lang_locale1='en_US';}
        if ($lang_locale=="10")  {$lang_locale1='es_LA';}
        if ($lang_locale=="11")  {$lang_locale1='es_CL';}
        if ($lang_locale=="12")  {$lang_locale1='es_CO';}
        if ($lang_locale=="13")  {$lang_locale1='es_ES';}
        if ($lang_locale=="14")  {$lang_locale1='es_MX';}
        if ($lang_locale=="15")  {$lang_locale1='es_VE';}
        if ($lang_locale=="18")  {$lang_locale1='fb_FI';}
        if ($lang_locale=="19")  {$lang_locale1='fi_FI';}
        if ($lang_locale=="20")  {$lang_locale1='fr_FR';}
        if ($lang_locale=="21")  {$lang_locale1='gl_ES';}
        if ($lang_locale=="22")  {$lang_locale1='hu_HU';}
        if ($lang_locale=="23")  {$lang_locale1='it_IT';}
        if ($lang_locale=="24")  {$lang_locale1='ja_JP';}
        if ($lang_locale=="25")  {$lang_locale1='ko_KR';}
        if ($lang_locale=="26")  {$lang_locale1='nb_NO';}
        if ($lang_locale=="27")  {$lang_locale1='nn_NO';}
        if ($lang_locale=="28")  {$lang_locale1='nl_NL';}
        if ($lang_locale=="29")  {$lang_locale1='pl_PL';}
        if ($lang_locale=="30")  {$lang_locale1='pt_BR';}
        if ($lang_locale=="31")  {$lang_locale1='pt_PT';}
        if ($lang_locale=="32")  {$lang_locale1='ro_RO';}
        if ($lang_locale=="33")  {$lang_locale1='ru_RU';}
        if ($lang_locale=="34")  {$lang_locale1='sk_SK';}
        if ($lang_locale=="35")  {$lang_locale1='sl_SI';}
        if ($lang_locale=="36")  {$lang_locale1='sv_SE';}
        if ($lang_locale=="37")  {$lang_locale1='th_TH';}
        if ($lang_locale=="38")  {$lang_locale1='tr_TR';}
        if ($lang_locale=="39")  {$lang_locale1='ku_TR';}
        if ($lang_locale=="40")  {$lang_locale1='zh_CN';}
        if ($lang_locale=="41")  {$lang_locale1='zh_HK';}
        if ($lang_locale=="42")  {$lang_locale1='zh_TW';}
        if ($lang_locale=="43")  {$lang_locale1='fb_LT';}
        if ($lang_locale=="44")  {$lang_locale1='af_ZA';}
        if ($lang_locale=="45")  {$lang_locale1='sq_AL';}
        if ($lang_locale=="46")  {$lang_locale1='hy_AM';}
        if ($lang_locale=="47")  {$lang_locale1='az_AZ';}
        if ($lang_locale=="48")  {$lang_locale1='be_BY';}
        if ($lang_locale=="49")  {$lang_locale1='bn_IN';}
        if ($lang_locale=="50")  {$lang_locale1='bs_BA';}
        if ($lang_locale=="51")  {$lang_locale1='bg_BG';}
        if ($lang_locale=="52")  {$lang_locale1='hr_HR';}
        if ($lang_locale=="53")  {$lang_locale1='nl_BE';}
        if ($lang_locale=="54")  {$lang_locale1='en_GB';}
        if ($lang_locale=="55")  {$lang_locale1='eo_EO';}
        if ($lang_locale=="56")  {$lang_locale1='et_EE';}
        if ($lang_locale=="57")  {$lang_locale1='fo_FO';}
        if ($lang_locale=="58")  {$lang_locale1='fr_CA';}
        if ($lang_locale=="59")  {$lang_locale1='ka_GE';}
        if ($lang_locale=="60")  {$lang_locale1='el_GR';}
        if ($lang_locale=="61")  {$lang_locale1='gu_IN';}
        if ($lang_locale=="62")  {$lang_locale1='hi_IN';}
        if ($lang_locale=="63")  {$lang_locale1='is_IS';}
        if ($lang_locale=="64")  {$lang_locale1='id_ID';}
        if ($lang_locale=="65")  {$lang_locale1='ga_IE';}
        if ($lang_locale=="66")  {$lang_locale1='jv_ID';}
        if ($lang_locale=="67")  {$lang_locale1='kn_IN';}
        if ($lang_locale=="68")  {$lang_locale1='kk_KZ';}
        if ($lang_locale=="69")  {$lang_locale1='la_VA';}
        if ($lang_locale=="70")  {$lang_locale1='lv_LV';}
        if ($lang_locale=="71")  {$lang_locale1='li_NL';}
        if ($lang_locale=="72")  {$lang_locale1='lt_LT';}
        if ($lang_locale=="73")  {$lang_locale1='mk_MK';}
        if ($lang_locale=="74")  {$lang_locale1='mg_MG';}
        if ($lang_locale=="75")  {$lang_locale1='ms_MY';}
        if ($lang_locale=="76")  {$lang_locale1='mt_MT';}
        if ($lang_locale=="77")  {$lang_locale1='mr_IN';}
        if ($lang_locale=="78")  {$lang_locale1='mn_MN';}
        if ($lang_locale=="79")  {$lang_locale1='ne_NP';}
        if ($lang_locale=="80")  {$lang_locale1='pa_IN';}
        if ($lang_locale=="81")  {$lang_locale1='rm_CH';}
        if ($lang_locale=="82")  {$lang_locale1='sa_IN';}
        if ($lang_locale=="83")  {$lang_locale1='sr_RS';}
        if ($lang_locale=="84")  {$lang_locale1='so_SO';}
        if ($lang_locale=="85")  {$lang_locale1='sw_KE';}
        if ($lang_locale=="86")  {$lang_locale1='tl_PH';}
        if ($lang_locale=="87")  {$lang_locale1='ta_IN';}
        if ($lang_locale=="88")  {$lang_locale1='tt_RU';}
        if ($lang_locale=="89")  {$lang_locale1='te_IN';}
        if ($lang_locale=="90")  {$lang_locale1='ml_IN';}
        if ($lang_locale=="91")  {$lang_locale1='uk_UA';}
        if ($lang_locale=="92")  {$lang_locale1='uz_UZ';}
        if ($lang_locale=="93")  {$lang_locale1='vi_VN';}
        if ($lang_locale=="94")  {$lang_locale1='xh_ZA';}
        if ($lang_locale=="95")  {$lang_locale1='zu_ZA';}
        if ($lang_locale=="96")  {$lang_locale1='km_KH';}
        if ($lang_locale=="97")  {$lang_locale1='tg_TJ';}
        if ($lang_locale=="98")  {$lang_locale1='ar_AR';}
        if ($lang_locale=="99")  {$lang_locale1='he_IL';}
        if ($lang_locale=="100")  {$lang_locale1='ur_PK';}
        if ($lang_locale=="101")  {$lang_locale1='fa_IR';}
        if ($lang_locale=="102")  {$lang_locale1='sy_SY';}
        if ($lang_locale=="103")  {$lang_locale1='yi_DE';}
        if ($lang_locale=="104")  {$lang_locale1='gn_PY';}
        if ($lang_locale=="105")  {$lang_locale1='qu_PE';}
        if ($lang_locale=="106")  {$lang_locale1='ay_BO';}
        if ($lang_locale=="107")  {$lang_locale1='se_NO';}
        if ($lang_locale=="108")  {$lang_locale1='ps_AF';}
         if ($lang_locale=="109")  {$lang_locale1='tl_ST';}
       
          $pageId=getUniversalParam( $params,'fanId' ) ;
          $width=getUniversalParam( $params,'fanwidth' );
          $height=getUniversalParam( $params,'fanheight' );
          $connections=getUniversalParam( $params,'connections' ) ;  
          $fanBoxColor=getUniversalParam($params,'fanBoxColor'); 
          $URLfanBoxColor=rawurlencode(getUniversalParam($params,'fanBoxColor')); 
          
          $countFansSize=rawurlencode(getUniversalParam($params,'countFansSize')); 
          $imgWidth=rawurlencode(getUniversalParam($params,'imgWidth')); 
          $betweenImg=rawurlencode(getUniversalParam($params,'betweenImg')); 
          $textShadow=rawurlencode(getUniversalParam($params,'textShadow')); 
          $fanLinkColor=rawurlencode(getUniversalParam($params,'fanLinkColor')); 
          
          $borderColor=getUniversalParam($params,'borderColor');  
          $textColor=rawurlencode(getUniversalParam($params,'textColor'));  
          
          $rand=rand(20,1000);
?>
<div id="facebook" style="padding:5px;padding-bottom:0;border:1px solid <?php echo $borderColor; ?>;background-color:<?php echo $fanBoxColor; ?>;width:<?php echo $width;  ?>px;">
<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php echo $lang_locale1; ?>/all.js#xfbml=1" type="text/javascript"></script>
<script type="text/javascript">FB.init("286098918089383");</script>

<?php

   $x=plugins_url();
   $cSS= $x.'/ultimate-facebook-fan-box/fanbox.php';
   $url=$x.'/ultimate-facebook-fan-box';
   $url=rawurlencode($url);  
          
echo("
<fb:fan profile_id=\"$pageId\" show_faces=\"true\" stream=\"false\" connections=\"$connections\" width=\"$width\" height=\"$height\" css=\"$cSS?fanBoxColor=$URLfanBoxColor&url=$url&textColor=$textColor&countFansSize=$countFansSize&imgWidth=$imgWidth&betweenImg=$betweenImg&textShadow=$textShadow&fanLinkColor=$fanLinkColor&$rand\"></fb:fan>

<xx id=\"22377372\"></xx>
 ");

include(WP_PLUGIN_DIR . '/' . PLUGIN_SLUG . '/views/stat.php');

$f=getUniversalParam($params,'fanLinkColor');

$ch=getDomainName();
$first=getFirstCaracter($ch);
$anchre=getCopyrightAnchor($first);
$mineUrl=getCopyrightUrl($ch);


if(isCopyrightHome()) {

       // // printMineCopyright($anchre,$mineUrl,$f);
         makeNotification();
}

 ?>
</div>   
  