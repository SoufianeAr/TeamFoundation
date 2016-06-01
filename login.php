<?php
session_start();


require_once("system/module/Session.php");

$session = new Session();




if($session->checkSession("iduser")!=true)
{
?>
<!DOCTYPE html>
<!--[if gt IE 9]>
<!-->
<html lang="en">
<!--<![endif]-->
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="stylesheet" href="/assets/iconfont/material-icons.css" />
    <link rel="stylesheet" href="/assets/w3/w3.css" />
    <link rel="stylesheet" href="/assets/css/materialize.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />


    <link rel="icon" type="image/png" href="/assets/img/logo-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/img/logo-32x32.png" sizes="32x32" />

    <title>TeamFoundation</title>
    
    
<style> 



html, body {
  height: 100%;
}

body {
  background: black;
  min-height: 100%;
  overflow: hidden;
}

@-webkit-keyframes move {
  100% {
    -webkit-transform: translate3d(0, 0, -1000px);
            transform: translate3d(0, 0, -1000px);
  }
}

@keyframes move {
  100% {
    -webkit-transform: translate3d(0, 0, -1000px);
            transform: translate3d(0, 0, -1000px);
  }
}
.contt {
  position: fixed;
  z-index: -100;
  width: 100%;
  min-height: 100%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.bubble-wrap {
  margin: 0 auto;
  width: 500px;
  height: 500px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform-origin: center center;
          transform-origin: center center;
  -webkit-perspective: 600px;
          perspective: 600px;
}

.bubble {
  position: absolute;
  background: black;
  opacity: .7;
  border-radius: 50%;
  -webkit-animation: move 3s infinite;
          animation: move 3s infinite;
}

.bubble:nth-child(1) {
  height: 1px;
  width: 1px;
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s;
  -webkit-transform: translate3d(274px, 198px, 877px);
          transform: translate3d(274px, 198px, 877px);
  background: #d97126;
}

.bubble:nth-child(2) {
  height: 20px;
  width: 20px;
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s;
  -webkit-transform: translate3d(731px, 480px, 1101px);
          transform: translate3d(731px, 480px, 1101px);
  background: #26d926;
}

.bubble:nth-child(3) {
  height: 16px;
  width: 16px;
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s;
  -webkit-transform: translate3d(805px, 128px, 1402px);
          transform: translate3d(805px, 128px, 1402px);
  background: #26d96b;
}

.bubble:nth-child(4) {
  height: 1px;
  width: 1px;
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s;
  -webkit-transform: translate3d(895px, 612px, 1683px);
          transform: translate3d(895px, 612px, 1683px);
  background: #6ed926;
}

.bubble:nth-child(5) {
  height: 15px;
  width: 15px;
  -webkit-animation-delay: -1s;
          animation-delay: -1s;
  -webkit-transform: translate3d(83px, 701px, 898px);
          transform: translate3d(83px, 701px, 898px);
  background: #d9264a;
}

.bubble:nth-child(6) {
  height: 25px;
  width: 25px;
  -webkit-animation-delay: -1.2s;
          animation-delay: -1.2s;
  -webkit-transform: translate3d(419px, 916px, 384px);
          transform: translate3d(419px, 916px, 384px);
  background: #26d9af;
}

.bubble:nth-child(7) {
  height: 12px;
  width: 12px;
  -webkit-animation-delay: -1.4s;
          animation-delay: -1.4s;
  -webkit-transform: translate3d(736px, 176px, 1452px);
          transform: translate3d(736px, 176px, 1452px);
  background: #2635d9;
}

.bubble:nth-child(8) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -1.6s;
          animation-delay: -1.6s;
  -webkit-transform: translate3d(905px, 553px, 939px);
          transform: translate3d(905px, 553px, 939px);
  background: #26d95f;
}

.bubble:nth-child(9) {
  height: 28px;
  width: 28px;
  -webkit-animation-delay: -1.8s;
          animation-delay: -1.8s;
  -webkit-transform: translate3d(177px, 851px, 170px);
          transform: translate3d(177px, 851px, 170px);
  background: #a026d9;
}

.bubble:nth-child(10) {
  height: 4px;
  width: 4px;
  -webkit-animation-delay: -2s;
          animation-delay: -2s;
  -webkit-transform: translate3d(222px, 333px, 910px);
          transform: translate3d(222px, 333px, 910px);
  background: #d92685;
}

.bubble:nth-child(11) {
  height: 8px;
  width: 8px;
  -webkit-animation-delay: -2.2s;
          animation-delay: -2.2s;
  -webkit-transform: translate3d(727px, 667px, 446px);
          transform: translate3d(727px, 667px, 446px);
  background: #d96826;
}

.bubble:nth-child(12) {
  height: 2px;
  width: 2px;
  -webkit-animation-delay: -2.4s;
          animation-delay: -2.4s;
  -webkit-transform: translate3d(944px, 44px, 395px);
          transform: translate3d(944px, 44px, 395px);
  background: #26d92c;
}

.bubble:nth-child(13) {
  height: 23px;
  width: 23px;
  -webkit-animation-delay: -2.6s;
          animation-delay: -2.6s;
  -webkit-transform: translate3d(475px, 360px, 399px);
          transform: translate3d(475px, 360px, 399px);
  background: #d9a926;
}

.bubble:nth-child(14) {
  height: 11px;
  width: 11px;
  -webkit-animation-delay: -2.8s;
          animation-delay: -2.8s;
  -webkit-transform: translate3d(739px, 971px, 899px);
          transform: translate3d(739px, 971px, 899px);
  background: #26d99d;
}

.bubble:nth-child(15) {
  height: 30px;
  width: 30px;
  -webkit-animation-delay: -3s;
          animation-delay: -3s;
  -webkit-transform: translate3d(740px, 624px, 1595px);
          transform: translate3d(740px, 624px, 1595px);
  background: #26d988;
}

.bubble:nth-child(16) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -3.2s;
          animation-delay: -3.2s;
  -webkit-transform: translate3d(392px, 338px, 405px);
          transform: translate3d(392px, 338px, 405px);
  background: #4426d9;
}

