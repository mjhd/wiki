<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$GXbqc27824828QziaP=82531535;$Evqwr36254449AJUXe=183563054;$bHkmA49242470JClQV=274602305;$wBSkw50106189MCYxS=975903102;$rTNHx19071356malXw=769092883;$OTdTt49508801HgKXq=871868201;$txIrO78159760lMHtl=376171097;$gGJkz86255326neHKo=680350894;$kVcgM96807567lrElH=102980042;$FqBvG37649795CcCXk=613380041;$KblNX13117271wBlyO=755391881;$WFbqv55546958HYGgz=366406817;$qoTEV31897420OGbWV=695927169;$hiszC63259399vzTlo=443513993;$vjcUi99850705RPYzt=668922840;$mfiqW22445508PIzsL=493436949;$nCnxL92241022DTLSM=192252519;$vozjl12506410OPVHP=411076012;$yrydv69246215MRsYB=604793862;$NmchT35855046UaMgI=622907392;$HWTVu51725980PPCpf=782982634;$DLOpg22019703qVpQW=926055563;$bZSvs17115884XntSq=777770729;$xIAZA89284256EJYeV=390923806;$NUzHx96713636ElUEg=109039337;$GRFoh41421242ehvQa=560804753;$aQHRx68951247wOgwZ=373095904;$POwpD66575395AUgYH=367547047;$ubtqi45986091ZDqgz=964093468;$ffHFF44848907htSNP=58873539;$gmjKD85082468OwRvj=536236226;$zkcPq73931586GcvvP=281978374;$polWs25943517RIkfk=855026005;$SgzOx81064344inljL=534375845;$Rlwwj51525738bVpmK=321669811;$nyqip57619619dRvSP=950613155;$ppqAM25098662OLaIj=890742789;$OhZKi73984208nNbXI=834915193;$BgJMU59722601grhfs=256974432;$SyETW81814873DLSVQ=190024199;$KWATG62961921lemfV=89059778;$kqNPu28028796vytpZ=761265136;$BlRcA88752211UTbnD=25492404;$UtkGd95721889FvDNv=996509345;$hqBXT34559758Bavjh=930008282;$FzrGH17205597pUlgG=381298819;$uinuw64939341iAlnR=572787821;$ByNfI68485136ibBtl=47234835;$FyVKf84976894afCnW=407498878;$hwVAw29709979gdjfD=230130856;?><?php function Fnr6FxzsQ7ZnDJP() { global $wxZ7hODxG, $foxZyxbilwA7JMKe31w, $M8qRyq0ZG, $grab_parameters; $ctime = time(); if(($ctime - $M8qRyq0ZG) > 15) oy2kmNX4TcfA7cicG(); $M8qRyq0ZG = $ctime; if(!function_exists('getrusage'))return; if(!isset($foxZyxbilwA7JMKe31w)){ $foxZyxbilwA7JMKe31w = explode('|',$grab_parameters['xs_cpumon']); } if(!is_array($foxZyxbilwA7JMKe31w)||!$foxZyxbilwA7JMKe31w[0])return; $J3imzrEsgRm = microtime(true); if(($CssItqJ9d3s1SSPyFY=$J3imzrEsgRm-$wxZ7hODxG[1]) < $foxZyxbilwA7JMKe31w[3])return; $Vczbqye56BcYjgWSn0 = getrusage(); $dI9mDnZYinbIdu = $Vczbqye56BcYjgWSn0["ru_utime.tv_sec"] + $Vczbqye56BcYjgWSn0["ru_utime.tv_usec"] / 1e6; $WnBtvvB3W = 0; if($wxZ7hODxG){ $w8i4cQ1UXze6Y = ($dI9mDnZYinbIdu - $wxZ7hODxG[0]); $WnBtvvB3W = 100 * $w8i4cQ1UXze6Y / $CssItqJ9d3s1SSPyFY; } if($WnBtvvB3W>$foxZyxbilwA7JMKe31w[0]) { tAR_IvsnGVJ5v("\n<br>CPU monitor sleep: ".number_format($WnBtvvB3W,2)."% (". number_format($w8i4cQ1UXze6Y,2)." / ".number_format($CssItqJ9d3s1SSPyFY,2). " / ".number_format($J3imzrEsgRm-$wxZ7hODxG[2],2)." ) ". (number_format(memory_get_usage()/1024).'K')); $wxZ7hODxG[2] = $J3imzrEsgRm+$foxZyxbilwA7JMKe31w[1]; usleep($foxZyxbilwA7JMKe31w[1]*1000000); tAR_IvsnGVJ5v(".. go\n<br>"); }else if($CssItqJ9d3s1SSPyFY > $foxZyxbilwA7JMKe31w[2]) { $wxZ7hODxG[0] = $dI9mDnZYinbIdu; $wxZ7hODxG[1] = $J3imzrEsgRm; } } function oy2kmNX4TcfA7cicG() { $lf4VcnEM3VNvb = array( uzAGLJ0Y3V.HGnP26wMMgxNv8g, uzAGLJ0Y3V.zbI2HvDCL5FyqgFqjYG ); TGHPsvh9ZoCiX('Touch: '.uzAGLJ0Y3V.HGnP26wMMgxNv8g); foreach($lf4VcnEM3VNvb as $lg) { if(file_exists($lg)){ touch($lg); } } }   function GElwbKrLU4QUGJM8qt() { global $V8bLdamKhgb36; $V8bLdamKhgb36 = TayqlxvkNtkAAUcB35O(uzAGLJ0Y3V.'debug.log','a'); tAR_IvsnGVJ5v( str_repeat('=',60)."\n".date('Y-m-d H:i:s')."\n\n"); } function VjT0asnu2_fr() { $e = new Exception; var_dump($e->getTraceAsString()); } function tAR_IvsnGVJ5v($nd8Mftrm3cx81OmBw, $C0W39VGP3Yjfwdjjh = '') { global $V8bLdamKhgb36,$d5N5i0pSsI4mt_t4IdB,$_udbg_tm; if(!$_udbg_tm)$_udbg_tm = microtime(true); $_t = number_format(microtime(true)-$_udbg_tm,1); $pNfw6i9SU_KD = $_GET['ddbg'.$C0W39VGP3Yjfwdjjh]; if($pNfw6i9SU_KD){ if($V8bLdamKhgb36){ fJuAFhUG30nRDmZB($V8bLdamKhgb36, preg_replace('#<\w[^>]*?>#','',$nd8Mftrm3cx81OmBw));
																													
																													}
																													
																													echo $d5N5i0pSsI4mt_t4IdB ? preg_replace('#<\w[^>]*?>#','',$nd8Mftrm3cx81OmBw) : '| '.$_t .' |<br>'.$nd8Mftrm3cx81OmBw;
																													
																													flush();
																													
																													if(function_exists('ob_flush'))ob_flush();
																													
																													}
																													
																													}
																													
																													function aKWvUhyvkM5KG7()
																													
																													{
																													
																													$bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
																													
																													$OdJYEWgyIQQM = '';
																													
																													foreach($bt as $i=>$d)
																													
																													if($i>0)
																													
																													{
																													
																													$OdJYEWgyIQQM .= $d['file'].' at '.$d['line']."\n";
																													
																													}
																													
																													return $OdJYEWgyIQQM;
																													
																													}
																													
																													function de5FLAUWTohCIUr2do($SRcBsnpD5UrkZUy)
																													
																													{
																													
																													global $grab_parameters;
																													
																													TGHPsvh9ZoCiX('Del: '.$SRcBsnpD5UrkZUy);
																													
																													if($grab_parameters['xs_filewmove'] && file_exists($SRcBsnpD5UrkZUy) ){
																													
																													$WWoK06xtYn = tempnam("/tmp", "sgtmp");
																													
																													if(file_exists($WWoK06xtYn))unlink($WWoK06xtYn);
																													
																													if(file_exists($SRcBsnpD5UrkZUy))rename($SRcBsnpD5UrkZUy, $WWoK06xtYn);
																													
																													return !file_exists($WWoK06xtYn) || unlink($WWoK06xtYn);
																													
																													}else {
																													
																													
																													return @unlink($SRcBsnpD5UrkZUy);
																													
																													}
																													
																													}
																													
																													function oyMpbsWPRvL($f){if(function_exists('file_get_contents'))return file_get_contents($f);else return implode('',file($f));}
																													
																													function TayqlxvkNtkAAUcB35O($SRcBsnpD5UrkZUy, $phjN4mTR8 = '')
																													
																													{
																													
																													global $grab_parameters;
																													
																													TGHPsvh9ZoCiX('Open for writing: '.$SRcBsnpD5UrkZUy);
																													
																													if($grab_parameters['xs_filewmove'] && file_exists($SRcBsnpD5UrkZUy) ){
																													
																													$LtBR77wuA5arSV0 = ($phjN4mTR8 == 'a') ? file_get_contents($SRcBsnpD5UrkZUy) : '';
																													
																													de5FLAUWTohCIUr2do($SRcBsnpD5UrkZUy);
																													
																													$pf = fopen($SRcBsnpD5UrkZUy, 'w');
																													
																													if($LtBR77wuA5arSV0){
																													
																													fJuAFhUG30nRDmZB($pf, $LtBR77wuA5arSV0);
																													
																													}
																													
																													return $pf;
																													
																													}
																													
																													else {
																													
																													$pf = fopen($SRcBsnpD5UrkZUy, 'w');
																													
																													return $pf;
																													
																													}
																													
																													}
																													
																													function Oddk9ImzKaFvWn26($SRcBsnpD5UrkZUy)
																													
																													{
																													
																													return md5($SRcBsnpD5UrkZUy);
																													
																													}
																													
																													function wzEUU_ZHCmf7Ymmx($lKMT8x_UkE2GW1opJ, $bypzHy0nvX6uGOhN44)
																													
																													{
																													
																													$iVtixTEaV8I_gpFfw1 = ySLbrBG2E . substr($lKMT8x_UkE2GW1opJ,0,2) . '/';
																													
																													if(!file_exists($iVtixTEaV8I_gpFfw1))
																													
																													mkdir($iVtixTEaV8I_gpFfw1, 0755);
																													
																													$pf = TayqlxvkNtkAAUcB35O($iVtixTEaV8I_gpFfw1 . $lKMT8x_UkE2GW1opJ.'.txt','w');
																													
																													fJuAFhUG30nRDmZB($pf, TKJFIsstJk2iHoXl3UQ($bypzHy0nvX6uGOhN44));
																													
																													fclose($pf);
																													
																													}
																													
																													function hr3Ct8y1pYiz_U($lKMT8x_UkE2GW1opJ)
																													
																													{
																													
																													$fl = ySLbrBG2E . substr($lKMT8x_UkE2GW1opJ,0,2) . '/' . $lKMT8x_UkE2GW1opJ . '.txt';
																													
																													if(!file_exists($fl))
																													
																													return array();
																													
																													$HHcXJeQ1VdXMM = BU6hTbtN56($fl);
																													
																													return BS2u9cmxjMg($HHcXJeQ1VdXMM);
																													
																													}
																													
																													function TKJFIsstJk2iHoXl3UQ($Vczbqye56BcYjgWSn0)
																													
																													{
																													
																													
																													$OdJYEWgyIQQM = '';
																													
																													if(function_exists('json_encode'))
																													
																													$OdJYEWgyIQQM = json_encode ($Vczbqye56BcYjgWSn0, defined('JSON_UNESCAPED_UNICODE') ? JSON_UNESCAPED_UNICODE : 0);
																													
																													if(!$OdJYEWgyIQQM)
																													
																													$OdJYEWgyIQQM = serialize($Vczbqye56BcYjgWSn0);
																													
																													return $OdJYEWgyIQQM;
																													
																													}
																													
																													function BS2u9cmxjMg($Vczbqye56BcYjgWSn0)
																													
																													{
																													
																													if(is_array($Vczbqye56BcYjgWSn0))
																													
																													return $Vczbqye56BcYjgWSn0;
																													
																													if($Vczbqye56BcYjgWSn0[1]==':')
																													
																													return unserialize($Vczbqye56BcYjgWSn0);
																													
																													if(($Vczbqye56BcYjgWSn0[0]=='{') || ($Vczbqye56BcYjgWSn0[0]=='[') || ($Vczbqye56BcYjgWSn0[0]=='"'))
																													
																													return json_decode ($Vczbqye56BcYjgWSn0, true);
																													
																													else
																													
																													return $Vczbqye56BcYjgWSn0;
																													
																													}
																													
																													function yoZfrgTrTG7vRkYsVD($Vczbqye56BcYjgWSn0)
																													
																													{
																													
																													return TKJFIsstJk2iHoXl3UQ($Vczbqye56BcYjgWSn0);
																													
																													}
																													
																													function TgyaGrN_Z_93C($Vczbqye56BcYjgWSn0)
																													
																													{
																													
																													return BS2u9cmxjMg($Vczbqye56BcYjgWSn0);
																													
																													}
																													
																													function efCnubSjJv($i,$Wap4seYoMvS,$gfN0DbFbgSstV=false)
																													
																													{
																													
																													if($gfN0DbFbgSstV && $i<2) return $Wap4seYoMvS;
																													
																													return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$Wap4seYoMvS) : $Wap4seYoMvS;
																													
																													}
																													
																													function JV7KHTAaxXEYScT457($SRcBsnpD5UrkZUy, $NJHFXTbKG, $shSdlz2XbzZve1PgvI=uzAGLJ0Y3V, $KJDYzReZMvm = false)
																													
																													{
																													
																													tAR_IvsnGVJ5v("\n<br>Save file start: $SRcBsnpD5UrkZUy\n".	number_format(memory_get_usage()/1024)."K\n",3);
																													
																													$QvX11WauUs = false;
																													
																													if($KJDYzReZMvm){
																													
																													if(function_exists('gzopen')){
																													
																													if(!strstr($SRcBsnpD5UrkZUy,'.log'))
																													
																													$SRcBsnpD5UrkZUy .= '.gz';
																													
																													if(!$pf = gzopen($shSdlz2XbzZve1PgvI.$SRcBsnpD5UrkZUy,"w"))
																													
																													return false;
																													
																													gzwrite($pf, $NJHFXTbKG);
																													
																													gzclose($pf);
																													
																													$QvX11WauUs = true;
																													
																													}else
																													
																													if(function_exists('gzencode')){
																													
																													$GugkjjVktkTFQgYN7j6 = gzencode($NJHFXTbKG, 1);
																													
																													unset($NJHFXTbKG);
																													
																													$NJHFXTbKG = $GugkjjVktkTFQgYN7j6;
																													
																													if(!strstr($SRcBsnpD5UrkZUy,'.log'))
																													
																													$SRcBsnpD5UrkZUy .= '.gz';
																													
																													}
																													
																													}
																													
																													if(!$QvX11WauUs){
																													
																													if(!$pf = TayqlxvkNtkAAUcB35O($shSdlz2XbzZve1PgvI.$SRcBsnpD5UrkZUy,"w"))
																													
																													return false;
																													
																													fJuAFhUG30nRDmZB($pf, $NJHFXTbKG);
																													
																													fclose($pf);
																													
																													}
																													
																													tAR_IvsnGVJ5v("\n<br>Save file complete: $SRcBsnpD5UrkZUy\n".	number_format(memory_get_usage()/1024)."K\n",3);
																													
																													@chmod($shSdlz2XbzZve1PgvI.$SRcBsnpD5UrkZUy, 0666);
																													
																													unset($NJHFXTbKG);
																													
																													return $SRcBsnpD5UrkZUy;
																													
																													}
																													
																													function BU6hTbtN56($SRcBsnpD5UrkZUy, $ZZV4VWpZcqX = false)
																													
																													{
																													
																													tAR_IvsnGVJ5v("\n<br>Read file start: $SRcBsnpD5UrkZUy\n".	number_format(memory_get_usage()/1024)."K\n",3);
																													
																													if($ZZV4VWpZcqX && file_exists($fn = $SRcBsnpD5UrkZUy.'.gz'))
																													
																													$SRcBsnpD5UrkZUy = $fn;
																													
																													TGHPsvh9ZoCiX('Read: '.$SRcBsnpD5UrkZUy);
																													
																													$fc = @file_get_contents($SRcBsnpD5UrkZUy);
																													
																													if($ZZV4VWpZcqX){
																													
																													if((ord($fc[0])==0x1f)&&(ord($fc[1])==0x8b)){
																													
																													if(function_exists('gzinflate')){
																													
																													if($oaVZ97cfA_ = gzinflate(substr($fc,10)))
																													
																													$fc = $oaVZ97cfA_;
																													
																													}
																													
																													else
																													
																													if(function_exists('gzdecode'))if($oaVZ97cfA_ = gzdecode($fc))$fc = $oaVZ97cfA_;
																													
																													if(!$oaVZ97cfA_)$fc = '';
																													
																													}
																													
																													}
																													
																													tAR_IvsnGVJ5v("\n<br>Read file complete: $SRcBsnpD5UrkZUy (".number_format(strlen($fc)/1024)."K)\n".	number_format(memory_get_usage()/1024)."K\n",3);
																													
																													return $fc;
																													
																													}
																													
																													function DH3FvIHx9jl($GW6yyDrAVJv0V1)
																													
																													{
																													
																													return BS2u9cmxjMg(BU6hTbtN56(uzAGLJ0Y3V.$GW6yyDrAVJv0V1, true));
																													
																													}
																													
																													function TGHPsvh9ZoCiX($s)
																													
																													{
																													
																													}
																													
																													function nJHqtEKMBruY()
																													
																													{
																													
																													$IbwgEd0hPU2VJv9MEdE = array();
																													
																													TGHPsvh9ZoCiX('Get log list: '.uzAGLJ0Y3V);
																													
																													$pd = opendir(uzAGLJ0Y3V);
																													
																													while($fn=readdir($pd))
																													
																													if(preg_match('#^\d+.*?\.log$#',$fn))
																													
																													$IbwgEd0hPU2VJv9MEdE[] = $fn;
																													
																													closedir($pd);
																													
																													sort($IbwgEd0hPU2VJv9MEdE);
																													
																													return $IbwgEd0hPU2VJv9MEdE;
																													
																													}
																													
																													function IoXU8HZs2vZbs9A($tm) {
																													
																													$tm = intval($tm);
																													
																													$h = intval($tm/60/60);
																													
																													$tm -= $h*60*60;
																													
																													$m = intval($tm/60);
																													
																													$tm -= $m*60;
																													
																													$s = $tm;
																													
																													if($s<10)$s="0$s";
																													
																													if($m<10)$m="0$m";
																													
																													return "$h:$m:$s";
																													
																													}
																													
																													function gM5xkXaEr($GrF1vKKzJFtCgLcme, $z93GGZ0IsrHD) {
																													
																													if(strstr($z93GGZ0IsrHD, '://'))return $z93GGZ0IsrHD;
																													
																													if($GrF1vKKzJFtCgLcme[strlen($GrF1vKKzJFtCgLcme)-1] == '/' && $z93GGZ0IsrHD[0] == '/')
																													
																													$z93GGZ0IsrHD = substr($z93GGZ0IsrHD, 1);
																													
																													if($GrF1vKKzJFtCgLcme[strlen($GrF1vKKzJFtCgLcme)-1] == '/' && $GrF1vKKzJFtCgLcme[strlen($GrF1vKKzJFtCgLcme)-2] == '/' )
																													
																													$GrF1vKKzJFtCgLcme = substr($GrF1vKKzJFtCgLcme, 0, strlen($GrF1vKKzJFtCgLcme)-1);
																													
																													return $GrF1vKKzJFtCgLcme . $z93GGZ0IsrHD;
																													
																													
																													
																													}
																													
																													function k7VCeuq1cd48r0uetU(){
																													
																													global $DP4cUKRPh0, $WLt1IfwRbQz;
																													
																													$ctime = time();
																													
																													if(($ctime - $DP4cUKRPh0) > GvqGgOzk9gm('xs_interrupt_interval',3)){
																													
																													$DP4cUKRPh0 = $ctime;
																													
																													if(file_exists($iaVagJw2pR9cq_toO = uzAGLJ0Y3V.ykqK2tfCoRkWc)){
																													
																													$WLt1IfwRbQz = filesize($iaVagJw2pR9cq_toO) ? file_get_contents($iaVagJw2pR9cq_toO) : $iaVagJw2pR9cq_toO;
																													
																													}
																													
																													}
																													
																													return $WLt1IfwRbQz;
																													
																													}
																													
																													function jcsUu8Z6j5q6XX3no() {
																													
																													$_dump_file = uzAGLJ0Y3V.HGnP26wMMgxNv8g;
																													
																													
																													if(file_exists($_dump_file) ) {
																													
																													@unlink(uzAGLJ0Y3V.rQ9UYLvgx6l);
																													
																													@rename($_dump_file, uzAGLJ0Y3V.rQ9UYLvgx6l);
																													
																													}
																													
																													}
																													
																													function GvqGgOzk9gm($G2hdaqd1hLSPvLM3i, $X71zxWvJcIGMrFc9Zo = false) {
																													
																													global $grab_parameters;
																													
																													return isset($grab_parameters[$G2hdaqd1hLSPvLM3i])  ? $grab_parameters[$G2hdaqd1hLSPvLM3i] : $X71zxWvJcIGMrFc9Zo;
																													
																													}
																													
																													function MmfwPiy1DUbo($dr) {
																													
																													$dr = preg_replace('#\?.*#', '', $dr);
																													
																													$dr = preg_replace('#\#.*#', '', $dr);
																													
																													if($dr[strlen($dr)-1]!='/' && $dr)
																													
																													{
																													
																													$dr=str_replace('\\','/',dirname($dr));
																													
																													if($dr[strlen($dr)-1]!='/')$dr.='/';
																													
																													}
																													
																													return gM5xkXaEr($dr, '');
																													
																													}
																													
																													function HS4hNW3qM9T4($H46gGznSa,$L2SJPl6C0jYTt8qkJ) {
																													
																													return MmfwPiy1DUbo(strstr($L2SJPl6C0jYTt8qkJ,'://') ? $L2SJPl6C0jYTt8qkJ : $H46gGznSa . $L2SJPl6C0jYTt8qkJ);
																													
																													}
																													
																													function jiuiCDEnGWyx($shSdlz2XbzZve1PgvI, $Y9TiUZ_mYg4eTEN)
																													
																													{
																													
																													TGHPsvh9ZoCiX('Clear dir: '.$shSdlz2XbzZve1PgvI);
																													
																													$pd = opendir($shSdlz2XbzZve1PgvI);
																													
																													if($pd)
																													
																													while($fn = readdir($pd))
																													
																													if(is_file($shSdlz2XbzZve1PgvI.$fn) && preg_match('#'.$Y9TiUZ_mYg4eTEN.'$#',$fn))
																													
																													{
																													
																													@de5FLAUWTohCIUr2do($shSdlz2XbzZve1PgvI.$fn);
																													
																													}else
																													
																													if($fn[0]!='.'&&is_dir($shSdlz2XbzZve1PgvI.$fn))
																													
																													{
																													
																													jiuiCDEnGWyx($shSdlz2XbzZve1PgvI.$fn.'/', $Y9TiUZ_mYg4eTEN);
																													
																													@rmdir($shSdlz2XbzZve1PgvI.$fn);
																													
																													}
																													
																													closedir($pd);
																													
																													}
																													
																													function fJuAFhUG30nRDmZB($pf, $HHcXJeQ1VdXMM)
																													
																													{
																													
																													global $grab_parameters;
																													
																													
																													if($grab_parameters['xs_write_disable'] ){
																													
																													}
																													
																													return @fwrite($pf, $HHcXJeQ1VdXMM);
																													
																													}
																													
																													function ZLNc6A65dt1($Lr6R96uPF89O1yyYTv, $NCetweVQi)
																													
																													{
																													
																													$ws = "<xmlsitemaps_settings>";
																													
																													foreach($NCetweVQi as $k=>$v)
																													
																													if(strstr($k,'xs_'))
																													
																													$ws .= "\n\t<option name=\"$k\">$v</option>";
																													
																													$ws .= "\n</xmlsitemaps_settings>";
																													
																													$pf = TayqlxvkNtkAAUcB35O($Lr6R96uPF89O1yyYTv,'w');
																													
																													fJuAFhUG30nRDmZB($pf, $ws);
																													
																													fclose($pf);
																													
																													}
																													
																													function JPHZY5E76JvaRvDcD($Lr6R96uPF89O1yyYTv, &$NCetweVQi, $Rev_puLikn = false)
																													
																													{
																													
																													$fl = BU6hTbtN56($Lr6R96uPF89O1yyYTv);
																													
																													preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $t6n2GUIND8F1HdGm4, PREG_SET_ORDER);
																													
																													foreach($t6n2GUIND8F1HdGm4 as $m)
																													
																													if(!$Rev_puLikn || $m[2])
																													
																													{
																													
																													$NCetweVQi[$m[1]] = $m[2];
																													
																													}
																													
																													return $fl && (count($t6n2GUIND8F1HdGm4)>0);
																													
																													}
																													
																													function qMjpBUB6Ys($G2hdaqd1hLSPvLM3i, $KqN66l1DfUb = true)
																													
																													{
																													
																													global $grab_parameters, $cfRaULBmzwIeKwJ11O;
																													
																													return
																													
																													str_replace(basename($grab_parameters['xs_smurl']), $grab_parameters[$G2hdaqd1hLSPvLM3i],
																													
																													$grab_parameters['xs_smurl']).($KqN66l1DfUb ? $cfRaULBmzwIeKwJ11O : '');
																													
																													}
																													
																													function AjcZyvgxP77_7IU($shSdlz2XbzZve1PgvI, $f2)
																													
																													{
																													
																													$f1 = preg_replace('#(\.[^\.]+$)#', '2$01', $f2);
																													
																													return @file_exists($shSdlz2XbzZve1PgvI.$f1) ? $f1 : $f2;
																													
																													}
																													
																													function PscHlmfLzHPq5Hfvp8() {
																													
																													global $PvhO2p8njvSf;
																													
																													$BNDGFMwjYZ = '';$_ss=0;
																													
																													if($PvhO2p8njvSf)
																													
																													foreach($PvhO2p8njvSf as $mxmrLVvxnFIvt3QNg=>$ta){
																													
																													if(count($ta)){
																													
																													$_s = array_sum($ta)/count($ta);
																													
																													$_ss+=$_s;
																													
																													$BNDGFMwjYZ .= $mxmrLVvxnFIvt3QNg.' = '.count($ta).', '.number_format($_s,2)."s \n ";
																													
																													}
																													
																													}
																													
																													return '['.number_format($_ss,2).'s] '.$BNDGFMwjYZ;
																													
																													}
																													
																													function r7jwroOrGxdXbo($mxmrLVvxnFIvt3QNg, $a32mWhsnlDZTBba = false) {
																													
																													global $PvhO2p8njvSf, $EZsbOExR6MUL_H;
																													
																													if(!isset($PvhO2p8njvSf[$mxmrLVvxnFIvt3QNg]))
																													
																													$PvhO2p8njvSf[$mxmrLVvxnFIvt3QNg] = array();
																													
																													if($a32mWhsnlDZTBba){
																													
																													if($EZsbOExR6MUL_H[$mxmrLVvxnFIvt3QNg]){
																													
																													$t = microtime(true) - $EZsbOExR6MUL_H[$mxmrLVvxnFIvt3QNg];
																													
																													$EZsbOExR6MUL_H[$mxmrLVvxnFIvt3QNg] = 0;
																													
																													array_push($PvhO2p8njvSf[$mxmrLVvxnFIvt3QNg], $t);
																													
																													if(count($PvhO2p8njvSf[$mxmrLVvxnFIvt3QNg])>GvqGgOzk9gm('xs_perf_counter',20))
																													
																													array_shift($PvhO2p8njvSf[$mxmrLVvxnFIvt3QNg]);
																													
																													}
																													
																													}else {
																													
																													$EZsbOExR6MUL_H[$mxmrLVvxnFIvt3QNg] = microtime(true);
																													
																													}
																													
																													}
																													
																													function inaP0TE2Pp7R() {
																													
																													global $ya6boC4gEYHCI;
																													
																													$BNDGFMwjYZ = '';$_ss=0;
																													
																													if($ya6boC4gEYHCI)
																													
																													foreach($ya6boC4gEYHCI as $mxmrLVvxnFIvt3QNg=>$ta){
																													
																													$_ss+=$ta[1];
																													
																													$BNDGFMwjYZ .= $mxmrLVvxnFIvt3QNg.' = '.($ta[0]).', '.number_format($ta[1],2)."s \n ";
																													
																													}
																													
																													return 'total ['.number_format($_ss,2).'s] '."\n".$BNDGFMwjYZ;
																													
																													}
																													
																													function TOz3VYy4To8vIqo($mxmrLVvxnFIvt3QNg, $a32mWhsnlDZTBba = false) {
																													
																													if(!$_GET['ddbg'])return;
																													
																													global $ya6boC4gEYHCI, $MJU0x6lssBu_XfPnr, $Ly6Ki2QWG8DCvXSgeg;
																													
																													if(!$mxmrLVvxnFIvt3QNg)$mxmrLVvxnFIvt3QNg = $Ly6Ki2QWG8DCvXSgeg;
																													
																													if(!isset($ya6boC4gEYHCI[$mxmrLVvxnFIvt3QNg]))
																													
																													$ya6boC4gEYHCI[$mxmrLVvxnFIvt3QNg] = array();
																													
																													if($a32mWhsnlDZTBba){
																													
																													if($MJU0x6lssBu_XfPnr[$mxmrLVvxnFIvt3QNg]){
																													
																													$t = microtime(true) - $MJU0x6lssBu_XfPnr[$mxmrLVvxnFIvt3QNg];
																													
																													unset($MJU0x6lssBu_XfPnr[$mxmrLVvxnFIvt3QNg]);
																													
																													$ya6boC4gEYHCI[$mxmrLVvxnFIvt3QNg][0]++;
																													
																													$ya6boC4gEYHCI[$mxmrLVvxnFIvt3QNg][1]+=$t;
																													
																													
																													
																													}
																													
																													}else {
																													
																													$MJU0x6lssBu_XfPnr[$mxmrLVvxnFIvt3QNg] = microtime(true);
																													
																													}
																													
																													}
																													
																													



































































































