<?php

header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');

echo '<config>
   <ova.title>
       Video Ads - Poztmo.Com
   </ova.title>
   <ova.json>
       {
          "debug": {
              "levels": "fatal, config, vast_template, vpaid, http_calls, playlist, api"
          },

          "ads": {
              "skipAd": {
                  "enabled": false,
                  "showAfterSeconds": 6
              },
              "providers": {
                  "enforceSettingSubscribeRTMP":true,
                  "subscribeRTMP": false
              },
              "schedule": [
                  {
                      "position": "pre-roll",
                      "tag": "';
$random = substr(number_format(time() * rand(),0,'',''),0,10);
$num = Rand (1,5);
switch ($num)
 {
case 1:
echo "http://serve.vdopia.com/adserver/vastxml/f7f83d93dff05850bdb6e439ba27a8a0/preroll/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://www.indostreamix.com;rand=$random";
break;
case 2:
echo "http://serve.vdopia.com/adserver/vastxml/cdbd302099c27a30024cf223351f4223/preroll/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://www.indostreamix.com;rand=$random";
break;
case 3:
echo "http://serve.vdopia.com/adserver/vastxml/cdbd302099c27a30024cf223351f4223/preroll/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://www.indostreamix.com;rand=$random";
break;
case 4:
echo "http://delivery.ambient-platform.com/247/xmlvideoad/zid_1393486702/wid_1393486500/type_inline/cb_[timestamp]";
break;
default:
echo "http://serve.vdopia.com/adserver/vastxml/f7f83d93dff05850bdb6e439ba27a8a0/preroll/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://www.indostreamix.com;rand=$random";
break;
}
echo '"                 }
              ]
          }
       }
   </ova.json>
</config>';
?>