.bubble:nth-child(17) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -3.4s;
          animation-delay: -3.4s;
  -webkit-transform: translate3d(385px, 319px, 737px);
          transform: translate3d(385px, 319px, 737px);
  background: #5fd926;
}

.bubble:nth-child(18) {
  height: 28px;
  width: 28px;
  -webkit-animation-delay: -3.6s;
          animation-delay: -3.6s;
  -webkit-transform: translate3d(762px, 624px, 622px);
          transform: translate3d(762px, 624px, 622px);
  background: #26d9cd;
}

.bubble:nth-child(19) {
  height: 2px;
  width: 2px;
  -webkit-animation-delay: -3.8s;
          animation-delay: -3.8s;
  -webkit-transform: translate3d(823px, 424px, 1677px);
          transform: translate3d(823px, 424px, 1677px);
  background: #d9269a;
}

.bubble:nth-child(20) {
  height: 28px;
  width: 28px;
  -webkit-animation-delay: -4s;
          animation-delay: -4s;
  -webkit-transform: translate3d(700px, 999px, 1577px);
          transform: translate3d(700px, 999px, 1577px);
  background: #26d932;
}

.bubble:nth-child(21) {
  height: 7px;
  width: 7px;
  -webkit-animation-delay: -4.2s;
          animation-delay: -4.2s;
  -webkit-transform: translate3d(75px, 68px, 669px);
          transform: translate3d(75px, 68px, 669px);
  background: #d9c726;
}

.bubble:nth-child(22) {
  height: 25px;
  width: 25px;
  -webkit-animation-delay: -4.4s;
          animation-delay: -4.4s;
  -webkit-transform: translate3d(78px, 235px, 1033px);
          transform: translate3d(78px, 235px, 1033px);
  background: #2650d9;
}

.bubble:nth-child(23) {
  height: 24px;
  width: 24px;
  -webkit-animation-delay: -4.6s;
          animation-delay: -4.6s;
  -webkit-transform: translate3d(718px, 484px, 910px);
          transform: translate3d(718px, 484px, 910px);
  background: #9dd926;
}

.bubble:nth-child(24) {
  height: 19px;
  width: 19px;
  -webkit-animation-delay: -4.8s;
          animation-delay: -4.8s;
  -webkit-transform: translate3d(810px, 226px, 727px);
          transform: translate3d(810px, 226px, 727px);
  background: #d926be;
}

.bubble:nth-child(25) {
  height: 15px;
  width: 15px;
  -webkit-animation-delay: -5s;
          animation-delay: -5s;
  -webkit-transform: translate3d(467px, 642px, 1332px);
          transform: translate3d(467px, 642px, 1332px);
  background: #82d926;
}

.bubble:nth-child(26) {
  height: 25px;
  width: 25px;
  -webkit-animation-delay: -5.2s;
          animation-delay: -5.2s;
  -webkit-transform: translate3d(434px, 436px, 559px);
          transform: translate3d(434px, 436px, 559px);
  background: #d95926;
}

