<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$oncVx58369063ELXux=192208362;$bCegu76499194Hbdwn=56603680;$pMUpI63708917sWWaM=980717028;$QvMLq54962082VYPOU=868741116;$FPItL11338190cfoqI=480079327;$aBqUn57483916uhxYw=207106723;$fZtLT95690430JtWVV=570597345;$rxvWp76144395Civsj=369748685;$xMMQA21996570tehNg=706518041;$bfcwO77961397dptwS=633278793;$lTxfD77222036oZOfb=807199550;$Tinfd44263723WTstI=746435495;$qrdyu64189261TlWHh=65819102;$kelsw66831826tfIyB=39590622;$AHTug36186098fVpvj=560450167;$FUOuf41158543NQXjN=790863065;$dqGOS51762949PmdaE=759564321;$ncDdF88499079BMDSc=939347279;$YffsY35642806zKWlT=416748970;$xhMAG69398730QgsyT=629896268;$PCVIu11549707GirEx=920258729;$Xqblf48858111mEeqD=60255571;$jthFn58435930MBUXZ=198074099;$qYVXG46865808jGSDQ=559591533;$dRhrc97601974fsSpr=423124794;$dPSuQ91295138nEgGP=364207689;$OMFjv40483105ZOpuh=119601943;$bLORj46720930yeRYF=90551089;$OVaOg54185853JGxpo=797971164;$HoWDs50258493HLKMo=440234979;$nKEpY75547956zTPxv=884732188;$RJqCT69281690fYoFE=28060430;$alDsL60851350gDPxc=870657949;$iKIiU61984142LMYna=459503773;$VOcxi44142526zRJgd=386384445;$uCxQW98677872opcbW=255004103;$JXlqx47375312gEEHJ=793994968;$iwKwf95833333SaaQs=338467606;$aempL51759101PXKhJ=535683697;$FStia80467007iiuIQ=580023587;$EVXgb21473313FDsoI=312042994;$drakX27027870UpXoD=396888374;$DsDgo65831349bldne=736419321;$XBVuo48535637qtKOs=492460533;$JAhJv96621141eFAfi=275738266;$fSwTT52254613fOaMJ=705598415;$JLnRQ62100140HSxXG=635843213;$OTXXl88274868tDJqP=120505911;$JMNED52655188PQtgP=801825596;$MeSuH85190706EXgWv=183502309;?><?php include MeO_tCTyPur9.'page-top.inc.php'; $v_L3u7ajKy48DNFEj = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ JV7KHTAaxXEYScT457(ykqK2tfCoRkWc,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2>'; }else if(file_exists($fn=uzAGLJ0Y3V.zbI2HvDCL5FyqgFqjYG)&&(time()-filemtime($fn)<10*60)){ $PZdMqtCJgYKEBnm=true; $v_L3u7ajKy48DNFEj = 1; } if($v_L3u7ajKy48DNFEj){ ?>
																														<div id="maincont">
																														<?php if($PZdMqtCJgYKEBnm) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$jlzNJQlaTDbaxq.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																														<script type="text/javascript">
																														var lastupdate = 0;
																														var framegotsome = false;
																														function EB6_e_XFjs0Ww2aOu()
																														{
																														var cd = new Date();
																														if(!lastupdate)return false;
																														var df = (cd - lastupdate)/1000;
																														<?php if($grab_parameters['xs_autoresume']){?>
																														var re = document.getElementById('rlog');
																														re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																														var ifr = document.getElementById('cproc');
																														var frfr = window.frames['clog'];
																														
																														var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																														if(typeof frfr != 'undefined') {
																														if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																														!frfr.pageLoadCompleted)
																														{
																														
																														framegotsome = true;
																														doresume = false;
																														}
																														
																														if(!frfr.document.getElementById('glog')) {
																														
																														}
																														}
																														if(doresume)
																														{
																														var rle = document.getElementById('runlog');
																														lastupdate = cd;
																														if(rle)
																														{
																														rle.style.display  = '';
																														rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																														}
																														var lc = ifr.src;
																														lc = lc.replace(/resume=\d*/,'resume=1')
																														lc = lc.replace(/seed=\d*/,'seed='+Math.random())
																														
																														ifr.src = lc;
																														}
																														<?php } ?>
																														}
																														window.setInterval('EB6_e_XFjs0Ww2aOu()', 1000);
																														</script>
																														<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $jlzNJQlaTDbaxq?>?op=crawlproc&bg=<?php echo $_REQUEST['bg']?>&resume=<?php echo $_REQUEST['resume']?>&seed=<?php echo rand(1E8,1E9);?>"></iframe>
																														<!--
																														<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																														-->
																														<div id="rlog" style="overflow:auto;"></div>
																														<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																														</div>
																														<?php }else if(!$L2vjCuJY7o) { ?>
																														<div id="sidenote">
																														<?php include MeO_tCTyPur9.'page-sitemap-detail.inc.php'; ?>
																														</div>
																														<div id="shifted">
																														<h2><i class="material-icons inline-icon">autorenew</i>  Create Sitemap</h2>
																														<form action="index.<?php echo $jlzNJQlaTDbaxq?>?submit=1" method="POST" enctype2="multipart/form-data">
																														<input type="hidden" name="op" value="crawl">
																														<div class="inptitle">Run in background</div>
																														<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																														<?php if(@file_exists(uzAGLJ0Y3V.HGnP26wMMgxNv8g)){ if(@file_exists(uzAGLJ0Y3V.ETN6MXz5eYLXFqDHsTM) &&(filemtime(uzAGLJ0Y3V.ETN6MXz5eYLXFqDHsTM)>filemtime(uzAGLJ0Y3V.HGnP26wMMgxNv8g)) ){ $JNOl2GULsC_vQxJc = @TgyaGrN_Z_93C(BU6hTbtN56(uzAGLJ0Y3V.ETN6MXz5eYLXFqDHsTM, true)); } if(!$JNOl2GULsC_vQxJc){ $Fyk_uDThynJcc = @TgyaGrN_Z_93C(BU6hTbtN56(uzAGLJ0Y3V.HGnP26wMMgxNv8g, true)); $JNOl2GULsC_vQxJc = $Fyk_uDThynJcc['progpar']; } ?>
																														<div class="inptitle">Resume last session</div>
																														<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session
																														<br />Updated on <?php $prUf9qLAofAzmSV = filemtime(uzAGLJ0Y3V.HGnP26wMMgxNv8g); echo date('Y-m-d H:i:s',$prUf9qLAofAzmSV); if(time()-$prUf9qLAofAzmSV<600)echo ' ('.(time()-$prUf9qLAofAzmSV).' seconds ago) '; ?>,
																														<?php echo	'Time elapsed: '.IoXU8HZs2vZbs9A($JNOl2GULsC_vQxJc[0]).',<br />Pages crawled: '.intval($JNOl2GULsC_vQxJc[3]). ' ('.intval($JNOl2GULsC_vQxJc[7]).' added in sitemap), '. 'Queued: '.$JNOl2GULsC_vQxJc[2].', Depth level: '.$JNOl2GULsC_vQxJc[5]. '<br />Current page: '.$JNOl2GULsC_vQxJc[1].' ('.number_format($JNOl2GULsC_vQxJc[10],1).')'; } ?>
																														</label>
																														<div class="inptitle">Click button below to start crawl manually:</div>
																														<div class="inptitle">
																														<input class="button" type="submit" name="crawl" value="Start Creating Sitemap">
																														</div>
																														</form>
																														<h2>Cron job setup</h2>
																														You can use the following command line to setup the cron job for sitemap generator:
																														<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																														<h2>Web Cron setup</h2>
																														If you cannot setup a regular cron task on your server, you can try a web cron instead:
																														<div class="inptitle"><?php 	echo $UgpZykgq80rhGeCV.'/index.php?op=crawlproc&resume=1'?></div>
																														</div>
																														<?php } include MeO_tCTyPur9.'page-bottom.inc.php'; 



































































































