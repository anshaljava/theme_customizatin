<?php
if(!defined('ABSPATH')) exit();

if(!isset($navigations)) $navigations = array();

$navigations[] = array(
	'id' => 1000,
	'handle' => 'hesperiden',
	'type' => 'arrows',
	'name' => 'Hesperiden',
	'css' => ".hesperiden.tparrows {\n\tcursor:pointer;\n\tbackground:##bg-color##;\n\twidth:##bg-size##px;\n\theight:##bg-size##px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n    border-radius: 50%;\n}\n.hesperiden.tparrows.rs-touchhover {\n\tbackground:##hover-bg-color##;\n}\n.hesperiden.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:##arrow-size##px;\n\tcolor:##arrow-color##;\n\tdisplay:block;\n\tline-height: ##bg-size##px;\n\ttext-align: center;\n}\n.hesperiden.tparrows.tp-leftarrow:before {\n\tcontent: '##left-icon##';\n    margin-left:-3px;\n}\n.hesperiden.tparrows.tp-rightarrow:before {\n\tcontent: '##right-icon##';\n    margin-right:-3px;\n}",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bg-color":{"title":"BG-Color","type":"color","data":"rgba(0,0,0,0.5)"},"bg-size":{"title":"BG-Size","type":"custom","data":"40"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"20"},"hover-bg-color":{"title":"Hover-BG-Color","type":"color","data":"#000000"},"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e82c"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e82d"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1002,
	'handle' => 'hades',
	'type' => 'arrows',
	'name' => 'Hades',
	'css' => ".hades.tparrows {\n\tcursor:pointer;\n\tbackground:##bg##;\n\twidth:100px;\n\theight:100px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n}\n\n.hades.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:30px;\n\tcolor:##acolor##;\n\tdisplay:block;\n\tline-height: 100px;\n\ttext-align: center;\n  transition: background 0.3s, color 0.3s;\n}\n.hades.tparrows.tp-leftarrow:before {\n\tcontent: '##left-icon##';\n}\n.hades.tparrows.tp-rightarrow:before {\n\tcontent: '##right-icon##';\n}\n\n.hades.tparrows.rs-touchhover:before {\n   color:##harrow##;\n   background:##hbg##;\n }\n.hades .tp-arr-allwrapper {\n  position:absolute;\n  left:100%;\n  top:0px;\n  background:#888; \n  width:100px;height:100px;\n  -webkit-transition: all 0.3s;\n  transition: all 0.3s;\n  -ms-filter: 'progid:dximagetransform.microsoft.alpha(opacity=0)';\n  filter: alpha(opacity=0);\n  -moz-opacity: 0.0;\n  -khtml-opacity: 0.0;\n  opacity: 0.0;\n  -webkit-transform: rotatey(-90deg);\n  transform: rotatey(-90deg);\n  -webkit-transform-origin: 0% 50%;\n  transform-origin: 0% 50%;\n}\n.hades.tp-rightarrow .tp-arr-allwrapper {\n   left:auto;\n   right:100%;\n   -webkit-transform-origin: 100% 50%;\n  transform-origin: 100% 50%;\n   -webkit-transform: rotatey(90deg);\n  transform: rotatey(90deg);\n}\n\n.hades:hover .tp-arr-allwrapper {\n   -ms-filter: 'progid:dximagetransform.microsoft.alpha(opacity=100)';\n  filter: alpha(opacity=100);\n  -moz-opacity: 1;\n  -khtml-opacity: 1;\n  opacity: 1;  \n    -webkit-transform: rotatey(0deg);\n  transform: rotatey(0deg);\n\n }\n    \n.hades .tp-arr-iwrapper {\n}\n.hades .tp-arr-imgholder {\n  background-size:cover;\n  position:absolute;\n  top:0px;left:0px;\n  width:100%;height:100%;\n}\n.hades .tp-arr-titleholder {\n}\n.hades .tp-arr-subtitleholder {\n}\n",
	'markup' => "<div class=\"tp-arr-allwrapper\">\n\t<div class=\"tp-arr-imgholder\"></div>\n</div>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bg":{"title":"Background","type":"color","data":"rgba(0,0,0,0.25)"},"acolor":{"title":"Arrow","type":"color","data":"#ffffff"},"harrow":{"title":"Hover-Arrow","type":"color","data":"rgba(0,0,0,0.5)"},"hbg":{"title":"Hover-Background","type":"color","data":"#ffffff"},"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e824"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1003,
	'handle' => 'ares',
	'type' => 'arrows',
	'name' => 'Ares',
	'css' => ".ares.tparrows {\n\tcursor:pointer;\n\tbackground:##bg-color##;\n\tmin-width:##bg-size##px;\n    min-height:##bg-size##px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n    border-radius:50%;\n}\n.ares.tparrows.rs-touchhover {\n}\n.ares.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:##arrow-size##px;\n\tcolor:##arrowcolor##;\n\tdisplay:block;\n\tline-height: ##bg-size##px;\n\ttext-align: center;\n    -webkit-transition: color 0.3s;\n    -moz-transition: color 0.3s;\n    transition: color 0.3s;\n    z-index:2;\n    position:relative;\n}\n.ares.tparrows.tp-leftarrow:before {\n\tcontent: '##left-icon##';\n}\n.ares.tparrows.tp-rightarrow:before {\n\tcontent: '##right-icon##';\n}\n.ares.tparrows.rs-touchhover:before {\n color:##hover-arrow-color##;\n      }\n.tp-title-wrap { \n  position:absolute;\n  z-index:1;\n  display:inline-block;\n  background:##bg-color##;\n  min-height:##bg-size##px;\n  line-height:##bg-size##px;\n  top:0px;\n  margin-left:30px;\n  border-radius:0px 30px 30px 0px;\n  overflow:hidden;\n  -webkit-transition: -webkit-transform 0.3s;\n  transition: transform 0.3s;\n  transform:scalex(0);  \n  -webkit-transform:scalex(0);  \n  transform-origin:0% 50%; \n   -webkit-transform-origin:0% 50%;\n}\n .ares.tp-rightarrow .tp-title-wrap { \n   right:0px;\n   margin-right:30px;margin-left:0px;\n   -webkit-transform-origin:100% 50%;\nborder-radius:30px 0px 0px 30px;\n }\n.ares.tparrows.rs-touchhover .tp-title-wrap {\n\ttransform:scalex(1) scaley(1);\n  \t-webkit-transform:scalex(1) scaley(1);\n}\n.ares .tp-arr-titleholder {\n  position:relative;\n  -webkit-transition: -webkit-transform 0.3s;\n  transition: transform 0.3s;\n  transform:translatex(200px);  \n  text-transform:uppercase;\n  color:##hover-title-color##;\n  font-weight:400;\n  font-size:14px;\n  line-height:60px;\n  white-space:nowrap;\n  padding:0px 20px;\n  margin-left:10px;\n  opacity:0;\n}\n\n.ares.tp-rightarrow .tp-arr-titleholder {\n   transform:translatex(-200px); \n   margin-left:0px; margin-right:10px;\n      }\n\n.ares.tparrows.rs-touchhover .tp-arr-titleholder {\n   transform:translatex(0px);\n   -webkit-transform:translatex(0px);\n  transition-delay: 0.1s;\n  opacity:1;\n}",
	'markup' => "<div class=\"tp-title-wrap\">\n\t<span class=\"tp-arr-titleholder\">{{title}}</span>\n </div>\n",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"bg-color":{"title":"BG-Color","type":"color","data":"#ffffff"},"bg-size":{"title":"Size","type":"custom","data":"60"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"25"},"hover-arrow-color":{"title":"Hover-Arrow","type":"color","data":"#000000"},"hover-title-color":{"title":"Hover-Title","type":"color","data":"#000000"},"arrowcolor":{"title":"Arrow-Color","type":"color","data":"#aaaaaa"},"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e81f"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e81e"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1004,
	'handle' => 'hebe',
	'type' => 'arrows',
	'name' => 'Hebe',
	'css' => ".hebe.tparrows {\n  cursor:pointer;\n  background:##back-color##;\n  min-width:##back-size##px;\n  min-height:##back-size##px;\n  position:absolute;\n  display:block;\n  z-index:1000;\n}\n.hebe.tparrows.rs-touchhover {\n}\n.hebe.tparrows:before {\n  font-family: 'revicons';\n  font-size:##arrow-size##px;\n  color:##arrow-color##;\n  display:block;\n  line-height: ##back-size##px;\n  text-align: center;\n  -webkit-transition: color 0.3s;\n  -moz-transition: color 0.3s;\n  transition: color 0.3s;\n  z-index:2;\n  position:relative;\n   background:##back-color##;\n  min-width:##back-size##px;\n    min-height:##back-size##px;\n}\n.hebe.tparrows.tp-leftarrow:before {\n  content: '##left-icon##';\n}\n.hebe.tparrows.tp-rightarrow:before {\n  content: '##right-icon##';\n}\n.hebe.tparrows.rs-touchhover:before {\n color:#000;\n      }\n.tp-title-wrap { \n  position:absolute;\n  z-index:0;\n  display:inline-block;\n  background:#000;\n  background:##title-wrap-color##;\n  min-height:60px;\n  line-height:60px;\n  top:-10px;\n  margin-left:0px;\n  -webkit-transition: -webkit-transform 0.3s;\n  transition: transform 0.3s;\n  transform:scalex(0);  \n  -webkit-transform:scalex(0);  \n  transform-origin:0% 50%; \n   -webkit-transform-origin:0% 50%;\n}\n .hebe.tp-rightarrow .tp-title-wrap { \n   right:0px;\n   -webkit-transform-origin:100% 50%;\n }\n.hebe.tparrows.rs-touchhover .tp-title-wrap {\n  transform:scalex(1);\n  -webkit-transform:scalex(1);\n}\n.hebe .tp-arr-titleholder {\n  position:relative;\n  text-transform:uppercase;\n  color:##title-color##;\n  font-weight:600;\n  font-size:##title-size##px;\n  line-height:##image-size##px;\n  white-space:nowrap;\n  padding:0px 20px 0px ##image-size##px;\n}\n\n.hebe.tp-rightarrow .tp-arr-titleholder {\n   margin-left:0px; \n   padding:0px ##image-size##px 0px 20px;\n }\n\n.hebe.tparrows.rs-touchhover .tp-arr-titleholder {\n   transform:translatex(0px);\n   -webkit-transform:translatex(0px);\n  transition-delay: 0.1s;\n  opacity:1;\n}\n\n.hebe .tp-arr-imgholder{\n      width:##image-size##px;\n      height:##image-size##px;\n      position:absolute;\n      left:100%;\n      display:block;\n      background-size:cover;\n      background-position:center center;\n  \t top:0px; right:-##image-size##px;\n    }\n.hebe.tp-rightarrow .tp-arr-imgholder{\n        right:auto;left:-##image-size##px;\n      }",
	'markup' => "<div class=\"tp-title-wrap\">\n\t<span class=\"tp-arr-titleholder\">{{title}}</span>\n    <span class=\"tp-arr-imgholder\"></span>\n </div>\n",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"back-size":{"title":"BG-Size","type":"custom","data":"70"},"back-color":{"title":"Background","type":"color","data":"#ffffff"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"rgba(0,0,0,0.5)"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"30"},"image-size":{"title":"Image-Size","type":"custom","data":"90"},"title-wrap-color":{"title":"Title-Wrap-BG-Color","type":"color","data":"rgba(0,0,0,0.75)"},"title-color":{"title":"Title-Color","type":"color","data":"#ffffff"},"title-size":{"title":"Title-Size","type":"custom","data":"12"},"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e824"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1005,
	'handle' => 'hermes',
	'type' => 'arrows',
	'name' => 'Hermes',
	'css' => ".hermes.tparrows {\n\tcursor:pointer;\n\tbackground:##back-color##;\n\twidth:##width##px;\n\theight:##height##px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n}\n\n.hermes.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:##arrow-size##px;\n\tcolor:##arrow-color##;\n\tdisplay:block;\n\tline-height: ##height##px;\n\ttext-align: center;\n    transform:translatex(0px);\n    -webkit-transform:translatex(0px);\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n}\n.hermes.tparrows.tp-leftarrow:before {\n\tcontent: '##left-icon##';\n}\n.hermes.tparrows.tp-rightarrow:before {\n\tcontent: '##right-icon##';\n}\n.hermes.tparrows.tp-leftarrow.rs-touchhover:before {\n    transform:translatex(-20px);\n    -webkit-transform:translatex(-20px);\n     opacity:0;\n}\n.hermes.tparrows.tp-rightarrow.rs-touchhover:before {\n    transform:translatex(20px);\n    -webkit-transform:translatex(20px);\n     opacity:0;\n}\n\n.hermes .tp-arr-allwrapper {\n    overflow:hidden;\n    position:absolute;\n\twidth:##wrapper-width##px;\n    height:##wrapper-height##px;\n    top:0px;\n    left:0px;\n    visibility:hidden;\n      -webkit-transition: -webkit-transform 0.3s 0.3s;\n  transition: transform 0.3s 0.3s;\n  -webkit-perspective: 1000px;\n  perspective: 1000px;\n    }\n.hermes.tp-rightarrow .tp-arr-allwrapper {\n   right:0px;left:auto;\n      }\n.hermes.tparrows.rs-touchhover .tp-arr-allwrapper {\n   visibility:visible;\n          }\n.hermes .tp-arr-imgholder {\n  width:##wrapper-width##px;position:absolute;\n  left:0px;top:0px;height:##height##px;\n  transform:translatex(-##wrapper-width##px);\n  -webkit-transform:translatex(-##wrapper-width##px);\n  transition:all 0.3s;\n  transition-delay:0.3s;\n}\n.hermes.tp-rightarrow .tp-arr-imgholder{\n    transform:translatex(##wrapper-width##px);\n  -webkit-transform:translatex(##wrapper-width##px);\n      }\n  \n.hermes.tparrows.rs-touchhover .tp-arr-imgholder {\n   transform:translatex(0px);\n   -webkit-transform:translatex(0px);            \n}\n.hermes .tp-arr-titleholder {\n  top:##height##px;\n  width:##wrapper-width##px;\n  text-align:left; \n  display:block;\n  padding:0px 10px;\n  line-height:30px; background:#000;\n  background:##title-back-color##;\n  color:##title-font-color##;\n  font-weight:600; position:absolute;\n  font-size:##title-size##px;\n  white-space:nowrap;\n  letter-spacing:1px;\n  -webkit-transition: all 0.3s;\n  transition: all 0.3s;\n  -webkit-transform: rotatex(-90deg);\n  transform: rotatex(-90deg);\n  -webkit-transform-origin: 50% 0;\n  transform-origin: 50% 0;\n  box-sizing:border-box;\n\n}\n.hermes.tparrows.rs-touchhover .tp-arr-titleholder {\n    -webkit-transition-delay: 0.6s;\n  transition-delay: 0.6s;\n  -webkit-transform: rotatex(0deg);\n  transform: rotatex(0deg);\n}\n",
	'markup' => "<div class=\"tp-arr-allwrapper\">\n\t<div class=\"tp-arr-imgholder\"></div>\n\t<div class=\"tp-arr-titleholder\">{{title}}</div>\t\n</div>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"back-color":{"title":"Background","type":"color","data":"rgba(0,0,0,0.5)"},"width":{"title":"Width","type":"custom","data":"30"},"height":{"title":"Height","type":"custom","data":"110"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"15"},"wrapper-height":{"title":"Wrapper-Height","type":"custom","data":"140"},"wrapper-width":{"title":"Wrapper-Width","type":"custom","data":"180"},"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e824"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e825"},"title-size":{"title":"Title-Size","type":"custom","data":"12"},"title-back-color":{"title":"Title-Background","type":"color","data":"rgba(0,0,0,0.75)"},"title-font-color":{"title":"Title-Font-Color","type":"color","data":"#ffffff"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1006,
	'handle' => 'custom',
	'type' => 'arrows',
	'name' => 'Custom',
	'css' => ".custom.tparrows {\n\tcursor:pointer;\n\tbackground:#000;\n\tbackground:rgba(0,0,0,0.5);\n\twidth:40px;\n\theight:40px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n}\n.custom.tparrows.rs-touchhover {\n\tbackground:#000;\n}\n.custom.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:15px;\n\tcolor:#fff;\n\tdisplay:block;\n\tline-height: 40px;\n\ttext-align: center;\n}\n.custom.tparrows.tp-leftarrow:before {\n\tcontent: '##left-icon##';\n}\n.custom.tparrows.tp-rightarrow:before {\n\tcontent: '##right-icon##';\n}\n\n",
	'markup' => "",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"left-icon":{"title":"Left-Icon","type":"icon","data":"\\\\e824"},"right-icon":{"title":"Right-Icon","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1007,
	'handle' => 'hephaistos',
	'type' => 'arrows',
	'name' => 'Hephaistos',
	'css' => ".hephaistos.tparrows {\n\tcursor:pointer;\n\tbackground:##back-color##;\n\twidth:##back-size##px;\n\theight:##back-size##px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n    border-radius:50%;\n}\n.hephaistos.tparrows.rs-touchhover {\n\tbackground:##back-hover##;\n}\n.hephaistos.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:18px;\n\tcolor:##arrow-color##;\n\tdisplay:block;\n\tline-height: ##back-size##px;\n\ttext-align: center;\n}\n.hephaistos.tparrows.tp-leftarrow:before {\n\tcontent: '##left-arrow##';\n    margin-left:-2px;\n  \n}\n.hephaistos.tparrows.tp-rightarrow:before {\n\tcontent: '##right-arrow##';\n    margin-right:-2px;\n}\n\n",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"back-color":{"title":"Background","type":"color","data":"rgba(0,0,0,0.5)"},"back-size":{"title":"BG-Size","type":"custom","data":"40"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"back-hover":{"title":"Hover-Background","type":"color","data":"#000000"},"left-arrow":{"title":"Left-Arrow","type":"icon","data":"\\\\e82c"},"right-arrow":{"title":"Right-Arrow","type":"icon","data":"\\\\e82d"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1008,
	'handle' => 'persephone',
	'type' => 'arrows',
	'name' => 'Persephone',
	'css' => ".persephone.tparrows {\n\tcursor:pointer;\n\tbackground:##back-color##;\n\twidth:##back-size##px;\n\theight:##back-size##px;\n\tposition:absolute;\n\tdisplay:block;\n\tz-index:1000;\n    border:1px solid ##border-rgba##;\n}\n.persephone.tparrows.rs-touchhover {\n\tbackground:##back-hover##;\n}\n.persephone.tparrows:before {\n\tfont-family: 'revicons';\n\tfont-size:##arrow-size##px;\n\tcolor: ##arrow-color##;\n\tdisplay:block;\n\tline-height: ##back-size##px;\n\ttext-align: center;\n}\n.persephone.tparrows.tp-leftarrow:before {\n\tcontent: '##left-arrow##';\n}\n.persephone.tparrows.tp-rightarrow:before {\n\tcontent: '##right-arrow##\n';\n}\n\n",
	'markup' => "",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"back-color":{"title":"Background","type":"color","data":"rgba(201,201,201,0.75)"},"back-size":{"title":"Size","type":"custom","data":"40"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"15"},"back-hover":{"title":"Hover-Background","type":"color","data":"#000000"},"border-rgba":{"title":"Border","type":"color","data":"#ffffff"},"left-arrow":{"title":"Left-Arrow","type":"icon","data":"\\\\e824"},"right-arrow":{"title":"Right-Arrow","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1009,
	'handle' => 'erinyen',
	'type' => 'arrows',
	'name' => 'Erinyen',
	'css' => ".erinyen.tparrows {\n  cursor:pointer;\n  background:##back-color##;\n  min-width:##back-size##px;\n  min-height:##back-size##px;\n  position:absolute;\n  display:block;\n  z-index:1000;\n  border-radius:50%;   \n}\n\n.erinyen.tparrows:before {\n  font-family: 'revicons';\n  font-size:##arrow-size##px;\n  color:##arrow-color##;\n  display:block;\n  line-height:##back-size##px;\n  text-align: center;    \n  z-index:2;\n  position:relative;\n}\n.erinyen.tparrows.tp-leftarrow:before {\n  content: '##leftarrow##';\n}\n.erinyen.tparrows.tp-rightarrow:before {\n  content: '##right-arrow##';\n}\n\n.erinyen .tp-title-wrap { \n  position:absolute;\n  z-index:1;\n  display:inline-block;\n  background:rgba(0,0,0,0.5);\n  min-height:##back-size##px;\n  line-height:##back-size##px;\n  top:0px;\n  margin-left:0px;\n  border-radius:##title-wrap-border-radius##px;\n  overflow:hidden; \n  transition: opacity 0.3s;\n  -webkit-transition:opacity 0.3s;\n  -moz-transition:opacity 0.3s;\n  -webkit-transform: scale(0);\n  -moz-transform: scale(0);\n  transform: scale(0);  \n  visibility:hidden;\n  opacity:0;\n}\n\n.erinyen.tparrows.rs-touchhover .tp-title-wrap{\n  -webkit-transform: scale(1);\n  -moz-transform: scale(1);\n  transform: scale(1);\n  opacity:1;\n  visibility:visible;\n}\n        \n .erinyen.tp-rightarrow .tp-title-wrap { \n   right:0px;\n   margin-right:0px;margin-left:0px;\n   -webkit-transform-origin:100% 50%;\n  border-radius:##title-wrap-border-radius##px;\n  padding-right:20px;\n  padding-left:10px;\n }\n\n\n.erinyen.tp-leftarrow .tp-title-wrap { \n   padding-left:20px;\n  padding-right:10px;\n}\n\n.erinyen .tp-arr-titleholder {\n  letter-spacing: ##letter-spacing##px;\n   position:relative;\n  -webkit-transition: -webkit-transform 0.3s;\n  transition: transform 0.3s;\n  transform:translatex(200px);  \n  text-transform:uppercase;\n  color:##arrow-color##;\n  font-weight:600;\n  font-size:##font-size##px;\n  line-height:##back-size##px;\n  white-space:nowrap;\n  padding:0px 20px;\n  margin-left:11px;\n  opacity:0;  \n}\n\n.erinyen .tp-arr-imgholder {\n  width:100%;\n  height:100%;\n  position:absolute;\n  top:0px;\n  left:0px;\n  background-position:center center;\n  background-size:cover;\n    }\n .erinyen .tp-arr-img-over {\n   width:100%;\n  height:100%;\n  position:absolute;\n  top:0px;\n  left:0px;\n   background:##overlay-rgba##;\n }\n.erinyen.tp-rightarrow .tp-arr-titleholder {\n   transform:translatex(-200px); \n   margin-left:0px; margin-right:11px;\n      }\n\n.erinyen.tparrows.rs-touchhover .tp-arr-titleholder {\n   transform:translatex(0px);\n   -webkit-transform:translatex(0px);\n  transition-delay: 0.1s;\n  opacity:1;\n}",
	'markup' => "<div class=\"tp-title-wrap\">\n  \t<div class=\"tp-arr-imgholder\"></div>\n    <div class=\"tp-arr-img-over\"></div>\n\t<span class=\"tp-arr-titleholder\">{{title}}</span>\n </div>\n\n",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"back-color":{"title":"BG-RGBA","type":"color","data":"rgba(0,0,0,0.5)"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"back-size":{"title":"BG-Size","type":"custom","data":"70"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"20"},"font-size":{"title":"Title-Font-Size","type":"custom","data":"13"},"title-wrap-border-radius":{"title":"Title-Wrap-Border-Radius","type":"custom","data":"35"},"leftarrow":{"title":"Left-Arrow","type":"icon","data":"\\\\e824"},"right-arrow":{"title":"Right-Arrow","type":"icon","data":"\\\\e825"},"letter-spacing":{"title":"Letter-Spacing","type":"custom","data":"3"},"overlay-rgba":{"title":"Overlay","type":"color","data":"rgba(0,0,0,0.51)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1010,
	'handle' => 'zeus',
	'type' => 'arrows',
	'name' => 'Zeus',
	'css' => ".zeus.tparrows {\n  cursor:pointer;\n  min-width:##bg-size##px;\n  min-height:##bg-size##px;\n  position:absolute;\n  display:block;\n  z-index:1000;\n  border-radius:50%;   \n  overflow:hidden;\n  background:##bg-color##;\n}\n\n.zeus.tparrows:before {\n  font-family: 'revicons';\n  font-size:##arrow-size##px;\n  color:##arrow-color##;\n  display:block;\n  line-height: ##bg-size##px;\n  text-align: center;    \n  z-index:2;\n  position:relative;\n}\n.zeus.tparrows.tp-leftarrow:before {\n  content: '##left-arrow##';\n}\n.zeus.tparrows.tp-rightarrow:before {\n  content: '##right-arrow##';\n}\n\n.zeus .tp-title-wrap {\n  background:rgba(0,0,0,0.5);\n  width:100%;\n  height:100%;\n  top:0px;\n  left:0px;\n  position:absolute;\n  opacity:0;\n  transform:scale(0);\n  -webkit-transform:scale(0);\n   transition: all 0.3s;\n  -webkit-transition:all 0.3s;\n  -moz-transition:all 0.3s;\n   border-radius:50%;\n }\n.zeus .tp-arr-imgholder {\n  width:100%;\n  height:100%;\n  position:absolute;\n  top:0px;\n  left:0px;\n  background-position:center center;\n  background-size:cover;\n  border-radius:50%;\n  transform:translatex(-100%);\n  -webkit-transform:translatex(-100%);\n   transition: all 0.3s;\n  -webkit-transition:all 0.3s;\n  -moz-transition:all 0.3s;\n\n }\n.zeus.tp-rightarrow .tp-arr-imgholder {\n    transform:translatex(100%);\n  -webkit-transform:translatex(100%);\n      }\n.zeus.tparrows.rs-touchhover .tp-arr-imgholder {\n  transform:translatex(0);\n  -webkit-transform:translatex(0);\n  opacity:1;\n}\n      \n.zeus.tparrows.rs-touchhover .tp-title-wrap {\n  transform:scale(1);\n  -webkit-transform:scale(1);\n  opacity:1;\n}\n ",
	'markup' => "<div class=\"tp-title-wrap\">\n  \t<div class=\"tp-arr-imgholder\"></div>\n </div>\n",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bg-size":{"title":"BG-Size","type":"custom","data":"70"},"bg-color":{"title":"Background","type":"color","data":"rgba(0,0,0,0.1)"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"20"},"left-arrow":{"title":"Left-Arrow","type":"icon","data":"\\\\e824"},"right-arrow":{"title":"Right-Arrow","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1011,
	'handle' => 'metis',
	'type' => 'arrows',
	'name' => 'Metis',
	'css' => ".metis.tparrows {\n  background:##bg-color##;\n  padding:##padding##px;\n  transition:all 0.3s;\n  -webkit-transition:all 0.3s;\n  width:##size##px;\n  height:##size##px;\n  box-sizing:border-box;\n }\n \n .metis.tparrows.rs-touchhover {\n   background:##bg-hover-color##;\n }\n \n .metis.tparrows:before {\n  color:##arrow-color##;  \n   transition:all 0.3s;\n  -webkit-transition:all 0.3s;\n }\n \n .metis.tparrows.rs-touchhover:before {\n   transform:scale(1.5);\n  }\n ",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bg-color":{"title":"Background","type":"color","data":"#ffffff"},"size":{"title":"Size","type":"custom","data":"60"},"padding":{"title":"Padding","type":"custom","data":"10"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#000000"},"bg-hover-color":{"title":"Hover-Background","type":"color","data":"rgba(255,255,255,0.75)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1012,
	'handle' => 'dione',
	'type' => 'arrows',
	'name' => 'Dione',
	'css' => ".dione.tparrows {\n  color:#000;\n  height:100%;\n  width:##width##px;\n  background:transparent;\n  background:##bg-color##;\n  line-height:100%;\n  transition:all 0.3s;\n-webkit-transition:all 0.3s;\n}\n\n.dione.tparrows.rs-touchhover {\n background:##bg-color-hover##;\n }\n.dione .tp-arr-imgwrapper {\n width:##width##px;\n left:0px;\n position:absolute;\n height:100%;\n top:0px;\n overflow:hidden;\n }\n.dione.tp-rightarrow .tp-arr-imgwrapper {\nleft:auto;\nright:0px;\n}\n\n.dione .tp-arr-imgholder {\nbackground-position:center center;\nbackground-size:cover;\nwidth:##width##px;\nheight:100%;\ntop:0px;\nvisibility:hidden;\ntransform:translatex(-50px);\n-webkit-transform:translatex(-50px);\ntransition:all 0.3s;\n-webkit-transition:all 0.3s;\nopacity:0;\nleft:0px;\n}\n\n.dione.tparrows.tp-rightarrow .tp-arr-imgholder {\n  right:0px;\n  left:auto;\n  transform:translatex(50px);\n -webkit-transform:translatex(50px);\n}\n\n.dione.tparrows:before {\ncolor:##arrow-color##;\nposition:absolute;\nline-height:##arrow-size##px;\nmargin-left:-22px;\ntop:50%;\nleft:50%;\nfont-size:30px;\nmargin-top:-15px;\ntransition:all 0.3s;\n-webkit-transition:all 0.3s;\n}\n\n.dione.tparrows.tp-rightarrow:before {\nmargin-left:6px;\n}\n\n.dione.tparrows.rs-touchhover:before {\n  transform:translatex(-20px);\n-webkit-transform:translatex(-20px);\nopacity:0;\n}\n\n.dione.tparrows.tp-rightarrow.rs-touchhover:before {\n  transform:translatex(20px);\n-webkit-transform:translatex(20px);\n}\n\n.dione.tparrows.rs-touchhover .tp-arr-imgholder {\n transform:translatex(0px);\n-webkit-transform:translatex(0px);\nopacity:1;\nvisibility:visible;\n}\n\n",
	'markup' => "<div class=\"tp-arr-imgwrapper\">\n<div class=\"tp-arr-imgholder\"></div>\n</div>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"arrow-color":{"title":"Arrow-Color","type":"color","data":"#ffffff"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"30"},"bg-color":{"title":"BG-Color","type":"color","data":"rgba(0,0,0,0)"},"bg-color-hover":{"title":"BG-Color-Hover","type":"color","data":"rgba(0,0,0,0.45)"},"width":{"title":"Width","type":"custom","data":"90"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 1013,
	'handle' => 'uranus',
	'type' => 'arrows',
	'name' => 'Uranus',
	'css' => ".uranus.tparrows {\n  width:##width##px;\n  height:##height##px;\n  background:##background##;\n }\n .uranus.tparrows:before {\n width:##width##px;\n height:##height##px;\n line-height:##height##px;\n font-size:##font-size##px;\n transition:all 0.3s;\n-webkit-transition:all 0.3s;\n }\n \n  .uranus.tparrows.rs-touchhover:before {\n    opacity:0.75;\n  }",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"height":{"title":"Height","type":"custom","data":"50"},"font-size":{"title":"Font-Size","type":"custom","data":"40"},"background":{"title":"BG-Color","type":"color","data":"rgba(255,255,255,0)"},"width":{"title":"Width","type":"custom","data":"50"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 2000,
	'handle' => 'hesperiden',
	'type' => 'thumbs',
	'name' => 'Hesperiden',
	'css' => ".hesperiden .tp-thumb {\n  opacity:1;\n  -webkit-perspective: 600px;\n  perspective: 600px;\n}\n.hesperiden .tp-thumb .tp-thumb-title {\n    font-size:##title-font-size##px;\n    position:absolute;\n    margin-top:-10px;\n    color:##title-color##;\n    display:block;\n    z-index:1000;\n    background-color:##title-bg##;\n    padding:5px 10px; \n    bottom:0px;\n    left:0px;\n    width:100%;\n  box-sizing:border-box;\n    text-align:center;\n    overflow:hidden;\n    white-space:nowrap;\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n    transform:rotatex(90deg) translatez(0.001px);\n    transform-origin:50% 100%;\n    -webkit-transform:rotatex(90deg) translatez(0.001px);\n    -webkit-transform-origin:50% 100%;\n    opacity:0;\n }\n.hesperiden .tp-thumb.rs-touchhover .tp-thumb-title {\n  \t transform:rotatex(0deg);\n    -webkit-transform:rotatex(0deg);\n    opacity:1;\n}",
	'markup' => "<span class=\"tp-thumb-image\"></span>\n<span class=\"tp-thumb-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"title-bg":{"title":"Title-BG-Color","type":"color","data":"rgba(0,0,0,0.85)"},"title-color":{"title":"Title-Font-Color","type":"color","data":"#ffffff"},"title-font-size":{"title":"Title-Font-Size","type":"custom","data":"12"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 2001,
	'handle' => 'gyges',
	'type' => 'thumbs',
	'name' => 'Gyges',
	'css' => ".gyges .tp-thumb { \n      opacity:1\n  }\n.gyges .tp-thumb-img-wrap {\n  padding:3px;\n  background-color:##bg##;\n  display:inline-block;\n\n  width:100%;\n  height:100%;\n  position:relative;\n  margin:0px;\n  box-sizing:border-box;\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n}\n.gyges .tp-thumb-image {\n   padding:3px; \n   display:block;\n   box-sizing:border-box;\n   position:relative;\n    -webkit-box-shadow: inset 5px 5px 10px 0px ##bg##;\n  -moz-box-shadow: inset 5px 5px 10px 0px ##bg##;\n  box-shadow: inset 5px 5px 10px 0px ##bg##;\n }  \n\n.gyges .tp-thumb.rs-touchhover .tp-thumb-img-wrap,\n .gyges .tp-thumb.selected .tp-thumb-img-wrap {\n    background: -moz-linear-gradient(top,  ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -webkit-gradient(left top, left bottom, color-stop(0%, ##hovercolor##, color-stop(100%, ##hbgb##)));\nbackground: -webkit-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -o-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -ms-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: linear-gradient(to bottom, ##hovercolor## 0%, ##hbgb## 100%);\n\n}\n\n",
	'markup' => "<span class=\"tp-thumb-img-wrap\">\n  <span class=\"tp-thumb-image\"></span>\n</span>\n",
	'settings' => '{"dim":{"width":"70","height":"70"},"placeholders":{"bg":{"title":"Background","type":"color","data":"rgba(0,0,0,0.25)"},"titlebg":{"title":"Title-Background","type":"color","data":"rgba(255,255,255,0.81)"},"hovercolor":{"title":"Hover-Top","type":"color","data":"#ffffff"},"hbgb":{"title":"Hover-Bottom","type":"color","data":"#777777"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 2002,
	'handle' => 'hades',
	'type' => 'thumbs',
	'name' => 'Hades',
	'css' => ".hades .tp-thumb { \n      opacity:1\n  }\n.hades .tp-thumb-img-wrap {\n  border-radius:##radius##;\n  padding:##border##px;\n  display:inline-block;\n  background-color:##bg##;\n  width:100%;\n  height:100%;\n  position:relative;\n  margin:0px;\n  box-sizing:border-box;\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n}\n.hades .tp-thumb-image {\n   padding:##border##px; \n   border-radius:##radius##;\n   display:block;\n   box-sizing:border-box;\n   position:relative;\n    -webkit-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  -moz-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n }  \n\n\n.hades .tp-thumb.rs-touchhover .tp-thumb-img-wrap,\n.hades .tp-thumb.selected .tp-thumb-img-wrap {\n  \n\n  background: -moz-linear-gradient(top, ##ht## 0%, ##hb## 100%);\n  background: -webkit-gradient(left top, left bottom, color-stop(0%, ##ht##, color-stop(100%, ##hb##)));\n  background: -webkit-linear-gradient(top, ##ht## 0%, ##hb## 100%);\n  background: -o-linear-gradient(top, ##ht## 0%, ##hb## 100%);\n  background: -ms-linear-gradient(top, ##ht## 0%, ##hb## 100%);\n  background: linear-gradient(to bottom, ##ht## 0%, ##hb## 100%);\n }\n\n",
	'markup' => "<span class=\"tp-thumb-img-wrap\">\n  <span class=\"tp-thumb-image\"></span>\n</span>\n",
	'settings' => '{"dim":{"width":"70","height":"70"},"placeholders":{"radius":{"title":"Radius","type":"custom","data":"50%"},"border":{"title":"Border","type":"custom","data":"3"},"bg":{"title":"Background","type":"color","data":"rgba(0,0,0,0.25)"},"ht":{"title":"Hover-Top","type":"color","data":"#ffffff"},"hb":{"title":"Hover-Bottom","type":"color","data":"#878787"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 2009,
	'handle' => 'erinyen',
	'type' => 'thumbs',
	'name' => 'Erinyen',
	'css' => ".erinyen .tp-thumb {\nopacity:1\n}\n\n.erinyen .tp-thumb-over {\n  background:##overlay-color##;\n  width:100%;\n  height:100%;\n  position:absolute;\n  top:0px;\n  left:0px;\n  z-index:1;\n  -webkit-transition:all 0.3s;\n  transition:all 0.3s;\n}\n\n.erinyen .tp-thumb-more:before {\n  font-family: 'revicons';\n  font-size:##arrow-size##px;\n  color:##arrow-color##;\n  display:block;\n  line-height: ##lineheight##px;\n  text-align: left;    \n  z-index:2;\n  position:absolute;\n  top:20px;\n  right:20px;\n  z-index:2;\n}\n.erinyen .tp-thumb-more:before {\n  content: '##thumb-more##';\n}\n\n.erinyen .tp-thumb-title {\n  font-family:'##title-font##';\n  letter-spacing:1px;\n  font-size:##title-size##px;\n  color:##title-color##;\n  display:block;\n  line-height: ##lineheight##px;\n  text-align: left;    \n  z-index:2;\n  position:absolute;\n  top:0px;\n  left:0px;\n  z-index:2;\n  padding:##padding##;\n  width:100%;\n  height:100%;\n  box-sizing:border-box;\n  transition:all 0.3s;\n  -webkit-transition:all 0.3s;\n  font-weight:500;\n}\n\n.erinyen .tp-thumb.selected .tp-thumb-more:before,\n.erinyen .tp-thumb.rs-touchhover .tp-thumb-more:before {\n color:##arrow-hover##;\n}\n\n.erinyen .tp-thumb.selected .tp-thumb-over,\n.erinyen .tp-thumb.rs-touchhover .tp-thumb-over {\n background:##back-hover##;\n}\n.erinyen .tp-thumb.selected .tp-thumb-title,\n.erinyen .tp-thumb.rs-touchhover .tp-thumb-title {\n  color:##title-hover##;\n\n}\n",
	'markup' => "<span class=\"tp-thumb-over\"></span>\n<span class=\"tp-thumb-image\"></span>\n<span class=\"tp-thumb-title\">{{title}}</span>\n<span class=\"tp-thumb-more\"></span>",
	'settings' => '{"dim":{"width":"200","height":"130"},"placeholders":{"overlay-color":{"title":"Overlay","type":"color","data":"rgba(0,0,0,0.25)"},"arrow-color":{"title":"Arrow-Color","type":"color","data":"#aaaaaa"},"arrow-size":{"title":"Arrow-Size","type":"custom","data":"12"},"title-color":{"title":"Title-Color","type":"color","data":"#ffffff"},"title-size":{"title":"Title-Size","type":"custom","data":"12"},"arrow-hover":{"title":"Hover-Arrow","type":"color","data":"#aaaaaa"},"back-hover":{"title":"Hover-Background","type":"color","data":"#ffffff"},"thumb-more":{"title":"Thumb-Icon","type":"icon","data":"\\\\e825"},"title-hover":{"title":"Hover-Title","type":"color","data":"#000000"},"title-font":{"title":"Title-Font-Family","type":"font-family","data":"Raleway"},"padding":{"title":"Padding","type":"custom","data":"20px 35px 20px 20px"},"lineheight":{"title":"Line-Height","type":"custom","data":"15"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 2010,
	'handle' => 'zeus',
	'type' => 'thumbs',
	'name' => 'Zeus',
	'css' => ".zeus .tp-thumb {\nopacity:1\n}\n\n.zeus .tp-thumb-over {\n  background:##back-color##;\n  width:100%;\n  height:100%;\n  position:absolute;\n  top:0px;\n  left:0px;\n  z-index:1;\n  -webkit-transition:all 0.3s;\n  transition:all 0.3s;\n}\n\n.zeus .tp-thumb-more:before {\n  font-family: 'revicons';\n  font-size:##font-size##px;\n  color:##title-color##;\n  display:block;\n  line-height: ##title-line-height##px;\n  text-align: left;    \n  z-index:2;\n  position:absolute;\n  top:20px;\n  right:20px;\n  z-index:2;\n}\n.zeus .tp-thumb-more:before {\n  content: '##thumb-more##';\n}\n\n.zeus .tp-thumb-title {\n  font-family:'##font-family##';\n  letter-spacing:1px;\n  font-size: ##font-size##px;\n  color:##title-color##;\n  display:block;\n  line-height: ##title-line-height##px;\n  text-align: left;    \n  z-index:2;\n  position:absolute;\n  top:0px;\n  left:0px;\n  z-index:2;\n  padding:20px 35px 20px 20px;\n  width:100%;\n  height:100%;\n  box-sizing:border-box;\n  transition:all 0.3s;\n  -webkit-transition:all 0.3s;\n  font-weight:500;\n}\n\n.zeus .tp-thumb.selected .tp-thumb-more:before,\n.zeus .tp-thumb.rs-touchhover .tp-thumb-more:before {\n color:##title-color##;\n\n}\n\n.zeus .tp-thumb.selected .tp-thumb-over,\n.zeus .tp-thumb.rs-touchhover .tp-thumb-over {\n background:##back-hover##;\n}\n.zeus .tp-thumb.selected .tp-thumb-title,\n.zeus .tp-thumb.rs-touchhover .tp-thumb-title {\n  color:##title-color##;\n\n}\n",
	'markup' => "<span class=\"tp-thumb-over\"></span>\n<span class=\"tp-thumb-image\"></span>\n<span class=\"tp-thumb-title\">{{title}}</span>\n<span class=\"tp-thumb-more\"></span>",
	'settings' => '{"dim":{"width":"400","height":"130"},"placeholders":{"back-hover":{"title":"Overlay-Hover-RGBA","type":"color","data":"rgba(0,0,0,0.75)"},"title-color":{"title":"Title-Color","type":"color","data":"#ffffff"},"font-size":{"title":"Font-Size","type":"custom","data":"12"},"font-family":{"title":"Font-Family","type":"font-family","data":"Raleway"},"back-color":{"title":"Overlay","type":"color","data":"rgba(0,0,0,0.25)"},"title-line-height":{"title":"Title-Line-Height","type":"custom","data":"14"},"thumb-more":{"title":"Thumb-Icon","type":"icon","data":"\\\\e825"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3000,
	'handle' => 'hesperiden',
	'type' => 'bullets',
	'name' => 'Hesperiden',
	'css' => ".hesperiden.tp-bullets {\n}\n.hesperiden.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n\tbackground:transparent;\n\tpadding:10px;\n\tmargin-left:-10px;margin-top:-10px;\n\tbox-sizing:content-box;\n   border-radius:8px;\n  \n}\n.hesperiden .tp-bullet {\n\twidth:##bullet-size##px;\n\theight:##bullet-size##px;\n\tposition:absolute;\n\tbackground: ##bullet-bg-top##; /* old browsers */\n    background: -moz-linear-gradient(top,  ##bullet-bg-top## 0%, ##bullet-bg-bottom## 100%); /* ff3.6+ */\n    background: -webkit-linear-gradient(top,  ##bullet-bg-top## 0%,##bullet-bg-bottom## 100%); /* chrome10+,safari5.1+ */\n    background: -o-linear-gradient(top,  ##bullet-bg-top## 0%,##bullet-bg-bottom## 100%); /* opera 11.10+ */\n    background: -ms-linear-gradient(top,  ##bullet-bg-top## 0%,##bullet-bg-bottom## 100%); /* ie10+ */\n    background: linear-gradient(to bottom,  ##bullet-bg-top## 0%,##bullet-bg-bottom## 100%); /* w3c */\n    filter: progid:dximagetransform.microsoft.gradient( \n    startcolorstr='##bullet-bg-top##', endcolorstr='##bullet-bg-bottom##',gradienttype=0 ); /* ie6-9 */\n\tborder:##border-size##px solid ##border-color##;\n\tborder-radius:50%;\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.hesperiden .tp-bullet.rs-touchhover,\n.hesperiden .tp-bullet.selected {\n\tbackground:##hover-bullet-bg##;\n}\n.hesperiden .tp-bullet-image {\n}\n.hesperiden .tp-bullet-title {\n}\n",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bullet-size":{"title":"Bullet-Size","type":"custom","data":"12"},"bullet-bg-top":{"title":"Bullet-BG-Top","type":"color","data":"#999999"},"bullet-bg-bottom":{"title":"Bullet-BG-Bottom","type":"color","data":"#e1e1e1"},"border-color":{"title":"Border-Color","type":"color","data":"#e5e5e5"},"border-size":{"title":"Border-Size","type":"custom","data":"3"},"hover-bullet-bg":{"title":"Hover-Bullet-BG","type":"color","data":"#666666"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3001,
	'handle' => 'gyges',
	'type' => 'bullets',
	'name' => 'Gyges',
	'css' => ".gyges.tp-bullets {\n}\n.gyges.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n    background: -moz-linear-gradient(top,  ##bgtop## 0%, ##bgbottom## 100%); \n    background: -webkit-linear-gradient(top,  ##bgtop## 0%,##bgbottom## 100%); \n    background: -o-linear-gradient(top,  ##bgtop## 0%,##bgbottom## 100%); \n    background: -ms-linear-gradient(top,  ##bgtop## 0%,##bgbottom## 100%); \n    background: linear-gradient(to bottom,  ##bgtop## 0%, ##bgbottom## 100%); \n    filter: progid:dximagetransform.microsoft.gradient( startcolorstr='##bgtop##', \n    endcolorstr='##bgbottom##',gradienttype=0 ); \n\tpadding:10px;\n\tmargin-left:-10px;margin-top:-10px;\n\tbox-sizing:content-box;\n  border-radius:10px;\n}\n.gyges .tp-bullet {\n\twidth:12px;\n\theight:12px;\n\tposition:absolute;\n\tbackground:##bulletbg##;\n\tborder:3px solid ##bordercolor##;\n\tborder-radius:50%;\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.gyges .tp-bullet.rs-touchhover,\n.gyges .tp-bullet.selected {\n\n    background: -moz-linear-gradient(top,  ##hbgtop## 0%, ##hbgbottom## 100%); /* ff3.6+ */\n    background: -webkit-linear-gradient(top,  ##hbgtop## 0%,##hbgbottom## 100%); /* chrome10+,safari5.1+ */\n    background: -o-linear-gradient(top,  ##hbgtop## 0%,##hbgbottom## 100%); /* opera 11.10+ */\n    background: -ms-linear-gradient(top,  ##hbgtop## 0%,##hbgbottom## 100%); /* ie10+ */\n    background: linear-gradient(to bottom,  ##hbgtop## 0%,##hbgbottom## 100%); /* w3c */\n    filter: progid:dximagetransform.microsoft.gradient( startcolorstr='##hbgtop##', \n    endcolorstr='##hbgbottom##',gradienttype=0 ); /* ie6-9 */\n\n}\n.gyges .tp-bullet-image {\n}\n.gyges .tp-bullet-title {\n}\n\t",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bgtop":{"title":"BG-Top","type":"color","data":"#777777"},"bgbottom":{"title":"BG-Bottom","type":"color","data":"#666666"},"bordercolor":{"title":"Border","type":"color","data":"#444444"},"bulletbg":{"title":"Bullet-BG","type":"color","data":"#333333"},"hbgtop":{"title":"Hover-BG-Top","type":"color","data":"#ffffff"},"hbgbottom":{"title":"Hover-BG-Bottom","type":"color","data":"#e0e0e0"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3002,
	'handle' => 'hades',
	'type' => 'bullets',
	'name' => 'Hades',
	'css' => ".hades.tp-bullets {\n}\n.hades.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n\tbackground:transparent;\n\tpadding:10px;\n\tmargin-left:-10px;margin-top:-10px;\n\tbox-sizing:content-box;\n}\n.hades .tp-bullet {\n\twidth:##innersize##px;\n\theight:##innersize##px;\n\tposition:absolute;\n\tbackground:##colorinner##;\n\tcursor: pointer;\n    border:##outersize##px solid ##outercolor##;\n\tbox-sizing:content-box;\n    box-shadow:0px 0px 3px 1px rgba(0,0,0,0.2);\n    -webkit-perspective:400;\n    perspective:400;\n    -webkit-transform:translatez(0.01px);\n    transform:translatez(0.01px);\n}\n.hades .tp-bullet.rs-touchhover,\n.hades .tp-bullet.selected {\n\tbackground:##innerhover##;\n    border-color:##outerhover##;\n}\n\n.hades .tp-bullet-image {\n  position:absolute;\n  top:##voffset##px; \n  left:##hoffset##;\n  width:##width##px;\n  height:##height##px;\n  background-position:center center;\n  background-size:cover;\n  visibility:hidden;\n  opacity:0;\n  transition:all 0.3s;\n  -webkit-transform-style:flat;\n  transform-style:flat;\n  perspective:600;\n  -webkit-perspective:600;\n  transform: rotatex(-90deg) translatex(-50%);\n  -webkit-transform: rotatex(-90deg) translate(-50%);\n  box-shadow:0px 0px 3px 1px rgba(0,0,0,0.2);\n  transform-origin:50% 100%;\n  -webkit-transform-origin:50% 100%;\n  \n  \n}\n.hades .tp-bullet.rs-touchhover .tp-bullet-image {\n  display:block;\n  opacity:1;\n  transform: rotatex(0deg) translatex(-50%);\n  -webkit-transform: rotatex(0deg) translatex(-50%);\n  visibility:visible;\n    }\n.hades .tp-bullet-title {\n}\n",
	'markup' => "<span class=\"tp-bullet-image\"></span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"innersize":{"title":"Size-Inner","type":"custom","data":"3"},"colorinner":{"title":"Color-Inner","type":"color","data":"#7f7f7f"},"outersize":{"title":"Size-Outer","type":"custom","data":"5"},"outercolor":{"title":"Color-Outer","type":"color","data":"#ffffff"},"outerhover":{"title":"Hover-Outer","type":"color","data":"#ffffff"},"innerhover":{"title":"Hover-Inner","type":"color","data":"#565656"},"width":{"title":"Image-Width","type":"custom","data":"120"},"height":{"title":"Image-Height","type":"custom","data":"60"},"hoffset":{"title":"Horizontal-Offset","type":"custom","data":"0"},"voffset":{"title":"Vertical-Offset","type":"custom","data":"-80"}},"presets":{},"version":"6.0.0"}',
);

$navigations[] = array(
	'id' => 3003,
	'handle' => 'ares',
	'type' => 'bullets',
	'name' => 'Ares',
	'css' => ".ares.tp-bullets {\n}\n.ares.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n\tbackground:transparent;\n\tpadding:10px;\n\tmargin-left:-10px;margin-top:-10px;\n\tbox-sizing:content-box;\n}\n.ares .tp-bullet {\n\twidth:##bullet-size##px;\n\theight:##bullet-size##px;\n\tposition:absolute;\n\tbackground:##bullet-bg-color##;\n\tborder-radius:50%;\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.ares .tp-bullet.rs-touchhover,\n.ares .tp-bullet.selected {\n\tbackground:##hover-bullet-bg-color##;\n}\n.ares .tp-bullet-title {\n  position:absolute;\n  color:##title-color##;\n  font-size:##title-font-size##px;\n  padding:0px 10px;\n  font-weight:600;\n  right:27px;\n  top:-4px;  \n  background:##title-bg-color##;\n  visibility:hidden;\n  transform:translatex(-20px);\n  -webkit-transform:translatex(-20px);\n  transition:transform 0.3s;\n  -webkit-transition:transform 0.3s;\n  line-height:20px;\n  white-space:nowrap;\n}     \n\n.ares .tp-bullet-title:after {\n    width: 0px;\n\theight: 0px;\n\tborder-style: solid;\n\tborder-width: 10px 0 10px 10px;\n\tborder-color: transparent transparent transparent ##title-bg-color##;\n\tcontent:' ';\n    position:absolute;\n    right:-10px;\n\ttop:0px;\n}\n    \n.ares .tp-bullet.rs-touchhover .tp-bullet-title{\n  visibility:visible;\n   transform:translatex(0px);\n  -webkit-transform:translatex(0px);\n}\n\n.ares .tp-bullet.selected.rs-touchhover .tp-bullet-title {\n    background:##hover-bullet-bg-color##;}\n.ares .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {\n  border-color:transparent transparent transparent ##hover-bullet-bg-color##;\n}\n.ares.tp-bullets.rs-touchhover .tp-bullet-title {\n  visibility:hidden;\n  \n}\n.ares.tp-bullets.rs-touchhover .tp-bullet.rs-touchhover .tp-bullet-title {\n    visibility:visible;\n    transform:translateX(0px) translatey(0px);\n  -webkit-transform:translateX(0px) translatey(0px);\n}\n\n\n/* VERTICAL */\n.ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title { right:auto; left:27px;  transform:translatex(20px); -webkit-transform:translatex(20px);}  \n.ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after { \n  border-width: 10px 10px 10px 0 !important;\n  border-color: transparent ##title-bg-color## transparent transparent;\n  right:auto !important;\n  left:-10px !important;   \n}\n.ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {\n  border-color:  transparent ##hover-bullet-bg-color## transparent transparent !important;\n}\n\n\n\n/* HORIZONTAL BOTTOM && CENTER */\n.ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title,\n.ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title { top:-35px; left:50%; right:auto; transform: translateX(-50%) translateY(-10px);-webkit-transform: translateX(-50%) translateY(-10px); }  \n\n.ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title:after,\n.ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title:after { \n  border-width: 10px 10px 0px 10px;\n  border-color: ##title-bg-color## transparent transparent transparent;\n  right:auto;\n  left:50%;\n  margin-left:-10px;\n  top:auto;\n  bottom:-10px;\n    \n}\n.ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.selected.rs-touchhover .tp-bullet-title:after,\n.ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {\n  border-color:  ##hover-bullet-bg-color## transparent transparent transparent;\n}\n\n.ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.rs-touchhover .tp-bullet-title,\n.ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateX(-50%) translatey(0px);\n  -webkit-transform:translateX(-50%) translatey(0px);\n}\n\n\n/* HORIZONTAL TOP */\n.ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title { top:25px; left:50%; right:auto; transform: translateX(-50%) translateY(10px);-webkit-transform: translateX(-50%) translateY(10px); }  \n.ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after { \n  border-width: 0 10px 10px 10px;\n  border-color:  transparent transparent ##title-bg-color## transparent;\n  right:auto;\n  left:50%;\n  margin-left:-10px;\n  bottom:auto;\n  top:-10px;\n    \n}\n.ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {\n  border-color:  transparent transparent  ##hover-bullet-bg-color## transparent;\n}\n\n.ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateX(-50%) translatey(0px);\n  -webkit-transform:translateX(-50%) translatey(0px);\n}\n\n",
	'markup' => "<span class=\"tp-bullet-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"bullet-size":{"title":"Bullet-Size","type":"custom","data":"13"},"bullet-bg-color":{"title":"Bullet-Background","type":"color","data":"#e5e5e5"},"hover-bullet-bg-color":{"title":"Hover-Bullet-BG","type":"color","data":"#ffffff"},"title-color":{"title":"Title-Color","type":"color","data":"#888888"},"title-font-size":{"title":"Title-Font-Size","type":"custom","data":"12"},"title-bg-color":{"title":"Title-BG-Color","type":"color","data":"rgba(255,255,255,0.75)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3004,
	'handle' => 'hebe',
	'type' => 'bullets',
	'name' => 'Hebe',
	'css' => "\n.hebe.tp-bullets:before {\n  content:' ';\n  position:absolute;\n  width:100%;\n  height:100%;\n  background:transparent;\n  padding:10px;\n  margin-left:-10px;margin-top:-10px;\n  box-sizing:content-box;\n}\n\n.hebe .tp-bullet {\n  width:##bullet-back-size##px;\n  height:##bullet-back-size##px;\n  position:absolute;\n  background:##bullet-back-color##;  \n  cursor: pointer;\n  border:##bullet-border-size##px solid ##bullet-border-color##;\n  border-radius:##bradius##;\n  box-sizing:content-box;\n  -webkit-perspective:400;\n  perspective:400;\n  -webkit-transform:translatez(0.01px);\n  transform:translatez(0.01px);\n   transition:all ##aspeed##s;\n}\n.hebe .tp-bullet.rs-touchhover,\n.hebe .tp-bullet.selected {\n  background:##bullet-border-color##;\n  border-color:##bullet-back-color##;\n}\n\n.hebe .tp-bullet-image {\n  position:absolute;\n  width:##width##px;\n  height:##height##px;\n  background-position:center center;\n  background-size:cover;\n  visibility:hidden;\n  opacity:0;\n  bottom:##bullet-back-size##px;\n  transition:all ##aspeed##s;\n  -webkit-transform-style:flat;\n  transform-style:flat;\n  perspective:600;\n  -webkit-perspective:600;\n  transform: scale(0) translateX(-50%) translateY(0%);\n  -webkit-transform: scale(0) translateX(-50%) translateY(0%);\n  transform-origin:0% 100%;\n  -webkit-transform-origin:0% 100%;\n  margin-bottom:15px;\n border-radius:##iradius##px;\n}\n.hebe .tp-bullet.rs-touchhover .tp-bullet-image {\n  display:block;\n  opacity:1;\n  transform: scale(1) translateX(-50%) translateY(0%);\n  -webkit-transform: scale(1) translateX(-50%) translateY(0%);\n  visibility:visible;\n}\n\n\n/* VERTICAL */\n\n.hebe.nav-dir-vertical .tp-bullet-image {\n  bottom:auto;\n  margin-right:15px;\n  margin-bottom:0px;\n  right:##bullet-back-size##px;\n  transform: scale(0) translateX(0px) translateY(-50%);\n  -webkit-transform: scale(0) translateX(0px) translateY(-50%);\n  transform-origin:100% 0%;\n  -webkit-transform-origin:100% 0%;\n}\n\n.hebe.nav-dir-vertical .tp-bullet.rs-touchhover .tp-bullet-image {\n  transform: scale(1) translateX(0px) translateY(-50%);\n  -webkit-transform: scale(1) translateX(0px) translateY(-50%);\n}\n\n/* VERTICAL LEFT */\n\n.hebe.nav-dir-vertical.nav-pos-hor-left .tp-bullet-image {\n  bottom:auto;\n  margin-left:15px;\n  margin-bottom:0px;\n  left:##bullet-back-size##px;\n  transform: scale(0) translateX(0px) translateY(-50%);\n  -webkit-transform: scale(0) translateX(0px) translateY(-50%);\n  transform-origin:0% 0%;\n  -webkit-transform-origin:0% 0%;\n}\n\n.hebe.nav-dir-vertical.nav-pos-hor-left .tp-bullet.rs-touchhover .tp-bullet-image {\n  transform: scale(1) translateX(0px) translateY(-50%);\n  -webkit-transform: scale(1) translateX(0px) translateY(-50%);\n}\n\n/* HORIZONTAL TOP */\n.hebe.nav-pos-ver-top.nav-dir-horizontal .tp-bullet-image {\n  bottom:auto;\n  top:##bullet-back-size##px;\n  transform: scale(0) translateX(-50%) translateY(0%);\n  -webkit-transform: scale(0) translateX(-50%) translateY(0%);\n  transform-origin:0% 0%;\n  -webkit-transform-origin:0% 0%;\n  margin-top:15px;\n  margin-bottom:0px;  \n}\n.hebe.nav-pos-ver-top.nav-dir-horizontal .tp-bullet.rs-touchhover .tp-bullet-image {\n  transform: scale(1) translateX(-50%) translateY(0%);\n  -webkit-transform: scale(1) translateX(-50%) translateY(0%);\n}",
	'markup' => "<span class=\"tp-bullet-image\"></span>",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"bullet-back-color":{"title":"Bullet-Background","type":"color","data":"#ffffff"},"bullet-border-color":{"title":"Bullet-Border-Color","type":"color","data":"#000000"},"bullet-border-size":{"title":"Bullet-Border-Size","type":"custom","data":"5"},"bullet-back-size":{"title":"Bullet-BG-Size","type":"custom","data":"3"},"width":{"title":"Image-Width","type":"custom","data":"70"},"height":{"title":"Image-Height","type":"custom","data":"70"},"iradius":{"title":"Image-Radius","type":"custom","data":"6"},"bradius":{"title":"Bullet-Radius","type":"custom","data":"50%"},"aspeed":{"title":"Animation-Speed","type":"custom","data":"0.3"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3005,
	'handle' => 'hermes',
	'type' => 'bullets',
	'name' => 'Hermes',
	'css' => ".hermes.tp-bullets {\n}\n\n.hermes .tp-bullet {\n    overflow:hidden;\n    border-radius:50%;\n    width:##bullet-size##px;\n    height:##bullet-size##px;\n    background-color: rgba(0, 0, 0, 0);\n    box-shadow: inset 0 0 0 ##border##px ##bullet-color##;\n    -webkit-transition: background 0.3s ease;\n    transition: background 0.3s ease;\n    position:absolute;\n}\n\n.hermes .tp-bullet.rs-touchhover {\n\t  background-color: ##bullet-hover##;\n}\n.hermes .tp-bullet:after {\n  content: ' ';\n  position: absolute;\n  bottom: 0;\n  height: 0;\n  left: 0;\n  width: 100%;\n  background-color: ##bullet-color##;\n  box-shadow: 0 0 1px ##bullet-color##;\n  -webkit-transition: height 0.3s ease;\n  transition: height 0.3s ease;\n}\n.hermes .tp-bullet.selected:after {\n  height:100%;\n}\n",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"bullet-size":{"title":"Bullet-Size","type":"custom","data":"16"},"bullet-color":{"title":"Bullet-Color","type":"color","data":"#ffffff"},"border":{"title":"Border-Thickness","type":"custom","data":"2"},"bullet-hover":{"title":"Hover-Bullet","type":"color","data":"rgba(0,0,0,0.21)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3006,
	'handle' => 'custom',
	'type' => 'bullets',
	'name' => 'Custom',
	'css' => ".custom.tp-bullets {\n}\n.custom.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n\tbackground:transparent;\n\tpadding:10px;\n\tmargin-left:-10px;margin-top:-10px;\n\tbox-sizing:content-box;\n}\n.custom .tp-bullet {\n\twidth:12px;\n\theight:12px;\n\tposition:absolute;\n\tbackground:#aaa;\n    background:rgba(125,125,125,0.5);\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.custom .tp-bullet.rs-touchhover,\n.custom .tp-bullet.selected {\n\tbackground:rgb(125,125,125);\n}\n.custom .tp-bullet-image {\n}\n.custom .tp-bullet-title {\n}\n",
	'markup' => "",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3007,
	'handle' => 'hephaistos',
	'type' => 'bullets',
	'name' => 'Hephaistos',
	'css' => ".hephaistos .tp-bullet {\n\twidth:##bullet-size##px;\n\theight:##bullet-size##px;\n\tposition:absolute;\n\tbackground:##back-color##;\n\tborder:##border-size##px solid ##border-color##;\n\tborder-radius:50%;\n\tcursor: pointer;\n\tbox-sizing:content-box;\n    box-shadow: 0px 0px 2px 1px rgba(130,130,130, 0.3);\n}\n.hephaistos .tp-bullet.rs-touchhover,\n.hephaistos .tp-bullet.selected {\n\tbackground:##back-hover-color##;\n    border-color:##border-hover-color##;\n}",
	'markup' => "",
	'settings' => '{"dim":{"width":"161","height":"159"},"placeholders":{"bullet-size":{"title":"Bullet-Size","type":"custom","data":"12"},"back-color":{"title":"Background","type":"color","data":"#999999"},"border-color":{"title":"Border-Color","type":"color","data":"rgba(255,255,255,0.9)"},"border-size":{"title":"Border-Size","type":"custom","data":"3"},"back-hover-color":{"title":"Hover-Background","type":"color","data":"#ffffff"},"border-hover-color":{"title":"Hover-Border","type":"color","data":"#000000"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3008,
	'handle' => 'persephone',
	'type' => 'bullets',
	'name' => 'Persephone',
	'css' => ".persephone .tp-bullet {\n\twidth:##bullet-size##px;\n\theight:##bullet-size##px;\n\tposition:absolute;\n\tbackground:##back-color##;\n\tborder:1px solid ##border-color##;\t\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.persephone .tp-bullet.rs-touchhover,\n.persephone .tp-bullet.selected {\n\tbackground:##back-hover##;\n}\n\n",
	'markup' => "",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"bullet-size":{"title":"Bullet-Size","type":"custom","data":"12"},"back-color":{"title":"Background","type":"color","data":"#aaaaaa"},"border-color":{"title":"Border-Color","type":"color","data":"#e5e5e5"},"back-hover":{"title":"Hover-Background","type":"color","data":"#000000"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3009,
	'handle' => 'erinyen',
	'type' => 'bullets',
	'name' => 'Erinyen',
	'css' => ".erinyen.tp-bullets {\n}\n.erinyen.tp-bullets:before {\n\tcontent:' ';\n\tposition:absolute;\n\twidth:100%;\n\theight:100%;\n    background: -moz-linear-gradient(top,  ##back-top## 0%, ##back-bottom## 100%); /* ff3.6+ */\n    background: -webkit-linear-gradient(top,  ##back-top## 0%,##back-bottom## 100%); /* chrome10+,safari5.1+ */\n    background: -o-linear-gradient(top,  ##back-top## 0%,##back-bottom## 100%); /* opera 11.10+ */\n    background: -ms-linear-gradient(top,  ##back-top## 0%,##back-bottom## 100%); /* ie10+ */\n    background: linear-gradient(to bottom,  ##back-top## 0%,##back-bottom## 100%); /* w3c */\n\n\tpadding:10px 15px;\n\tmargin-left:-15px;margin-top:-10px;\n\tbox-sizing:content-box;\n   border-radius:10px;\n   box-shadow:0px 0px 2px 1px rgba(33,33,33,0.3);\n}\n.erinyen .tp-bullet {\n\twidth:##bullet-size##px;\n\theight:##bullet-size##px;\n\tposition:absolute;\n\tbackground:##bullet-back##;\t\n\tborder-radius:50%;\n\tcursor: pointer;\n\tbox-sizing:content-box;\n}\n.erinyen .tp-bullet.rs-touchhover,\n.erinyen .tp-bullet.selected {\nbackground: -moz-linear-gradient(top,  ##bullet-top## 0%, ##bullet-bottom## 100%); /* ff3.6+ */\nbackground: -webkit-linear-gradient(top,  ##bullet-top## 0%,##bullet-bottom## 100%); /* chrome10+,safari5.1+ */\nbackground: -o-linear-gradient(top,  ##bullet-top## 0%,##bullet-bottom## 100%); /* opera 11.10+ */\nbackground: -ms-linear-gradient(top,  ##bullet-top## 0%,##bullet-bottom## 100%); /* ie10+ */\nbackground: linear-gradient(to bottom,  ##bullet-top## 0%,##bullet-bottom## 100%); /* w3c */\nborder:1px solid #555;\nwidth:##bullet-size##px;\nheight:##bullet-size##px;\n}\n\n",
	'markup' => "",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"back-top":{"title":"BG-Top","type":"color","data":"#545353"},"back-bottom":{"title":"BG-Bottom","type":"color","data":"#222222"},"bullet-top":{"title":"Bullet-BG-Top","type":"color","data":"#e5e5e5"},"bullet-bottom":{"title":"Bullet-BG-Bottom","type":"color","data":"#999999"},"bullet-back":{"title":"Bullet-BG","type":"color","data":"#111111"},"bullet-size":{"title":"Bullet-Size","type":"custom","data":"13"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3010,
	'handle' => 'zeus',
	'type' => 'bullets',
	'name' => 'Zeus',
	'css' => ".zeus .tp-bullet {\n     box-sizing:content-box; -webkit-box-sizing:content-box; border-radius:50%;\n      background-color: rgba(0, 0, 0, 0);\n      -webkit-transition: opacity 0.3s ease;\n      transition: opacity 0.3s ease;\n    width:##size##px;height:##size##px;\n    border:2px solid ##color##;\n }\n.zeus .tp-bullet:after {\n  content: '';\n  position: absolute;\n  width: 100%;\n  height: 100%;\n  left: 0;\n  border-radius: 50%;\n  background-color: ##color##;\n  -webkit-transform: scale(0);\n  transform: scale(0);\n  -webkit-transform-origin: 50% 50%;\n  transform-origin: 50% 50%;\n  -webkit-transition: -webkit-transform 0.3s ease;\n  transition: transform 0.3s ease;\n}\n.zeus .tp-bullet.rs-touchhover:after,\n.zeus .tp-bullet.selected:after{\n    -webkit-transform: scale(1.2);\n  transform: scale(1.2);\n}\n  \n .zeus .tp-bullet-image,\n .zeus .tp-bullet-imageoverlay{\n        width:##img-width##px;\n        height:##img-height##px;\n        position:absolute;\n        background:#000;\n        background:rgba(0,0,0,0.5);\n        bottom:##size##px;\n        margin-bottom:10px;\n        transform:translateX(-50%);\n       -webkit-transform:translateX(-50%);\n        box-sizing:border-box;\n        background-size:cover;\n        background-position:center center;\n        visibility:hidden;\n        opacity:0;\n         -webkit-backface-visibility: hidden; \n        backface-visibility: hidden;\n        -webkit-transform-origin: 50% 50%;\n    transform-origin: 50% 50%;\n      -webkit-transition: all 0.3s ease;\n      transition: all 0.3s ease;\n        border-radius:4px;\n}\n          \n\n.zeus .tp-bullet-title,\n.zeus .tp-bullet-imageoverlay {\n        z-index:2;\n        -webkit-transition: all 0.5s ease;\n      transition: all 0.5s ease;\n        transform:translateX(-50%);\n       -webkit-transform:translateX(-50%);\n}     \n.zeus .tp-bullet-title { \n        color:##title-color##;\n        text-align:center;\n        line-height:##title-line-height##px;\n        font-size:##title-font-size##px;\n        font-weight:600;  \n        z-index:3;\n         visibility:hidden;\n        opacity:0;\n         -webkit-backface-visibility: hidden; \n        backface-visibility: hidden;\n        -webkit-transform-origin: 50% 50%;\n    transform-origin: 50% 50%;\n      -webkit-transition: all 0.3s ease;\n      transition: all 0.3s ease;\n        position:absolute;\n        bottom:##tooltip-bottom##px;\n        width:##img-width##px;\n      vertical-align:middle;\n       \n}\n      \n.zeus .tp-bullet.rs-touchhover .tp-bullet-title,\n.zeus .tp-bullet.rs-touchhover .tp-bullet-image,\n.zeus .tp-bullet.rs-touchhover .tp-bullet-imageoverlay{\n      opacity:1;\n      visibility:visible;\n    -webkit-transform:translateY(0px) translateX(-50%);\n      transform:translateY(0px) translateX(-50%);         \n    }\n\n\n\n\n/* VERTICAL RIGHT */\n\n.zeus.nav-dir-vertical .tp-bullet-image,\n.zeus.nav-dir-vertical .tp-bullet-imageoverlay{\n  bottom:auto;\n  margin-right:10px;\n  margin-bottom:0px;\n  right:##size##px;\n  transform: translateX(0px) translateY(-50%);\n  -webkit-transform:  translateX(0px) translateY(-50%);\n  \n}\n\n.zeus.nav-dir-vertical .tp-bullet.rs-touchhover .tp-bullet-image {\n  transform: translateX(0px) translateY(-50%);\n  -webkit-transform: translateX(0px) translateY(-50%);\n}\n\n\n.zeus.nav-dir-vertical .tp-bullet-title,\n.zeus.nav-dir-vertical .tp-bullet-imageoverlay {\n        z-index:2;\n        -webkit-transition: all 0.5s ease;\n       transition: all 0.5s ease;\n        transform: translateX(0px) translateY(-50%);\n       -webkit-transform: translateX(0px) translateY(-50%);\n}   \n\n\n.zeus.nav-dir-vertical .tp-bullet-title {\n     bottom:auto;\n     right:100%;\n     margin-right:10px;\n}\n\n.zeus.nav-dir-vertical .tp-bullet.rs-touchhover .tp-bullet-title,\n.zeus.nav-dir-vertical .tp-bullet.rs-touchhover .tp-bullet-image,\n.zeus.nav-dir-vertical .tp-bullet.rs-touchhover .tp-bullet-imageoverlay {\n transform: translateX(0px) translateY(-50%);\n  -webkit-transform: translateX(0px) translateY(-50%);\n}\n\n\n\n/* VERTICAL LEFT */\n\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet-image,\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet-imageoverlay{\n  bottom:auto;\n  margin-left:10px;\n  margin-bottom:0px;\n  left:##size##px;\n  transform:  translateX(0px) translateY(-50%);\n  -webkit-transform:  translateX(0px) translateY(-50%);\n  \n}\n\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet.rs-touchhover .tp-bullet-image {\n  transform: translateX(0px) translateY(-50%);\n  -webkit-transform: translateX(0px) translateY(-50%);\n}\n\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title,\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet-imageoverlay {\n        z-index:2;\n        -webkit-transition: all 0.5s ease;\n       transition: all 0.5s ease;\n        transform:translateX(0px) translateY(-50%);\n       -webkit-transform:translateX(0px) translateY(-50%);\n}   \n\n\n.zeus.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title {\n     bottom:auto;\n     left:100%;\n     margin-left:10px;\n}\n\n/* HORIZONTAL TOP */\n\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-image,\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-imageoverlay{\n  bottom:auto;\n  top:##size##px;\n  margin-top:10px;\n  margin-bottom:0px;\n  left:0px;\n  transform:translateY(0px) translateX(-50%);\n  -webkit-transform:translateX(0px) translateX(-50%);\n  \n}\n\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-image {\n  \n  transform: scale(1) translateY(0px) translateX(-50%);\n  -webkit-transform: scale(1) translateY(0px) translateX(-50%);\n  \n}\n\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title,\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-imageoverlay {\n        z-index:2;\n        -webkit-transition: all 0.5s ease;\n       transition: all 0.5s ease;\n        transform:translateY(0px) translateX(-50%);\n       -webkit-transform:translateY(0px) translateX(-50%);\n}   \n\n\n.zeus.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title {\n     bottom:auto;\n     top:##size##px;\n     margin-top:20px;\n}\n",
	'markup' => "<span class=\"tp-bullet-image\"></span>\n<span class=\"tp-bullet-imageoverlay\"></span>\n<span class=\"tp-bullet-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"color":{"title":"Bullet-Color","type":"color","data":"#ffffff"},"size":{"title":"Bullet-Size","type":"custom","data":"13"},"img-width":{"title":"Image-Width","type":"custom","data":"135"},"img-height":{"title":"Image-Height","type":"custom","data":"60"},"title-color":{"title":"Tooltip-Title-Color","type":"color","data":"#ffffff"},"tooltip-bottom":{"title":"Tooltip-Bottom","type":"custom","data":"45"},"title-font-size":{"title":"Title-Font-Size","type":"custom","data":"13"},"title-line-height":{"title":"Title-Line-Height","type":"custom","data":"15"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3011,
	'handle' => 'metis',
	'type' => 'bullets',
	'name' => 'Metis',
	'css' => ".metis .tp-bullet { \n    opacity:1;\n    width:##size##px;\n    height:##size##px;    \n    padding:##border-width##px;\n    background-color:##idlecolor##;\n    margin:0px;\n    box-sizing:border-box;\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n    border-radius:50%;\n  }\n\n.metis .tp-bullet-image {\n\n   border-radius:50%;\n   display:block;\n   box-sizing:border-box;\n   position:relative;\n    -webkit-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  -moz-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  width:100%;\n  height:100%;\n  background-size:cover;\n  background-position:center center;\n }  \n.metis .tp-bullet-title { \n     position:absolute; \n     bottom:##size##px;\n     margin-bottom:10px;\n     display:inline-block;\n     left:50%;\n     background:#000;\n     background:##idlecolor-title##;\n     color:##tooltip-color##;\n     padding:10px 30px;\n     border-radius:4px;\n   -webkit-border-radius:4px;\n     opacity:0;\n      transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n    transform: translatez(0.001px) translatex(-50%) translatey(14px);\n    transform-origin:50% 100%;\n    -webkit-transform: translatez(0.001px) translatex(-50%) translatey(14px);\n    -webkit-transform-origin:50% 100%;\n    opacity:0;\n    white-space:nowrap;\n }\n\n.metis .tp-bullet.rs-touchhover .tp-bullet-title {\n     transform:rotatex(0deg) translatex(-50%);\n    -webkit-transform:rotatex(0deg) translatex(-50%);\n    opacity:1;\n}\n\n.metis .tp-bullet.selected,\n.metis .tp-bullet.rs-touchhover  {\nbackground: -moz-linear-gradient(top,  ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -webkit-gradient(left top, left bottom, color-stop(0%, ##hovercolor##, color-stop(100%, ##hbgb##)));\nbackground: -webkit-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -o-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -ms-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: linear-gradient(to bottom, ##hovercolor## 0%, ##hbgb## 100%);\n  }\n.metis .tp-bullet-title:after {\n    content:' ';\n    position:absolute;\n    left:50%;\n    margin-left:-8px;\n    width: 0;\n    height: 0;\n    border-style: solid;\n    border-width: 8px 8px 0 8px;\n    border-color: ##idlecolor-title## transparent transparent transparent;\n    bottom:-8px;\n   }\n\n\n\n/* VERTICAL RIGHT */\n.metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title { \n   margin-bottom:0px; top:50%; right:##size##px; left:auto; bottom:auto; margin-right:10px;  transform: translateX(-10px) translateY(-50%);-webkit-transform: translateX(-10px) translateY(-50%); \n}  \n.metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title:after { \n  border-width: 10px 0 10px 10px;\n  border-color:  transparent transparent transparent ##idlecolor-title## ;\n  right:-10px;\n  left:auto;  \n  bottom:auto;\n  top:10px;    \n}\n\n\n.metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateY(-50%) translateX(0px);\n  -webkit-transform:translateY(-50%) translateX(0px);\n}\n\n/* VERTICAL LEFT && CENTER*/\n.metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title,\n.metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title { \n   margin-bottom:0px; top:50%; left:##size##px; right:auto; bottom:auto; margin-left:10px;  transform: translateX(10px) translateY(-50%);-webkit-transform: translateX(10px) translateY(-50%); \n}  \n.metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after,\n.metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title:after { \n  border-width: 10px 10px 10px 0;\n  border-color:  transparent ##idlecolor-title##  transparent transparent ;\n  left:-2px;\n  right:auto;  \n  bottom:auto;\n  top:10px;    \n}\n\n\n.metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet.rs-touchhover .tp-bullet-title,\n.metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateY(-50%) translateX(0px);\n  -webkit-transform:translateY(-50%) translateX(0px);\n}\n\n\n/* HORIZONTAL TOP */\n.metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title { \n   margin-bottom:0px; top:##size##px; left:50%; bottom:auto; margin-top:10px; right:auto; transform: translateX(-50%) translateY(10px);-webkit-transform: translateX(-50%) translateY(10px); \n}  \n.metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after { \n  border-width: 0 10px 10px 10px;\n  border-color:  transparent transparent ##idlecolor-title## transparent;\n  right:auto;\n  left:50%;\n  margin-left:-10px;\n  bottom:auto;\n  top:-10px;\n    \n}\n\n\n.metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateX(-50%) translatey(0px);\n  -webkit-transform:translateX(-50%) translatey(0px);\n}\n\n",
	'markup' => "<span class=\"tp-bullet-img-wrap\">\n  <span class=\"tp-bullet-image\"></span>\n</span>\n<span class=\"tp-bullet-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"size":{"title":"Size","type":"custom","data":"50"},"border-width":{"title":"Border-Width","type":"custom","data":"3"},"tooltip-color":{"title":"Tooltip-Color","type":"color","data":"#ffffff"},"idlecolor":{"title":"Idle-Color","type":"color","data":"rgba(0,0,0,0.25)"},"idlecolor-title":{"title":"Idle-Color-Title","type":"color","data":"rgba(0,0,0,0.75)"},"hovercolor":{"title":"Hover-BG-Top","type":"color","data":"#ffffff"},"hbgb":{"title":"Hover-BG-Bottom","type":"color","data":"#777777"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3012,
	'handle' => 'dione',
	'type' => 'bullets',
	'name' => 'Dione',
	'css' => "\n.dione .tp-bullet { \n    opacity:1;\n    width:##size##px;\n    height:##size##px;    \n    padding:##border-size##px;\n    background-color:##idlecolor##;\n    margin:0px;\n    box-sizing:border-box;\n    transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n  }\n\n.dione .tp-bullet-image {\n   display:block;\n   box-sizing:border-box;\n   position:relative;\n    -webkit-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  -moz-box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  box-shadow: inset 5px 5px 10px 0px rgba(0,0,0,0.25);\n  width:100%;\n  height:100%;\n  background-size:cover;\n  background-position:center center;\n }  \n.dione .tp-bullet-title { \n     position:absolute; \n     font-size:13px; \n     line-height:18px; \n    bottom:##tooltip-offset##px;\n     display:inline-block;\n     left:50%;\n     background:##idlecolor-title##;\n     color:##tooltip-color##;\n     padding:10px 30px;\n     border-radius:4px;\n   -webkit-border-radius:4px;\n     opacity:0;\n      transition:all 0.3s;\n    -webkit-transition:all 0.3s;\n    transform: translatez(0.001px) translatex(-50%) translatey(14px);\n    transform-origin:50% 100%;\n    -webkit-transform: translatez(0.001px) translatex(-50%) translatey(14px);\n    -webkit-transform-origin:50% 100%;\n    opacity:0;\n    white-space:nowrap;\n }\n\n.dione .tp-bullet.rs-touchhover .tp-bullet-title {\n     transform:rotatex(0deg) translatex(-50%);\n    -webkit-transform:rotatex(0deg) translatex(-50%);\n    opacity:1;\n}\n\n.dione .tp-bullet.selected,\n.dione .tp-bullet.rs-touchhover  {\n  background: -moz-linear-gradient(top,  ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -webkit-gradient(left top, left bottom, color-stop(0%, ##hovercolor##, color-stop(100%, ##hbgb##)));\nbackground: -webkit-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -o-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: -ms-linear-gradient(top, ##hovercolor## 0%, ##hbgb## 100%);\nbackground: linear-gradient(to bottom, ##hovercolor## 0%, ##hbgb## 100%);\n}\n.dione .tp-bullet-title:after {\n        content:' ';\n        position:absolute;\n        left:50%;\n        margin-left:-8px;\n        width: 0;\n    height: 0;\n    border-style: solid;\n    border-width: 8px 8px 0 8px;\n    border-color: ##idlecolor-title## transparent transparent transparent;\n    bottom:-8px;\n   }\n\n\n/* VERTICAL RIGHT */\n.dione.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title { \n    top:50%; right:##size##px; left:auto; bottom:auto; margin-right:10px;  transform: translateX(-10px) translateY(-50%);-webkit-transform: translateX(-10px) translateY(-50%); \n}  \n.dione.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title:after { \n  border-width: 10px 0 10px 10px;\n  border-color:  transparent transparent transparent ##idlecolor-title## ;\n  right:-10px;\n  left:auto;  \n  bottom:auto;\n  top:10px;    \n}\n\n\n.dione.nav-dir-vertical.nav-pos-hor-right .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateY(-50%) translateX(0px);\n  -webkit-transform:translateY(-50%) translateX(0px);\n}\n\n/* VERTICAL LEFT && CENTER*/\n.dione.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title,\n.dione.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title { \n    top:50%; left:##size##px; right:auto; bottom:auto; margin-left:10px;  transform: translateX(10px) translateY(-50%);-webkit-transform: translateX(10px) translateY(-50%); \n}  \n.dione.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after,\n.dione.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title:after { \n  border-width: 10px 10px 10px 0;\n  border-color:  transparent ##idlecolor-title##  transparent transparent ;\n  left:-2px;\n  right:auto;  \n  bottom:auto;\n  top:10px;    \n}\n\n\n.dione.nav-dir-vertical.nav-pos-hor-left .tp-bullet.rs-touchhover .tp-bullet-title,\n.dione.nav-dir-vertical.nav-pos-hor-center .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateY(-50%) translateX(0px);\n  -webkit-transform:translateY(-50%) translateX(0px);\n}\n\n\n/* HORIZONTAL TOP */\n.dione.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title { \n    top:##size##px; left:50%; bottom:auto; margin-top:10px; right:auto; transform: translateX(-50%) translateY(10px);-webkit-transform: translateX(-50%) translateY(10px); \n}  \n.dione.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after { \n  border-width: 0 10px 10px 10px;\n  border-color:  transparent transparent ##idlecolor-title## transparent;\n  right:auto;\n  left:50%;\n  margin-left:-10px;\n  bottom:auto;\n  top:-10px;\n    \n}\n\n\n.dione.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title{\n   transform:translateX(-50%) translatey(0px);\n  -webkit-transform:translateX(-50%) translatey(0px);\n}\n\n",
	'markup' => "<span class=\"tp-bullet-img-wrap\">\n  <span class=\"tp-bullet-image\"></span>\n</span>\n<span class=\"tp-bullet-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"size":{"title":"Size","type":"custom","data":"50"},"border-size":{"title":"Border-Size","type":"custom","data":"3"},"idlecolor":{"title":"Idle-Color","type":"color","data":"rgba(0,0,0,0.25)"},"idlecolor-title":{"title":"Idle-Color","type":"color","data":"rgba(0,0,0,0.65)"},"tooltip-offset":{"title":"Tooltip-Offset","type":"custom","data":"65"},"tooltip-color":{"title":"Tooltip-Color","type":"color","data":"#ffffff"},"hovercolor":{"title":"Hover-Color-Top","type":"color","data":"#ffffff"},"hbgb":{"title":"Hover-Color-Bottom","type":"color","data":"#777777"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 3013,
	'handle' => 'uranus',
	'type' => 'bullets',
	'name' => 'Uranus',
	'css' => ".uranus .tp-bullet{\n  border-radius: 50%;\n  box-shadow: 0 0 0 2px ##color##;\n  -webkit-transition: box-shadow 0.3s ease;\n  transition: box-shadow 0.3s ease;\n  background:transparent;\n  width:##size##px;\n  height:##size##px;\n}\n.uranus .tp-bullet.selected,\n.uranus .tp-bullet.rs-touchhover {\n  box-shadow: 0 0 0 2px ##color-hover##;\n  border:none;\n  border-radius: 50%;\n  background:transparent;\n}\n\n.uranus .tp-bullet-inner {\n  -webkit-transition: background-color 0.3s ease, -webkit-transform 0.3s ease;\n  transition: background-color 0.3s ease, transform 0.3s ease;\n  top: 0;\n  left: 0;\n  width: 100%;\n  height: 100%;\n  outline: none;\n  border-radius: 50%;\n  background-color: ##color##;\n  background-color: ##color-inner##;\n  text-indent: -999em;\n  cursor: pointer;\n  position: absolute;\n}\n\n.uranus .tp-bullet.selected .tp-bullet-inner,\n.uranus .tp-bullet.rs-touchhover .tp-bullet-inner{\n transform: scale(0.4);\n -webkit-transform: scale(0.4);\n background-color:##color-hover##;\n}",
	'markup' => "<span class=\"tp-bullet-inner\"></span>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"size":{"title":"Size","type":"custom","data":"15"},"color":{"title":"Color","type":"color","data":"rgba(255,255,255,0)"},"color-hover":{"title":"Color Hover","type":"color","data":"rgba(255,255,255,1)"},"color-inner":{"title":"Color Inner","type":"color","data":"rgba(255,255,255,0.3)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4000,
	'handle' => 'hesperiden',
	'type' => 'tabs',
	'name' => 'Hesperiden',
	'css' => ".hesperiden .tp-tab { \n  opacity:1;      \n  padding:10px;\n  box-sizing:border-box;\n  font-family: '##font-family##', sans-serif;\n  border-bottom: ##border-size##px solid ##border-color##;\n }\n.hesperiden .tp-tab-image \n{ \n  width:##image-size##px;\n  height:##image-size##px; max-height:100%; max-width:100%;\n  position:relative;\n  display:inline-block;\n  float:left;\n\n}\n.hesperiden .tp-tab-content \n{\n    background:##bgcolor##; \n    position:relative;\n    padding:15px 15px 15px 85px;\n left:0px;\n overflow:hidden;\n margin-top:-15px;\n    box-sizing:border-box;\n    color:##contentcolor##;\n    display: inline-block;\n    width:100%;\n    height:100%;\n position:absolute; }\n.hesperiden .tp-tab-date\n  {\n  display:block;\n  color: ##param1-color##;\n  font-weight:500;\n  font-size:##param1-size##px;\n  margin-bottom:0px;\n  }\n.hesperiden .tp-tab-title \n{\n    display:block;\t\n    text-align:left\t;\n    color:##param2-color##;\n    font-size:##param2-size##px;\n    font-weight:500;\n    text-transform:none;\n    line-height:17px;\n}\n.hesperiden .tp-tab.rs-touchhover,\n.hesperiden .tp-tab.selected {\n\tbackground:##hover-bg-color##; \n}\n\n.hesperiden .tp-tab-mask {\n}\n\n/* media queries */\n@media only screen and (max-width: 960px) {\n\n}\n@media only screen and (max-width: 768px) {\n\n}",
	'markup' => "<div class=\"tp-tab-content\">\n  <span class=\"tp-tab-date\">{{param1}}</span>\n  <span class=\"tp-tab-title\">{{title}}</span>\n</div>\n<div class=\"tp-tab-image\"></div>",
	'settings' => '{"dim":{"width":"250","height":"80"},"placeholders":{"font-family":{"title":"Font-Family","type":"font-family","data":"Roboto"},"border-color":{"title":"Border-Bottom-Color","type":"color","data":"#e5e5e5"},"border-size":{"title":"Border-Bottom-Size","type":"custom","data":"1"},"image-size":{"title":"Image-Size","type":"custom","data":"60"},"param1-color":{"title":"Date-Color","type":"color","data":"rgba(51,51,51,0.5)"},"param1-size":{"title":"Date-Size","type":"custom","data":"12"},"hover-bg-color":{"title":"Hover-BG-Color","type":"color","data":"#eeeeee"},"bgcolor":{"title":"Background","type":"color","data":"rgba(0,0,0,0)"},"contentcolor":{"title":"Content","type":"color","data":"#333333"},"param2-color":{"title":"Title-Color","type":"color","data":"rgba(0,0,0,1)"},"param2-size":{"title":"Title-Size","type":"custom","data":"14"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4001,
	'handle' => 'gyges',
	'type' => 'tabs',
	'name' => 'Gyges',
	'css' => ".gyges .tp-tab { \n  opacity:1;      \n  padding:10px;\n  box-sizing:border-box;\n  font-family: 'roboto', sans-serif;\n  border-bottom: 1px solid ##borderc##;\n }\n.gyges .tp-tab-image \n{ \n  width:##size##px;\n  height:##size##px; \n  max-height:100%; \n  max-width:100%;\n  position:relative;\n  display:inline-block;\n  float:left;\n\n}\n.gyges .tp-tab-content \n{\n    background:##bg##; \n    position:relative;\n    padding:15px 15px 15px 85px;\n    left:0px;\n    overflow:hidden;\n    margin-top:-15px;\n    box-sizing:border-box;\n    color:##color##;\n    display: inline-block;\n    width:100%;\n    height:100%;\n position:absolute; }\n.gyges .tp-tab-date\n  {\n  display:block;\n  color: ##datecolor##;\n  font-weight:500;\n  font-size:##datesize##px;\n  margin-bottom:0px;\n  }\n.gyges .tp-tab-title \n{\n    display:block;  \n    text-align:left;\n    color:##titlecolor##;\n    font-size:##titlesize##px;\n    font-weight:500;\n    text-transform:none;\n    line-height:17px;\n}\n.gyges .tp-tab.rs-touchhover,\n.gyges .tp-tab.selected {\n  background:##hbg##; \n}\n\n.gyges .tp-tab-mask {\n}\n\n/* media queries */\n@media only screen and (max-width: 960px) {\n\n}\n@media only screen and (max-width: 768px) {\n\n}",
	'markup' => "<div class=\"tp-tab-content\">\n  <span class=\"tp-tab-date\">{{param1}}</span>\n  <span class=\"tp-tab-title\">{{title}}</span>\n</div>\n<div class=\"tp-tab-image\"></div>",
	'settings' => '{"dim":{"width":"300","height":"80"},"placeholders":{"borderc":{"title":"Border-Color","type":"color","data":"rgba(255,255,255,0.15)"},"size":{"title":"Size","type":"custom","data":"60"},"bg":{"title":"Background","type":"color","data":"rgba(0,0,0,0)"},"color":{"title":"Content-Color","type":"color","data":"rgba(51,51,51,0)"},"datecolor":{"title":"Date-Color","type":"color","data":"rgba(255,255,255,0.5)"},"datesize":{"title":"Date-Size","type":"custom","data":"12"},"titlecolor":{"title":"Title-Color","type":"color","data":"#ffffff"},"titlesize":{"title":"Title-Size","type":"custom","data":"14"},"hbg":{"title":"Hover-Background","type":"color","data":"rgba(0,0,0,0.51)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4002,
	'handle' => 'hades',
	'type' => 'tabs',
	'name' => 'Hades',
	'css' => ".hades .tp-tab {\n  opacity:1;\n }\n    \n.hades .tp-tab-title\n {\n      display:block;\n      color:##param1##;\n      font-weight:600;\n      font-size:##param1size##px;\n      text-align:center;\n      line-height:25px;      \n    } \n.hades .tp-tab-price\n {\n\tdisplay:block;\n    text-align:center;\n    color:##param2##;\n    font-size:##p2size##px;\n    margin-top:10px;\n   line-height:20px\n}\n\n.hades .tp-tab-button {\n    display:inline-block;\n    margin-top:15px;\n    text-align:center;\n\tpadding:5px 15px;\n  \tcolor:##p3##;\n  \tfont-size:##p3size##px;\n  \tbackground:##p3bg##;\n   \tborder-radius:4px;\n   font-weight:400;\n}\n.hades .tp-tab-inner {\n\ttext-align:center;\n}\n\n              ",
	'markup' => "<div class=\"tp-tab-inner\">\n  <span class=\"tp-tab-title\">{{param1}}</span>\n  <span class=\"tp-tab-price\">{{param2}}</span>\n  <span class=\"tp-tab-button\">{{param3}}</span>\n</div>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"param1":{"title":"Param1","type":"color","data":"#333333"},"param1size":{"title":"Param1-Size","type":"custom","data":"18"},"param2":{"title":"Param2","type":"color","data":"#999999"},"p2size":{"title":"Param2-Size","type":"custom","data":"16"},"p3":{"title":"Param3","type":"color","data":"#ffffff"},"p3size":{"title":"Param3-Size","type":"custom","data":"14"},"p3bg":{"title":"Param3-BG","type":"color","data":"#219bd7"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4003,
	'handle' => 'ares',
	'type' => 'tabs',
	'name' => 'Ares',
	'css' => ".ares .tp-tab { \n  opacity:1;      \n  padding:10px;\n  box-sizing:border-box;\n  font-family: '##font-family##', sans-serif;\n  border-bottom: ##bottom-border-size##px solid ##bottom-border-color##;\n  background:##idle-bg-color##);\n }\n.ares .tp-tab-image \n{ \n  width:##image-size##px;\n  height:##image-size##px; max-height:100%; max-width:100%;\n  position:relative;\n  display:inline-block;\n  float:left;\n\n}\n.ares .tp-tab-content \n{\n    background:rgba(0,0,0,0); \n    position:relative;\n    padding:15px 15px 15px 85px;\n left:0px;\n overflow:hidden;\n margin-top:-15px;\n    box-sizing:border-box;\n    color:#333;\n    display: inline-block;\n    width:100%;\n    height:100%;\n position:absolute; }\n.ares .tp-tab-date\n  {\n  display:block;\n  color: ##param1-color##;\n  font-weight:500;\n  font-size:##param1-size##px;\n  margin-bottom:0px;\n  }\n.ares .tp-tab-title \n{\n    display:block;\t\n    text-align:left;\n    color:##param2-color##;\n    font-size:##param2-size##px;\n    font-weight:500;\n    text-transform:none;\n    line-height:17px;\n}\n.ares .tp-tab.rs-touchhover,\n.ares .tp-tab.selected {\n\tbackground:##hover-bg-color##; \n}\n\n.ares .tp-tab-mask {\n}\n\n/* media queries */\n@media only screen and (max-width: 960px) {\n\n}\n@media only screen and (max-width: 768px) {\n\n}",
	'markup' => "<div class=\"tp-tab-content\">\n  <span class=\"tp-tab-date\">{{param1}}</span>\n  <span class=\"tp-tab-title\">{{param2}}</span>\n</div>\n<div class=\"tp-tab-image\"></div>",
	'settings' => '{"dim":{"width":"250","height":"80"},"placeholders":{"font-family":{"title":"Font-Family","type":"font-family","data":"Roboto"},"bottom-border-color":{"title":"Bottom-Border","type":"color","data":"#e5e5e5"},"bottom-border-size":{"title":"Bottom-Border-Size","type":"custom","data":"1"},"image-size":{"title":"Image-Size","type":"custom","data":"60"},"param1-color":{"title":"Param-1-Color","type":"color","data":"#aaaaaa"},"param1-size":{"title":"Param-1-Size","type":"custom","data":"12"},"param2-color":{"title":"Param-2-Color","type":"color","data":"#333333"},"param2-size":{"title":"Param-2-Size","type":"custom","data":"14"},"hover-bg-color":{"title":"Hover-Background","type":"color","data":"#eeeeee"},"idle-bg-color":{"title":"Idle-Background","type":"color","data":"rgba(0,0,0,0)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4004,
	'handle' => 'hebe',
	'type' => 'tabs',
	'name' => 'Hebe',
	'css' => ".hebe .tp-tab-title {\n    color:##title-color##;\n    font-size:##title-size##px;\n    font-weight:700;\n    text-transform:uppercase;\n    font-family:'##title-font##'\n    margin-bottom:5px;\n}\n\n.hebe .tp-tab-desc {\n\tfont-size:##param1-size##px;\n    font-weight:400;\n    color:##param1-color##;\n    line-height:25px;\n\tfont-family:'##param1-font##';\n}\n",
	'markup' => "<div class=\"tp-tab-title\">{{param1}}</div>\n<div class=\"tp-tab-desc\">{{title}}</div>",
	'settings' => '{"dim":{"width":160,"height":160},"placeholders":{"title-color":{"title":"Param-Color","type":"color","data":"#a8d8ee"},"title-size":{"title":"Param-Size","type":"custom","data":"13"},"title-font":{"title":"Param-Font","type":"font-family","data":"Roboto Slab"},"param1-color":{"title":"Title-Color","type":"color","data":"#ffffff"},"param1-size":{"title":"Title-Size","type":"custom","data":"18"},"param1-font":{"title":"Title-Font","type":"font-family","data":"Roboto Slab"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4005,
	'handle' => 'hermes',
	'type' => 'tabs',
	'name' => 'Hermes',
	'css' => ".hermes .tp-tab { \n  opacity:1;  \n  box-sizing:border-box;\n  padding-right:10px;\n }\n \n.hermes .tp-tab-content-wrapper {\n  position:absolute;\n  width:100%;\n  min-height:40%;\n  bottom:0px;\n  box-sizing:border-box;\n  padding-right:10px;\n  overflow:hidden;\n}\n.hermes .tp-tab-bg {\n  position:absolute; \n  top:0px;\n  left:-10px; \n  width:100%;height:100%;\n  background:##back-color##; \n}\n.hermes .tp-tab-image \n{ \n  width:100%;\n  height:60%;\n  position:relative;\n}\n.hermes .tp-tab-content \n{\n  position:relative;\n  padding:##padding##;\n  box-sizing:border-box;\n  display:block;\n  width:100%;\n }\n.hermes .tp-tab-date\n  {\n  display:block;\n  color:##param1-color##;\n  font-weight:600;\n  font-size:##param1-size##px;\n  margin-bottom:10px;\n  }\n.hermes .tp-tab-title \n{\n    display:block;\t\n    color:##param2-color##;\n    font-size:##param2-size##px;\n    font-weight:800;\n    text-transform:uppercase;\n   line-height:##param2-size##px;\n}\n\n.hermes .tp-tab.selected .tp-tab-content-wrapper:after {\n  width: 0px;\n\theight: 0px;\n\tborder-style: solid;\n\tborder-width: 25px 0 25px 10px;\n\tborder-color: transparent transparent transparent ##back-color##;\n\tcontent:' ';\n    position:absolute;\n    right:0px;\n    bottom:50%;\n    margin-bottom:-25px;\n}\n\n\n/* media queries */\n@media only screen and (max-width: 960px) {\n  .hermes .tp-tab .tp-tab-title {font-size:14px;line-height:16px;}\n  .hermes .tp-tab-date { font-size:11px; line-height:13px;margin-bottom:10px;}\n  .hermes .tp-tab-content { padding:15px 15px 15px 25px;}\n}\n@media only screen and (max-width: 768px) {\n  .hermes .tp-tab .tp-tab-title {font-size:12px;line-height:14px;}\n  .hermes .tp-tab-date {font-size:10px; line-height:12px;margin-bottom:5px;}\n  .hermes .tp-tab-content {padding:10px 10px 10px 20px;}\n}\n\n/* BOTTOM HORIZONTAL */\n.hermes .nav-pos-ver-bottom.nav-dir-horizontal .tp-tab-image             { margin-top:40%; }\n.hermes .nav-pos-ver-bottom.nav-dir-horizontal .tp-tab-content-wrapper   { position:absolute; bottom:auto;top:0px; padding-top:10px;}\n.hermes .nav-pos-ver-bottom.nav-dir-horizontal                           { padding-right:0px; }\n.hermes .nav-pos-ver-bottom.nav-dir-horizontal .tp-tab-bg                { left:0px; top:10px;}\n.hermes .nav-pos-ver-bottom.nav-dir-horizontal.tp-tab.selected .tp-tab-content-wrapper:after {  \n  border-width: 0px 25px 10px 25px;\n  border-color: transparent transparent ##back-color## transparent;\n  top:0px;\n  left:50%;\n  margin-left:0px 0px 0px -25px;\n}\n\n/* CENTER HORIZONTAL */\n.hermes .nav-pos-ver-center.nav-dir-horizontal .tp-tab-image             { margin-top:40%; }\n.hermes .nav-pos-ver-center.nav-dir-horizontal .tp-tab-content-wrapper   { position:absolute; bottom:auto;top:0px; padding-top:10px;}\n.hermes .nav-pos-ver-center.nav-dir-horizontal                           { padding-right:0px; }\n.hermes .nav-pos-ver-center.nav-dir-horizontal .tp-tab-bg                { left:0px; top:10px;}\n.hermes .nav-pos-ver-center.nav-dir-horizontal.tp-tab.selected .tp-tab-content-wrapper:after {  \n  border-width: 0px 25px 10px 25px;\n  border-color: transparent transparent ##back-color## transparent;\n  top:0px;\n  left:50%;\n  margin:0px 0px 0px -25px;\n}\n\n/* BOTTOM HORIZONTAL */\n.hermes .nav-pos-ver-top.nav-dir-horizontal .tp-tab-content-wrapper   { padding-bottom:10px;}\n.hermes .nav-pos-ver-top.nav-dir-horizontal                           { padding-right:0px; }\n.hermes .nav-pos-ver-top.nav-dir-horizontal .tp-tab-bg                { left:0px; top:-10px;}\n.hermes .nav-pos-ver-top.nav-dir-horizontal.tp-tab.selected .tp-tab-content-wrapper:after {  \n  border-width: 10px 25px 0px 25px;\n  border-color: ##back-color## transparent transparent transparent;\n  bottom:0px;\n  left:50%;\n  margin:0px 0px 0px -25px;\n}\n\n/* RIGHT VEERTICAL */\n.hermes .nav-pos-hor-right.nav-dir-vertical .tp-tab-content-wrapper { padding-left:10px; padding-right:0px; left:0px;} \n.hermes .nav-pos-hor-right.nav-dir-vertical { padding-left:10px; padding-right:0px;}\n.hermes .nav-pos-hor-right.nav-dir-vertical .tp-tab-bg  { left:10px;}\n.hermes .nav-pos-hor-right.nav-dir-vertical.tp-tab.selected .tp-tab-content-wrapper:after {  \n  border-width: 25px 10px 25px 0px;\n  border-color:transparent  ##back-color## transparent transparent;\n  right:auto;\n  left:0px;    \n}\n\n",
	'markup' => "<span class=\"tp-tab-image\"></span>\n<span class=\"tp-tab-content-wrapper\">\n<span class=\"tp-tab-bg\"></span>\n<span class=\"tp-tab-content\">\n\t<span class=\"tp-tab-date\">{{param1}}</span>\n\t<span class=\"tp-tab-title\">{{param2}}</span>\n</span>\n</span>",
	'settings' => '{"dim":{"width":"240","height":"260"},"placeholders":{"back-color":{"title":"Background","type":"color","data":"#000000"},"param1-color":{"title":"Param-1-Color","type":"color","data":"#888888"},"param2-color":{"title":"Param-2-Color","type":"color","data":"#ffffff"},"param1-size":{"title":"Param-1-Size","type":"custom","data":"12"},"param2-size":{"title":"Param-2-Size","type":"custom","data":"16"},"padding":{"title":"Padding","type":"custom","data":"20px"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4009,
	'handle' => 'erinyen',
	'type' => 'tabs',
	'name' => 'Erinyen',
	'css' => ".erinyen .tp-tab-title {\n    color:##title-color##;\n    font-size:##title-size##px;\n    font-weight:##title-font-weight##;\n    text-transform:uppercase;\n    font-family:'##title-font##';\n    margin-bottom:5px;\n    line-height:##title-line-height##px;\n}\n\n.erinyen .tp-tab-desc {\n\tfont-size:##desc-size##px;\n    font-weight:##desc-font-weight##;\n    color:##desc-color##;\n    line-height:##desc-line-height##px;\n\tfont-family:'##desc-font##';\n}\n      ",
	'markup' => "<div class=\"tp-tab-title\">{{title}}</div>\n<div class=\"tp-tab-desc\">{{description}}</div>",
	'settings' => '{"dim":{"width":"160","height":"160"},"placeholders":{"title-color":{"title":"Title-Color","type":"color","data":"#a8d8ee"},"desc-color":{"title":"Description-Color","type":"color","data":"#ffffff"},"title-size":{"title":"Title-Size","type":"custom","data":"13"},"desc-size":{"title":"Description-Size","type":"custom","data":"18"},"title-font":{"title":"Title-Font","type":"font-family","data":"Roboto Slab"},"desc-font":{"title":"Description-Font","type":"font-family","data":"Roboto Slab"},"title-line-height":{"title":"Title-Line-Height","type":"custom","data":"15"},"desc-line-height":{"title":"Desc-Line-Height","type":"custom","data":"25"},"title-font-weight":{"title":"Title-Font-Weight","type":"custom","data":"700"},"desc-font-weight":{"title":"Desc-Font-Weight","type":"custom","data":"400"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4010,
	'handle' => 'zeus',
	'type' => 'tabs',
	'name' => 'Zeus',
	'css' => ".zeus .tp-tab { \n  opacity:1;      \n  box-sizing:border-box;\n}\n\n.zeus .tp-tab-title { \ndisplay: block;\ntext-align: center;\nbackground: ##bg-color##;\nfont-family: '##title-font##', serif; \nfont-weight: 700; \nfont-size: ##font-size##px; \nline-height: ##font-size##px;\ncolor: ##color##; \npadding: ##padding##; }\n\n.zeus .tp-tab.rs-touchhover .tp-tab-title,\n.zeus .tp-tab.selected .tp-tab-title {\n  color: ##hover-color##;\n  background:##back-hover##; \n}",
	'markup' => "<span class=\"tp-tab-title\">{{title}}</span>",
	'settings' => '{"dim":{"width":"160","height":"31"},"placeholders":{"bg-color":{"title":"BG-RGBA","type":"color","data":"rgba(0,0,0,0.25)"},"back-hover":{"title":"Hover-Background","type":"color","data":"#ffffff"},"color":{"title":"Title-Color","type":"color","data":"#ffffff"},"hover-color":{"title":"Hover-Title-Color","type":"color","data":"#000000"},"font-size":{"title":"Title-Size","type":"custom","data":"13"},"title-font":{"title":"Title-Font-Family","type":"font-family","data":"Roboto Slab"},"padding":{"title":"Padding","type":"custom","data":"9px 10px"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 4011,
	'handle' => 'metis',
	'type' => 'tabs',
	'name' => 'Metis',
	'css' => ".metis .tp-tab-number {\n    color:##title-color##;\n    font-size:##title-size##px;\n    line-height:30px;\n    font-weight:##title-weight##;\n    font-family: '##font-family##';\n    width: ##basicwidth##px;   \n    display: inline-block;\n\tposition:absolute;\n    text-align:center;\n    box-sizing:border-box;\n}\n\n\n.metis .tp-tab-mask {\n   left:0px;\n   top:0px;\n   max-width:##basicwidth## !important;   \n   line-height:30px;\n   transition:0.4s padding-left, 0.4s left, 0.4s max-width;\n}\n\n.metis:hover .tp-tab-mask{\n   left:15px;\n   padding-left:0px;\n   max-width:500px !important;\n}\n\n.metis .tp-tab-divider { \n\tborder-right: 1px solid transparent;\n    height: 30px;\n    width: 1px;\n    display: inline-block;\n    position:absolute;\n    left:##basicwidth##px;\n    transition:0.4s all;\n}\n\n.metis .tp-tab-title {\n    color:##desc-color##;\n    font-size:##desc-size##px;\n    line-height:##desc-size##px;\n    font-weight:##desc-font-weight##;\n    font-family: '##font-family##';\n    position:relative;\n    line-height:30px;\n    padding-left: 30px;\n    display: inline-block;\n    transform:translatex(-100%);\n    transition:0.4s all;\n}\n\n.metis .tp-tab-title-mask {\n   position:absolute;\n   overflow:hidden;\n   left:##basicwidth##px; \n}\n\n.metis:hover .tp-tab-title {\n   transform:translatex(0);\n }\n\n.metis .tp-tab { \n\topacity: 0.15;\n    transition:0.4s all;\n}\n\n.metis .tp-tab.rs-touchhover,\n.metis .tp-tab.selected {\n    opacity: 1; \n}\n\n.metis .tp-tab.selected .tp-tab-divider {\n\tborder-right: 1px solid #cdb083;\n}\n\n.metis:hover .tp-tab-divider {\n\tmargin-left:15px;\n}\n\n.metis.tp-tabs {\n   max-width:##basicwidth##px !important;  \n}\n  \n.metis.tp-tabs:before {\n content:' ';\n height:100%;\n width:##basicwidth##px; \n border-right:1px solid rgba(255,255,255,0.10);\n left:0px;\n top:0px;\n position:absolute;\n transition:0.4s all;\n background:##bgcolor##;\n box-sizing:content-box !important;\n padding:0px;\n }\n \n .metis.tp-tabs.rs-touchhover:before{\n  width:##basicwidth##px;\n  background:##bghovercolor##;\n  padding:0px 15px;\n }\n     \n @media (max-width:499px){\n .metis.tp-tabs:before {\n background:##handybg##;\n }\n }\n ",
	'markup' => "<div class=\"tp-tab-wrapper\">\n<div class=\"tp-tab-number\">{{param1}}</div>\n<div class=\"tp-tab-divider\"></div>\n<div class=\"tp-tab-title-mask\">\n<div class=\"tp-tab-title\">{{title}}</div>\n</div>\n</div>",
	'settings' => '{"dim":{"width":"300","height":"40"},"placeholders":{"font-family":{"title":"Font-Family","type":"font-family","data":"Playfair Display"},"title-color":{"title":"Title-Color","type":"color","data":"#ffffff"},"title-size":{"title":"Title-Font-Size","type":"custom","data":"40"},"desc-color":{"title":"Desc-Color","type":"color","data":"#ffffff"},"desc-size":{"title":"Desc-Font-Size","type":"custom","data":"20"},"desc-font-weight":{"title":"Desc-Font-Weight","type":"custom","data":"400"},"title-weight":{"title":"Title-Weight","type":"custom","data":"400"},"basicwidth":{"title":"Basic-Width","type":"custom","data":"80"},"bgcolor":{"title":"Background","type":"color","data":"rgba(0,0,0,0.15)"},"bghovercolor":{"title":"Hover-Background","type":"color","data":"rgba(0,0,0,0.25)"},"handybg":{"title":"Handy-Background","type":"color","data":"rgba(0,0,0,0.75)"}},"presets":{},"version":"6.0.0"}',
);
$navigations[] = array(
	'id' => 5000,
	'handle' => 'hesperiden',
	'type' => 'scrubber',
	'name' => 'Hesperiden',
	'css' => ".hesperiden .sr7-scrubber {
		opacity:1;
		-webkit-perspective: 600px;
		perspective: 600px;
	}
	
	.hesperiden .sr7-scrubber-wrap{
		background-color: ##bg-color##;
	}

	.hesperiden .sr7-scrubber-handle{
		background-color: ##handle-bg##;
	}

	.hesperiden .pattern-color{
		fill: ##pattern-color##;
	}

	.hesperiden .sr7-scrubber-progress{
		background-color: ##progress-bg##;
	}

	.hesperiden.sr7-scrubber .sr7-scrubber-title {
		font-size:##title-font-size##px;
		position:absolute;
		margin-top:-10px;
		color:##title-color##;
		background-color: ##title-bg##;
		display:block;
		z-index:1000;
		padding:5px 10px;
		bottom:0px;
		left:0px;
		width:100%;
		box-sizing:border-box;
		text-align:center;
		overflow:hidden;
		white-space:nowrap;
		transition:all 0.3s;
		-webkit-transition:all 0.3s;
		transform:rotatex(90deg) translatez(0.001px);
		transform-origin:50% 100%;
		-webkit-transform:rotatex(90deg) translatez(0.001px);
		-webkit-transform-origin:50% 100%;
		opacity:0;
		transform:rotatex(0deg);
		-webkit-transform:rotatex(0deg);
		opacity:1;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.hesperiden .sr7-scrubber-ha:before {
		font-family: 'revicons';
		font-size: ##arrow-size##px;
		color: ##arrow-color##;
		display:block;
		line-height: 1;
		text-align: center;
		height: 100%;
	}

	.hesperiden .sr7-scrubber-hla:before {
		content: '##left-icon##';
		margin-left:-##arrow-space##px;
	}

	.hesperiden .sr7-scrubber-hra:before {
		content: '##right-icon##';
		margin-right:-##arrow-space##px;
	}",
	'markup' => "<span class=\"sr7-scrubber-img\"></span>\n<span class=\"sr7-scrubber-title\">{{title}}</span>",
	'settings' => '{
		"dim": {
			"width": 100,
			"height": 30
		},
		"presets": {
			"thumbScale": "100%",
			"handleScale": "100%",
			"hoverScale": "false",
			"thumbnail": "true",
			"handleProgress": "false",
			"progressAlign": "left",
			"scale": "100",
			"fade": "true",
			"animScale": "false",
			"translate": "50px",
			"spin": "false",
			"handleArrows": "true",
			"trackPattern": "dots",
			"thumbOffset": "0",
			"skew": "0"
		},
		"placeholders": {
			"title-bg": {
				"title": "Title-BG-Color",
				"type": "color",
				"data": "rgba(0,0,0,0.15)"
			},
			"title-color": {
				"title": "Title-Font-Color",
				"type": "color",
				"data": "#ffffff"
			},
			"title-font-size": {
				"title": "Title-Font-Size",
				"type": "custom",
				"data": "12"
			},
			"bg-color": {
				"title": "Background-Color",
				"type": "color",
				"data": "rgba(0, 0, 0, 0.5)"
			},
			"handle-bg": {
				"title": "Handle-Background-Color",
				"type": "color",
				"data": "rgba(255, 255, 255, 0.3)"
			},
			"pattern-color": {
				"title": "Pattern-Color",
				"type": "color",
				"data": "#ffffff"
			},
			"progress-bg": {
				"title": "Progress-Background-Color",
				"type": "color",
				"data": "rgba(0, 0, 0, 0.5)"
			},
			"arrow-color": {
				"title": "Arrow-Color",
				"type": "color",
				"data": "#ffffff"
			},
			"arrow-size": {
				"title": "Arrow-Size",
				"type": "custom",
				"data": "20"
			},
			"arrow-space": {
				"title": "Arrow-Space",
				"type": "custom",
				"data": "30"
			},
			"left-icon": {
				"title": "Left-Icon",
				"type": "icon",
				"data": "\\\\e82c"
			},
			"right-icon": {
				"title": "Right-Icon",
				"type": "icon",
				"data": "\\\\e82d"
			}
		},
		"version": "6.0.0"
	}');

$navigations[] = array(
	'id' => 5001,
	'handle' => 'thinbar',
	'type' => 'scrubber',
	'name' => 'Thin Bar',
	'css' => ".thinbar .sr7-scrubber {
		opacity:1;
		-webkit-perspective: 600px;
		perspective: 600px;
	}
	
	.thinbar .sr7-scrubber-wrap{
		background-color:##bg-color##;
	}

	.thinbar .sr7-scrubber-handle{
		background-color:##handle-bg##;
	}

	.thinbar .pattern-color{
		fill:##pattern-color##;
	}

	.thinbar .sr7-scrubber-progress{
		background-color:##progress-bg##;
	}

	.thinbar .sr7-scrubber-ha:before {
		font-family: 'revicons';
		font-size: ##arrrow-size##px;
		color: ##arrow-color##;
		display:block;
		line-height: 1;
		text-align: center;
		height: 100%;
	}

	.thinbar .sr7-scrubber-hla:before {
		content: '##left-icon##';
		margin-left:-##arrow-space##px;
	}

	.thinbar .sr7-scrubber-hra:before {
		content: '##right-icon##';
		margin-right:-##arrow-space##px;
	}",
	'markup' => "<span class=\"sr7-scrubber-img\"></span>",
	'settings' => '{
		"dim": {
			"width": 100,
			"height": 10
		},
		"presets": {
			"thumbScale": "100%",
			"handleScale": "300%",
			"hoverScale": "true",
			"thumbnail": "true",
			"handleProgress": "false",
			"progressAlign": "left",
			"scale": "100",
			"fade": "true",
			"animScale": "false",
			"translate": "0",
			"spin": "false",
			"handleArrows": "false",
			"trackPattern": "none",
			"thumbOffset": "0",
			"skew": "0"
		},
		"placeholders": {
			"bg-color": {
				"title": "Background-Color",
				"type": "color",
				"data": "rgba(255, 255, 255, 1)"
			},
			"handle-bg": {
				"title": "Handle-Background-Color",
				"type": "color",
				"data": "rgba(255, 255, 255, 1)"
			},
			"progress-bg": {
				"title": "Progress-Background-Color",
				"type": "color",
				"data": "rgba(0, 0, 0, 0.5)"
			},
			"arrow-color": {
				"title": "Arrow-Color",
				"type": "color",
				"data": "#ffffff"
			},
			"arrow-size": {
				"title": "Arrow-Size",
				"type": "custom",
				"data": "20"
			},
			"arrow-space": {
				"title": "Arrow-Space",
				"type": "custom",
				"data": "30"
			},
			"left-icon": {
				"title": "Left-Icon",
				"type": "icon",
				"data": "\\\\e82c"
			},
			"right-icon": {
				"title": "Right-Icon",
				"type": "icon",
				"data": "\\\\e82d"
			}
		},
		"version": "6.0.0"
	}');

	$navigations[] = array(
		'id' => 5002,
		'handle' => 'nereus',
		'type' => 'scrubber',
		'name' => 'Nereus',
		'css' => ".nereus .sr7-scrubber {
			opacity:1;
			-webkit-perspective: 600px;
			perspective: 600px;
		}
		
		.nereus .sr7-scrubber-wrap{
			background-color:##bg-color##;
		}
	
		.nereus .sr7-scrubber-handle{
			background-color:##handle-bg##;
		}
	
		.nereus .pattern-color{
			fill:#ffffff;
		}
	
		.nereus .sr7-scrubber-progress{
			background-color:##progress-bg##;
		}
	
		.nereus.sr7-scrubber .sr7-scrubber-title {
			font-size:##title-font-size##px;
			position:absolute;
			margin-top:-10px;
			color: ##title-color##;
			display:block;
			z-index:1000;
			background-color: ##title-bg##;
			padding:5px 10px;
			bottom:0px;
			left:0px;
			width:100%;
			box-sizing:border-box;
			text-align:center;
			overflow:hidden;
			white-space:nowrap;
			transition:all 0.3s;
			-webkit-transition:all 0.3s;
			transform:rotatex(90deg) translatez(0.001px);
			transform-origin:50% 100%;
			-webkit-transform:rotatex(90deg) translatez(0.001px);
			-webkit-transform-origin:50% 100%;
			opacity:0;
			transform:rotatex(0deg);
			-webkit-transform:rotatex(0deg);
			opacity:1;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	
		.nereus .sr7-scrubber-ha:before {
			font-family: 'revicons';
			font-size: ##arrow-size##px;
			color: ##arrow-color##;
			display:block;
			line-height: 1;
			text-align: center;
			height: 100%;
		}
	
		.nereus .sr7-scrubber-hla:before {
			content: '##left-icon##';
			margin-left:-##arrow-space##px;
		}
	
		.nereus .sr7-scrubber-hra:before {
			content: '##right-icon##';
			margin-right:-##arrow-space##px;
		}",
		'markup' => "<span class=\"sr7-scrubber-img\"></span>\n<span class=\"sr7-scrubber-title\">{{title}}</span>",
		'settings' => '{
			"dim": {
				"width": 100,
				"height": 30
			},
			"presets": {
				"thumbScale": "200%",
				"handleScale": "100%",
				"hoverScale": true,
				"thumbnail": true,
				"handleProgress": "false",
				"progressAlign": "left",
				"scale": "100",
				"fade": "false",
				"animScale": "false",
				"translate": "0",
				"spin": "false",
				"handleArrows": true,
				"trackPattern": "dots",
				"thumbOffset": "110%",
				"skew": "30deg"
			},
			"placeholders": {
				"title-bg": {
					"title": "Title-BG-Color",
					"type": "color",
					"data": "rgba(0,0,0,0.15)"
				},
				"title-color": {
					"title": "Title-Font-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"title-font-size": {
					"title": "Title-Font-Size",
					"type": "custom",
					"data": "12"
				},
				"bg-color": {
					"title": "Background-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 0.5)"
				},
				"handle-bg": {
					"title": "Handle-Background-Color",
					"type": "color",
					"data": "rgba(255, 255, 255, 1)"
				},
				"progress-bg": {
					"title": "Progress-Background-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 0.5)"
				},
				"arrow-color": {
					"title": "Arrow-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"arrow-size": {
					"title": "Arrow-Size",
					"type": "custom",
					"data": "20"
				},
				"arrow-space": {
					"title": "Arrow-Space",
					"type": "custom",
					"data": "30"
				},
				"left-icon": {
					"title": "Left-Icon",
					"type": "icon",
					"data": "\\\\e82e"
				},
				"right-icon": {
					"title": "Right-Icon",
					"type": "icon",
					"data": "\\\\e82f"
				}
			},
			"version": "6.0.0"
		}'
	);

	$navigations[] = array(
		'id' => 5003,
		'handle' => 'hades',
		'type' => 'scrubber',
		'name' => 'Hades',
		'css' => ".hades .sr7-scrubber {
			opacity:1;
			-webkit-perspective: 600px;
			perspective: 600px;
		}
		
		.hades .sr7-scrubber-wrap{
			background-color:##bg-color##
		}

		.hades .sr7-scrubber-handle{
			border-radius: ##border-radius##px;
			border: solid ##border-size##px ##border-color##;
			background-color:##handle-bg##;
			box-sizing: border-box;
		}

		.hades .sr7-scrubber-thumb, .hades .sr7-scrubber-img{
			border-radius: ##border-radius##px;
		}

		.hades .pattern-color{
			fill:##pattern-color##;
		}

		.hades .sr7-scrubber-progress{
			background-color:##progress-bg##;
		}

		.hades.sr7-scrubber .sr7-scrubber-title {
			font-size:##title-font-size##px;
			position:absolute;
			margin-top:-10px;
			color:##title-color##;
			display:block;
			z-index:1000;
			background-color:##title-bg##;
			padding:5px 10px;
			bottom:0px;
			left:0px;
			width:100%;
			box-sizing:border-box;
			text-align:center;
			overflow:hidden;
			white-space:nowrap;
			transition:all 0.3s;
			-webkit-transition:all 0.3s;
			transform:rotatex(90deg) translatez(0.001px);
			transform-origin:50% 100%;
			-webkit-transform:rotatex(90deg) translatez(0.001px);
			-webkit-transform-origin:50% 100%;
			opacity:0;
			transform:rotatex(0deg);
			-webkit-transform:rotatex(0deg);
			opacity:1;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.hades .sr7-scrubber-ha:before {
			font-family: 'revicons';
			font-size: ##arrow-size##px;
			color: ##arrow-color##;
			display:block;
			line-height: 1;
			text-align: center;
			height: 100%;
		}

		.hades .sr7-scrubber-hla:before {
			content: '##left-icon##';
			margin-left:-##arrow-space##px;
		}

		.hades .sr7-scrubber-hra:before {
			content: '##right-icon##';
			margin-right:-##arrow-space##px;
		}",
		'markup' => "<span class=\"sr7-scrubber-img\"></span>\n<span class=\"sr7-scrubber-title\">{{title}}</span>",
		'settings' => '{
			"dim": {
				"width": 50,
				"height": 20
			},
			"presets": {
				"thumbScale": "100%",
				"handleScale": "250%",
				"hoverScale": false,
				"thumbnail": true,
				"handleProgress": "false",
				"progressAlign": "left",
				"scale": "100",
				"fade": "false",
				"animScale": "false",
				"translate": "0",
				"spin": "false",
				"handleArrows": true,
				"trackPattern": "hlines",
				"thumbOffset": "0%",
				"skew": "0deg"
			},
			"placeholders": {
				"title-bg": {
					"title": "Title-BG-Color",
					"type": "color",
					"data": "rgba(0,0,0,0.15)"
				},
				"title-color": {
					"title": "Title-Font-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"title-font-size": {
					"title": "Title-Font-Size",
					"type": "custom",
					"data": "12"
				},
				"bg-color": {
					"title": "Background-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 0.5)"
				},
				"handle-bg": {
					"title": "Handle-Background-Color",
					"type": "color",
					"data": "rgba(255, 255, 255, 1)"
				},
				"pattern-color": {
					"title": "Patter-Color",
					"type": "color",
					"data": "rgba(255, 255, 255, 1)"
				},
				"progress-bg": {
					"title": "Progress-Background-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 0.5)"
				},
				"arrow-color": {
					"title": "Arrow-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"arrow-size": {
					"title": "Arrow-Size",
					"type": "custom",
					"data": "20"
				},
				"arrow-space": {
					"title": "Arrow-Space",
					"type": "custom",
					"data": "30"
				},
				"left-icon": {
					"title": "Left-Icon",
					"type": "icon",
					"data": "\\\\e82e"
				},
				"right-icon": {
					"title": "Right-Icon",
					"type": "icon",
					"data": "\\\\e82f"
				},
				"border-color": {
					"Title": "Border-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"border-radius": {
					"title": "Border-Radius",
					"type": "custom",
					"data": "50"
				},
				"border-size": {
					"title": "Border-Size",
					"type": "custom",
					"data": "3"
				}
			},
			"version": "6.0.0"
		}
	');

	$navigations[] = array(
		'id' => 5004,
		'handle' => 'pleroma',
		'type' => 'scrubber',
		'name' => 'Pleroma',
		'css' => ".pleroma .sr7-scrubber {
			opacity:1;
			-webkit-perspective: 600px;
			perspective: 600px;
		}
		
		.pleroma .sr7-scrubber-wrap{
			background-color:##bg-color##
		}

		.pleroma .pattern-color{
			fill:##pattern-color##;
		}

		.pleroma .sr7-scrubber-progress{
			background-color:##progress-bg##;
		}

		.pleroma.sr7-scrubber .sr7-scrubber-title {
			font-size:##title-font-size##px;
			position:absolute;
			margin-top:-10px;
			color:##title-color##;
			display:block;
			z-index:1000;
			background-color:##title-bg##;
			padding:5px 10px;
			bottom:0px;
			left:0px;
			width:100%;
			box-sizing:border-box;
			text-align:center;
			overflow:hidden;
			white-space:nowrap;
			transition:all 0.3s;
			-webkit-transition:all 0.3s;
			transform:rotatex(90deg) translatez(0.001px);
			transform-origin:50% 100%;
			-webkit-transform:rotatex(90deg) translatez(0.001px);
			-webkit-transform-origin:50% 100%;
			opacity:0;
			transform:rotatex(0deg);
			-webkit-transform:rotatex(0deg);
			opacity:1;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.pleroma .sr7-scrubber-ha:before {
			font-family: 'revicons';
			font-size: ##arrow-size##px;
			color: ##arrow-color##;
			display:block;
			line-height: 1;
			text-align: center;
			height: 100%;
		}

		.pleroma .sr7-scrubber-hla:before {
			content: '##left-icon##';
			margin-left:-##arrow-space##px;
		}

		.pleroma .sr7-scrubber-hra:before {
			content: '##right-icon##';
			margin-right:-##arrow-space##px;
		}",
		'markup' => "<span class=\"sr7-scrubber-img\"></span>\n<span class=\"sr7-scrubber-title\">{{title}}</span>",
		'settings' => '{
			"dim": {
				"width": 100,
				"height": 30
			},
			"presets": {
				"thumbScale": "100%",
				"handleScale": "150%",
				"hoverScale": true,
				"thumbnail": false,
				"handleProgress": "true",
				"progressAlign": "left",
				"scale": "100",
				"fade": "true",
				"animScale": "false",
				"translate": "0",
				"spin": "false",
				"handleArrows": true,
				"trackPattern": "dots",
				"thumbOffset": "110%",
				"skew": "0deg"
			},
			"placeholders": {
				"title-bg": {
					"title": "Title-BG-Color",
					"type": "color",
					"data": "rgba(255,255,255,.5)"
				},
				"title-color": {
					"title": "Title-Font-Color",
					"type": "color",
					"data": "#000000"
				},
				"title-font-size": {
					"title": "Title-Font-Size",
					"type": "custom",
					"data": "12"
				},
				"bg-color": {
					"title": "Background-Color",
					"type": "color",
					"data": "rgba(255, 255, 255, 0.3)"
				},
				"handle-bg": {
					"title": "Handle-Background-Color",
					"type": "color",
					"data": "rgba(255, 255, 255, 1)"
				},
				"pattern-color": {
					"title": "Patter-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 1)"
				},
				"progress-bg": {
					"title": "Progress-Background-Color",
					"type": "color",
					"data": "rgba(0, 0, 0, 0.5)"
				},
				"arrow-color": {
					"title": "Arrow-Color",
					"type": "color",
					"data": "#ffffff"
				},
				"arrow-size": {
					"title": "Arrow-Size",
					"type": "custom",
					"data": "20"
				},
				"arrow-space": {
					"title": "Arrow-Space",
					"type": "custom",
					"data": "30"
				},
				"left-icon": {
					"title": "Left-Icon",
					"type": "icon",
					"data": "\\\\e817"
				},
				"right-icon": {
					"title": "Right-Icon",
					"type": "icon",
					"data": "\\\\e818"
				}
			},
			"version": "6.0.0"
		}
	');

		// "thumbScale": "100%",
		// "handleScale": "100%",
		// "hoverScale": "false",
		// "thumbnail": "false",
		// "handleProgress": "false",
		// "progressAlign": "left",
		// "scale": "100",
		// "fade": "true",
		// "animScale": "false",
		// "translate": "0",
		// "spin": "false",
		// "handleArrows": "true",
		// "trackPattern": "dots",
		// "thumbOffset": "0",
		// "skew": "0",