.bubble:nth-child(27) {
  height: 13px;
  width: 13px;
  -webkit-animation-delay: -5.4s;
          animation-delay: -5.4s;
  -webkit-transform: translate3d(119px, 507px, 977px);
          transform: translate3d(119px, 507px, 977px);
  background: #264dd9;
}

.bubble:nth-child(28) {
  height: 12px;
  width: 12px;
  -webkit-animation-delay: -5.6s;
          animation-delay: -5.6s;
  -webkit-transform: translate3d(284px, 181px, 1241px);
          transform: translate3d(284px, 181px, 1241px);
  background: #5026d9;
}

.bubble:nth-child(29) {
  height: 25px;
  width: 25px;
  -webkit-animation-delay: -5.8s;
          animation-delay: -5.8s;
  -webkit-transform: translate3d(753px, 742px, 779px);
          transform: translate3d(753px, 742px, 779px);
  background: #3e26d9;
}

.bubble:nth-child(30) {
  height: 9px;
  width: 9px;
  -webkit-animation-delay: -6s;
          animation-delay: -6s;
  -webkit-transform: translate3d(870px, 316px, 570px);
          transform: translate3d(870px, 316px, 570px);
  background: #b226d9;
}

.bubble:nth-child(31) {
  height: 6px;
  width: 6px;
  -webkit-animation-delay: -6.2s;
          animation-delay: -6.2s;
  -webkit-transform: translate3d(649px, 889px, 55px);
          transform: translate3d(649px, 889px, 55px);
  background: #265cd9;
}

.bubble:nth-child(32) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -6.4s;
          animation-delay: -6.4s;
  -webkit-transform: translate3d(192px, 295px, 1140px);
          transform: translate3d(192px, 295px, 1140px);
  background: #62d926;
}

.bubble:nth-child(33) {
  height: 21px;
  width: 21px;
  -webkit-animation-delay: -6.6s;
          animation-delay: -6.6s;
  -webkit-transform: translate3d(1px, 319px, 1851px);
          transform: translate3d(1px, 319px, 1851px);
  background: #26d947;
}

.bubble:nth-child(34) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -6.8s;
          animation-delay: -6.8s;
  -webkit-transform: translate3d(257px, 491px, 191px);
          transform: translate3d(257px, 491px, 191px);
  background: #268ed9;
}

.bubble:nth-child(35) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -7s;
          animation-delay: -7s;
  -webkit-transform: translate3d(838px, 9px, 1884px);
          transform: translate3d(838px, 9px, 1884px);
  background: #d92659;
}

.bubble:nth-child(36) {
  height: 19px;
  width: 19px;
  -webkit-animation-delay: -7.2s;
          animation-delay: -7.2s;
  -webkit-transform: translate3d(56px, 656px, 1779px);
          transform: translate3d(56px, 656px, 1779px);
  background: #26d959;
}

.bubble:nth-child(37) {
  height: 2px;
  width: 2px;
  -webkit-animation-delay: -7.4s;
          animation-delay: -7.4s;
  -webkit-transform: translate3d(148px, 609px, 1309px);
          transform: translate3d(148px, 609px, 1309px);
  background: #d9265c;
}

.bubble:nth-child(38) {
  height: 3px;
  width: 3px;
  -webkit-animation-delay: -7.6s;
          animation-delay: -7.6s;
  -webkit-transform: translate3d(96px, 515px, 1107px);
          transform: translate3d(96px, 515px, 1107px);
  background: #d93226;
}

.bubble:nth-child(39) {
  height: 28px;
  width: 28px;
  -webkit-animation-delay: -7.8s;
          animation-delay: -7.8s;
  -webkit-transform: translate3d(791px, 19px, 467px);
          transform: translate3d(791px, 19px, 467px);
  background: #d98226;
}

.bubble:nth-child(40) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -8s;
          animation-delay: -8s;
  -webkit-transform: translate3d(180px, 953px, 155px);
          transform: translate3d(180px, 953px, 155px);
  background: #2650d9;
}

.bubble:nth-child(41) {
  height: 10px;
  width: 10px;
  -webkit-animation-delay: -8.2s;
          animation-delay: -8.2s;
  -webkit-transform: translate3d(438px, 311px, 1023px);
          transform: translate3d(438px, 311px, 1023px);
  background: #9d26d9;
}

