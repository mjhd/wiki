<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$waZfO70570553uuYCc=601845781;$yqkLj16476992cZaVf=632809534;$myZKn88606908GBqAT=569051251;$rNkWL18518913lvEcC=844545037;$LNUXN74629124EqGid=896477943;$rHCjv83855190ZrVXE=111934037;$EXWNa97856019cFlDi=199264368;$KyYMs68428560mBdvj=287166448;$pGtbo20880849xpUiO=993062492;$HdKoP79267666gZvrS=241862268;$UnKTo31259992FpDkl=614059157;$rTLYC76312884jxwBE=595956011;$omDCX71663715DsHaP=272091705;$FzZJq39518275RiRph=275574619;$edQoT16435760ZgRLn=522479796;$BBhcu67262675kZDzZ=987682262;$IqTvD90308569FKNJd=425220135;$ECddi41705302RxzDG=360722095;$yQJAh82369647lOPFN=298379375;$HNkyw17733444HRkaJ=446665853;$QwdFi65775337VnaRc=572021876;$sBfnr34116073mwmMq=850802675;$wMbKK73754773WkyYP=727532999;$qEvmS58130700fvDFI=92819460;$KgjwW50186254dTnMN=351920691;$LNTMx71031151iSebJ=33869823;$ZZBke88756972xgUvI=228385927;$qMgIs56575998JImKb=737969539;$uzTkU53839235xEuqV=966974116;$zwdXZ19721025FIEon=577380767;$IxqPI37214729DYRBQ=358106192;$YZDPu65236502qFEbd=774960874;$dcxyQ94364430wUaAf=40049501;$yttUM95656498oLEfC=22796076;$lPcva95542145UHmIh=800423791;$uOrNT15265933EKMrP=841364499;$mdMke48282285FIvgs=649195120;$etPFa51563082UFoQY=678994625;$sDKds91856576NLZam=338316695;$ojSRV84327604WmyGN=82975085;$NvzkH78569119QeMNw=274777710;$dyoUn36076978pHkAs=901076412;$mhlMR23455652ZJCxJ=549581630;$PXhFC36350219vivgZ=672767832;$dxDYn38782674aoJuE=730992698;$kmjLX77526158UlAAp=902209729;$JgewR44413082CvavR=976970509;$dynXw41290931kLYRg=988014567;$RyDVG94547769siaXy=273928635;$ghMJY46864032AJMUt=525359702;?><?php include MeO_tCTyPur9.'page-top.inc.php'; $IbwgEd0hPU2VJv9MEdE = nJHqtEKMBruY(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($IbwgEd0hPU2VJv9MEdE); $AW1jD6KlGQmpHL=$_GET['log']; if($AW1jD6KlGQmpHL){ ?>
																										<div id="sidenote">
																										<div class="block1head">
																										Crawler logs
																										</div>
																										<div class="block1">
																										<?php for($i=0;$i<count($IbwgEd0hPU2VJv9MEdE);$i++){ $LET7m8tLI = DH3FvIHx9jl($IbwgEd0hPU2VJv9MEdE[$i]); if($i+1==$AW1jD6KlGQmpHL)echo '<u>'; ?>
																										<a href="index.<?php echo $jlzNJQlaTDbaxq?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$LET7m8tLI['time'])?></a>
																										( +<?php echo count($LET7m8tLI['newurls'])?> -<?php echo count($LET7m8tLI['losturls'])?>)
																										</u>
																										<br>
																										<?php	} ?>
																										</div>
																										</div>
																										<?php } ?>
																										<div id="<?php  echo $AW1jD6KlGQmpHL?'shifted':'maincont'?>" >
																										<h2><i class="material-icons inline-icon">history</i> Site History</h2>
																										<?php if($AW1jD6KlGQmpHL){ $LET7m8tLI = DH3FvIHx9jl($IbwgEd0hPU2VJv9MEdE[$AW1jD6KlGQmpHL-1]); ?><h4><?php echo date('j F Y, H:i',$LET7m8tLI['time'])?></h4>
																										<div class="inptitle">New URLs (<?php echo count($LET7m8tLI['newurls'])?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$LET7m8tLI['newurls']))?></textarea>
																										<div class="inptitle">Removed URLs (<?php echo count($LET7m8tLI['losturls'])?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$LET7m8tLI['losturls']))?></textarea>
																										<div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo count($LET7m8tLI['urls_list_skipped'])?>)</div>
																										<textarea style="width:100%;height:300px"><?php foreach($LET7m8tLI['urls_list_skipped'] as $k=>$v)echo @htmlspecialchars($k.' - '.$v)."\n";?></textarea>
																										<?php function isUasyCweeFMK($nl){ $lc = ''; $it = 0; if($nl) foreach($nl as $l=>$il){ $lc .= $l."\n"; foreach($il as $i=>$c){ $lc .= "\t".$i."\n"; $it++; } } return array($it,$lc); } ?>
																										<?php $ni = isUasyCweeFMK($LET7m8tLI['newurls_i']); ?>
																										<div class="inptitle">New images (<?php echo $ni[0]?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																										<?php $ni = isUasyCweeFMK($LET7m8tLI['losturls_i']); ?>
																										<div class="inptitle">Removed images (<?php echo $ni[0]?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																										<?php $ni = isUasyCweeFMK($LET7m8tLI['newurls_v']); ?>
																										<div class="inptitle">New videos (<?php echo $ni[0]?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																										<?php $ni = isUasyCweeFMK($LET7m8tLI['losturls_v']); ?>
																										<div class="inptitle">Removed videos (<?php echo $ni[0]?>)</div>
																										<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																										<?php }else{ ?>
																										<table class="ltable">
																										<tr class=block1head>
																										<th>No</th>
																										<th>Date/Time</th>
																										<th>Indexed pages</th>
																										<th>Processed pages</th>
																										<th>Skipped pages</th>
																										<th>Proc.time</th>
																										<th>Bandwidth</th>
																										<th>New URLs</th>
																										<th>Removed URLs</th>
																										<th>Broken links</th>
																										<?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
																										<?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
																										<?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
																										<?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
																										</tr>
																										<?php  $E7Y7YsxyLufZ=array(); for($i=0;$i<count($IbwgEd0hPU2VJv9MEdE);$i++){ $LET7m8tLI = DH3FvIHx9jl($IbwgEd0hPU2VJv9MEdE[$i]); if(!$LET7m8tLI)continue; foreach($LET7m8tLI as $k=>$v)if(!is_array($v))$E7Y7YsxyLufZ[$k]+=intval($v);else $E7Y7YsxyLufZ[$k]+=count($v); ?>
																										<tr class=block1>
																										<td><?php echo $i+1?></td>
																										<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$LET7m8tLI['time'])?></a></td>
																										<td><?php echo number_format($LET7m8tLI['ucount'])?></td>
																										<td><?php echo number_format($LET7m8tLI['crcount'])?></td>
																										<td><?php echo count($LET7m8tLI['urls_list_skipped'])?></td>
																										<td><?php echo number_format($LET7m8tLI['ctime'],2)?>s</td>
																										<td><?php echo number_format($LET7m8tLI['tsize']/1024/1024,2)?></td>
																										<td><?php echo count($LET7m8tLI['newurls'])?></td>
																										<td><?php echo count($LET7m8tLI['losturls'])?></td>
																										<td><?php echo count($LET7m8tLI['u404'])?></td>
																										<?php if($grab_parameters['xs_imginfo'])echo '<td>'.$LET7m8tLI['images_no'].'</td>';?>
																										<?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$LET7m8tLI['videos_no'].'</td>';?>
																										<?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$LET7m8tLI['news_no'].'</td>';?>
																										<?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$LET7m8tLI['rss_no'].'</td>';?>
																										</tr>
																										<?php }?>
																										<tr class=block1>
																										<th colspan=2>Total</th>
																										<th><?php echo number_format($E7Y7YsxyLufZ['ucount'])?></th>
																										<th><?php echo number_format($E7Y7YsxyLufZ['crcount'])?></th>
																										<th>-</th>
																										<th><?php echo number_format($E7Y7YsxyLufZ['ctime'],2)?>s</th>
																										<th><?php echo number_format($E7Y7YsxyLufZ['tsize']/1024/1024,2)?> Mb</th>
																										<th><?php echo ($E7Y7YsxyLufZ['newurls'])?></th>
																										<th><?php echo ($E7Y7YsxyLufZ['losturls'])?></th>
																										<th>-</th>
																										<?php if($grab_parameters['xs_imginfo'])echo '<th></th>';?>
																										<?php if($grab_parameters['xs_videoinfo'])echo '<th></th>';?>
																										<?php if($grab_parameters['xs_newsinfo'])echo '<th></th>';?>
																										<?php if($grab_parameters['xs_rssinfo'])echo '<th></th>';?>
																										</tr>
																										</table>
																										<?php } ?>
																										</div>
																										<?php include MeO_tCTyPur9.'page-bottom.inc.php'; 



































































































