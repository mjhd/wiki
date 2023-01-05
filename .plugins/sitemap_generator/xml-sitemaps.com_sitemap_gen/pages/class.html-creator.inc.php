<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$QShjq78720586GOSZa=863984220;$buvcD23243136ThqCA=989286644;$POUMu80644020iKEGM=533430499;$rsLfb94789214pdWYm=202380543;$TtaJa92772863NBEhR=841742904;$mxUsN96992754vHNqP=897522817;$PLGIl16179563GXyKV=649258128;$LpYSS72977848mnnWp=654461027;$UJNVO43266009WGNsK=365917524;$mcbmY72235378VFBSd=513260445;$LRqZQ32658584ZorvE=774941777;$TOXci69515155dCYyq=986233322;$nbDop42440776eYJDX=849023760;$eRwes86916022ymyrn=778927563;$oGMJf29748886UOciy=735798590;$UeuKW66330434UNVrK=518673979;$YoQrO61420690caVmd=765553090;$NpzUM79565831tbeyg=274622747;$ImKUd97845650SEDgz=413424312;$tDJNE20610941wqFYK=837902830;$QFZOz19346173tGxKb=461139539;$saEnd60961285PbTNR=791964175;$ZwCBM89252296gLIyV=816281565;$brzkG94122448SlrXW=923798837;$LTpJq77285674tKxtV=63468691;$ZNcsq73937699WrXFU=850540831;$tkxmP64546493JsYpc=939225450;$vRxFe83873817jLQam=750592060;$QfmCW24883721UlTvI=471910196;$wqMfb49467090poHAc=84062255;$NzbDD36514680Uernf=445418443;$ddxXe11994699yJERq=591868154;$nGFca38592505aZcVO=964336669;$azLDp89887072EWIPc=697203850;$CgezK10426950WXVnm=854541286;$XqnHv92055392HKqAc=417484312;$qLozs81075852TWCBd=555201737;$GWqXJ58486790djSoB=380396708;$uTzPw99687596EKlrc=999014409;$vXtzN75284954EPYPh=355266586;$IGaGP33232393LhDTx=251915492;$HsONu52336130cYAir=372571874;$ukKZi13612216njfjD=805781668;$dxnpv67547435IdDaC=181086745;$HEIWp55024586AiBww=352088559;$msSNY19898685vqbnY=481790856;$LWyPx19237028tiEZM=148708293;$AIsva83300946bjTsO=242779622;$zBVwH80090103KONjc=756529795;$lHNIz57908719ikRBp=83654304;?><?php
																											
																											include MeO_tCTyPur9 . 'class.templates.inc.php';
																											
																											echo 'Creating HTML sitemap...<div id="percprog2"></div>';
																											
																											flush();
																											
																											$HNwgWgpZt5 = $grab_parameters['xs_initurl'];
																											
																											if (substr_count($HNwgWgpZt5, '/') > 2) {
																											
																											$HNwgWgpZt5 = substr($HNwgWgpZt5, 0, strrpos($HNwgWgpZt5, '/'));
																											
																											}
																											
																											function nTYPdFICGiOaIPN77K($mxmrLVvxnFIvt3QNg, $i)
																											
																											{
																											
																											global $_tm;
																											
																											Fnr6FxzsQ7ZnDJP();
																											
																											tAR_IvsnGVJ5v("($mxmrLVvxnFIvt3QNg / $i / " . (time() - $_tm) . " / " .
																											
																											(function_exists('memory_get_usage') ? number_format(memory_get_usage() / 1024 / 1024) : '') . "M)  ");
																											
																											$_tm = time();
																											
																											}
																											
																											$YnGMif3Jf       = '';
																											
																											$ctKO2LJQlN_ = array();
																											
																											$D919uF1OQ      = 0;
																											
																											$t1b1maH6CQ     = ceil(count($hhVHKMmHq0aYEpBJMP->urls_completed) / $grab_parameters['xs_htmlpart']);
																											
																											$HrKWsQGncczeqy = intval($ZNsWh49zV8V76set['istart']);
																											
																											if ($ZNsWh49zV8V76set) {
																											
																											$D919uF1OQ = $ZNsWh49zV8V76set['curpage'];
																											
																											}
																											
																											$OzXD2RW2V    = $fTxsKwig2AE    = array();
																											
																											$nps940hKge9tF6MLD1A = '';
																											
																											function lAZQs5aBShaXgpi8C($PQo90U7SAV)
																											
																											{
																											
																											global $hhVHKMmHq0aYEpBJMP;
																											
																											return BS2u9cmxjMg($hhVHKMmHq0aYEpBJMP->urls_completed[$PQo90U7SAV]);
																											
																											}
																											
																											function HLOPkZDy7ibngl80()
																											
																											{
																											
																											global $OzXD2RW2V, $HNwgWgpZt5, $hhVHKMmHq0aYEpBJMP, $grab_parameters, $nps940hKge9tF6MLD1A;
																											
																											for ($i = 0; $i < count($hhVHKMmHq0aYEpBJMP->urls_completed); $i++) {
																											
																											if ($i % 500 == 0) {
																											
																											nTYPdFICGiOaIPN77K('zucSpD8JGFJR6Mkq', $i);
																											
																											}
																											
																											$ur = lAZQs5aBShaXgpi8C($i);
																											
																											if (!$nps940hKge9tF6MLD1A && $ur['t']) {
																											
																											$nps940hKge9tF6MLD1A = $ur['t'];
																											
																											}
																											
																											$Z6_6VwlJE2Kh6ekfbY = str_replace($HNwgWgpZt5, '', $ur['link']);
																											
																											$Z6_6VwlJE2Kh6ekfbY = preg_replace('#\?.*#', '', $Z6_6VwlJE2Kh6ekfbY);
																											
																											$Z6_6VwlJE2Kh6ekfbY = preg_replace('#^.*\://#', '', $Z6_6VwlJE2Kh6ekfbY);
																											
																											$DozPhG2niQ40nyuPe  = &$OzXD2RW2V;
																											
																											if ($grab_parameters['xs_htmlstruct'] == 2) {
																											
																											$ns  = 'Sitemap';
																											
																											$DozPhG2niQ40nyuPe = &$DozPhG2niQ40nyuPe['elem'][$ns];
																											
																											$DozPhG2niQ40nyuPe['tcnt']++;
																											
																											} else
																											
																											if ($grab_parameters['xs_htmlstruct'] == 1) {
																											
																											$ns  = substr($Z6_6VwlJE2Kh6ekfbY, 0, strrpos($Z6_6VwlJE2Kh6ekfbY, '/'));
																											
																											$DozPhG2niQ40nyuPe = &$DozPhG2niQ40nyuPe['elem'][$ns];
																											
																											$DozPhG2niQ40nyuPe['tcnt']++;
																											
																											} else {
																											
																											$Y_BWUZXMamW = 0;
																											
																											while (($ps = strpos($Z6_6VwlJE2Kh6ekfbY, '/')) !== false) {
																											
																											$ns  = substr($Z6_6VwlJE2Kh6ekfbY, 0, $ps + 1);
																											
																											if($Y_BWUZXMamW++>0)
																											
																											$DozPhG2niQ40nyuPe = &$DozPhG2niQ40nyuPe['elem'][$ns];
																											
																											$DozPhG2niQ40nyuPe['tcnt']++;
																											
																											$Z6_6VwlJE2Kh6ekfbY = substr($Z6_6VwlJE2Kh6ekfbY, $ps + 1);
																											
																											}
																											
																											}
																											
																											$DozPhG2niQ40nyuPe['cnt']++;
																											
																											$DozPhG2niQ40nyuPe['pages'][] = $i;
																											
																											}
																											
																											}
																											
																											function piP9JzwELISV9PKB($_a, $_b)
																											
																											{
																											
																											global $grab_parameters, $WnaAzEOXOt7sbWhF_C, $_tm;
																											
																											$a = lAZQs5aBShaXgpi8C($_a); if(!$a)$a = $_a;
																											
																											$b = lAZQs5aBShaXgpi8C($_b); if(!$b)$b=  $_b;
																											
																											if (($GLOBALS['_iter']++ % 100) == 0) {
																											
																											nTYPdFICGiOaIPN77K('sort', $GLOBALS['_iter']);
																											
																											}
																											
																											$at = is_array($a) ? ($a['t'] ? $a['t'] : $a['link']) : $a;
																											
																											$bt = is_array($b) ? ($b['t'] ? $b['t'] : $b['link']) : $b;
																											
																											if ($grab_parameters['xs_htmlsort'] == 3) {
																											
																											if (!$WnaAzEOXOt7sbWhF_C) {
																											
																											$WnaAzEOXOt7sbWhF_C = rand(1E10, 1E12);
																											
																											}
																											
																											$at = md5($at . $WnaAzEOXOt7sbWhF_C);
																											
																											$bt = md5($bt . $WnaAzEOXOt7sbWhF_C);
																											
																											}
																											
																											if ($at == $bt) {
																											
																											return 0;
																											
																											}
																											
																											$rs = ($at < $bt) ? -1 : 1;
																											
																											if ($grab_parameters['xs_htmlsort'] == 2) {
																											
																											$rs = -$rs;
																											
																											}
																											
																											return $rs;
																											
																											}
																											
																											function KIWxiIVAj($ZUYReWSJraK3x8x6){
																											
																											global $hhVHKMmHq0aYEpBJMP, $grab_parameters;
																											
																											$ZUYReWSJraK3x8x6 = str_replace(
																											
																											array('&amp;amp;', "'", '"', '>', '<'),
																											
																											array('&amp;', "&apos;", '&quot;', '&gt;', '&lt;'),
																											
																											$ZUYReWSJraK3x8x6);
																											
																											if(function_exists('utf8_encode'))
																											
																											if(
																											
																											($hhVHKMmHq0aYEpBJMP->runstate['charset'] &&
																											
																											(strtolower($hhVHKMmHq0aYEpBJMP->runstate['charset'])!='utf-8')
																											
																											)
																											
																											|| $grab_parameters['xs_html_utfencode'])
																											
																											{
																											
																											$ZUYReWSJraK3x8x6 = utf8_encode($ZUYReWSJraK3x8x6);
																											
																											}
																											
																											return $ZUYReWSJraK3x8x6;
																											
																											}
																											
																											function kuq6QZhxb_WbjT($DKNf2J1X5DxmAw, $qYiLmjKDU5PG7Xyh = 0, &$WJObemnANfCi8, $GF3kwxuvBj = '/')
																											
																											{
																											
																											global
																											
																											$HgQqyBfhkTtpZrPkIE,
																											
																											$BVWJvEdRRS8Li, $grab_parameters, $YnGMif3Jf, $ctKO2LJQlN_, $D919uF1OQ, $hhVHKMmHq0aYEpBJMP, $HrKWsQGncczeqy, $UYBRpkiBIrvSePO, $_tm;
																											
																											$BNDGFMwjYZ   = '';
																											
																											$QB7mUNprquuZl = $DKNf2J1X5DxmAw['cnt'];
																											
																											if($x8EXwobgROOCedgDce = GvqGgOzk9gm('xs_htmlsm_titlemod')){
																											
																											$me = explode(' ', $x8EXwobgROOCedgDce, 2);
																											
																											$p_RDY_NJF = array('#'.$me[0].'#', $me[1]);
																											
																											}
																											
																											$WJObemnANfCi8 = array(
																											
																											'folder' => $GF3kwxuvBj,
																											
																											
																											'cnttxt' => ($QB7mUNprquuZl ? (number_format($QB7mUNprquuZl, 0) . (($QB7mUNprquuZl > 1) ? ' pages' : ' page')) : ''),
																											
																											'level'  => $qYiLmjKDU5PG7Xyh+1
																											
																											);
																											
																											$bgj01RLwpfA   = array();
																											
																											if (is_array($DKNf2J1X5DxmAw['pages'])) {
																											
																											if ($grab_parameters['xs_htmlsort']) {
																											
																											tAR_IvsnGVJ5v("sorting pages  ($GF3kwxuvBj)..");
																											
																											@usort($DKNf2J1X5DxmAw['pages'], 'piP9JzwELISV9PKB');
																											
																											}
																											
																											$pi = 0;
																											
																											foreach ($DKNf2J1X5DxmAw['pages'] as $_pg) {
																											
																											$pi++;
																											
																											if (($GLOBALS['_iter']++ % 1000) == 0) {
																											
																											nTYPdFICGiOaIPN77K('Sfm9_NGH3Dt73QiiSY', $GLOBALS['_iter']);
																											
																											$hhVHKMmHq0aYEpBJMP->K5DeWy6YJuv8Rk(
																											
																											array(
																											
																											'smcreate' => array(
																											
																											'html', $GLOBALS['_iter'], count($hhVHKMmHq0aYEpBJMP->urls_completed))
																											
																											));
																											
																											}
																											
																											$HgQqyBfhkTtpZrPkIE++;
																											
																											if ($HgQqyBfhkTtpZrPkIE <= $HrKWsQGncczeqy) {
																											
																											continue;
																											
																											}
																											
																											$pg = lAZQs5aBShaXgpi8C($_pg);
																											
																											$t     = KIWxiIVAj($pg['t'] ? $pg['t'] : basename($pg['link']));
																											
																											if($p_RDY_NJF ){
																											
																											$t = preg_replace($p_RDY_NJF[0], $p_RDY_NJF[1], $t);
																											
																											}
																											
																											$bgj01RLwpfA[] = array
																											
																											(
																											
																											'link'        => $pg['link'],
																											
																											'title'       => $t,
																											
																											'desc'        => KIWxiIVAj($pg['d']),
																											
																											'title_clean' => $t,
																											
																											
																											);
																											
																											if ($HgQqyBfhkTtpZrPkIE % 1000 == 0) {
																											
																											mKOCbfdJgbFRvJWVRm(array(
																											
																											'cmd'  => 'info',
																											
																											'id'   => 'percprog2',
																											
																											'text' => number_format($HgQqyBfhkTtpZrPkIE * 100 / count($hhVHKMmHq0aYEpBJMP->urls_completed), 0) . '%',
																											
																											));
																											
																											}
																											
																											$zuBY9qLptnLhSLhL_Sb = (($HgQqyBfhkTtpZrPkIE % $grab_parameters['xs_htmlpart']) == 0);
																											
																											if ($zuBY9qLptnLhSLhL_Sb
																											
																											||
																											
																											($pi == count($DKNf2J1X5DxmAw['pages']))
																											
																											) {
																											
																											$WJObemnANfCi8['pages']  = $bgj01RLwpfA;
																											
																											if ($zuBY9qLptnLhSLhL_Sb) {
																											
																											
																											$bgj01RLwpfA  = array();
																											
																											kH4gLGcDG9rKEBHJ();
																											
																											$D919uF1OQ++;
																											
																											JV7KHTAaxXEYScT457($UYBRpkiBIrvSePO, yoZfrgTrTG7vRkYsVD(array('istart' => $HgQqyBfhkTtpZrPkIE, 'curpage' => $D919uF1OQ)));
																											
																											}
																											
																											}
																											
																											} // end foreach pages
																											
																											} // end if(is_array($DKNf2J1X5DxmAw['pages']))
																											
																											if ($DKNf2J1X5DxmAw['elem']) {
																											
																											if ($grab_parameters['xs_htmlsort']) {
																											
																											tAR_IvsnGVJ5v("sorting folders ($GF3kwxuvBj)..");
																											
																											@uksort($DKNf2J1X5DxmAw['elem'], 'piP9JzwELISV9PKB');
																											
																											}
																											
																											foreach ($DKNf2J1X5DxmAw['elem'] as $iVtixTEaV8I_gpFfw1 => $pSqJSFBuUZ) {
																											
																											$GF3kwxuvBj = trim(urldecode($iVtixTEaV8I_gpFfw1));
																											
																											kuq6QZhxb_WbjT($pSqJSFBuUZ, $qYiLmjKDU5PG7Xyh + 1, $WJObemnANfCi8['elem'][$GF3kwxuvBj], $GF3kwxuvBj);
																											
																											}
																											
																											}
																											
																											}
																											
																											$HgQqyBfhkTtpZrPkIE = 0;
																											
																											TOz3VYy4To8vIqo('html_addloc');
																											
																											tAR_IvsnGVJ5v("\nStarting adding locations\n");
																											
																											HLOPkZDy7ibngl80();
																											
																											TOz3VYy4To8vIqo('html_addloc', true);
																											
																											
																											$Wap4seYoMvS      = $grab_parameters['xs_htmlname'];
																											
																											for($i=1;file_exists($sf=$AlKFygqsa0zd.efCnubSjJv($i,$Wap4seYoMvS,true).$cfRaULBmzwIeKwJ11O);$i++)
																											
																											de5FLAUWTohCIUr2do($sf);
																											
																											for($i=1;file_exists($sf=$AlKFygqsa0zd.efCnubSjJv($i,$Wap4seYoMvS,true).'.gz');$i++)
																											
																											de5FLAUWTohCIUr2do($sf);
																											
																											TOz3VYy4To8vIqo('kuq6QZhxb_WbjT');
																											
																											tAR_IvsnGVJ5v("\nStarting compiling sitemap files\n");
																											
																											kuq6QZhxb_WbjT($OzXD2RW2V, 0, $ctKO2LJQlN_[0], '/');
																											
																											kH4gLGcDG9rKEBHJ(); // last
																											
																											TOz3VYy4To8vIqo('kuq6QZhxb_WbjT', true);
																											
																											tAR_IvsnGVJ5v(inaP0TE2Pp7R()."\n");
																											
																											
																											mKOCbfdJgbFRvJWVRm(array('cmd' => 'info', 'id' => 'percprog2', ''));
																											
																											function XU98u3hRnRaWJ(&$hv)
																											
																											{
																											
																											$wIwo3ytjC = true;
																											
																											if($hv)
																											
																											foreach ($hv as $k => $kE1Qtk1D5) {
																											
																											$RxQNkxIqAQG = XU98u3hRnRaWJ($hv[$k]['elem']);
																											
																											if($kE1Qtk1D5['pages'] || !$RxQNkxIqAQG){
																											
																											
																											return false;
																											
																											}
																											
																											else
																											
																											unset($hv[$k]);
																											
																											}
																											
																											return true;
																											
																											}
																											
																											function If0NJqk6gr17(&$hv)
																											
																											{
																											
																											if(!$hv)return true;
																											
																											$LjQpxjLtYxbkRyvyGL4 = count($hv); $hi = 0;
																											
																											foreach ($hv as $k => $kE1Qtk1D5) {
																											
																											if(++$hi<$LjQpxjLtYxbkRyvyGL4){
																											
																											unset($hv[$k]);
																											
																											}else {
																											
																											$hv[$k]['pages']=array();
																											
																											If0NJqk6gr17($hv[$k]['elem']);
																											
																											
																											}
																											
																											}
																											
																											return false;
																											
																											}
																											
																											function kH4gLGcDG9rKEBHJ()
																											
																											{
																											
																											global $grab_parameters, $HNwgWgpZt5, $hhVHKMmHq0aYEpBJMP, $D919uF1OQ, $t1b1maH6CQ, $XcNj0gdFq,
																											
																											$j3niwgnZXSnFjbGahfQ, $ctKO2LJQlN_;
																											
																											$LlBYbPeQK               = @parse_url($HNwgWgpZt5);
																											
																											$Wap4seYoMvS      = $grab_parameters['xs_htmlname'];
																											
																											$rnuMdlPGnpc = basename($grab_parameters['xs_htmlname']);
																											
																											$K6cUkYR03EYiB = $t1b1maH6CQ > 1 ? efCnubSjJv($D919uF1OQ + 1, $Wap4seYoMvS, true) : $Wap4seYoMvS;
																											
																											tAR_IvsnGVJ5v("\nCreate html sitemap file [" . basename($K6cUkYR03EYiB) . '], no ' . $D919uF1OQ . ' of ' . $t1b1maH6CQ . "\n");
																											
																											if ($D919uF1OQ >= $t1b1maH6CQ) {
																											
																											return;
																											
																											}
																											
																											$zDydeHCOfqBn = $j3niwgnZXSnFjbGahfQ['charset'];
																											
																											$ZKdlvhdRYtznZAqaYKo = new RawTemplate("pages/mods/");
																											
																											$ZKdlvhdRYtznZAqaYKo->mO0b2jRHTN84(AjcZyvgxP77_7IU(PHl930jhdTpKDZGAz, 'sitemap_tpl.html'));
																											
																											$RMPATthtKeVPhcdE  = '';
																											
																											$AK1UJv2aTsD = array();
																											
																											if ($t1b1maH6CQ > 1) {
																											
																											$snTgo_pIGSPeLn = false;
																											
																											for ($i1 = 0; $i1 < $t1b1maH6CQ; $i1++) {
																											
																											if (
																											
																											($i1 <= 3) ||
																											
																											($i1 >= $t1b1maH6CQ - 3) ||
																											
																											(abs($i1 - $D919uF1OQ) < 4)
																											
																											) {
																											
																											$RRZ0muWNDqoR6 = efCnubSjJv($i1 + 1, $rnuMdlPGnpc, true);
																											
																											if($snTgo_pIGSPeLn){
																											
																											$AK1UJv2aTsD[] = array('current' => true, 'link' => '', 'num' => '...');
																											
																											$snTgo_pIGSPeLn = false;
																											
																											}
																											
																											$AK1UJv2aTsD[] = array('current' => ($i1 == $D919uF1OQ), 'link' => $RRZ0muWNDqoR6, 'num' => $i1 + 1);
																											
																											}else $snTgo_pIGSPeLn = true;
																											
																											}
																											
																											}
																											
																											XU98u3hRnRaWJ($ctKO2LJQlN_);
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('slots', $ctKO2LJQlN_);
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('LASTUPDATE',
																											
																											date(($grab_parameters['xs_dateformat'] ? $grab_parameters['xs_dateformat'] : 'Y, F j') . ' H:i:s'));
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('NOBRAND', $grab_parameters['xs_nobrand'] ? 1 : 0);
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('PCHARSET', $zDydeHCOfqBn);
																											
																											global $nps940hKge9tF6MLD1A;
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('TOPTITLE', ($nps940hKge9tF6MLD1A));
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('TOPURL', $HNwgWgpZt5);
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('PAGE', $t1b1maH6CQ ? ' Page ' . ($D919uF1OQ + 1) : '');
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('APAGER', $AK1UJv2aTsD);
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('TOTALURLS', count($hhVHKMmHq0aYEpBJMP->urls_completed));
																											
																											$ZKdlvhdRYtznZAqaYKo->h0RkI5mVPPcXFMYz('DOMAIN', $LlBYbPeQK['host']);
																											
																											TOz3VYy4To8vIqo('html_tpl_parse');
																											
																											$Ff5sWQxbeAciNkS = $ZKdlvhdRYtznZAqaYKo->parse();
																											
																											TOz3VYy4To8vIqo('html_tpl_parse', true);
																											
																											if(!JV7KHTAaxXEYScT457($K6cUkYR03EYiB, $Ff5sWQxbeAciNkS, '', $grab_parameters['xs_compress_optimize']))
																											
																											$XcNj0gdFq[] = $K6cUkYR03EYiB;
																											
																											
																											If0NJqk6gr17($ctKO2LJQlN_);
																											
																											
																											
																											}
																											
																											



































































