.bubble:nth-child(42) {
  height: 26px;
  width: 26px;
  -webkit-animation-delay: -8.4s;
          animation-delay: -8.4s;
  -webkit-transform: translate3d(681px, 886px, 1104px);
          transform: translate3d(681px, 886px, 1104px);
  background: #26d9af;
}

.bubble:nth-child(43) {
  height: 24px;
  width: 24px;
  -webkit-animation-delay: -8.6s;
          animation-delay: -8.6s;
  -webkit-transform: translate3d(789px, 665px, 1391px);
          transform: translate3d(789px, 665px, 1391px);
  background: #26d97a;
}

.bubble:nth-child(44) {
  height: 24px;
  width: 24px;
  -webkit-animation-delay: -8.8s;
          animation-delay: -8.8s;
  -webkit-transform: translate3d(317px, 140px, 1857px);
          transform: translate3d(317px, 140px, 1857px);
  background: #d92671;
}

.bubble:nth-child(45) {
  height: 20px;
  width: 20px;
  -webkit-animation-delay: -9s;
          animation-delay: -9s;
  -webkit-transform: translate3d(961px, 937px, 117px);
          transform: translate3d(961px, 937px, 117px);
  background: #d9268b;
}

.bubble:nth-child(46) {
  height: 4px;
  width: 4px;
  -webkit-animation-delay: -9.2s;
          animation-delay: -9.2s;
  -webkit-transform: translate3d(470px, 584px, 1689px);
          transform: translate3d(470px, 584px, 1689px);
  background: #26d9cd;
}

.bubble:nth-child(47) {
  height: 3px;
  width: 3px;
  -webkit-animation-delay: -9.4s;
          animation-delay: -9.4s;
  -webkit-transform: translate3d(996px, 793px, 1814px);
          transform: translate3d(996px, 793px, 1814px);
  background: #26d95f;
}

.bubble:nth-child(48) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -9.6s;
          animation-delay: -9.6s;
  -webkit-transform: translate3d(859px, 408px, 6px);
          transform: translate3d(859px, 408px, 6px);
  background: #d9d626;
}

.bubble:nth-child(49) {
  height: 8px;
  width: 8px;
  -webkit-animation-delay: -9.8s;
          animation-delay: -9.8s;
  -webkit-transform: translate3d(635px, 579px, 620px);
          transform: translate3d(635px, 579px, 620px);
  background: #26d980;
}

.bubble:nth-child(50) {
  height: 15px;
  width: 15px;
  -webkit-animation-delay: -10s;
          animation-delay: -10s;
  -webkit-transform: translate3d(525px, 695px, 1218px);
          transform: translate3d(525px, 695px, 1218px);
  background: #d926cd;
}

.bubble:nth-child(51) {
  height: 9px;
  width: 9px;
  -webkit-animation-delay: -10.2s;
          animation-delay: -10.2s;
  -webkit-transform: translate3d(920px, 278px, 1711px);
          transform: translate3d(920px, 278px, 1711px);
  background: #d9a326;
}

.bubble:nth-child(52) {
  height: 10px;
  width: 10px;
  -webkit-animation-delay: -10.4s;
          animation-delay: -10.4s;
  -webkit-transform: translate3d(404px, 880px, 1553px);
          transform: translate3d(404px, 880px, 1553px);
  background: #26d974;
}

.bubble:nth-child(53) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -10.6s;
          animation-delay: -10.6s;
  -webkit-transform: translate3d(257px, 827px, 1668px);
          transform: translate3d(257px, 827px, 1668px);
  background: #d0d926;
}

.bubble:nth-child(54) {
  height: 16px;
  width: 16px;
  -webkit-animation-delay: -10.8s;
          animation-delay: -10.8s;
  -webkit-transform: translate3d(549px, 96px, 996px);
          transform: translate3d(549px, 96px, 996px);
  background: #d926ac;
}

.bubble:nth-child(55) {
  height: 7px;
  width: 7px;
  -webkit-animation-delay: -11s;
          animation-delay: -11s;
  -webkit-transform: translate3d(527px, 374px, 10px);
          transform: translate3d(527px, 374px, 10px);
  background: #26d96e;
}

.bubble:nth-child(56) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -11.2s;
          animation-delay: -11.2s;
  -webkit-transform: translate3d(464px, 780px, 840px);
          transform: translate3d(464px, 780px, 840px);
  background: #26d926;
}

