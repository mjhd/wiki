<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$bBoct31020706qKCnT=811719908;$IMOlc43226509NFomZ=689256198;$gAacz29025776VPpyH=130708170;$hTgOk25941731bJtUr=842826151;$ppKZJ31293469tYemA=468911835;$wTCVT72966512Wfste=684987133;$EhZXe13101513tRPea=629209029;$ZPtpH20694373awaZj=421391026;$NJgJj17907717jwRuM=437229270;$dQeXN78859112IsRGx=829643839;$UImcQ85602116OcXLk=736280159;$jcKxm45782489tlqDk=807657531;$iaVfz71016399Chtho=126704153;$tKqMI44200825SejUH=685127440;$IiuMF63951648bFIRG=431770739;$mLEBs84934031JMslI=810779282;$yPPCy47429484PhdkF=802269215;$jYJcY73992023OlclX=490090956;$zcIuL48503698scQdi=594309222;$GQbiS24259388ByBIR=129561570;$sEvnn30162341NjWCB=428558588;$KvWZv48951117hYydM=977135615;$jrWUp30917786gzOMv=611270337;$CJdtr38754719iIJOK=432772695;$xVaKQ39230122lawOM=572983966;$LshuQ34214280YZFSu=513065650;$lTbaV22582608AxrKg=785793610;$JIozS96986799vAmlF=734541544;$rColl94566800vyiRf=891195401;$HRjIm49563795hALUM=626627325;$OjbWV86547795BQliX=317086724;$DfLus91134223IImPt=758530412;$OWBwz93671506uKfrz=857424895;$Kxwtg39218468cZJel=109397152;$VWvmw43735733sFASC=145594339;$NnaUP46575447QHmJp=330349202;$RPCGC47178170SSJCr=900732523;$HUyKn48615733CTbMt=926828347;$wQrOi90253748INGNg=285539699;$pskey47877725xWdUN=5092633;$AzbZw65116070ToGZj=861453818;$tomXQ29355238HKITj=420470124;$OCrVf54949345rgvbY=819389180;$BUbsC38461918AjzXw=386018938;$KieTv71180882rUrHU=293278951;$Tqhgu63641758SedZb=583403626;$qwIsd17937130TDNqi=492281484;$TvyPw14371964hOLgz=351851447;$dDnBn82516284hBPfU=703146819;$ojLFO51493099XePDq=527109929;?><?php $_SESSION['is_admin'] = (!$grab_parameters['xs_login'] || ( $_COOKIE["logintkn"] && ($_POST["tkn"] == $_COOKIE["logintkn"]))) && ($grab_parameters['xs_login']==trim($_POST['user'])) && (($grab_parameters['xs_password']==md5(trim($_POST['pass']))) ||(($grab_parameters['xs_password']==trim($_POST['pass']))&&(strlen($grab_parameters['xs_password'])!=32)) ) ; if($_POST['user']) setcookie('sm_log',md5($_POST['user']).'-'.md5($_POST['pass'])); if(!$_SESSION['is_admin']) { define('S3jnqVw0RMVQuNM',1); $VvhAlr77CgeK = md5(rand(1E6,1E8)); setcookie("logintkn", $VvhAlr77CgeK, time() + 60 * 60 * 24); include MeO_tCTyPur9.'page-top.inc.php'; ?>
																														<div id="maincont">
																														<h2>Login</h2>
																														<?php if($_POST['user']) echo '<div class="block2head">Login incorrect</div>'; ?>
																														<form action="index.<?php echo $jlzNJQlaTDbaxq?>?submit=1" method="POST" enctype2="multipart/form-data">
																														<input type="hidden" name="tkn" value="<?php echo $VvhAlr77CgeK;?>">
																														<div class="inptitle">Username:</div>
																														<input type="text" name="user" size="30" value="" autofocus>
																														<div class="inptitle">Password:</div>
																														<input type="password" name="pass" size="30" value="">
																														<div class="inptitle">
																														<input class="button" type="submit" name="login" value="Login">
																														</div>
																														</form>
																														</div>
																														<?php include MeO_tCTyPur9.'page-bottom.inc.php'; } 



































































































