<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$MYylp73083942pOJSL=710461000;$yNQfJ20753797tIMyv=524593938;$mKbzj63260504haHLw=433189728;$rMZLm42519946ohNwB=331785328;$tVSFE34869075utbIC=694290444;$lHRfj48747582emRbZ=610528490;$kuvsV84737358ZiZbk=464414588;$mhvcO16235526cGaWF=430246772;$Nzpic47310276moXLf=927019888;$Jsnpa88837364JMQtS=849522971;$ewAGA44379327AnLSE=708981352;$LaEHC73831973MRRer=476793958;$rDXrm54932612CqbTH=685560788;$gXDjN36859122UOimB=569555228;$Kplod24370832DFBlh=241587502;$ANoLM66382396JrnpJ=7182028;$tueLt44536420shrCT=962916539;$WmtpV14948234hDfRw=689449802;$hepOC21723840fBYeD=435980158;$YgaVJ61314688PxBVQ=525561904;$NabvV78710927dQmjF=211478527;$PNJec27272213EezqF=5503691;$JlWPr81998055soYjV=698363926;$hluhc14722191HXHJM=80593082;$zlOtl30582369LfCAz=862967564;$WhHdY82515499nUZyE=691257039;$sMVoO50548152tLePy=246887245;$GKBBV74462790TcRQr=982480676;$PaoNq60252829eBJyZ=980175575;$idYYH20550617wymcM=853283621;$rPePh52043572WjcxY=595764706;$TZapQ87209157ZfPFz=573574302;$kbjHP94054085CAfWw=566322125;$VVQLP39754553DdRmO=892300939;$eXfXI41216742natkj=943517202;$QSOws67823989jVXoP=733323143;$AQrdW89658396WOhpa=521003068;$UvlgE86495159HxsXY=233487308;$dvvFO10251046jcTzx=415799160;$IrqXD97497186OmisV=324101209;$fKUoQ66472799PQaYz=548392102;$Odqwr82163840JdSJm=979640711;$ABVhW59820931EiGIY=818380111;$LchGu72375849FGChz=182154669;$KSfRS46532510zydby=405984215;$TGvSV90086217dTPqH=53075843;$VlFHp45049385cRwYb=839636639;$ZMPqi11890755buyUm=347937904;$MjqyE45084092yTXFV=10601068;$pcPXV17497292xpziL=406171284;?><?php class SiteCrawler { var $haYLh8DFmse = false; var $AfDSVIK6s5BMw = array(); var $r2tgxDyJxsd = array(); var $NCetweVQi = array(); var $rj0JI8Q0P = false; var $F5rfn4hxk75Lkl = false; var $abL9eLVH_0PUMHg = array(); var $VB6Q0F6yd4SQ = array(); var $rSfgkeWI70ZEUdJ9z0 = ''; var $NQpZ5Rk6aLCayp2 = ''; var $orVmskvjwMu4FKb = ''; var $XtMYFsNjs3IUPy6Gg = ''; var $tQNNmQu1nZ = ''; var $e2MNLLv4TrUXrZT = ''; var $PbHJwJKKYhNkyWVJy = ''; var $NFWtwXWgxv40mn1JMF = ''; var $H46gGznSa = ''; var $QYT0hClZNXziEux = ''; var $N6DEJ7NrOAjvZ1k_14 = 0; var $urls_completed = array(); var $sm_base = array(); var $ZIEYu8XY3Sw90QOnH = 0; var $ctime = 0; var $pl = 0; var $mu = 0; var $num_processed = 0; var $num_links_current_batch = 0; var $num_urls_processed_in_current_batch = 0; var $tsize = 0; var $links_level = 0; var $brOXIDsmo_1Rsq = 0; var $nettime = 0; var $lCVvW4SVoQx36M = 0; var $fetch_no = 0; var $R_9A5kFcmtnfoij = 0; var $addedcnt = array(); var $sm_sessions = array(); var $gAcBoXtBxq4Clf_U = array(); var $progpar = array(); var $UZI8SXUW7rZd = array(); var $runstate = array(); var $ref_links_list = array(); var $ref_links_tmp = array(); var $ref_links_tmp2 = array(); function K5DeWy6YJuv8Rk($Bn1X7H8c0BiayQyI = false, $vo3xebTJPQ8t7eWA = false) { global $SxsBWjwdR8G, $grab_parameters, $FLC4VMayErR0F4ELN, $m8, $DgXFKVlWhK0kO_n; $fs4ym5U_cmW06tNua=microtime(true); $this->ctime = $fs4ym5U_cmW06tNua - $this->R_9A5kFcmtnfoij; $_ut = ($this->ctime - $SxsBWjwdR8G > 5); if( $_ut || $vo3xebTJPQ8t7eWA || ( ( (($this->num_links_current_batch==$this->num_urls_processed_in_current_batch) || ($this->pl==0) || ($this->num_processed==1) || ($this->num_processed%$grab_parameters['xs_progupdate'])==0) || ($this->N6DEJ7NrOAjvZ1k_14>=$this->ZIEYu8XY3Sw90QOnH) ) && ($this->num_processed != $this->gAcBoXtBxq4Clf_U['num_processed']) && !$Bn1X7H8c0BiayQyI ) ) { $this->gAcBoXtBxq4Clf_U['num_processed'] = $this->num_processed; $SxsBWjwdR8G = $this->ctime; $this->mu = function_exists('memory_get_usage') ? memory_get_usage() : '-'; $FLC4VMayErR0F4ELN = max($FLC4VMayErR0F4ELN, $this->mu); if($this->mu>$m8+1000000){ $m8 = $this->mu; $cc = ' style="color:red"'; }else $cc=''; if(intval($this->mu)) $this->mu = number_format($this->mu/1024,1).' Kb'; tAR_IvsnGVJ5v("\n(<span".$cc.">memory".($cc?' up':'').": $this->mu</span>)<br>\n"); $this->progpar = array( $this->ctime, // 0. running time 
																														 str_replace($this->QYT0hClZNXziEux, '', $this->e2MNLLv4TrUXrZT),  // 1. current URL 
																														 $this->pl,                    // 2. urls left 
																														 $this->num_processed,                    // 3. processed urls 
																														 $this->tsize,                 // 4. bandwidth usage 
																														 $this->links_level,           // 5. depth level 
																														 $this->mu,                    // 6. memory usage 
																														 $this->N6DEJ7NrOAjvZ1k_14, // 7. added in sitemap 
																														 $this->brOXIDsmo_1Rsq,     // 8. in the queue 
																														 $this->nettime,	// 9. network time 
																														 $this->lCVvW4SVoQx36M, // 10. last net time 
																														 $this->fetch_no, // 11. fetched urls 
																														 $this->addedcnt, // 12. number of added images/videos/etc 
																														 ); end($this->sm_sessions); $ikXjBq5o2SiG3jkx6b = key($this->sm_sessions); if(!$this->sm_sessions[$ikXjBq5o2SiG3jkx6b]['progress_start']){ $this->sm_sessions[$ikXjBq5o2SiG3jkx6b]['progress_start'] = $this->progpar; } $this->sm_sessions[$ikXjBq5o2SiG3jkx6b]['progress_end'] = $this->progpar; if($this->NCetweVQi['bgexec']){ if(((time()-$DgXFKVlWhK0kO_n)>GvqGgOzk9gm('xs_state_interval',5)) || $vo3xebTJPQ8t7eWA) { if($this->fetch_no) { $DgXFKVlWhK0kO_n = time(); $this->progpar[] = PscHlmfLzHPq5Hfvp8(); if($Bn1X7H8c0BiayQyI){ $this->progpar[] = $Bn1X7H8c0BiayQyI; } JV7KHTAaxXEYScT457(zbI2HvDCL5FyqgFqjYG,yoZfrgTrTG7vRkYsVD($this->progpar)); } } } if($this->haYLh8DFmse && (!$this->r2tgxDyJxsd['f'] || $_ut)) { call_user_func($this->haYLh8DFmse,$this->progpar); } } else { call_user_func($this->haYLh8DFmse,array('cmd'=>'ping', 'bg' => $this->NCetweVQi['bgexec'])); } return $this->progpar; } function QZPK5LU7YJ() { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ JV7KHTAaxXEYScT457('sm_base.db',TKJFIsstJk2iHoXl3UQ($this->sm_base),uzAGLJ0Y3V,true); } } function s_vHbjynX9R7etBP() { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ if($this->basecachemask) foreach($this->urls_completed as $hSuO75WXdSKzmLCyqak){ $tiMRiuTjxlTfA = $this->MXiyv7E90bNv($hSuO75WXdSKzmLCyqak); $nndmaKTcX = $this->TmDuxdGroA0ZS2UlE($tiMRiuTjxlTfA['link']); if(preg_match('#('.$this->basecachemask.')#',$nndmaKTcX)) if(!isset($this->sm_base[$nndmaKTcX])) { $this->sm_base[$nndmaKTcX] = $tiMRiuTjxlTfA; } } } } function ezAF3Kn4NsZ($VAgLH4gC6B) { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ tAR_IvsnGVJ5v("\nRestoring sm_base\n"); if($uTY9_pkm5 = @BU6hTbtN56(uzAGLJ0Y3V.'sm_base.db',true)){ tAR_IvsnGVJ5v("\nUnpacked sm_base size: ".(strlen($uTY9_pkm5))."\n"); $uTY9_pkm5 = BS2u9cmxjMg($uTY9_pkm5); } tAR_IvsnGVJ5v("\nFound URLs in sm_base: ".count($uTY9_pkm5)."\n"); $this->sm_base = array(); if($uTY9_pkm5) { if($this->basecachemask) foreach($uTY9_pkm5 as $_k=>$_v){ $nndmaKTcX = $this->TmDuxdGroA0ZS2UlE($_k); $n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($_k, $this->H46gGznSa); if(!$n8og2KGZypJ477LnZSL) if(preg_match('#('.$this->basecachemask.')#',$nndmaKTcX)) { $this->sm_base[$nndmaKTcX] = $_v; } } } unset($uTY9_pkm5); tAR_IvsnGVJ5v("\nFiltered after cache mask: ".count($this->sm_base)."\n"); if($VAgLH4gC6B){ } } } function WwrfXsPMwRgbAiD($bm = false){ if($bm && isset($bm[1])&& $bm[1]&&($bm[1][0]!='.')){   $this->FJC_ZevXj1KQeYaQC($bm[1], $this->e2MNLLv4TrUXrZT); $this->NFWtwXWgxv40mn1JMF = MmfwPiy1DUbo($bm[1]); } else{ $this->NFWtwXWgxv40mn1JMF = MmfwPiy1DUbo(strstr($this->e2MNLLv4TrUXrZT,'://') ? $this->e2MNLLv4TrUXrZT : $this->H46gGznSa . $this->e2MNLLv4TrUXrZT); 
																														 } } function T4KQlkfPclc3Yd5($TfgDxG3L5hCbhNX8wH){ return strstr($TfgDxG3L5hCbhNX8wH,'text/html') || strstr($TfgDxG3L5hCbhNX8wH,'/xhtml'); } function PufyB4xKSa($nm, $cn){ preg_match('#<input[^>]*name="'.$nm.'"[^>]*value="(.*?)"#is', $cn, $_inpm); return $_inpm[1]; } function YbxiuR0Hi1SV($cn, $dp){ global $grab_parameters,$UENg1OTT1qn1JDiKJ; $wJikff0cjA = array(); tAR_IvsnGVJ5v("\n*** Parse JS - ".$this->e2MNLLv4TrUXrZT.", ($dp)\n", 2); if(strstr($cn, '__VIEWSTATE')){ $MJhYDA7aBLqlmjXWZo = rand(1E5,1E6); preg_match_all('#<form[^>]*action="([^>]*?)".*?</form>#is', $cn, $_vsm); foreach($_vsm[0] as $i=>$_vm) { if(!preg_match('#<input[^>]*?"__VIEWSTATE"#is', $_vm)) continue; $_action = $_vsm[1][$i]; $n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($_action, $this->e2MNLLv4TrUXrZT); if($n8og2KGZypJ477LnZSL == 1) continue; $_fex2 = $this->gp1acAuSr1Pf($_action); if($_fex2['f'])continue; $w_53JnwCa2Yl9 = array('__VIEWSTATE','__VIEWSTATEGENERATOR','__EVENTVALIDATION'); $K3aFrfUmN3 = array(); foreach($w_53JnwCa2Yl9 as $p) $K3aFrfUmN3[$p] = $this->PufyB4xKSa($p, $_vm); preg_match_all('#<input[^>]*type="hidden"[^>]*name="([^>]*?)"[^>]*value="([^>]*?)"#is', $_vm, $_vpar); foreach($_vpar[0] as $_vpi=>$_vpv) { if(!$K3aFrfUmN3[$_vpar[1][$_vpi]]) $K3aFrfUmN3[$_vpar[1][$_vpi]] = $_vpar[2][$_vpi]; } preg_match_all('#__doPostBack(\(.*?\))#is', $_vm, $_dpball); $hCNa2scqDCJROqiixqz = array(); foreach($_dpball[1] as $_dpb) { $_dpb = stripslashes(str_replace('&#39;',"'",$_dpb)); if(preg_match('#\'(.*?)\'(?:\s*\,\'(.*?)\')?#', $_dpb, $_a)){ if(!$this->oQnQZ0dSqFz_CGCQjY('xs_parse_js_only_act', $_a[1], true)) continue; if(!$this->oQnQZ0dSqFz_CGCQjY('xs_parse_js_only_act2', $_a[1].$_a[2], true)) continue; $Pl45U4VpbCu = $_action .' -> '. $_a[1]. '/'. $_a[2]; if($Vq3NmCGr4X1B = GvqGgOzk9gm('xs_parse_js_allowdup',false)){ if(preg_match('#'.$Vq3NmCGr4X1B.'#',$_a[1].$_a[2])) $Pl45U4VpbCu = $this->e2MNLLv4TrUXrZT.'/'.$MJhYDA7aBLqlmjXWZo.' -> '.$Pl45U4VpbCu; } if($this->UZI8SXUW7rZd[$Pl45U4VpbCu]++) continue; $_fex2 = $this->gp1acAuSr1Pf($_a[1]); if(!$_fex2['f'] ) $hCNa2scqDCJROqiixqz[] = array($_a,$Pl45U4VpbCu); } } foreach($hCNa2scqDCJROqiixqz as $jp){ $_a = $jp[0]; $Pl45U4VpbCu = $jp[1]; $NCetweVQi = $K3aFrfUmN3; $NCetweVQi['__EVENTTARGET'] = $_a[1]; $NCetweVQi['__EVENTARGUMENT'] = $_a[2]; $Phs2HAoCDN9Nni = $UENg1OTT1qn1JDiKJ->fetch($_action, 0, false, false, http_build_query($NCetweVQi,'','&'), array('contenttype'=>'application/x-www-form-urlencoded')); $this->K5DeWy6YJuv8Rk(); tAR_IvsnGVJ5v("\n(js post $dp) $Pl45U4VpbCu\nlast - ".$Phs2HAoCDN9Nni['last_url'] ); if(($_action != $Phs2HAoCDN9Nni['last_url'])){ $wJikff0cjA[] = $Phs2HAoCDN9Nni['last_url']; }else { $wJikff0cjA = array_merge($wJikff0cjA, $this->Vq4xbBbMAoh7($Phs2HAoCDN9Nni['content'], $dp+1)); } tAR_IvsnGVJ5v("\n>> llist ".count($wJikff0cjA).", ".$wJikff0cjA[0]."\n"); } } } return $wJikff0cjA; } function Vq4xbBbMAoh7(&$cn, $dp = 0, $zipN2oPh2j = 0){ global $grab_parameters,$UENg1OTT1qn1JDiKJ; if(!$zipN2oPh2j) $zipN2oPh2j= GvqGgOzk9gm('xs_parsehtml_maxdepth',5); tAR_IvsnGVJ5v("\n* Parse HTML - ".$this->e2MNLLv4TrUXrZT.", ($dp/$zipN2oPh2j) [".strlen($cn)."]\n", 2); if($dp > $zipN2oPh2j)return array(); if(preg_match_all('#<(?:div|span)\s[^>]*?(?:data-|\s)src\s*=\s*["\']([^>]*?)("|\')#is', $cn, $wHT7ypk2G8zy)) { foreach($wHT7ypk2G8zy[1] as $i=>$th5c7Nwjl9JY6YzwT) { $n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($th5c7Nwjl9JY6YzwT, $this->e2MNLLv4TrUXrZT); if($n8og2KGZypJ477LnZSL == 1) continue; $_fex2 = $this->gp1acAuSr1Pf($th5c7Nwjl9JY6YzwT); if($_fex2['f'])continue; $uXW4n9IyEk5p = $UENg1OTT1qn1JDiKJ->fetch($th5c7Nwjl9JY6YzwT, 0, false, false); if($this->T4KQlkfPclc3Yd5($uXW4n9IyEk5p['headers']['content-type'])){ $t7JKZMOE2aK = $wHT7ypk2G8zy[0][$i]; $AdX0lnAyHOK6m = strpos($cn, $t7JKZMOE2aK); if ($AdX0lnAyHOK6m !== false) { $cn = substr_replace($cn, $uXW4n9IyEk5p['content'], $AdX0lnAyHOK6m, strlen($t7JKZMOE2aK)); } } } } $UH70I6zmoHA = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; $_t = 'a|area|go'; $_t .= '|link'; preg_match_all('#<(?:'.$_t.')(?:[^>]*?\s)href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+))[^>]*>#is'.$UH70I6zmoHA, $cn, $am); preg_match_all('#<option(?:[^>]*?)?value\s*=\s*"(http[^"]*)#is'.$UH70I6zmoHA, $cn, $sZtvuXLmh); $_sc = '(?:i?frame)'; preg_match_all('#<'.$_sc.'\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $uU4SSK6LLRV); preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$UH70I6zmoHA, $cn, $EUu1cBWNH8oYO09); if($grab_parameters['xs_parse_swf']) preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$UH70I6zmoHA, $cn, $bYDbTtTb4OdrsFT9Pb);
																														
																														else $bYDbTtTb4OdrsFT9Pb = array(array(),array());
																														
																														
																														preg_match_all('#<a[^>]*?onclick\s*=\s*"[^"]*\.load\(\'([^\']*)#'.$UH70I6zmoHA, $cn, $fjCGkMQum8ipdQvG9);
																														
																														
																														preg_match_all('#"url"\:"(http[^"]*)#is'.$UH70I6zmoHA, $cn, $uncHtsF15SQL);
																														
																														$wJikff0cjA = array();
																														
																														$rCgG6umKG8uiFa = 'stylesheet|publisher';
																														
																														if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																														
																														$rCgG6umKG8uiFa .= '|nofollow';
																														
																														for($i=0;$i<count($am[1]);$i++)
																														
																														{
																														
																														if(!preg_match('#rel\s*=\s*["\']?\s*('.$rCgG6umKG8uiFa.')#i', $am[0][$i]))
																														
																														$wJikff0cjA[] = $am[1][$i];
																														
																														}
																														
																														$wJikff0cjA = @array_merge(
																														
																														$wJikff0cjA,
																														
																														
																														$am[2],$am[3],
																														
																														$uU4SSK6LLRV[1],$EUu1cBWNH8oYO09[1],
																														
																														$sZtvuXLmh[1],$fjCGkMQum8ipdQvG9[1],
																														
																														$uncHtsF15SQL[1],
																														
																														$bYDbTtTb4OdrsFT9Pb[1]);
																														
																														if($dp < $zipN2oPh2j)
																														
																														if($grab_parameters['xs_parse_js'] &&
																														
																														$this->oQnQZ0dSqFz_CGCQjY('xs_parse_js_only', $this->e2MNLLv4TrUXrZT, true)
																														
																														){
																														
																														$AIMKBgE1y3RgrKar9U = $this->YbxiuR0Hi1SV($cn, $dp);
																														
																														$wJikff0cjA = @array_merge($wJikff0cjA, $AIMKBgE1y3RgrKar9U);
																														
																														}
																														
																														tAR_IvsnGVJ5v("\n* Parsed [".count($wJikff0cjA)."] URLs\n", 2);
																														
																														return $wJikff0cjA;
																														
																														}
																														
																														function Re_fUSWD15MNDRH($eFm91j4ezECu5R52a){
																														
																														
																														return preg_replace('#^(www|\w)\.#', '', $eFm91j4ezECu5R52a);
																														
																														}
																														
																														function ijkdwbJjy($fGJMwwZDLXO) {
																														
																														if(preg_match('#^(.*?\://[^/]*)#', $fGJMwwZDLXO, $pGab76TD8H_GSl))
																														
																														return strtolower($pGab76TD8H_GSl[1]) .  substr($fGJMwwZDLXO, strlen($pGab76TD8H_GSl[1]));
																														
																														else
																														
																														return $fGJMwwZDLXO;
																														
																														}
																														
																														function TmDuxdGroA0ZS2UlE($fGJMwwZDLXO)
																														
																														{
																														
																														return preg_replace('#^.*?'.preg_quote($this->H46gGznSa,'#').'#','',$fGJMwwZDLXO);
																														
																														}
																														
																														function FJC_ZevXj1KQeYaQC(&$a, $L2SJPl6C0jYTt8qkJ, $RDhLirmyKO8xC = '')
																														
																														{
																														
																														global $grab_parameters;
																														
																														$PbHJwJKKYhNkyWVJy = $this->PbHJwJKKYhNkyWVJy;
																														
																														$NFWtwXWgxv40mn1JMF = $this->NFWtwXWgxv40mn1JMF;
																														
																														$a1 = $a;
																														
																														$a = str_replace(
																														
																														array('&trade;','&#38;','&#038;','&amp;','&#x3a;','&#x3A;','&#x2f;', '&#x2F;','&#x2e;', '&#x2E;'),
																														
																														array('%E2%84%A2', '&', '&', '&', ':', ':', '/', '/','.','.')
																														
																														,$a);
																														
																														
																														
																														if(strstr($L2SJPl6C0jYTt8qkJ,'://')) {
																														
																														$PbHJwJKKYhNkyWVJy = preg_replace('#(:\/\/.*?)\/.*$#', '$01', $NFWtwXWgxv40mn1JMF);
																														
																														
																														}
																														
																														$RKwXZsE23lEJw9 = parse_url($this->H46gGznSa);
																														
																														if($RKwXZsE23lEJw9['scheme'] && substr($a, 0, 2) == '//')
																														
																														$a = $RKwXZsE23lEJw9['scheme'].':'.$a;
																														
																														
																														
																														
																														$qK8sjXmTo0JZ9 = @parse_url($a);
																														
																														$_scheme = strtolower($qK8sjXmTo0JZ9['scheme']);
																														
																														if($_scheme && ($_scheme!='http')&& ($_scheme!='https')) {
																														
																														$n8og2KGZypJ477LnZSL = 1;
																														
																														}else {
																														
																														$a = str_replace(':80/', '/', $a);
																														
																														$a = str_replace(':443/', '/', $a);
																														
																														if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$L2SJPl6C0jYTt8qkJ).$a;
																														
																														if($grab_parameters['xs_inc_ajax'] && strstr($a,'#!')){
																														
																														$NFWtwXWgxv40mn1JMF = preg_replace('#\#.*$#', '', $NFWtwXWgxv40mn1JMF);
																														
																														if($a[0] != '/' && !strstr($a,':/'))
																														
																														$a = $NFWtwXWgxv40mn1JMF . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $L2SJPl6C0jYTt8qkJ).$a;
																														
																														}
																														
																														if(preg_match('#^https?(:|&\#58;)#is',$a)){
																														
																														if(preg_match('#://[^/]*$#is',$a))
																														
																														$a .= '/';
																														
																														$a = preg_replace('#(://[^/]*/)/#is','$01',$a);
																														
																														}
																														
																														else if($a&& $a[0]=='/')$a = $PbHJwJKKYhNkyWVJy.$a;
																														
																														else $a = $NFWtwXWgxv40mn1JMF.$a;
																														
																														if($a[0]=='/')$a = $PbHJwJKKYhNkyWVJy.$a;
																														
																														$a=str_replace('/./','/',$a);
																														
																														$a=preg_replace('#/\.$#','/',$a);
																														
																														if(substr($a,-2) == '..')$a.='/';
																														
																														if(strstr($a,'../')){
																														
																														preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa);
																														
																														do{
																														
																														$ap = $aa[2];
																														
																														$aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1);
																														
																														}while($aa[2]!=$ap);
																														
																														$a = $aa[1].$aa[2];
																														
																														}
																														
																														$a = preg_replace('#/\./#','/',$a);
																														
																														$a = preg_replace('#([^&])\#'.($grab_parameters['xs_inc_ajax']?'([^\!]|$)':'').'.*$#','$01',$a);
																														
																														
																														$a = preg_replace('#^(/)/+#','\\1',$a);
																														
																														$a = preg_replace('#[\r\n]+#s','',$a);
																														
																														
																														if($grab_parameters['xs_cleanurls'])
																														
																														$a = @preg_replace($grab_parameters['xs_cleanurls'],'',$a);
																														
																														if($grab_parameters['xs_lowercase_urls']){
																														
																														$a = strtolower($a);
																														
																														}
																														
																														if($grab_parameters['xs_custom_replace']){
																														
																														global $NHAsg3kax;
																														
																														if(!isset($NHAsg3kax)){
																														
																														$_ar = preg_split('#[\r\n]+#', trim($grab_parameters['xs_custom_replace']));
																														
																														$NHAsg3kax = array();
																														
																														foreach($_ar as $v){
																														
																														$me = explode(' ', $v);
																														
																														if($me[0]&& $me[1])$NHAsg3kax['#'.$me[0].'#'] = $me[1];
																														
																														}
																														
																														}
																														
																														if($NHAsg3kax){
																														
																														$a = @preg_replace(array_keys($NHAsg3kax),array_values($NHAsg3kax),$a);
																														
																														}
																														
																														}
																														
																														if($grab_parameters['xs_cleanpar'])
																														
																														{
																														
																														do {
																														
																														$Dq3mtKeVj2WJC = $a;
																														
																														$a = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,\*]*$#i','',$a);
																														
																														$a = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,\*]*&#i','$1',$a);
																														
																														}while($a != $Dq3mtKeVj2WJC);
																														
																														$a = @preg_replace('#\?\&?$#','',$a);
																														
																														}
																														
																														
																														$n8og2KGZypJ477LnZSL = (strtolower(substr($a,0,strlen($this->H46gGznSa)) ) != strtolower($this->H46gGznSa)) ? 1 : 0;
																														
																														if(($n8og2KGZypJ477LnZSL==1) && $grab_parameters['xs_allow_subdomains']){
																														
																														$qK8sjXmTo0JZ9 = @parse_url($a);
																														
																														if($qK8sjXmTo0JZ9['host'] &&
																														
																														
																														preg_match($qq='#^(.*?\.)?'.preg_quote($this->Re_fUSWD15MNDRH($RKwXZsE23lEJw9['host']),'#').'$#', $qK8sjXmTo0JZ9['host'])
																														
																														){
																														
																														$n8og2KGZypJ477LnZSL = 2;
																														
																														}
																														
																														}
																														
																														if(($n8og2KGZypJ477LnZSL==1) && $grab_parameters['xs_allow_extscheme']){
																														
																														$_i2 = preg_replace('#^.*?://#','',$this->H46gGznSa);
																														
																														$_a2 = preg_replace('#^.*?://#','',$a);
																														
																														if(!$n8og2KGZypJ477LnZSL = strtolower(substr($_a2,0,strlen($_i2)) ) != strtolower($_i2))
																														
																														$n8og2KGZypJ477LnZSL = 2;
																														
																														}
																														
																														if(($n8og2KGZypJ477LnZSL==1) && $RDhLirmyKO8xC) {
																														
																														
																														$T8hybXTucC7x = $this->NnNhUJP2QAFIt($RDhLirmyKO8xC);
																														
																														
																														if($T8hybXTucC7x && preg_match('#('.$T8hybXTucC7x.')#', $a))
																														
																														$n8og2KGZypJ477LnZSL = 2;
																														
																														}
																														
																														}
																														
																														tAR_IvsnGVJ5v("<br/>($a -- [$a1] -- (isext) $n8og2KGZypJ477LnZSL - (initdir) ".$this->H46gGznSa." (iurl) $L2SJPl6C0jYTt8qkJ - (top) $PbHJwJKKYhNkyWVJy - (ibase) $NFWtwXWgxv40mn1JMF - (tophosts) [".$this->Re_fUSWD15MNDRH($RKwXZsE23lEJw9['host']).", ".$qK8sjXmTo0JZ9['host']."])<br>\n",3);
																														
																														return $n8og2KGZypJ477LnZSL;
																														
																														}
																														
																														function mJhgfGDVcjU($L2SJPl6C0jYTt8qkJ){
																														
																														return strstr($L2SJPl6C0jYTt8qkJ,'://') ? $L2SJPl6C0jYTt8qkJ : $this->H46gGznSa . $L2SJPl6C0jYTt8qkJ;
																														
																														}
																														
																														function oQnQZ0dSqFz_CGCQjY($fJijf41GURD, $L2SJPl6C0jYTt8qkJ, $FO2Q8gaUfbHz = true){
																														
																														global $Bcz6aOuNy3bmUiUN1a,$grab_parameters;
																														
																														$f9bB7AuOgt123yQ = $FO2Q8gaUfbHz;
																														
																														if($grab_parameters[$fJijf41GURD]){
																														
																														if(!isset($Bcz6aOuNy3bmUiUN1a[$fJijf41GURD])){
																														
																														$Bcz6aOuNy3bmUiUN1a[$fJijf41GURD] = $grab_parameters[$fJijf41GURD];
																														
																														if(!preg_match('#[\*\$]#',$Bcz6aOuNy3bmUiUN1a[$fJijf41GURD]))
																														
																														$Bcz6aOuNy3bmUiUN1a[$fJijf41GURD] = preg_quote($Bcz6aOuNy3bmUiUN1a[$fJijf41GURD],'#');
																														
																														$Bcz6aOuNy3bmUiUN1a[$fJijf41GURD] = '#'.str_replace(' ', '|', $Bcz6aOuNy3bmUiUN1a[$fJijf41GURD]).'#';
																														
																														}
																														
																														$f9bB7AuOgt123yQ = preg_match($Bcz6aOuNy3bmUiUN1a[$fJijf41GURD],$L2SJPl6C0jYTt8qkJ);
																														
																														}
																														
																														return $f9bB7AuOgt123yQ;
																														
																														}
																														
																														function NnNhUJP2QAFIt($dVdNjjXaWcodIgybQK){
																														
																														if(!isset($this->AfDSVIK6s5BMw[$dVdNjjXaWcodIgybQK])){
																														
																														$this->AfDSVIK6s5BMw[$dVdNjjXaWcodIgybQK] = trim($dVdNjjXaWcodIgybQK) ?
																														
																														preg_replace(
																														
																														'#(^|\|)/#',
																														
																														'$01(?:^|/)',
																														
																														preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($dVdNjjXaWcodIgybQK),'*')?$s:preg_quote($s,'#')))
																														
																														) : '';
																														
																														}
																														
																														return $this->AfDSVIK6s5BMw[$dVdNjjXaWcodIgybQK];
																														
																														}
																														
																														function VT94fte1Y8Fes($QzXEVJNkTdqY0mAS1, $L2SJPl6C0jYTt8qkJ) {
																														
																														$f = false;
																														
																														if($QzXEVJNkTdqY0mAS1)
																														
																														foreach($QzXEVJNkTdqY0mAS1 as $bm)
																														
																														{
																														
																														if($f = ($f || preg_match('#^('.$bm.')#', $L2SJPl6C0jYTt8qkJ, $_imatch)))
																														
																														break;
																														
																														}
																														
																														return $f ? $_imatch[1] : 0;
																														
																														}
																														
																														function gWKF0TFAmL9QpF($L2SJPl6C0jYTt8qkJ) {
																														
																														$bm = $this->VT94fte1Y8Fes($this->orVmskvjwMu4FKb, $L2SJPl6C0jYTt8qkJ);
																														
																														if($bm)
																														
																														{
																														
																														$TQL6bW3LIsrBHDwb0 = $this->VT94fte1Y8Fes($this->botmatch_allow, $L2SJPl6C0jYTt8qkJ);
																														
																														return $TQL6bW3LIsrBHDwb0 ? false : $bm;
																														
																														}
																														
																														return false;
																														
																														}
																														
																														function gp1acAuSr1Pf(&$L2SJPl6C0jYTt8qkJ) {
																														
																														global $grab_parameters;
																														
																														$us = '';
																														
																														if(isset($this->VB6Q0F6yd4SQ[$L2SJPl6C0jYTt8qkJ]))
																														
																														$L2SJPl6C0jYTt8qkJ =$this->VB6Q0F6yd4SQ[$L2SJPl6C0jYTt8qkJ];
																														
																														$f = $this->rj0JI8Q0P && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$L2SJPl6C0jYTt8qkJ);
																														
																														if($f&&!$us)$us = 'excl-ext';
																														
																														if($this->rSfgkeWI70ZEUdJ9z0&&!$f)$f=$f||@preg_match('#('.$this->rSfgkeWI70ZEUdJ9z0.')#',$L2SJPl6C0jYTt8qkJ);
																														
																														if($f&&!$us)$us = 'excl-mask';
																														
																														if($this->NQpZ5Rk6aLCayp2 && $f && $grab_parameters['xs_incl_force'])
																														
																														$f = !preg_match('#('.$this->NQpZ5Rk6aLCayp2.')#',$L2SJPl6C0jYTt8qkJ);
																														
																														$f = $f || $this->gWKF0TFAmL9QpF($this->XtMYFsNjs3IUPy6Gg . $L2SJPl6C0jYTt8qkJ);
																														
																														if($f&&!$us)$us = 'excl-bot';
																														
																														$f2 = false;
																														
																														$tiMRiuTjxlTfA = false;
																														
																														if(!$f)
																														
																														{
																														
																														$f2 = $this->F5rfn4hxk75Lkl && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$L2SJPl6C0jYTt8qkJ);
																														
																														
																														if($this->NQpZ5Rk6aLCayp2 && !$f2) {
																														
																														$f2 = $f2||(preg_match('#('.$this->NQpZ5Rk6aLCayp2.')#',$L2SJPl6C0jYTt8qkJ));
																														
																														
																														}
																														
																														if($grab_parameters['xs_parse_only'] && !$f2 && $L2SJPl6C0jYTt8qkJ && ($L2SJPl6C0jYTt8qkJ!='/'))
																														
																														{
																														
																														
																														$f2 = $f2 || !$this->oQnQZ0dSqFz_CGCQjY('xs_parse_only', $L2SJPl6C0jYTt8qkJ, true);
																														
																														
																														}
																														
																														}
																														
																														$f3 = false;
																														
																														if($this->noincmask)$f3=@preg_match('#('.$this->noincmask.')#',$L2SJPl6C0jYTt8qkJ);
																														
																														return array('f' => $f, 'f2' => $f2, 'f3' => $f3, 'uskip' => $us);
																														
																														}
																														
																														function AwCSfjXG5(&$L2SJPl6C0jYTt8qkJ) {
																														
																														
																														global $grab_parameters;
																														
																														$f = $this->oQnQZ0dSqFz_CGCQjY('xs_botapi_exclude', $L2SJPl6C0jYTt8qkJ, false) || // matches exclude
																														
																														!$this->oQnQZ0dSqFz_CGCQjY('xs_botapi_parse_only', $L2SJPl6C0jYTt8qkJ, true); // OR not matches "parse only"
																														
																														return $f;
																														
																														}
																														
																														function KEsdEhlzJL($tiMRiuTjxlTfA) {
																														
																														return ($tiMRiuTjxlTfA);
																														
																														
																														}
																														
																														function MXiyv7E90bNv($tiMRiuTjxlTfA) {
																														
																														return BS2u9cmxjMg($tiMRiuTjxlTfA);
																														
																														}
																														
																														function c090euDTKrLsl2rPaUk($S5nMX_c1hzxNp6_h, $L2SJPl6C0jYTt8qkJ){
																														
																														global $grab_parameters;
																														
																														$Fwr_SXtwIlyZksXH = max(1, intval($grab_parameters['xs_maxref']));
																														
																														if(!isset($this->ref_links_tmp[$S5nMX_c1hzxNp6_h]) )
																														
																														$this->ref_links_tmp[$S5nMX_c1hzxNp6_h] = array();
																														
																														if(count($this->ref_links_tmp[$S5nMX_c1hzxNp6_h]) < $Fwr_SXtwIlyZksXH)
																														
																														$this->ref_links_tmp[$S5nMX_c1hzxNp6_h][] = $L2SJPl6C0jYTt8qkJ;
																														
																														if(
																														
																														$grab_parameters['xs_ref_list_store'] &&
																														
																														($_rlmax = $grab_parameters['xs_ref_list_max'])
																														
																														){
																														
																														if(!isset($this->ref_links_list[$S5nMX_c1hzxNp6_h]) && count($this->ref_links_list)<$_rlmax){
																														
																														$this->ref_links_list[$S5nMX_c1hzxNp6_h] = array();
																														
																														}
																														
																														if(isset($this->ref_links_list[$S5nMX_c1hzxNp6_h]))
																														
																														{
																														
																														$this->ref_links_list[$S5nMX_c1hzxNp6_h][-1]++;
																														
																														if(count($this->ref_links_list[$S5nMX_c1hzxNp6_h]) <= $Fwr_SXtwIlyZksXH) {
																														
																														if(!in_array($this->e2MNLLv4TrUXrZT, $this->ref_links_list[$S5nMX_c1hzxNp6_h]))
																														
																														$this->ref_links_list[$S5nMX_c1hzxNp6_h][] = $L2SJPl6C0jYTt8qkJ;
																														
																														}
																														
																														}
																														
																														}
																														
																														}
																														
																														 
																														
																														function KA0WDavd7($NCetweVQi) {
																														
																														global $grab_parameters,$UENg1OTT1qn1JDiKJ,$FLC4VMayErR0F4ELN;
																														
																														
																														error_reporting(E_ALL&~E_NOTICE);
																														
																														$this->NCetweVQi = $NCetweVQi;
																														
																														@set_time_limit($grab_parameters['xs_exec_time']);
																														
																														if($this->NCetweVQi['bgexec'])
																														
																														{
																														
																														ignore_user_abort(true);
																														
																														}
																														
																														register_shutdown_function('TPP7VBSfvnJb4l');
																														
																														if(function_exists('ini_set'))
																														
																														{
																														
																														@ini_set("zlib.output_compression", 0);
																														
																														@ini_set("output_buffering", 0);
																														
																														}
																														
																														
																														$this->K5DeWy6YJuv8Rk(0,true);
																														
																														
																														$this->R_9A5kFcmtnfoij = microtime(true);
																														
																														$starttime = $QG7hsa8nUMyc = time();
																														
																														$FLC4VMayErR0F4ELN = $this->nettime = 0;
																														
																														$this->QYT0hClZNXziEux = $this->NCetweVQi['initurl'];
																														
																														$this->ZIEYu8XY3Sw90QOnH = $this->NCetweVQi['maxpg']>0 ? $this->NCetweVQi['maxpg'] : 1E10;
																														
																														$Jy4Tw4yOjd_v = $this->NCetweVQi['maxdepth'] ? $this->NCetweVQi['maxdepth'] : -1;
																														
																														$this->haYLh8DFmse = $this->NCetweVQi['progress_callback'];
																														
																														$this->rSfgkeWI70ZEUdJ9z0 = $this->NnNhUJP2QAFIt($grab_parameters['xs_excl_urls']);
																														
																														$this->NQpZ5Rk6aLCayp2 = $this->NnNhUJP2QAFIt($grab_parameters['xs_incl_urls']);
																														
																														$this->noincmask = $this->NnNhUJP2QAFIt($grab_parameters['xs_noincl_urls']);
																														
																														$this->baseincmask = $this->NnNhUJP2QAFIt($grab_parameters['xs_prev_sm_incl']);
																														
																														$this->basecachemask = $this->NnNhUJP2QAFIt($grab_parameters['xs_prev_sm_cache']);
																														
																														$cMJY86vwfLyqI7nC = $EwglTUM5ZTH3Co = array();
																														
																														$TpwCml_frn0abe = '';
																														
																														$JVRzSueuaZ = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']);
																														
																														$this->allowcode = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#';
																														
																														$this->badreqcode = '#400|429'.($grab_parameters['xs_badreq_httpcode']?'|'.$grab_parameters['xs_badreq_httpcode']:'').'#';
																														
																														$this->interruptcode = (($_tmp=$grab_parameters['xs_interrupt_httpcode'])?'#'.$_tmp.'#':'');
																														
																														if($grab_parameters['xs_memsave'])
																														
																														{
																														
																														if(!file_exists(ySLbrBG2E))
																														
																														mkdir(ySLbrBG2E, 0777);
																														
																														else
																														
																														if($this->NCetweVQi['resume']=='')
																														
																														jiuiCDEnGWyx(ySLbrBG2E, '.txt');
																														
																														}
																														
																														foreach($JVRzSueuaZ as $ia)
																														
																														if($ia)
																														
																														{
																														
																														$is = explode(',', $ia);
																														
																														if($is[0][0]=='$')
																														
																														$RCx_x73aFH0t6wHY = substr($is[0], 1);
																														
																														else
																														
																														$RCx_x73aFH0t6wHY = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#'));
																														
																														$EwglTUM5ZTH3Co[] = $RCx_x73aFH0t6wHY;
																														
																														
																														$cMJY86vwfLyqI7nC[] =
																														
																														array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]);
																														
																														}
																														
																														if($EwglTUM5ZTH3Co)
																														
																														$TpwCml_frn0abe = '('.implode(')|(',$EwglTUM5ZTH3Co).')';
																														
																														$LlBYbPeQK = parse_url($this->QYT0hClZNXziEux);
																														
																														if(!$LlBYbPeQK['path']){$this->QYT0hClZNXziEux.='/';$LlBYbPeQK = parse_url($this->QYT0hClZNXziEux);}
																														
																														$lNn5HS9pRmN = 0;
																														
																														do {
																														
																														$Phs2HAoCDN9Nni = $UENg1OTT1qn1JDiKJ->fetch($this->QYT0hClZNXziEux, 0, true, false, '', array('getinfo'=>true));// the first request is to skip session id
																														
																														$R1Na2W0D_T = !preg_match($this->allowcode,$Phs2HAoCDN9Nni['code']);
																														
																														}while($R1Na2W0D_T && ($lNn5HS9pRmN++ <2));
																														
																														
																														$R1Na2W0D_T |= (time()>wC0kVEQaQY6Jsj);
																														
																														$this->runstate['info'] = $Phs2HAoCDN9Nni['info'];
																														
																														if($R1Na2W0D_T)
																														
																														{
																														
																														$R1Na2W0D_T = '';
																														
																														foreach($Phs2HAoCDN9Nni['headers'] as $k=>$v)
																														
																														$R1Na2W0D_T .= $k.': '.$v.'<br />';
																														
																														return array(
																														
																														'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$this->QYT0hClZNXziEux.''.
																														
																														($Phs2HAoCDN9Nni['errormsg']?'<br><b>Error message:</b> '.$Phs2HAoCDN9Nni['errormsg']:'').
																														
																														'<br><b>HTTP Code:</b><br>'.$Phs2HAoCDN9Nni['protoline'].
																														
																														'<br><b>HTTP headers:</b><br>'.$R1Na2W0D_T.
																														
																														'<br><b>HTTP output:</b><br>'.$Phs2HAoCDN9Nni['content']
																														
																														,
																														
																														);
																														
																														}
																														
																														$this->FJC_ZevXj1KQeYaQC($Phs2HAoCDN9Nni['last_url'], $this->QYT0hClZNXziEux);
																														
																														$this->QYT0hClZNXziEux = $Phs2HAoCDN9Nni['last_url'];
																														
																														 
																														
																														$this->urls_completed = array();
																														
																														$urls_ext = array();
																														
																														$this->urls_404 = array();
																														
																														$this->PbHJwJKKYhNkyWVJy = $LlBYbPeQK['scheme'].'://'.$LlBYbPeQK['host'].((!$LlBYbPeQK['port'] || ($LlBYbPeQK['port']=='80'))?'':(':'.$LlBYbPeQK['port']));
																														
																														$this->num_processed = $this->tsize = $retrno = $Jcp0a0FsU6D2 = $kyE5hbQCptAh = $this->fetch_no = 0;
																														
																														$this->H46gGznSa = gM5xkXaEr($this->PbHJwJKKYhNkyWVJy.'/', MmfwPiy1DUbo($LlBYbPeQK['path']));
																														
																														$MLvReXZtHz = parse_url($this->H46gGznSa);
																														
																														$this->XtMYFsNjs3IUPy6Gg = preg_replace('#^.+://[^/]+#', '', $this->H46gGznSa);
																														
																														$this->abL9eLVH_0PUMHg = $UENg1OTT1qn1JDiKJ->fetch($this->QYT0hClZNXziEux,0,true,true);
																														
																														$aOTjRR7lq = str_replace($this->H46gGznSa,'',$this->QYT0hClZNXziEux);
																														
																														$urls_list_full = array($aOTjRR7lq=>1);
																														
																														if(!$aOTjRR7lq)$aOTjRR7lq='';
																														
																														$urls_list = array($aOTjRR7lq=>1);
																														
																														$urls_list2 = $urls_list_skipped = array();
																														
																														$this->VB6Q0F6yd4SQ = array();
																														
																														$this->links_level = 0;
																														
																														$zk9gGWp_OP1MO5Ma = $this->ref_links_tmp = $this->ref_links_tmp2 = $this->ref_links_list = array();
																														
																														$cYyE7JeXs1FFX = 0;
																														
																														
																														$this->ZIEYu8XY3Sw90QOnH = min(150*3+50, $this->ZIEYu8XY3Sw90QOnH);
																														
																														$PBy5fyJCG87u = $this->ZIEYu8XY3Sw90QOnH;
																														
																														if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20;
																														
																														$this->orVmskvjwMu4FKb = array();
																														
																														$this->botmatch_allow = array();
																														
																														if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																														
																														{
																														
																														$tBRl6ai9SZJw = $UENg1OTT1qn1JDiKJ->fetch($this->PbHJwJKKYhNkyWVJy.'/robots.txt');
																														
																														if($this->PbHJwJKKYhNkyWVJy.'/' != $this->H46gGznSa)
																														
																														{
																														
																														
																														
																														}
																														
																														$ra=preg_split('#user-agent:\s*#im',$tBRl6ai9SZJw['content']);
																														
																														$ITPC_2bMfmy1ReAAJ5S=$peU5KMZs0Npnv=array();
																														
																														$ageSrJh3ScEr5g = false;
																														
																														for($i=1;$i<count($ra);$i++){
																														
																														preg_match('#^(\S+)(.*)$#s',$ra[$i],$UVPcH9r6f9DSs);
																														
																														$reRpoWq4rH5nfXQas_0 = preg_match('#^googlebot$#is',$UVPcH9r6f9DSs[1]);
																														
																														$CLhSoD8pj = ($UVPcH9r6f9DSs[1]=='*');
																														
																														if(!$CLhSoD8pj&&!$reRpoWq4rH5nfXQas_0)
																														
																														continue;
																														
																														if($CLhSoD8pj && $ageSrJh3ScEr5g)
																														
																														continue;
																														
																														if($reRpoWq4rH5nfXQas_0){
																														
																														
																														$ageSrJh3ScEr5g = true;
																														
																														$ITPC_2bMfmy1ReAAJ5S = $peU5KMZs0Npnv = array();
																														
																														}
																														
																														preg_match_all('#^disallow:\s*([^\#\r\n]*)#im',$UVPcH9r6f9DSs[2],$rm);
																														
																														for($pi=0;$pi<count($rm[1]);$pi++)
																														
																														if($rm[1][$pi])
																														
																														$ITPC_2bMfmy1ReAAJ5S[] =
																														
																														str_replace('\\$','$',
																														
																														str_replace(' ','',
																														
																														str_replace('\\*','.*',
																														
																														preg_quote($rm[1][$pi],'#')
																														
																														)));
																														
																														preg_match_all('#^allow:\s*(\S*)#im',$UVPcH9r6f9DSs[2],$rm);
																														
																														for($pi=0;$pi<count($rm[1]);$pi++)
																														
																														if($rm[1][$pi] && ($rm[1][$pi]!='/')) {
																														
																														$peU5KMZs0Npnv[] =
																														
																														str_replace('\\$','$',
																														
																														str_replace('\\*','.*',
																														
																														str_replace(' ','',
																														
																														preg_quote($rm[1][$pi],'#')
																														
																														)));
																														
																														}
																														
																														}
																														
																														for($i=0;$i<count($ITPC_2bMfmy1ReAAJ5S);$i+=200)
																														
																														$this->orVmskvjwMu4FKb[]=implode('|', array_slice($ITPC_2bMfmy1ReAAJ5S, $i,200));
																														
																														for($i=0;$i<count($peU5KMZs0Npnv);$i+=200)
																														
																														$this->botmatch_allow[]=implode('|', array_slice($peU5KMZs0Npnv, $i,200));
																														
																														}
																														
																														if($grab_parameters['xs_inc_ajax'])
																														
																														$grab_parameters['xs_proto_skip'] = str_replace(
																														
																														'\#', '\#(?:[^\!]|$)', $grab_parameters['xs_proto_skip']);
																														
																														$this->rj0JI8Q0P = $grab_parameters['xs_exc_skip']!='\\.()';
																														
																														$this->F5rfn4hxk75Lkl = $grab_parameters['xs_inc_skip']!='\\.()';
																														
																														$grab_parameters['xs_inc_skip'] .= '(?:$|\?)';
																														
																														$grab_parameters['xs_exc_skip'] .= '(?:$|\?)';
																														
																														if($grab_parameters['xs_debug']) {
																														
																														$_GET['ddbg']=1;
																														
																														GElwbKrLU4QUGJM8qt();
																														
																														}
																														
																														$QxpQ5gPd7sY_C4D = 0;
																														
																														$this->WwrfXsPMwRgbAiD();
																														
																														$this->num_urls_processed_in_current_batch = 0;
																														
																														$this->num_links_current_batch = 1;
																														
																														
																														JV7KHTAaxXEYScT457(ykqK2tfCoRkWc,'');
																														
																														$VAgLH4gC6B = false;
																														
																														if($this->NCetweVQi['resume']!=''){
																														
																														tAR_IvsnGVJ5v("\nRestoring session\n");
																														
																														$Fyk_uDThynJcc = @TgyaGrN_Z_93C(BU6hTbtN56(uzAGLJ0Y3V . HGnP26wMMgxNv8g, true));
																														
																														if($Fyk_uDThynJcc)
																														
																														{
																														
																														$VAgLH4gC6B = true;
																														
																														echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$Fyk_uDThynJcc['time']).')'."\n";
																														
																														unset($Fyk_uDThynJcc['sm_base']);
																														
																														extract($Fyk_uDThynJcc);
																														
																														foreach($Fyk_uDThynJcc as $k=>$v){
																														
																														if(isset($this->$k)){
																														
																														$this->$k=$v;
																														
																														unset($$v);
																														
																														}
																														
																														}
																														
																														$this->R_9A5kFcmtnfoij-=$this->ctime;
																														
																														$QxpQ5gPd7sY_C4D = $this->ctime;
																														
																														unset($Fyk_uDThynJcc);
																														
																														}
																														
																														}
																														
																														$JdLOUpS5kPi = 0;
																														
																														$this->ezAF3Kn4NsZ($VAgLH4gC6B);
																														
																														if($_murls = $grab_parameters['xs_moreurls_test']){
																														
																														$this->mu = preg_split('#[\r\n]+#', $_murls);
																														
																														foreach($this->mu as $URWh1t47qTu2XGFiUbw){
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($URWh1t47qTu2XGFiUbw, $this->H46gGznSa);
																														
																														if($n8og2KGZypJ477LnZSL!=1) {
																														
																														$URWh1t47qTu2XGFiUbw = $this->TmDuxdGroA0ZS2UlE($URWh1t47qTu2XGFiUbw);
																														
																														$urls_list[$URWh1t47qTu2XGFiUbw]++;
																														
																														}
																														
																														}
																														
																														}
																														
																														if($VAgLH4gC6B){
																														
																														
																														}else
																														
																														{
																														
																														
																														if($_mu_s = $grab_parameters['xs_moreurls']) {
																														
																														$this->mu = preg_split('#[\r\n]+#', $_mu_s);
																														
																														foreach($this->mu as $URWh1t47qTu2XGFiUbw){
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($URWh1t47qTu2XGFiUbw, $this->H46gGznSa);
																														
																														if($n8og2KGZypJ477LnZSL!=1) {
																														
																														$URWh1t47qTu2XGFiUbw = $this->TmDuxdGroA0ZS2UlE($URWh1t47qTu2XGFiUbw);
																														
																														$urls_list[$URWh1t47qTu2XGFiUbw]++;
																														
																														}
																														
																														}
																														
																														}
																														
																														if($_mu_s = $grab_parameters['xs_moreurls_import']) {
																														
																														$this->mu_imp = preg_split('#[\r\n]+#', $_mu_s);
																														
																														foreach($this->mu_imp as $wnjI2RexY2wG){
																														
																														$_mdef = explode(';', $wnjI2RexY2wG, 2);
																														
																														$CeFsKFSOWgtTckV = array();
																														
																														$tNOViGDn5alu = $UENg1OTT1qn1JDiKJ->fetch($_mdef[1]);
																														
																														switch($_mdef[0]){
																														
																														case 'txt':
																														
																														$CeFsKFSOWgtTckV = preg_split('#[\r\n]+#', $tNOViGDn5alu['content']);
																														
																														break;
																														
																														}
																														
																														foreach($CeFsKFSOWgtTckV as $URWh1t47qTu2XGFiUbw) {
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($URWh1t47qTu2XGFiUbw, $this->H46gGznSa);
																														
																														if($n8og2KGZypJ477LnZSL!=1) {
																														
																														$URWh1t47qTu2XGFiUbw = $this->TmDuxdGroA0ZS2UlE($URWh1t47qTu2XGFiUbw);
																														
																														$urls_list[$URWh1t47qTu2XGFiUbw]++;
																														
																														}
																														
																														}
																														
																														}
																														
																														}
																														
																														if($grab_parameters['xs_prev_sm_base']){
																														
																														$Pzc0TfjFJLg = count($urls_list);
																														
																														if(is_array($this->sm_base)
																														
																														&& ($grab_parameters['xs_prev_sm_base_min']<count($this->sm_base))
																														
																														){
																														
																														if($this->baseincmask)
																														
																														foreach($this->sm_base as $_u=>$_e){
																														
																														if(preg_match('#('.$this->baseincmask.')#',$_u))
																														
																														$urls_list[$_u]++;
																														
																														}
																														
																														}
																														
																														else
																														
																														$this->sm_base = array();
																														
																														tAR_IvsnGVJ5v("\nAdded in urls list: ".(count($urls_list)-$Pzc0TfjFJLg)."\n");
																														
																														}
																														
																														$JdLOUpS5kPi = count($urls_list);
																														
																														$urls_list_full = $urls_list;
																														
																														$this->num_links_current_batch = count($urls_list);
																														
																														}
																														
																														$BzQu3Tr8ziQ3Jpu = (GvqGgOzk9gm('xs_use_botapi', false) && GvqGgOzk9gm('xs_botapi_url', false));
																														
																														$tBSolrk3IoFe = explode('|', $grab_parameters['xs_force_inc']);
																														
																														$V1c7khNmfIvXFG8IJY = $WLwvcryLO6JLSuloh = array();
																														
																														$this->N6DEJ7NrOAjvZ1k_14 = count($this->urls_completed);
																														
																														$this->brOXIDsmo_1Rsq = count($urls_list2);
																														
																														sleep(1); @de5FLAUWTohCIUr2do(uzAGLJ0Y3V.ykqK2tfCoRkWc);
																														
																														$this->sm_sessions[] = array(
																														
																														'start' => time(),
																														
																														'instance' => $grab_parameters['xs_instance_id']
																														
																														);
																														
																														
																														$this->K5DeWy6YJuv8Rk(0,true);
																														
																														
																														if($urls_list)
																														
																														 
																														
																														do {
																														
																														r7jwroOrGxdXbo('pre',true);
																														
																														r7jwroOrGxdXbo('pre1');
																														
																														if($V1c7khNmfIvXFG8IJY) {
																														
																														$_ul = array_shift($V1c7khNmfIvXFG8IJY);
																														
																														list($this->e2MNLLv4TrUXrZT, $Vbxm84L4XUThhi_Yla) = $_ul;
																														
																														}else
																														
																														{
																														
																														$this->e2MNLLv4TrUXrZT = key($urls_list);$Vbxm84L4XUThhi_Yla=current($urls_list);next($urls_list);
																														
																														}
																														
																														
																														
																														$ZJmBnEThHYs = ($Vbxm84L4XUThhi_Yla>0 && $Vbxm84L4XUThhi_Yla<1) ? $Vbxm84L4XUThhi_Yla : 0;
																														
																														$this->num_urls_processed_in_current_batch++;
																														
																														tAR_IvsnGVJ5v("\n[ ".$this->num_urls_processed_in_current_batch." - $this->e2MNLLv4TrUXrZT, $Vbxm84L4XUThhi_Yla] \n");
																														
																														unset($urls_list[$this->e2MNLLv4TrUXrZT]);
																														
																														$iy5uIK6b5dVtXiq = Oddk9ImzKaFvWn26($this->e2MNLLv4TrUXrZT);
																														
																														$j6fSoHendCVnkorWM = false;
																														
																														$MVbRa8CCGZlPERCaPUx = '';
																														
																														r7jwroOrGxdXbo('pre1',true);
																														
																														r7jwroOrGxdXbo('pre2a');
																														
																														$Phs2HAoCDN9Nni = array();
																														
																														$cn = '';
																														
																														$this->r2tgxDyJxsd = $_fex = $this->gp1acAuSr1Pf($this->e2MNLLv4TrUXrZT);
																														
																														extract($_fex);
																														
																														if($f)
																														
																														$MVbRa8CCGZlPERCaPUx = $_fex['uskip'];
																														
																														
																														
																														r7jwroOrGxdXbo('pre2a',true);
																														
																														r7jwroOrGxdXbo('pre2b');
																														
																														if(!$f && ($this->N6DEJ7NrOAjvZ1k_14>0) && ($tiMRiuTjxlTfA = $this->sm_base[$this->e2MNLLv4TrUXrZT])){
																														
																														$f2 = true;
																														
																														
																														
																														}
																														
																														if($this->abL9eLVH_0PUMHg && strstr($this->abL9eLVH_0PUMHg['content'],'header'))$f2 = true;
																														
																														r7jwroOrGxdXbo('pre2b',true);
																														
																														do { // zero-while, while(false) to allow break only
																														
																														$wj_S3gka27y9b = count($urls_list) + $this->brOXIDsmo_1Rsq;
																														
																														$oiYRHTC5GwC3x = $wj_S3gka27y9b + $this->N6DEJ7NrOAjvZ1k_14;
																														
																														
																														if(!$f && !$f2)
																														
																														{
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														
																														$SUhq4X3I3RpsY0e_zp5 = ($this->ZIEYu8XY3Sw90QOnH>=200000);
																														
																														$zMSKqvp8sx5a = ($this->ZIEYu8XY3Sw90QOnH<=1000);
																														
																														if($zMSKqvp8sx5a && !$GLOBALS['forcepar_reset']){
																														
																														$GLOBALS['forcepar_reset'] = true;
																														
																														if($tBSolrk3IoFe[1])
																														
																														$tBSolrk3IoFe[1] *= 10;
																														
																														if($tBSolrk3IoFe[2])
																														
																														$tBSolrk3IoFe[2] *= 10;
																														
																														}
																														
																														$pLhaUY2Wj00NqCStoQ = ($tBSolrk3IoFe[1] && (($this->ctime>$tBSolrk3IoFe[0]) && ($this->num_processed>$this->ZIEYu8XY3Sw90QOnH*$tBSolrk3IoFe[1])));
																														
																														$qUvRaGM3HlNhXEbpU8a = $tBSolrk3IoFe[2] && (
																														
																														$SUhq4X3I3RpsY0e_zp5 && // large sites only
																														
																														($PBy5fyJCG87u*$tBSolrk3IoFe[2]+1000)<
																														
																														($wj_S3gka27y9b - $this->num_urls_processed_in_current_batch));//-$JdLOUpS5kPi));
																														
																														tAR_IvsnGVJ5v("force: (1,$pLhaUY2Wj00NqCStoQ)(2,$qUvRaGM3HlNhXEbpU8a) pleft: ".$PBy5fyJCG87u.", maxpg: ".$this->ZIEYu8XY3Sw90QOnH.", pleft*: ".($PBy5fyJCG87u*$tBSolrk3IoFe[2]+1000).
																														
																														" cmp: ".($wj_S3gka27y9b - $this->num_urls_processed_in_current_batch).
																														
																														" / totc: ".($oiYRHTC5GwC3x).", proccur: ".$this->num_urls_processed_in_current_batch.
																														
																														" | numproc: ".$this->num_processed. ", cmp2: ".$this->ZIEYu8XY3Sw90QOnH*$tBSolrk3IoFe[1].
																														
																														" -> fpar: ".implode(", ", $tBSolrk3IoFe)."\n",2);
																														
																														
																														$sF8mz_414BOBr = ($pLhaUY2Wj00NqCStoQ || $qUvRaGM3HlNhXEbpU8a);// && !$zMSKqvp8sx5a;
																														
																														$_fp3 = $tBSolrk3IoFe[3];
																														
																														if($zMSKqvp8sx5a)$_fp3*=2;
																														
																														if(!$sF8mz_414BOBr)
																														
																														$sF8mz_414BOBr = ($_fp3 && $this->ZIEYu8XY3Sw90QOnH && (($oiYRHTC5GwC3x>$this->ZIEYu8XY3Sw90QOnH*$_fp3)));
																														
																														if($sF8mz_414BOBr){
																														
																														
																														}
																														
																														if(!$zMSKqvp8sx5a)
																														
																														$Yq5gytUgiLz42pWjbPF = $tBSolrk3IoFe[3] && $this->ZIEYu8XY3Sw90QOnH && (($this->num_processed>$this->ZIEYu8XY3Sw90QOnH*$tBSolrk3IoFe[3]));
																														
																														if($Yq5gytUgiLz42pWjbPF){
																														
																														
																														$urls_list = $urls_list2 = array();
																														
																														$this->brOXIDsmo_1Rsq = 0;
																														
																														$this->num_links_current_batch = 0;
																														
																														}
																														
																														$ZIwF6kCfUaUp8 = ($Jy4Tw4yOjd_v<=0 || $this->links_level<$Jy4Tw4yOjd_v);
																														
																														if(!$uolMjFvKOYXA && $ZIwF6kCfUaUp8)
																														
																														{
																														
																														r7jwroOrGxdXbo('extract');
																														
																														$TdiwHIGoLkp = microtime(true);
																														
																														$j6aek7HDqT0DP8h9 = gM5xkXaEr($this->H46gGznSa, $this->e2MNLLv4TrUXrZT);
																														
																														if(GvqGgOzk9gm('xs_http_parallel', false) || $BzQu3Tr8ziQ3Jpu){
																														
																														if(!$V1c7khNmfIvXFG8IJY && !isset($UENg1OTT1qn1JDiKJ->pa_EcSLRZE7[$j6aek7HDqT0DP8h9])){
																														
																														
																														$V1c7khNmfIvXFG8IJY = array();
																														
																														$JOJqHOO56oyi = array();
																														
																														$_par = GvqGgOzk9gm('xs_http_parallel_num', 10);
																														
																														for($i=0;($i<$_par*5)&&(count($JOJqHOO56oyi)<$_par);$i++) {
																														
																														$_ul = $i ? key($urls_list) : $j6aek7HDqT0DP8h9;
																														
																														$_added_toqueue = false;
																														
																														
																														if($_ul) {
																														
																														$_fex2 = $this->gp1acAuSr1Pf($_ul);
																														
																														$_allow_u = !$_fex2['f'] && !$_fex2['f2'];
																														
																														if($_allow_u){
																														
																														if($BzQu3Tr8ziQ3Jpu){
																														
																														$_allow_u = !$this->AwCSfjXG5($_ul);
																														
																														}
																														
																														if($_allow_u){
																														
																														$_u1 = gM5xkXaEr($this->H46gGznSa, $_ul);
																														
																														if(!isset($this->sm_base[$_u1])){
																														
																														$JOJqHOO56oyi[] = $_u1;
																														
																														$_added_toqueue = true;
																														
																														}
																														
																														}
																														
																														}
																														
																														}
																														
																														if($_added_toqueue) {
																														
																														if($i>0){
																														
																														next($urls_list); // move pointer
																														
																														$V1c7khNmfIvXFG8IJY[] = array($_ul);
																														
																														}
																														
																														}else // skip scanning if non matching URL found and process as many as found at this point
																														
																														break;
																														
																														}
																														
																														if($JOJqHOO56oyi){
																														
																														$UENg1OTT1qn1JDiKJ->dY58NWvyf_aJr($JOJqHOO56oyi);
																														
																														
																														}else {
																														
																														$V1c7khNmfIvXFG8IJY = array();
																														
																														}
																														
																														}
																														
																														}
																														
																														
																														
																														tAR_IvsnGVJ5v("<h4> { $j6aek7HDqT0DP8h9 } </h4>\n");
																														
																														$lIHhfIiyRBApSp6_v=0;
																														
																														$Jcp0a0FsU6D2++;
																														
																														$bMWu3qnn1ULZdIxy = false;
																														
																														do {
																														
																														$Phs2HAoCDN9Nni = $UENg1OTT1qn1JDiKJ->fetch($j6aek7HDqT0DP8h9, 0, 0);
																														
																														
																														$this->FJC_ZevXj1KQeYaQC($Phs2HAoCDN9Nni['last_url'], $this->L2SJPl6C0jYTt8qkJ);
																														
																														$this->K5DeWy6YJuv8Rk();
																														
																														$_to = $Phs2HAoCDN9Nni['flags']['socket_timeout'];
																														
																														if($_to && ($MLvReXZtHz['host']!=$Phs2HAoCDN9Nni['purl']['host'])){
																														
																														$Phs2HAoCDN9Nni['flags']['error'] = 'Host doesn\'t match';
																														
																														}
																														
																														$_ic = intval($Phs2HAoCDN9Nni['code']);
																														
																														$pa5GuuldSpnYQAklc2 = preg_match($this->badreqcode,$_ic);
																														
																														$JVqzZdcgAQLfIRsh = $this->interruptcode && preg_match($this->interruptcode,$_ic);
																														
																														$LjSEjcu6AqhigK = ($_ic == 403);
																														
																														if($this->allowcode && preg_match($this->allowcode,$_ic)){
																														
																														$pa5GuuldSpnYQAklc2 = $LjSEjcu6AqhigK = false;
																														
																														}
																														
																														$ayqjbvIem = (($_ic == 301)||($_ic==302)) && ($j6aek7HDqT0DP8h9 == $Phs2HAoCDN9Nni['last_url']);
																														
																														if($JVqzZdcgAQLfIRsh) {
																														
																														$p2yksq1t_0Rx54jwK_ = "Stop processing code [$_ic] - interrupt session";
																														
																														$bMWu3qnn1ULZdIxy = true;
																														
																														break;
																														
																														}
																														
																														if( !$Phs2HAoCDN9Nni['flags']['error'] &&
																														
																														(($pa5GuuldSpnYQAklc2 || $LjSEjcu6AqhigK || $ayqjbvIem) || !$Phs2HAoCDN9Nni['code'] || $_to)
																														
																														)
																														
																														{
																														
																														$lIHhfIiyRBApSp6_v++;
																														
																														$_sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1;
																														
																														if($Phs2HAoCDN9Nni['headers'] && ($_csl = $Phs2HAoCDN9Nni['headers']['retry-after']))
																														
																														$_sl = min(120,max($_sl, $_csl + ($lIHhfIiyRBApSp6_v+1)*$_sl));
																														
																														
																														if(($_to) && $grab_parameters['xs_timeout_break']){
																														
																														tAR_IvsnGVJ5v("<p> # TIMEOUT - $_to #</p>\n");
																														
																														if($lIHhfIiyRBApSp6_v==3){
																														
																														
																														if(strstr($_to,'read') ){
																														
																														tAR_IvsnGVJ5v("<p> read200 break?</p>\n");
																														
																														break;
																														
																														}
																														
																														if($kyE5hbQCptAh++>5) {
																														
																														$p2yksq1t_0Rx54jwK_ = "Too many timeouts detected - interrupt session";
																														
																														$bMWu3qnn1ULZdIxy = true;
																														
																														break;
																														
																														}
																														
																														tAR_IvsnGVJ5v("<p> # MULTI TIMEOUT - SHORT TIME BREAK #</p>\n");
																														
																														$_sl = 60;
																														
																														$lIHhfIiyRBApSp6_v = 0;
																														
																														}
																														
																														}
																														
																														$N3S4ornfJVs0yIml15 = $ayqjbvIem?"(".$j6aek7HDqT0DP8h9." => ".$Phs2HAoCDN9Nni['last_url'].")":"-";
																														
																														tAR_IvsnGVJ5v("<p> # RETRY - ".$Phs2HAoCDN9Nni['code']." - (code) ".(intval($Phs2HAoCDN9Nni['code']))." - error(".$Phs2HAoCDN9Nni['flags']['error'].") self-redir($N3S4ornfJVs0yIml15) badreq($pa5GuuldSpnYQAklc2) forbreq($LjSEjcu6AqhigK) tmout($_to)# zZz $_sl</p>\n");
																														
																														sleep($_sl);
																														
																														}
																														
																														else
																														
																														break;
																														
																														}while($lIHhfIiyRBApSp6_v<3);
																														
																														if($bMWu3qnn1ULZdIxy) {
																														
																														
																														$urls_list = array_merge(array($this->e2MNLLv4TrUXrZT => $Vbxm84L4XUThhi_Yla), $urls_list);
																														
																														
																														break;
																														
																														}
																														
																														$this->fetch_no++;
																														
																														r7jwroOrGxdXbo('extract', true);
																														
																														r7jwroOrGxdXbo('analyze');
																														
																														$this->lCVvW4SVoQx36M = microtime(true)-$TdiwHIGoLkp;
																														
																														$this->nettime += $this->lCVvW4SVoQx36M;
																														
																														
																														tAR_IvsnGVJ5v("<hr>\n[[[ ".$Phs2HAoCDN9Nni['code']." ]]] - ".number_format($this->lCVvW4SVoQx36M,2)."s (".number_format($UENg1OTT1qn1JDiKJ->PjFAxwzQAPYLbnQV9DX,2).' + '.number_format($UENg1OTT1qn1JDiKJ->YX3rpnjOPCtPx,2).")\n".var_export($Phs2HAoCDN9Nni['headers'],1));
																														
																														$TfgDxG3L5hCbhNX8wH = is_array($Phs2HAoCDN9Nni['headers']) ? strtolower($Phs2HAoCDN9Nni['headers']['content-type']) : '';
																														
																														$V9gL3z4kythUQI = $this->T4KQlkfPclc3Yd5($TfgDxG3L5hCbhNX8wH) || !$TfgDxG3L5hCbhNX8wH;
																														
																														
																														if((strstr($TfgDxG3L5hCbhNX8wH,'application/') && strstr($TfgDxG3L5hCbhNX8wH,'pdf'))
																														
																														||strstr($TfgDxG3L5hCbhNX8wH,'/xml')
																														
																														||strstr($TfgDxG3L5hCbhNX8wH,'/rss')
																														
																														||strstr($TfgDxG3L5hCbhNX8wH,'text/plain')
																														
																														)
																														
																														{
																														
																														$Phs2HAoCDN9Nni['content'] = '';
																														
																														$V9gL3z4kythUQI = true;
																														
																														}
																														
																														$yi2RKONww3sQwn = ($grab_parameters['xs_parse_swf'] && strstr($TfgDxG3L5hCbhNX8wH, 'shockwave-flash'));
																														
																														$ycII2jTNG4NEte2  = ($grab_parameters['xs_parse_js'] && strstr($TfgDxG3L5hCbhNX8wH, 'javascript'));
																														
																														if($TfgDxG3L5hCbhNX8wH && !$V9gL3z4kythUQI && !$yi2RKONww3sQwn && !$ycII2jTNG4NEte2){
																														
																														if(!$uolMjFvKOYXA){
																														
																														$MVbRa8CCGZlPERCaPUx = $TfgDxG3L5hCbhNX8wH;
																														
																														continue;
																														
																														}
																														
																														}
																														
																														$wJikff0cjA = array();
																														
																														if($this->oQnQZ0dSqFz_CGCQjY('xs_crawl_proc_stripslash', $this->mJhgfGDVcjU($this->e2MNLLv4TrUXrZT), false)) {
																														
																														$V9gL3z4kythUQI = true;
																														
																														$Phs2HAoCDN9Nni['content'] = stripslashes($Phs2HAoCDN9Nni['content']);
																														
																														}
																														
																														
																														
																														$cn = $Phs2HAoCDN9Nni['content'];
																														
																														
																														$this->tsize+=strlen($cn);
																														
																														
																														if(!$grab_parameters['xs_parse_js'])
																														
																														if($AuTFDSwxkZg25L = preg_replace('#<script.*?</script[^>]*>#is', '',$cn)){
																														
																														$cn = $AuTFDSwxkZg25L;
																														
																														}
																														
																														if($AuTFDSwxkZg25L = preg_replace('#<style.*?</style>#is', '',$cn)){
																														
																														$cn = $AuTFDSwxkZg25L;
																														
																														}
																														
																														if($AuTFDSwxkZg25L = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn)){
																														
																														$cn = $AuTFDSwxkZg25L;
																														
																														}
																														
																														tAR_IvsnGVJ5v("\n\n<hr>\n\n$cn\n\n<hr>\n\n",4);//exit;
																														
																														preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is', $cn, $bm);
																														
																														$this->WwrfXsPMwRgbAiD($bm, $LlBYbPeQK);
																														
																														if($grab_parameters['xs_canonical'])
																														
																														if(($j6aek7HDqT0DP8h9 == $Phs2HAoCDN9Nni['last_url'])
																														
																														&&
																														
																														(
																														
																														preg_match('#<link[^>]*rel=[\'"]canonical[\'"][^>]*\shref=[\'"]([^>]*?)[\'"]#is', $cn, $sqDQVVYKbIfk) ||
																														
																														preg_match('#<link[^>]*\shref=[\'"]([^>]*?)[\'"][^>]*rel=[\'"]canonical[\'"]#is', $cn, $sqDQVVYKbIfk))
																														
																														){
																														
																														$md6p26IXMC76bd = $this->ijkdwbJjy(trim($sqDQVVYKbIfk[1]));
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($md6p26IXMC76bd, $this->e2MNLLv4TrUXrZT);
																														
																														if($j6aek7HDqT0DP8h9 != $md6p26IXMC76bd){
																														
																														$MVbRa8CCGZlPERCaPUx = 'canonical - '.$md6p26IXMC76bd;
																														
																														}
																														
																														
																														if(GvqGgOzk9gm('xs_canonical_nofollow', false))
																														
																														$sF8mz_414BOBr = true;
																														
																														}
																														
																														if($Phs2HAoCDN9Nni['last_url']){
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($Phs2HAoCDN9Nni['last_url'], $this->e2MNLLv4TrUXrZT);
																														
																														if($n8og2KGZypJ477LnZSL == 1){
																														
																														$MVbRa8CCGZlPERCaPUx = 'lu (ext) - '.$Phs2HAoCDN9Nni['last_url'];
																														
																														if($Phs2HAoCDN9Nni['last_url'] != $j6aek7HDqT0DP8h9) {
																														
																														
																														continue;
																														
																														}
																														
																														}
																														
																														}
																														
																														$S5nMX_c1hzxNp6_h = $this->TmDuxdGroA0ZS2UlE($Phs2HAoCDN9Nni['last_url']);
																														
																														if(($j6aek7HDqT0DP8h9 != $Phs2HAoCDN9Nni['last_url']))// && ($j6aek7HDqT0DP8h9 != $Phs2HAoCDN9Nni['last_url'].'/'))
																														
																														{
																														
																														$this->VB6Q0F6yd4SQ[$this->e2MNLLv4TrUXrZT] = $Phs2HAoCDN9Nni['last_url']; $io=$this->e2MNLLv4TrUXrZT;
																														
																														if(strlen($S5nMX_c1hzxNp6_h) <= 2048)
																														
																														if(!isset($urls_list_full[$S5nMX_c1hzxNp6_h])) {
																														
																														$urls_list2[$S5nMX_c1hzxNp6_h]++;
																														
																														$this->c090euDTKrLsl2rPaUk($S5nMX_c1hzxNp6_h, $this->e2MNLLv4TrUXrZT);
																														
																														}
																														
																														$MVbRa8CCGZlPERCaPUx = 'lu - '.$Phs2HAoCDN9Nni['last_url'];
																														
																														if(!$uolMjFvKOYXA)continue;
																														
																														}
																														
																														if($this->allowcode && !preg_match($this->allowcode,$Phs2HAoCDN9Nni['code'])){
																														
																														$MVbRa8CCGZlPERCaPUx = $Phs2HAoCDN9Nni['code'];
																														
																														continue;
																														
																														}
																														
																														$retrno++;
																														
																														if($uolMjFvKOYXA||$sF8mz_414BOBr) {
																														
																														
																														$V9gL3z4kythUQI = false;
																														
																														}
																														
																														r7jwroOrGxdXbo('analyze',true);
																														
																														if($yi2RKONww3sQwn)
																														
																														{
																														
																														include_once MeO_tCTyPur9.'class.pfile.inc.php';
																														
																														$am = new SWFParser();
																														
																														$am->KDdqLgxVZszR_($cn);
																														
																														$bYDbTtTb4OdrsFT9Pb = $am->f1WgdI1wh6g();
																														
																														}else
																														
																														if($V9gL3z4kythUQI || $ycII2jTNG4NEte2)
																														
																														{
																														
																														r7jwroOrGxdXbo('parse');
																														
																														if($ycII2jTNG4NEte2) {
																														
																														$MVbRa8CCGZlPERCaPUx = 'js';
																														
																														$f = true; // Do not index
																														
																														preg_match_all('#(?:add|menu)item\s*\([^\)]*?["\']((?:\.+\/|http).*?)["\)\']#is', $cn, $uU4SSK6LLRV);
																														
																														$wJikff0cjA = $uU4SSK6LLRV[1];
																														
																														if(preg_match_all('#\(\s*(\{.*?["\']content["\']\s*\:\s*[\'"](.*?)[\'"]\s*\})\s*\)#is', $cn, $EUu1cBWNH8oYO09)){
																														
																														foreach($EUu1cBWNH8oYO09[1] as $A3DZl15Tuq0j){
																														
																														if($sBGbfufVaegf89 = stripslashes($A3DZl15Tuq0j)){
																														
																														$wJikff0cjA = array_merge(
																														
																														$wJikff0cjA, $this->Vq4xbBbMAoh7($sBGbfufVaegf89));
																														
																														}
																														
																														}
																														
																														}
																														
																														}else {
																														
																														$wJikff0cjA = $this->Vq4xbBbMAoh7($cn);
																														
																														}
																														
																														}
																														
																														$wJikff0cjA = array_unique($wJikff0cjA);
																														
																														$nn = $nt = 0;
																														
																														reset($wJikff0cjA);
																														
																														if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt']){
																														
																														if(preg_match('#<meta[^>]*name=[\'"]robots[\'"][^>]*>#is',$cn,$_cm))
																														
																														if(preg_match('#nofollow#is',$_cm[0]))
																														
																														$wJikff0cjA = array();
																														
																														}
																														
																														if(!$this->runstate['charset']){
																														
																														if(preg_match('#<meta[^>]*?charset\s*=\s*"?([^">]*)"#is',$cn, $MYVXO6nQUKZ))
																														
																														$this->runstate['charset'] = $MYVXO6nQUKZ[1];
																														
																														}
																														
																														r7jwroOrGxdXbo('parse', true);
																														
																														r7jwroOrGxdXbo('llist');
																														
																														foreach($wJikff0cjA as $i=>$ll)
																														
																														if($ll)
																														
																														{
																														
																														if(preg_match('#^https?%3a%2f#i', $ll))
																														
																														$ll = urldecode($ll);
																														
																														$a = $sa = trim($ll);
																														
																														$a = str_replace('&#58;',':',$a);
																														
																														if($grab_parameters['xs_proto_skip'] &&
																														
																														(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																														
																														($this->rj0JI8Q0P && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																														
																														preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																														
																														))
																														
																														continue;
																														
																														
																														if(strlen($a) > 4096) continue;
																														
																														$n8og2KGZypJ477LnZSL = $this->FJC_ZevXj1KQeYaQC($a, $this->e2MNLLv4TrUXrZT);
																														
																														if($n8og2KGZypJ477LnZSL == 1)
																														
																														{
																														
																														if($grab_parameters['xs_extlinks'] &&
																														
																														(!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->NnNhUJP2QAFIt($grab_parameters['xs_extlinks_excl']).'#',$a)) &&
																														
																														(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																														
																														)
																														
																														{
																														
																														if(!$urls_ext[$a] &&
																														
																														(!$grab_parameters['xs_ext_skip'] ||
																														
																														!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																														
																														)
																														
																														)
																														
																														$urls_ext[$a] = $j6aek7HDqT0DP8h9;
																														
																														}
																														
																														continue;
																														
																														}
																														
																														$S5nMX_c1hzxNp6_h = $n8og2KGZypJ477LnZSL ? $a : substr($a,strlen($this->H46gGznSa));
																														
																														$S5nMX_c1hzxNp6_h = str_replace(' ', '%20', $S5nMX_c1hzxNp6_h);
																														
																														
																														if($grab_parameters['xs_exclude_check'])
																														
																														{
																														
																														$_f=$_f2=false;
																														
																														$_f=$this->rSfgkeWI70ZEUdJ9z0&&preg_match('#('.$this->rSfgkeWI70ZEUdJ9z0.')#',$S5nMX_c1hzxNp6_h);
																														
																														$_f = $_f || ($_fbot = $this->gWKF0TFAmL9QpF($this->XtMYFsNjs3IUPy6Gg.$S5nMX_c1hzxNp6_h));
																														
																														
																														if($_f)continue;
																														
																														}
																														
																														if(strcmp($S5nMX_c1hzxNp6_h, $this->e2MNLLv4TrUXrZT) == 0)
																														
																														continue;
																														
																														$this->c090euDTKrLsl2rPaUk($S5nMX_c1hzxNp6_h, $this->e2MNLLv4TrUXrZT);
																														
																														if($urls_list_full[$S5nMX_c1hzxNp6_h])
																														
																														continue;
																														
																														tAR_IvsnGVJ5v("<u>[[[acut] $S5nMX_c1hzxNp6_h ]]]</u><br>\n",2);//exit;
																														
																														$urls_list2[$S5nMX_c1hzxNp6_h]++;
																														
																														$nt++;
																														
																														}
																														
																														unset($wJikff0cjA);
																														
																														r7jwroOrGxdXbo('llist', true);
																														
																														} // if(!$uolMjFvKOYXA && $ZIwF6kCfUaUp8)
																														
																														} // if(!$f && !$f2)
																														
																														
																														$this->brOXIDsmo_1Rsq = count($urls_list2);
																														
																														r7jwroOrGxdXbo('analyze', true);
																														
																														r7jwroOrGxdXbo('post');
																														
																														if(!$f){
																														
																														
																														if($f = $f || !$this->oQnQZ0dSqFz_CGCQjY('xs_incl_only', $this->mJhgfGDVcjU($this->e2MNLLv4TrUXrZT), true))
																														
																														$MVbRa8CCGZlPERCaPUx = 'inclonly';
																														
																														}
																														
																														if($_fex['f3']) {
																														
																														$f = true;
																														
																														$MVbRa8CCGZlPERCaPUx = 'noinclmask';
																														
																														}
																														
																														if(!$f)
																														
																														if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																														
																														{
																														
																														if(preg_match('#<meta[^>]*name=[\'"]robots[\'"][^>]*>#is',$cn,$_cm))
																														
																														$f = preg_match('#noindex#is',$_cm[0]);
																														
																														if($f){
																														
																														if(strstr($cn, 'Incapsula'))
																														
																														$MVbRa8CCGZlPERCaPUx = 'incapsula';
																														
																														else
																														
																														$MVbRa8CCGZlPERCaPUx = 'mrob';
																														
																														}
																														
																														}
																														
																														if(!$f && !$MVbRa8CCGZlPERCaPUx)
																														
																														{
																														
																														
																														if(!$tiMRiuTjxlTfA) {
																														
																														$tiMRiuTjxlTfA = array(
																														
																														
																														'link' => preg_replace('#//+$#','/',
																														
																														preg_replace('#^([^/\:\?]/)/+#','\\1',
																														
																														(preg_match('#^\w+://#',$this->e2MNLLv4TrUXrZT) ? $this->e2MNLLv4TrUXrZT : $this->H46gGznSa . $this->e2MNLLv4TrUXrZT)
																														
																														))
																														
																														);
																														
																														$ANSmx6jQFTOuFW = 1024;
																														
																														if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo']||$grab_parameters['xs_newsinfo'])
																														
																														{
																														
																														preg_match('#<title[^>]*?>([^<]*?)</title>#is', $Phs2HAoCDN9Nni['content'], $FBHGtxNVMdhy_);
																														
																														$tiMRiuTjxlTfA['t'] = substr(trim(strip_tags($FBHGtxNVMdhy_[1])),0,$ANSmx6jQFTOuFW);
																														
																														}
																														
																														if($grab_parameters['xs_metadesc']||$grab_parameters['xs_videoinfo'])
																														
																														{
																														
																														if(!preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $avgAbHN8G))
																														
																														preg_match('#<meta[^>]*content\s*=\s*["]?([^>\"]*)[^>]*?(?:http-equiv|name)\s*=\s*"?description#is', $cn, $avgAbHN8G);
																														
																														if($avgAbHN8G[1])
																														
																														$tiMRiuTjxlTfA['d'] = substr(trim($avgAbHN8G[1]),0,$ANSmx6jQFTOuFW);
																														
																														}
																														
																														if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																														
																														$tiMRiuTjxlTfA['o'] = max(0,$this->links_level);
																														
																														if($ZJmBnEThHYs)
																														
																														$tiMRiuTjxlTfA['p'] = $ZJmBnEThHYs;
																														
																														if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?last-modified[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $avgAbHN8G)){
																														
																														$tiMRiuTjxlTfA['clm'] = str_replace('@',' ',$avgAbHN8G[1]);
																														
																														}
																														
																														if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?priority[^>]*content\s*=\s*["]?([\d\.]+)#is', $cn, $avgAbHN8G)){
																														
																														$tiMRiuTjxlTfA['p'] = $avgAbHN8G[1];
																														
																														}
																														
																														if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?changefreq[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $avgAbHN8G)){
																														
																														$tiMRiuTjxlTfA['f'] = $avgAbHN8G[1];
																														
																														}else
																														
																														if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?revisit-after[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $avgAbHN8G)){
																														
																														if(preg_match('#(\d+)\s*hour#',$avgAbHN8G[1])){
																														
																														$tiMRiuTjxlTfA['f'] = 'hourly';
																														
																														}
																														
																														if(preg_match('#(\d+)\s*month#',$avgAbHN8G[1])){
																														
																														$tiMRiuTjxlTfA['f'] = 'monthly';
																														
																														}
																														
																														if(preg_match('#(\d+)\s*day#',$avgAbHN8G[1], $avgAbHN8G)){
																														
																														$d = $avgAbHN8G[1]+0;
																														
																														if($d<4)$tiMRiuTjxlTfA['f'] = 'daily';
																														
																														else
																														
																														if($d<22)$tiMRiuTjxlTfA['f'] = 'weekly';
																														
																														else
																														
																														$tiMRiuTjxlTfA['f'] = 'monthly';
																														
																														}
																														
																														}
																														
																														
																														if(preg_match('#'.$TpwCml_frn0abe.'#',$this->mJhgfGDVcjU($this->e2MNLLv4TrUXrZT),$u1Woi4GRq7Y))
																														
																														{
																														
																														for($_i=0;$_i<count($u1Woi4GRq7Y);$_i++)
																														
																														{
																														
																														if($u1Woi4GRq7Y[$_i+1])
																														
																														break;
																														
																														}
																														
																														if($cMJY86vwfLyqI7nC[$_i]) {
																														
																														if(!$tiMRiuTjxlTfA['clm'])
																														
																														$tiMRiuTjxlTfA['clm'] = $cMJY86vwfLyqI7nC[$_i]['lm'];
																														
																														if(!$tiMRiuTjxlTfA['f'])
																														
																														$tiMRiuTjxlTfA['f'] = $cMJY86vwfLyqI7nC[$_i]['f'];
																														
																														$tiMRiuTjxlTfA['p'] = $cMJY86vwfLyqI7nC[$_i]['p'];
																														
																														}
																														
																														}
																														
																														
																														
																														
																														
																														if($grab_parameters['xs_hreflang']){
																														
																														if(
																														
																														preg_match_all('#<link[^>]*rel\s*=\s*"alternate"[^>]*>#is', $cn, $GO3ReXE6vPk, PREG_SET_ORDER)
																														
																														){
																														
																														$_la = array();
																														
																														foreach($GO3ReXE6vPk as $_alt1){
																														
																														if(preg_match('#\s(hreflang|media)\s*=\s*"([^">]*?)"[^>]*>#is', $_alt1[0], $_alt)
																														
																														&& preg_match('#\s*href\s*=\s*[\'"]([^>]*?)[\'"]#is', $_alt1[0], $_hm)
																														
																														) {
																														
																														$this->FJC_ZevXj1KQeYaQC($_hm[1], $this->e2MNLLv4TrUXrZT);
																														
																														$_la[] = array('t' => $_alt[1], 'l' => $_alt[2], 'u' => $_hm[1]);
																														
																														}
																														
																														}
																														
																														$tiMRiuTjxlTfA['hl'] = $_la;
																														
																														}
																														
																														}
																														
																														if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																														
																														{
																														
																														$Phs2HAoCDN9Nni = $UENg1OTT1qn1JDiKJ->fetch($j6aek7HDqT0DP8h9, 0, 1, false, "", array('req'=>'HEAD'));
																														
																														}
																														
																														if(!$tiMRiuTjxlTfA['lm'] && isset($Phs2HAoCDN9Nni['headers']['last-modified']))
																														
																														$tiMRiuTjxlTfA['lm'] = $Phs2HAoCDN9Nni['headers']['last-modified'];
																														
																														}
																														
																														if(!$tiMRiuTjxlTfA['lm'] &&
																														
																														preg_match('#<meta[^>]*?name\s*=\s*\"last-modified\" content\s*=\s*"?([^">]*)"#is',$Phs2HAoCDN9Nni['content'], $MYVXO6nQUKZ))
																														
																														$tiMRiuTjxlTfA['lm'] = $MYVXO6nQUKZ[1];
																														
																														r7jwroOrGxdXbo('post', true);
																														
																														r7jwroOrGxdXbo('post-save1');
																														
																														tAR_IvsnGVJ5v("\n((include ".$tiMRiuTjxlTfA['link']."))<br />\n");
																														
																														$j6fSoHendCVnkorWM = true;
																														
																														if($grab_parameters['xs_memsave'])
																														
																														{
																														
																														wzEUU_ZHCmf7Ymmx($iy5uIK6b5dVtXiq, $tiMRiuTjxlTfA);
																														
																														$this->urls_completed[] = $iy5uIK6b5dVtXiq;
																														
																														}
																														
																														else $this->urls_completed[] = $this->KEsdEhlzJL($tiMRiuTjxlTfA);
																														
																														$this->N6DEJ7NrOAjvZ1k_14++;
																														
																														r7jwroOrGxdXbo('post-save1',true);
																														
																														r7jwroOrGxdXbo('post-save2');
																														
																														if($grab_parameters['xs_prev_sm_base']
																														
																														&& $this->basecachemask &&
																														
																														preg_match('#('.$this->basecachemask.')#',$this->e2MNLLv4TrUXrZT)){
																														
																														$this->sm_base[$this->e2MNLLv4TrUXrZT] = $tiMRiuTjxlTfA;
																														
																														}
																														
																														$PBy5fyJCG87u = $this->ZIEYu8XY3Sw90QOnH - $this->N6DEJ7NrOAjvZ1k_14;
																														
																														r7jwroOrGxdXbo('post-save2',true);
																														
																														
																														}
																														
																														}while(false);// zero-while
																														
																														r7jwroOrGxdXbo('post-progress1');
																														
																														if($this->num_urls_processed_in_current_batch>=$this->num_links_current_batch)
																														
																														{
																														
																														$this->links_level++;
																														
																														tAR_IvsnGVJ5v("\n<br>NEXT LEVEL:$this->links_level ($this->num_urls_processed_in_current_batch>=$this->num_links_current_batch)<br />\n");
																														
																														unset($urls_list);
																														
																														$this->num_urls_processed_in_current_batch = 0;
																														
																														$urls_list = $urls_list2;
																														
																														reset($urls_list);
																														
																														
																														$urls_list_full += $urls_list;
																														
																														$this->num_links_current_batch = count($urls_list);
																														
																														unset($this->ref_links_tmp2);
																														
																														$this->ref_links_tmp2 = $this->ref_links_tmp;
																														
																														unset($this->ref_links_tmp); unset($urls_list2);
																														
																														$this->ref_links_tmp = array();
																														
																														$urls_list2 = array();
																														
																														
																														}
																														
																														if(!$j6fSoHendCVnkorWM){
																														
																														
																														tAR_IvsnGVJ5v("\n({skipped ".$this->e2MNLLv4TrUXrZT." - $MVbRa8CCGZlPERCaPUx})<br />\n");
																														
																														if(!$grab_parameters['xs_chlog_list_max'] ||
																														
																														count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																														
																														$urls_list_skipped[$this->e2MNLLv4TrUXrZT] = $MVbRa8CCGZlPERCaPUx;
																														
																														}
																														
																														}
																														
																														r7jwroOrGxdXbo('post-progress1',true);
																														
																														r7jwroOrGxdXbo('post-progress2');
																														
																														$this->num_processed++;
																														
																														Fnr6FxzsQ7ZnDJP();
																														
																														$this->pl=min($this->num_links_current_batch - $this->num_urls_processed_in_current_batch,$PBy5fyJCG87u);
																														
																														$lOR1OS6H9o = ($this->N6DEJ7NrOAjvZ1k_14>=$this->ZIEYu8XY3Sw90QOnH) || ($this->num_urls_processed_in_current_batch >= $this->num_links_current_batch);
																														
																														if(!$p2yksq1t_0Rx54jwK_) {
																														
																														
																														if($p2yksq1t_0Rx54jwK_ = k7VCeuq1cd48r0uetU()){
																														
																														if(!@de5FLAUWTohCIUr2do(uzAGLJ0Y3V.ykqK2tfCoRkWc))
																														
																														$p2yksq1t_0Rx54jwK_=0;
																														
																														}
																														
																														}
																														
																														r7jwroOrGxdXbo('post-progress2',true);
																														
																														r7jwroOrGxdXbo('post-progress3');
																														
																														$progpar = $this->K5DeWy6YJuv8Rk(false, $lOR1OS6H9o||$p2yksq1t_0Rx54jwK_);
																														
																														r7jwroOrGxdXbo('post-progress3',true);
																														
																														r7jwroOrGxdXbo('post-progress4');
																														
																														if($grab_parameters['xs_exec_time'] &&
																														
																														((time()-$QG7hsa8nUMyc) > $grab_parameters['xs_exec_time']) ){
																														
																														$p2yksq1t_0Rx54jwK_ = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$QG7hsa8nUMyc);
																														
																														}
																														
																														if($grab_parameters['xs_savestate_time']>0 &&
																														
																														(
																														
																														($this->ctime-$QxpQ5gPd7sY_C4D>$grab_parameters['xs_savestate_time'])
																														
																														|| $lOR1OS6H9o
																														
																														|| $p2yksq1t_0Rx54jwK_
																														
																														)
																														
																														)
																														
																														{
																														
																														$QxpQ5gPd7sY_C4D = $this->ctime;
																														
																														tAR_IvsnGVJ5v("(saving dump)<br />\n");
																														
																														$Fyk_uDThynJcc = array();
																														
																														$WlwbOvRxaGl_ = array(
																														
																														'num_urls_processed_in_current_batch',
																														
																														'urls_list','urls_list2','num_links_current_batch',
																														
																														'ref_links_tmp','ref_links_tmp2','ref_links_list',
																														
																														'urls_list_full','urls_completed',
																														
																														'urls_404',
																														
																														'nt','tsize','num_processed','links_level','ctime', 'urls_ext','fetch_no',
																														
																														'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																														
																														'imlist', 'imlist2', 'progpar', 'runstate', 'sm_sessions',
																														
																														'addedcnt'
																														
																														);
																														
																														foreach($WlwbOvRxaGl_ as $k){
																														
																														$Fyk_uDThynJcc[$k] = isset($this->$k) ? $this->$k : $$k;
																														
																														}
																														
																														$Fyk_uDThynJcc['time']=time();
																														
																														$QNPNE_ApqNc=yoZfrgTrTG7vRkYsVD($Fyk_uDThynJcc);
																														
																														JV7KHTAaxXEYScT457(HGnP26wMMgxNv8g,$QNPNE_ApqNc,uzAGLJ0Y3V,true);
																														
																														unset($Fyk_uDThynJcc);
																														
																														unset($QNPNE_ApqNc);
																														
																														}
																														
																														if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																														
																														(($Jcp0a0FsU6D2-$jIED4umhxbJnUNuxWQE)==$grab_parameters['xs_delay_req']))
																														
																														{
																														
																														$jIED4umhxbJnUNuxWQE = $Jcp0a0FsU6D2;
																														
																														sleep(intval($grab_parameters['xs_delay_ms']));
																														
																														}
																														
																														r7jwroOrGxdXbo('post-progress4', true);
																														
																														}while(!$lOR1OS6H9o && !$p2yksq1t_0Rx54jwK_);
																														
																														 
																														
																														tAR_IvsnGVJ5v("\n\n<br><br>Crawling completed<br>\n");
																														
																														if($_GET['ddbgexit']){
																														
																														echo '<hr><hr><h2>Dbg exit</h2>';
																														
																														echo $UENg1OTT1qn1JDiKJ->Eb4XyhwuqSkVgU.' / '.$UENg1OTT1qn1JDiKJ->nettime.'<hr>';
																														
																														echo PscHlmfLzHPq5Hfvp8().'<hr>';
																														
																														exit;
																														
																														}
																														
																														return array(
																														
																														'u404'=>$this->urls_404,
																														
																														'ref_links_list'=>$this->ref_links_list,
																														
																														'starttime'=>$starttime,
																														
																														'topmu' => $FLC4VMayErR0F4ELN,
																														
																														'ctime'=>$this->ctime,
																														
																														'tsize'=>$this->tsize,
																														
																														'retrno' => $retrno,
																														
																														'nettime' => $this->nettime,
																														
																														'errmsg'=>'',
																														
																														'initurl'=>$this->QYT0hClZNXziEux,
																														
																														'initdir'=>$this->H46gGznSa,
																														
																														'ucount'=>$this->N6DEJ7NrOAjvZ1k_14,
																														
																														'crcount'=>$this->num_processed,
																														
																														'fetch_no'=>$this->fetch_no,
																														
																														'time'=>time(),
																														
																														'params'=>$this->NCetweVQi,
																														
																														'sm_sessions'=>$this->sm_sessions,
																														
																														'interrupt'=>$p2yksq1t_0Rx54jwK_,
																														
																														'runstate' => $this->runstate,
																														
																														'urls_ext'=>$urls_ext,
																														
																														'urls_list_skipped' => $urls_list_skipped,
																														
																														'max_reached' => $this->N6DEJ7NrOAjvZ1k_14>=$this->ZIEYu8XY3Sw90QOnH
																														
																														);
																														
																														}
																														
																														}
																														
																														$hhVHKMmHq0aYEpBJMP = new SiteCrawler();
																														
																														function TPP7VBSfvnJb4l(){
																														
																														@de5FLAUWTohCIUr2do(uzAGLJ0Y3V.ETN6MXz5eYLXFqDHsTM);
																														
																														if(@file_exists(uzAGLJ0Y3V.zbI2HvDCL5FyqgFqjYG))
																														
																														@rename(uzAGLJ0Y3V.zbI2HvDCL5FyqgFqjYG,uzAGLJ0Y3V.ETN6MXz5eYLXFqDHsTM);
																														
																														}
																														
																														



































































