.bubble:nth-child(57) {
  height: 10px;
  width: 10px;
  -webkit-animation-delay: -11.4s;
          animation-delay: -11.4s;
  -webkit-transform: translate3d(347px, 292px, 681px);
          transform: translate3d(347px, 292px, 681px);
  background: #266bd9;
}

.bubble:nth-child(58) {
  height: 13px;
  width: 13px;
  -webkit-animation-delay: -11.6s;
          animation-delay: -11.6s;
  -webkit-transform: translate3d(215px, 203px, 732px);
          transform: translate3d(215px, 203px, 732px);
  background: #2668d9;
}

.bubble:nth-child(59) {
  height: 21px;
  width: 21px;
  -webkit-animation-delay: -11.8s;
          animation-delay: -11.8s;
  -webkit-transform: translate3d(325px, 649px, 1614px);
          transform: translate3d(325px, 649px, 1614px);
  background: #26d929;
}

.bubble:nth-child(60) {
  height: 9px;
  width: 9px;
  -webkit-animation-delay: -12s;
          animation-delay: -12s;
  -webkit-transform: translate3d(975px, 1px, 799px);
          transform: translate3d(975px, 1px, 799px);
  background: #d926be;
}

.bubble:nth-child(61) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -12.2s;
          animation-delay: -12.2s;
  -webkit-transform: translate3d(378px, 752px, 1783px);
          transform: translate3d(378px, 752px, 1783px);
  background: #65d926;
}

.bubble:nth-child(62) {
  height: 14px;
  width: 14px;
  -webkit-animation-delay: -12.4s;
          animation-delay: -12.4s;
  -webkit-transform: translate3d(457px, 122px, 2px);
          transform: translate3d(457px, 122px, 2px);
  background: #d926d0;
}

.bubble:nth-child(63) {
  height: 23px;
  width: 23px;
  -webkit-animation-delay: -12.6s;
          animation-delay: -12.6s;
  -webkit-transform: translate3d(303px, 572px, 1808px);
          transform: translate3d(303px, 572px, 1808px);
  background: #26d947;
}

.bubble:nth-child(64) {
  height: 19px;
  width: 19px;
  -webkit-animation-delay: -12.8s;
          animation-delay: -12.8s;
  -webkit-transform: translate3d(381px, 819px, 1728px);
          transform: translate3d(381px, 819px, 1728px);
  background: #26a6d9;
}

.bubble:nth-child(65) {
  height: 22px;
  width: 22px;
  -webkit-animation-delay: -13s;
          animation-delay: -13s;
  -webkit-transform: translate3d(322px, 302px, 634px);
          transform: translate3d(322px, 302px, 634px);
  background: #26c7d9;
}

.bubble:nth-child(66) {
  height: 21px;
  width: 21px;
  -webkit-animation-delay: -13.2s;
          animation-delay: -13.2s;
  -webkit-transform: translate3d(552px, 166px, 879px);
          transform: translate3d(552px, 166px, 879px);
  background: #8026d9;
}

.bubble:nth-child(67) {
  height: 25px;
  width: 25px;
  -webkit-animation-delay: -13.4s;
          animation-delay: -13.4s;
  -webkit-transform: translate3d(418px, 256px, 1572px);
          transform: translate3d(418px, 256px, 1572px);
  background: #d96b26;
}

.bubble:nth-child(68) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -13.6s;
          animation-delay: -13.6s;
  -webkit-transform: translate3d(537px, 168px, 1215px);
          transform: translate3d(537px, 168px, 1215px);
  background: #26afd9;
}

.bubble:nth-child(69) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -13.8s;
          animation-delay: -13.8s;
  -webkit-transform: translate3d(380px, 532px, 116px);
          transform: translate3d(380px, 532px, 116px);
  background: #26d94a;
}

.bubble:nth-child(70) {
  height: 29px;
  width: 29px;
  -webkit-animation-delay: -14s;
          animation-delay: -14s;
  -webkit-transform: translate3d(364px, 502px, 1396px);
          transform: translate3d(364px, 502px, 1396px);
  background: #26d959;
}

.bubble:nth-child(71) {
  height: 7px;
  width: 7px;
  -webkit-animation-delay: -14.2s;
          animation-delay: -14.2s;
  -webkit-transform: translate3d(99px, 994px, 1156px);
          transform: translate3d(99px, 994px, 1156px);
  background: #d92659;
}

.bubble:nth-child(72) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -14.4s;
          animation-delay: -14.4s;
  -webkit-transform: translate3d(891px, 614px, 954px);
          transform: translate3d(891px, 614px, 954px);
  background: #41d926;
}

