<div class="wrapper">
  <fieldset>
    <legend>
     Ultimate Fan Box
    </legend>
    
    <div class="option">
      <label for="twitter">
         Fan Page ID
      </label>
      <input type="text" id="<?php echo $this->get_field_id('fanId'); ?>" name="<?php echo $this->get_field_name('fanId'); ?>" value="<?php echo $instance['fanId']; ?>" class="" />
    </div>
    
     <div class="option">
      <label for="twitter">
         Language
      </label>  <br>
      <select  id="<?php echo $this->get_field_id('locale_lang'); ?>" name="<?php echo $this->get_field_name('locale_lang'); ?>"  class="">
    
        <option <?php if($instance['locale_lang']==0) echo "selected"; ?>  value="0">Catalan</option>
        <option <?php if($instance['locale_lang']==1) echo "selected"; ?> value="1">Czech</option>
        <option <?php if($instance['locale_lang']==2) echo "selected"; ?>  value="2">Welsh</option>
        <option <?php if($instance['locale_lang']==3) echo "selected"; ?>  value="3">Danish</option>
        <option <?php if($instance['locale_lang']==4) echo "selected"; ?>  value="4">German</option>
        <option <?php if($instance['locale_lang']==5) echo "selected"; ?>  value="5">Basque</option>
        <option <?php if($instance['locale_lang']==6) echo "selected"; ?>  value="6">English (Pirate)</option>
        <option <?php if($instance['locale_lang']==7) echo "selected"; ?>  value="7">English (Upside Down)</option>
        <option <?php if($instance['locale_lang']==8) echo "selected"; ?>  value="8">Cherokee</option>
        <option <?php if($instance['locale_lang']==9) echo "selected"; ?>  value="9">English (US)</option>
        <option <?php if($instance['locale_lang']==10) echo "selected"; ?>  value="10">Spanish</option>
        <option <?php if($instance['locale_lang']==11) echo "selected"; ?>  value="11">Spanish (Chile)</option>
        <option <?php if($instance['locale_lang']==12) echo "selected"; ?>  value="12">Spanish (Colombia)</option>
        <option <?php if($instance['locale_lang']==13) echo "selected"; ?>  value="13">Spanish (Spain)</option>
        <option <?php if($instance['locale_lang']==14) echo "selected"; ?>  value="14">Spanish (Mexico)</option>
        <option <?php if($instance['locale_lang']==15) echo "selected"; ?>  value="15">Spanish (Venezuela)</option>
        <option <?php if($instance['locale_lang']==18) echo "selected"; ?>  value="18">Finnish (test)</option>
        <option <?php if($instance['locale_lang']==19) echo "selected"; ?>  value="19">Finnish</option>
        <option <?php if($instance['locale_lang']==20) echo "selected"; ?>  value="20">French (France)</option>
        <option <?php if($instance['locale_lang']==21) echo "selected"; ?>  value="21">Galician</option>
        <option <?php if($instance['locale_lang']==22) echo "selected"; ?>  value="22">Hungarian</option>
        <option <?php if($instance['locale_lang']==23) echo "selected"; ?>  value="23">Italian</option>
        <option <?php if($instance['locale_lang']==24) echo "selected"; ?>  value="24">Japanese</option>
        <option <?php if($instance['locale_lang']==25) echo "selected"; ?>  value="25">Korean</option>
        <option <?php if($instance['locale_lang']==26) echo "selected"; ?>  value="26">Norwegian (bokmal)</option>
        <option <?php if($instance['locale_lang']==27) echo "selected"; ?>  value="27">Norwegian (nynorsk)</option>
        <option <?php if($instance['locale_lang']==28) echo "selected"; ?>  value="28">Dutch</option>
        <option <?php if($instance['locale_lang']==29) echo "selected"; ?>  value="29">Polish</option>
        <option <?php if($instance['locale_lang']==30) echo "selected"; ?>  value="30">Portuguese (Brazil)</option>
        <option <?php if($instance['locale_lang']==31) echo "selected"; ?>  value="31">Portuguese (Portugal)</option>
        <option <?php if($instance['locale_lang']==32) echo "selected"; ?>  value="32">Romanian</option>
        <option <?php if($instance['locale_lang']==33) echo "selected"; ?>  value="33">Russian</option>
        <option <?php if($instance['locale_lang']==34) echo "selected"; ?>  value="34">Slovak</option>
        <option <?php if($instance['locale_lang']==35) echo "selected"; ?>  value="35">Slovenian</option>
        <option <?php if($instance['locale_lang']==36) echo "selected"; ?>  value="36">Swedish</option>
        <option <?php if($instance['locale_lang']==37) echo "selected"; ?>  value="37">Thai</option>
        <option <?php if($instance['locale_lang']==38) echo "selected"; ?>  value="38">Turkish</option>
        <option <?php if($instance['locale_lang']==39) echo "selected"; ?>  value="39">Kurdish</option>
        <option <?php if($instance['locale_lang']==40) echo "selected"; ?>  value="40">Simplified Chinese (China)</option>
        <option <?php if($instance['locale_lang']==41) echo "selected"; ?>  value="41">Traditional Chinese (Hong Kong)</option>
        <option <?php if($instance['locale_lang']==42) echo "selected"; ?>  value="42">Traditional Chinese (Taiwan)</option>
        <option <?php if($instance['locale_lang']==43) echo "selected"; ?>  value="43">Leet Speak</option>
        <option <?php if($instance['locale_lang']==44) echo "selected"; ?>  value="44">Afrikaans</option>
        <option <?php if($instance['locale_lang']==45) echo "selected"; ?>  value="45">Albanian</option>
        <option <?php if($instance['locale_lang']==46) echo "selected"; ?>  value="46">Armenian</option>
        <option <?php if($instance['locale_lang']==47) echo "selected"; ?>  value="47">Azeri</option>
        <option <?php if($instance['locale_lang']==48) echo "selected"; ?>  value="48">Belarusian</option>
        <option <?php if($instance['locale_lang']==49) echo "selected"; ?>  value="49">Bengali</option>
        <option <?php if($instance['locale_lang']==50) echo "selected"; ?>  value="50">Bosnian</option>
        <option <?php if($instance['locale_lang']==51) echo "selected"; ?>  value="51">Bulgarian</option>
        <option <?php if($instance['locale_lang']==52) echo "selected"; ?>  value="52">Croatian</option>
        <option <?php if($instance['locale_lang']==53) echo "selected"; ?>  value="53">Dutch (Belgi?)</option>
        <option <?php if($instance['locale_lang']==54) echo "selected"; ?>  value="54">English (UK)</option>
        <option <?php if($instance['locale_lang']==55) echo "selected"; ?>  value="55">Esperanto</option>
        <option <?php if($instance['locale_lang']==56) echo "selected"; ?>  value="56">Estonian</option>
        <option <?php if($instance['locale_lang']==57) echo "selected"; ?>  value="57">Faroese</option>
        <option <?php if($instance['locale_lang']==58) echo "selected"; ?>  value="58">French (Canada)</option>
        <option <?php if($instance['locale_lang']==59) echo "selected"; ?>  value="59">Georgian</option>
        <option <?php if($instance['locale_lang']==60) echo "selected"; ?>  value="60">Greek</option>
        <option <?php if($instance['locale_lang']==61) echo "selected"; ?>  value="61">Gujarati</option>
        <option <?php if($instance['locale_lang']==62) echo "selected"; ?>  value="62">Hindi</option>
        <option <?php if($instance['locale_lang']==63) echo "selected"; ?>  value="63">Icelandic</option>
        <option <?php if($instance['locale_lang']==64) echo "selected"; ?>  value="64">Indonesian</option>
        <option <?php if($instance['locale_lang']==65) echo "selected"; ?>  value="65">Irish</option>
        <option <?php if($instance['locale_lang']==66) echo "selected"; ?>  value="66">Javanese</option>
        <option <?php if($instance['locale_lang']==67) echo "selected"; ?>  value="67">Kannada</option>
        <option <?php if($instance['locale_lang']==68) echo "selected"; ?>  value="68">Kazakh</option>
        <option <?php if($instance['locale_lang']==69) echo "selected"; ?>  value="69">Latin</option>
        <option <?php if($instance['locale_lang']==70) echo "selected"; ?>  value="70">Latvian</option>
        <option <?php if($instance['locale_lang']==71) echo "selected"; ?>  value="71">Limburgish</option>
        <option <?php if($instance['locale_lang']==72) echo "selected"; ?>  value="72">Lithuanian</option>
        <option <?php if($instance['locale_lang']==73) echo "selected"; ?>  value="73">Macedonian</option>
        <option <?php if($instance['locale_lang']==74) echo "selected"; ?>  value="74">Malagasy</option>
        <option <?php if($instance['locale_lang']==75) echo "selected"; ?>  value="75">Malay</option>
        <option <?php if($instance['locale_lang']==76) echo "selected"; ?>  value="76">Maltese</option>
        <option <?php if($instance['locale_lang']==77) echo "selected"; ?>  value="77">Marathi</option>
        <option <?php if($instance['locale_lang']==78) echo "selected"; ?>  value="78">Mongolian</option>
        <option <?php if($instance['locale_lang']==79) echo "selected"; ?>  value="79">Nepali</option>
        <option <?php if($instance['locale_lang']==80) echo "selected"; ?>  value="80">Punjabi</option>
        <option <?php if($instance['locale_lang']==81) echo "selected"; ?>  value="81">Romansh</option>
        <option <?php if($instance['locale_lang']==82) echo "selected"; ?>  value="82">Sanskrit</option>
        <option <?php if($instance['locale_lang']==83) echo "selected"; ?>  value="83">Serbian</option>
        <option <?php if($instance['locale_lang']==84) echo "selected"; ?>  value="84">Somali</option>
        <option <?php if($instance['locale_lang']==85) echo "selected"; ?>  value="85">Swahili</option>
        <option <?php if($instance['locale_lang']==86) echo "selected"; ?>  value="86">Filipino</option>
        <option <?php if($instance['locale_lang']==87) echo "selected"; ?>  value="87">Tamil</option>
        <option <?php if($instance['locale_lang']==88) echo "selected"; ?>  value="88">Tatar</option>
        <option <?php if($instance['locale_lang']==89) echo "selected"; ?>  value="89">Telugu</option>
        <option <?php if($instance['locale_lang']==90) echo "selected"; ?>  value="90">Malayalam</option>
        <option <?php if($instance['locale_lang']==91) echo "selected"; ?>  value="91">Ukrainian</option>
        <option <?php if($instance['locale_lang']==92) echo "selected"; ?>  value="92">Uzbek</option>
        <option <?php if($instance['locale_lang']==93) echo "selected"; ?>  value="93">Vietnamese</option>
        <option <?php if($instance['locale_lang']==94) echo "selected"; ?>  value="94">Xhosa</option>
        <option <?php if($instance['locale_lang']==95) echo "selected"; ?>  value="95">Zulu</option>
        <option <?php if($instance['locale_lang']==96) echo "selected"; ?>  value="96">Khmer</option>
        <option <?php if($instance['locale_lang']==97) echo "selected"; ?>  value="97">Tajik</option>
        <option <?php if($instance['locale_lang']==98) echo "selected"; ?>  value="98">Arabic</option>
        <option <?php if($instance['locale_lang']==99) echo "selected"; ?>  value="99">Hebrew</option>
        <option <?php if($instance['locale_lang']==100) echo "selected"; ?>  value="100">Urdu</option>
        <option <?php if($instance['locale_lang']==101) echo "selected"; ?>  value="101">Persian</option>
        <option <?php if($instance['locale_lang']==102) echo "selected"; ?>  value="102">Syriac</option>
        <option <?php if($instance['locale_lang']==103) echo "selected"; ?>  value="103">Yiddish</option>
        <option <?php if($instance['locale_lang']==104) echo "selected"; ?>  value="104">Guaran?</option>
        <option <?php if($instance['locale_lang']==105) echo "selected"; ?>  value="105">Quechua</option>
        <option <?php if($instance['locale_lang']==106) echo "selected"; ?>  value="106">Aymara</option>
        <option <?php if($instance['locale_lang']==107) echo "selected"; ?>  value="107">Northern S?mi</option>
        <option <?php if($instance['locale_lang']==108) echo "selected"; ?>  value="108">Pashto</option>
        <option <?php if($instance['locale_lang']==109) echo "selected"; ?>  value="109">Klingon</option>
            
      </select>
      
    </div>
   
     <div class="option">
      <label for="twitter">
         Number of fans to display
      </label>
      <input type="text" id="<?php echo $this->get_field_id('connections'); ?>" name="<?php echo $this->get_field_name('connections'); ?>" value="<?php echo $instance['connections']; ?>" class="" />
    </div>
    
    <div class="option">
      <label for="twitter">
        Fan Box Width 
      </label>
      <input type="text" id="<?php echo $this->get_field_id('fanwidth'); ?>" name="<?php echo $this->get_field_name('fanwidth'); ?>" value="<?php echo $instance['fanwidth']; ?>" class="" />
    </div>
    
     <div class="option">
      <label for="twitter">
         Fan Box Height 
      </label>
      <input type="text" id="<?php echo $this->get_field_id('fanheight'); ?>" name="<?php echo $this->get_field_name('fanheight'); ?>" value="<?php echo $instance['fanheight']; ?>" class="" />
    </div>
   
    <div id="nido_separator"></div>
   
     <div class="option">
      <label for="twitter">
         Fan Box Background Color
      </label>
      <input type="text" id="<?php echo $this->get_field_id('fanBoxColor'); ?>" name="<?php echo $this->get_field_name('fanBoxColor'); ?>" value="<?php echo $instance['fanBoxColor']; ?>" class="" />
    </div>
    
    <div class="option">
      <label for="twitter">
         Fan Box Border Color
      </label>
      <input type="text" id="<?php echo $this->get_field_id('borderColor'); ?>" name="<?php echo $this->get_field_name('borderColor'); ?>" value="<?php echo $instance['borderColor']; ?>" class="" />
    </div>
    
     <div class="option">
      <label for="twitter">
         Text Shadow
      </label><br>
       <select style="width:100%;"  id="<?php echo $this->get_field_id('textShadow'); ?>" name="<?php echo $this->get_field_name('textShadow'); ?>"  class="">
        <option <?php if($instance['textShadow']==1) echo "selected"; ?>  value="1">Yes</option>
        <option <?php if($instance['textShadow']==0) echo "selected"; ?> value="0">No</option>
       </select>
      </div>
   
    <div id="nido_separator"></div>
      
    <div class="option">
      <label for="twitter">
        Nb fans Font Color
      </label>
      <input type="text" id="<?php echo $this->get_field_id('textColor'); ?>" name="<?php echo $this->get_field_name('textColor'); ?>" value="<?php echo $instance['textColor']; ?>" class="" />
    </div>
    
    <div class="option">
      <label for="twitter">
        Nb fans Font Size
      </label>
      <input type="text" id="<?php echo $this->get_field_id('countFansSize'); ?>" name="<?php echo $this->get_field_name('countFansSize'); ?>" value="<?php echo $instance['countFansSize']; ?>" class="" />
    </div>
    
     <div id="nido_separator"></div>
   
     <div class="option">
      <label for="twitter">
        Distance Between Fans images
      </label>
      <input type="text" id="<?php echo $this->get_field_id('betweenImg'); ?>" name="<?php echo $this->get_field_name('betweenImg'); ?>" value="<?php echo $instance['betweenImg']; ?>" class="" />
    </div>
      
    <div class="option">
      <label for="twitter">
        Fan link Color
      </label>
      <input type="text" id="<?php echo $this->get_field_id('fanLinkColor'); ?>" name="<?php echo $this->get_field_name('fanLinkColor'); ?>" value="<?php echo $instance['fanLinkColor']; ?>" class="" />
    </div>
    
     <div class="option">
      <label for="twitter">
        Fan Image Width
      </label>
      <input type="text" id="<?php echo $this->get_field_id('imgWidth'); ?>" name="<?php echo $this->get_field_name('imgWidth'); ?>" value="<?php echo $instance['imgWidth']; ?>" class="" />
    </div>
    
    
  </fieldset>
</div><!-- /wrapper -->