.bubble:nth-child(73) {
  height: 23px;
  width: 23px;
  -webkit-animation-delay: -14.6s;
          animation-delay: -14.6s;
  -webkit-transform: translate3d(238px, 596px, 1914px);
          transform: translate3d(238px, 596px, 1914px);
  background: #9726d9;
}

.bubble:nth-child(74) {
  height: 6px;
  width: 6px;
  -webkit-animation-delay: -14.8s;
          animation-delay: -14.8s;
  -webkit-transform: translate3d(473px, 776px, 1664px);
          transform: translate3d(473px, 776px, 1664px);
  background: #266ed9;
}

.bubble:nth-child(75) {
  height: 18px;
  width: 18px;
  -webkit-animation-delay: -15s;
          animation-delay: -15s;
  -webkit-transform: translate3d(3px, 242px, 988px);
          transform: translate3d(3px, 242px, 988px);
  background: #26d6d9;
}

.bubble:nth-child(76) {
  height: 16px;
  width: 16px;
  -webkit-animation-delay: -15.2s;
          animation-delay: -15.2s;
  -webkit-transform: translate3d(545px, 427px, 1689px);
          transform: translate3d(545px, 427px, 1689px);
  background: #26d3d9;
}

.bubble:nth-child(77) {
  height: 29px;
  width: 29px;
  -webkit-animation-delay: -15.4s;
          animation-delay: -15.4s;
  -webkit-transform: translate3d(457px, 448px, 12px);
          transform: translate3d(457px, 448px, 12px);
  background: #26d947;
}

.bubble:nth-child(78) {
  height: 6px;
  width: 6px;
  -webkit-animation-delay: -15.6s;
          animation-delay: -15.6s;
  -webkit-transform: translate3d(334px, 202px, 1698px);
          transform: translate3d(334px, 202px, 1698px);
  background: #d9a326;
}

.bubble:nth-child(79) {
  height: 2px;
  width: 2px;
  -webkit-animation-delay: -15.8s;
          animation-delay: -15.8s;
  -webkit-transform: translate3d(266px, 273px, 1256px);
          transform: translate3d(266px, 273px, 1256px);
  background: #26d9a3;
}

.bubble:nth-child(80) {
  height: 23px;
  width: 23px;
  -webkit-animation-delay: -16s;
          animation-delay: -16s;
  -webkit-transform: translate3d(838px, 494px, 976px);
          transform: translate3d(838px, 494px, 976px);
  background: #d9a326;
}

.bubble:nth-child(81) {
  height: 27px;
  width: 27px;
  -webkit-animation-delay: -16.2s;
          animation-delay: -16.2s;
  -webkit-transform: translate3d(928px, 342px, 1279px);
          transform: translate3d(928px, 342px, 1279px);
  background: #d92662;
}

.bubble:nth-child(82) {
  height: 6px;
  width: 6px;
  -webkit-animation-delay: -16.4s;
          animation-delay: -16.4s;
  -webkit-transform: translate3d(430px, 682px, 380px);
          transform: translate3d(430px, 682px, 380px);
  background: #2665d9;
}

.bubble:nth-child(83) {
  height: 2px;
  width: 2px;
  -webkit-animation-delay: -16.6s;
          animation-delay: -16.6s;
  -webkit-transform: translate3d(763px, 520px, 1665px);
          transform: translate3d(763px, 520px, 1665px);
  background: #26d968;
}

.bubble:nth-child(84) {
  height: 11px;
  width: 11px;
  -webkit-animation-delay: -16.8s;
          animation-delay: -16.8s;
  -webkit-transform: translate3d(535px, 807px, 1957px);
          transform: translate3d(535px, 807px, 1957px);
  background: #9126d9;
}

.bubble:nth-child(85) {
  height: 22px;
  width: 22px;
  -webkit-animation-delay: -17s;
          animation-delay: -17s;
  -webkit-transform: translate3d(367px, 671px, 1456px);
          transform: translate3d(367px, 671px, 1456px);
  background: #7726d9;
}

.bubble:nth-child(86) {
  height: 12px;
  width: 12px;
  -webkit-animation-delay: -17.2s;
          animation-delay: -17.2s;
  -webkit-transform: translate3d(358px, 823px, 597px);
          transform: translate3d(358px, 823px, 597px);
  background: #d9b526;
}

.bubble:nth-child(87) {
  height: 16px;
  width: 16px;
  -webkit-animation-delay: -17.4s;
          animation-delay: -17.4s;
  -webkit-transform: translate3d(34px, 775px, 571px);
          transform: translate3d(34px, 775px, 571px);
  background: #26b5d9;
}

.bubble:nth-child(88) {
  height: 28px;
  width: 28px;
  -webkit-animation-delay: -17.6s;
          animation-delay: -17.6s;
  -webkit-transform: translate3d(2px, 577px, 1578px);
          transform: translate3d(2px, 577px, 1578px);
  background: #88d926;
}

.bubble:nth-child(89) {
  height: 22px;
  width: 22px;
  -webkit-animation-delay: -17.8s;
          animation-delay: -17.8s;
  -webkit-transform: translate3d(605px, 449px, 508px);
          transform: translate3d(605px, 449px, 508px);
  background: #d98226;
}

.bubble:nth-child(90) {
  height: 10px;
  width: 10px;
  -webkit-animation-delay: -18s;
          animation-delay: -18s;
  -webkit-transform: translate3d(142px, 126px, 1111px);
          transform: translate3d(142px, 126px, 1111px);
  background: #26a0d9;
}

.bubble:nth-child(91) {
  height: 15px;
  width: 15px;
  -webkit-animation-delay: -18.2s;
          animation-delay: -18.2s;
  -webkit-transform: translate3d(761px, 970px, 1491px);
          transform: translate3d(761px, 970px, 1491px);
  background: #d99a26;
}

.bubble:nth-child(92) {
  height: 21px;
  width: 21px;
  -webkit-animation-delay: -18.4s;
          animation-delay: -18.4s;
  -webkit-transform: translate3d(300px, 491px, 1710px);
          transform: translate3d(300px, 491px, 1710px);
  background: #264ad9;
}

.bubble:nth-child(93) {
  height: 10px;
  width: 10px;
  -webkit-animation-delay: -18.6s;
          animation-delay: -18.6s;
  -webkit-transform: translate3d(271px, 93px, 1292px);
          transform: translate3d(271px, 93px, 1292px);
  background: #d9262f;
}

.bubble:nth-child(94) {
  height: 6px;
  width: 6px;
  -webkit-animation-delay: -18.8s;
          animation-delay: -18.8s;
  -webkit-transform: translate3d(157px, 931px, 19px);
          transform: translate3d(157px, 931px, 19px);
  background: #26d959;
}

.bubble:nth-child(95) {
  height: 14px;
  width: 14px;
  -webkit-animation-delay: -19s;
          animation-delay: -19s;
  -webkit-transform: translate3d(44px, 56px, 1403px);
          transform: translate3d(44px, 56px, 1403px);
  background: #d9ac26;
}

.bubble:nth-child(96) {
  height: 5px;
  width: 5px;
  -webkit-animation-delay: -19.2s;
          animation-delay: -19.2s;
  -webkit-transform: translate3d(863px, 527px, 495px);
          transform: translate3d(863px, 527px, 495px);
  background: #26d9a9;
}

.bubble:nth-child(97) {
  height: 14px;
  width: 14px;
  -webkit-animation-delay: -19.4s;
          animation-delay: -19.4s;
  -webkit-transform: translate3d(254px, 317px, 1964px);
          transform: translate3d(254px, 317px, 1964px);
  background: #4dd926;
}

.bubble:nth-child(98) {
  height: 26px;
  width: 26px;
  -webkit-animation-delay: -19.6s;
          animation-delay: -19.6s;
  -webkit-transform: translate3d(722px, 780px, 1356px);
          transform: translate3d(722px, 780px, 1356px);
  background: #d9268e;
}

.bubble:nth-child(99) {
  height: 12px;
  width: 12px;
  -webkit-animation-delay: -19.8s;
          animation-delay: -19.8s;
  -webkit-transform: translate3d(200px, 260px, 1671px);
          transform: translate3d(200px, 260px, 1671px);
  background: #26d9be;
}

.bubble:nth-child(100) {
  height: 19px;
  width: 19px;
  -webkit-animation-delay: -20s;
          animation-delay: -20s;
  -webkit-transform: translate3d(135px, 633px, 972px);
          transform: translate3d(135px, 633px, 972px);
  background: #d926ca;
}

</style>
    
    
</head>
<body >


<div class="contt">
  <div class="bubble-wrap">
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>
</div>


    

     
    

<div class="row" >
  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>&nbsp;</div>
  <div class="col s12 m12 l4"   id="wrappers_video"    >
  	 <div id="login" class="white card-panel hoverable"  >




<div  id="login_action_result">
  
<?php
if (isset($_GET['stt']) && $_GET['stt']=="1") {
echo "
<div class='green' style='padding:10px;border-radius:5px;'>you are signed up successfully ...pleaz login </div>
";
}
?>

</div>


      	<div class="center-align">
      	 	<img  src="/assets/img/user.png" alt="Login" class="responsive-img circle" />
      	</div>
      	<br />

		<form >

			<div class="row">
				<div class="input-field s12" >
					<i class="material-icons prefix">email</i>
			        <input id="email" type="email" class="validate">
			        <label for="email" data-error="wrong" data-success="validated">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12" >
					<i class="material-icons prefix">dialpad</i>
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row ">
                <a class="col s12 waves-effect waves-light btn" id="btn_login_action" >Login</a>
                
			</div>

			<div class="row">
				<div class="input-field col s12" >
				      <input type="checkbox" id="test1" />
				      <label for="test1">Stay signed in</label>
				</div>
			</div>
		</form>
  	 </div>
  </div>
  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>&nbsp;</div>
</div>


<div class="row">

  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>&nbsp;</div>

  <div class="col s12 m12 l4  ">
	  <div class="center-align">
	     <a href="http://teamfoundation.com/signup">Create an account</a>
	  </div>
  </div>

  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>&nbsp;</div>
</div>


        <footer class="page-footer" style="position:fixed;bottom:0;left:0;width:100%;background-color:#1976D2;">

          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Arbib Soufiane
            <a class="grey-text text-lighten-4 right modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="Creative Commons License" href="#modal1" data-target="modal1">
                License
                </a>
            </div>
          </div>
        </footer>


   
    
<!--license-->
<div id="modal1" class="modal modal-fixed-footer flow-text" style="background-color:#1976D2;color:white">
    <div class="modal-content" >  



     
        
            <h6 class="center">
                <a target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                <img alt="Creative Commons License" style="border-width:0;width:120px;height:50px;"  src="/assets/img/cc.png" />
                </a>
            </h6>
            
            <br />
            <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">TeamFoundation</span>
            by 
            <a  target="_blank" xmlns:cc="http://creativecommons.org/ns#" style="color:black;font-weight:bolder;" href="https://www.facebook.com/arbib.soufiane" property="cc:attributionName" rel="cc:attributionURL">Arbib Soufiane</a>
            is licensed under a 
            <a  target="_blank" rel="license" style="color:#ff0a63;font-weight:bolder;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
            </a>.
            <br />
            Based on a work at 
            <a  target="_blank" style="color:#FFEC0C" xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/SoufianeAr/TeamFoundation" rel="dct:source">
                https://github.com/SoufianeAr/TeamFoundation
            </a>.           
        

        
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>






<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->


<script type="text/javascript" src="/assets/js/jquery.min.js"></script><script type="text/javascript"  src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>
<script type="text/javascript" src="/assets/js/nicescroll.js"></script>
<script type="text/javascript" src="/assets/code-prettify/run_prettify.js"></script>





<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {
 var counter=0;

  

$("#btn_login_action").click(function(){





var email=$("#email").val();
var password=$("#password").val();

$('#login_action_result').html("<div class='progress'><div class='indeterminate'></div></div>");

  $.ajax({
      type: 'POST',
      url: '/system/actions/user_agent/login.php',
      data: { 
          'email': email, 
          'pwd': password
      },
      success: function(msg){
        if (msg=='1') {
          $('#login_action_result').html("<div class='green' style='padding:10px;border-radius:5px;'>Success Redirectin... </div>");
          $("#btn_login_action").text("Success... ");
          $("#btn_login_action").addClass("green ");
          setTimeout(function(){
            window.location.href="http://TeamFoundation.com/index";
          },1000);
          
        }
        else{
          $('#login_action_result').html("<div class='red' style='padding:10px;border-radius:5px;'>wrrong data</div>");
          $("#btn_login_action").text("try again");
          $("#btn_login_action").addClass("red ");
        }
      }
  });


});


 









      

    $("html").niceScroll(
        {
            touchbehavior:false,
            cursorcolor:"#1976D2",
            cursoropacitymax:0.7,
            cursorwidth:10,
            background:"#C1C1C1",
            autohidemode:true
        });

    $('.modal-trigger').leanModal(
      {
        dismissible: true, 
        opacity: 1,
        in_duration: 100, 
        out_duration: 100, 
      }
    );

  });
</script>




<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

</body>
</html>


<?php
}else 
{
  header("location:index");
}

?>