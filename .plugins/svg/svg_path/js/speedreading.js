for(var aa="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,d){if(d.get||d.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=d.value)},c="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,ba=["Array","prototype","fill"],ca=0;ca<ba.length-1;ca++){var da=ba[ca];da in c||(c[da]={});c=c[da]}
var ea=ba[ba.length-1],fa=c[ea],ga=fa?fa:function(a,b,d){var g=this.length||0;0>b&&(b=Math.max(0,g+b));if(null==d||d>g)d=g;d=Number(d);0>d&&(d=Math.max(0,g+d));for(b=Number(b||0);b<d;b++)this[b]=a;return this};ga!=fa&&null!=ga&&aa(c,ea,{configurable:!0,writable:!0,value:ga});
function ha(){this.a=window.location;this.b="https:"===this.a.protocol?"wss://"+this.a.host+"/ws/vocabularies":"ws://"+this.a.host+"/ws/vocabularies";this.f=function(){var a=ia,b=new WebSocket(this.b);b.onopen=function(){b.send('{"d":0,"c":0,"m":0}')};b.onmessage=function(b){a(b)}};this.c=function(){var a=ja.value,b=ka,d=new WebSocket(this.b);d.onopen=function(){d.send('{"d":'+a+',"c":100,"m":0}')};d.onmessage=function(a){b(a)}};return this}window.Vocabularies=ha;/*
 aydos.com */
var e,f,la,h,k,l,m,n,p,q,r,t,u,v,w,x,y,z,A,B,C,ma,D,na,E,F,G,oa,pa,qa,ra,sa,ta,ua,ja,va,wa,H,I,xa,J,ya,za,Aa,Ba,K,L,M,N,Ca,Da,Ea,Fa,Ga,Ha,Ia,Ja,Ka,La,Ma,Oa=new ha,Pa=[],O=[],P=[],Q,R,S,T,U,V,Qa,W,Ra,X=[],Y="",Sa,Z="#FFFFFF;beyaz;white;#000000;siyah;black;#001F3F;lacivert;navy;#0074D9;mavi;blue;#7FDBFF;a\u00e7\u0131k mavi;aqua;#39CCCC;teal;teal;#3D9970;zeytin;olive;#2ECC40;ye\u015fil;green;#01FF70;limon ye\u015fili;lime;#FFDC00;sar\u0131;yellow;#FF851B;portakal;orange;#FF4136;k\u0131rm\u0131z\u0131;red;#F012BE;fu\u015fya;fuchsia;#B10DC9;mor;purple;#85144B;kestane;maroon;#AAAAAA;gri;gray;#DDDDDD;g\u00fcm\u00fc\u015f;silver".split(";");
window.onload=function(){e=document.getElementById("canvas");f=e.getContext("2d");na=document.getElementById("egz");E=document.getElementById("ntip");F=document.getElementById("ptip");G=document.getElementById("btip");oa=document.getElementById("pyon");pa=document.getElementById("byon");qa=document.getElementById("hrf");ra=document.getElementById("str");sa=document.getElementById("hiz");ta=document.getElementById("sure");K=document.getElementById("kay");ua=document.getElementById("mtn");ja=document.getElementById("voc");
va=document.getElementById("fnt");wa=document.getElementById("fsz");H=document.getElementById("zcol");I=document.getElementById("acol");xa=document.getElementById("pcol");J=document.getElementById("ncol");ya=document.getElementById("tryon");za=document.getElementById("trhrf");Aa=document.getElementById("trstr");Ba=document.getElementById("trkay");L=document.getElementById("trmtn");M=document.getElementById("trrst");N=document.getElementById("trvoc");Ca=document.getElementById("trfnt");Da=document.getElementById("trfsz");
Ea=document.getElementById("trpm");Fa=document.getElementById("trnr");Ga=document.getElementById("btntr");Ha=document.getElementById("btnen");Ia=document.getElementById("btnkh");Ja=document.getElementById("btnbh");Ka=document.getElementById("btnrk");La=document.getElementById("btnnk");Ma=document.getElementById("btn");q="/hizliokuma/"===window.location.pathname?"tr":"en";Ta();for(var a=100;1200>=a;a+=20){var b=document.createElement("option");b.value=a;b.innerHTML=a;sa.appendChild(b)}for(a=4;36>=
a;a++)b=document.createElement("option"),b.value=a,b.innerHTML=a,qa.appendChild(b);b=document.createElement("option");b.value="";b.innerHTML="tr"==q?"--alt nokta yok--":"--no sub point--";J.appendChild(b);for(a=0;a<Z.length;a+=3)b=document.createElement("option"),b.value=Z[a],b.innerHTML="tr"==q?Z[a+1]:Z[a+2],H.appendChild(b),b=document.createElement("option"),b.value=Z[a],b.innerHTML="tr"==q?Z[a+1]:Z[a+2],I.appendChild(b),b=document.createElement("option"),b.value=Z[a],b.innerHTML="tr"==q?Z[a+1]:
Z[a+2],xa.appendChild(b),b=document.createElement("option"),b.value=Z[a],b.innerHTML="tr"==q?Z[a+1]:Z[a+2],J.appendChild(b);sa.value=400;wa.value=20;I.value="#000000";xa.value="#AAAAAA";J.value="#FFDC00";e.addEventListener("click",function(){Ua()});na.addEventListener("click",Ta,!1);K.addEventListener("click",Va,!1);Ma.addEventListener("click",Wa,!1);document.addEventListener("webkitfullscreenchange",Xa,!1);document.addEventListener("mozfullscreenchange",Xa,!1);document.addEventListener("fullscreenchange",
Xa,!1);document.addEventListener("MSFullscreenChange",Xa,!1);Oa.f();la=!1};
function Ta(){r=na.value;"nokta"==r&&(E.style.display="",F.style.display="none",G.style.display="none",ya.style.display="none",za.style.display="none",Aa.style.display="none",Ba.style.display="none",L.style.display="none",M.style.display="none",N.style.display="none",Ca.style.display="none",Da.style.display="none",Ea.style.display="none",Fa.style.display="none");"piramit"==r&&(E.style.display="none",F.style.display="",G.style.display="none",ya.style.display="",oa.style.display="",pa.style.display=
"none",za.style.display="",Aa.style.display="",Ba.style.display="",L.style.display="",N.style.display="",M.style.display="",Ca.style.display="",Da.style.display="",Ea.style.display="",Fa.style.display="",Va());"blok"==r&&(E.style.display="none",F.style.display="none",G.style.display="",ya.style.display="",oa.style.display="none",pa.style.display="",za.style.display="",Aa.style.display="",Ba.style.display="",L.style.display="",M.style.display="",N.style.display="",Ca.style.display="",Da.style.display=
"",Ea.style.display="",Fa.style.display="",Va())}function Va(){kay=K.value;1==kay&&(L.style.display="",M.style.display="none",N.style.display="none");2==kay&&(L.style.display="none",M.style.display="",N.style.display="none");3==kay&&(L.style.display="none",M.style.display="none",N.style.display="")}
function Wa(){var a=e;a.requestFullscreen?a.requestFullscreen():a.mozRequestFullScreen?a.mozRequestFullScreen():a.webkitRequestFullscreen?a.webkitRequestFullscreen():a.msRequestFullscreen&&a.msRequestFullscreen();h=window.innerWidth;k=window.innerHeight;e.width=h;e.height=k;e.style.display="block";r=na.value;x=Number(sa.value);y=Number(ta.value);m=0;p=5;"nokta"==r&&(t=E.value,B=H.value,C=I.value,Pa=t.split(" ").map(Number),n=Pa.length,O[0]=24,P[0]=24,O[1]=h-6-18,P[1]=24,O[2]=24,P[2]=k-6-18,O[3]=h-
6-18,P[3]=k-6-18,O[4]=h/5,P[4]=k/5,O[5]=4*h/5,P[5]=k/5,O[6]=h/5,P[6]=4*k/5,O[7]=4*h/5,P[7]=4*k/5);"piramit"==r&&(t=Number(F.value),u=Number(oa.value),v=Number(qa.value),w=Number(ra.value),z=va.value,A=Number(wa.value),kay=Number(K.value),B=H.value,C=I.value,ma=xa.value,D=J.value,Ra=0,2>=kay?(Y=ua.value+" ",Y=Y.replace(/\s\s+/g," ")," "==Y&&(Y="abc\u00e7defg\u011fh\u0131ijklmno\u00f6prs\u015ftu\u00fcvyz "),Ya()):Oa.c());"blok"==r&&(t=Number(G.value),u=Number(pa.value),v=Number(qa.value),w=Number(ra.value),
z=va.value,A=Number(wa.value),kay=Number(K.value),B=H.value,C=I.value,ma=xa.value,D=J.value,Ra=0,2>=kay?(Y=ua.value+" ",Y=Y.replace(/\s\s+/g," ")," "==Y&&(Y="abc\u00e7defg\u011fh\u0131ijklmno\u00f6prs\u015ftu\u00fcvyz "),Ya()):Oa.c());Za()}
function Ya(){Sa=0;X=[];f.font=A+"px "+z;Q=f.measureText("x").width;R=2*Q;W=Qa=0;var a=Math.floor(h/Q),b=Math.floor(k/R);if("piramit"==r){var d=v;1==t||2==t?(n=Math.floor(b/w),W=(k-R*n*w)/2):n=Math.floor((a-v)/2);for(var g=0;g<n;g++){for(var Na=0;Na<w;Na++)X[g*w+Na]=2==kay?$a(d):ab(d);d=2==t&&g>=Math.floor(n/2)?d-2:d+2}}if("blok"==r){S=Math.floor(a/v);T=Math.floor(b/w);Qa=(h-S*Q*v)/2;W=(k-T*R*w)/2;for(g=0;g<T*w;g++)X[g]=2==kay?$a(S*v):ab(S*v);n=1==u||2==u?S*T:2*T}}
function ia(a){a=JSON.parse(a.data);for(var b=0;b<a.length;b++){var d=document.createElement("option");d.value=a[b].i;d.innerHTML=a[b].s+" "+a[b].t+" &mdash; "+a[b].d;ja.appendChild(d)}d=document.createElement("option");d.value=3;d.innerHTML="tr"==q?"S\u00f6zl\u00fckler":"Vocabularies";K.appendChild(d)}function ka(a){Y="";a=JSON.parse(a.data);for(var b=0;b<a.length;b++)Y+=a[b].w+" ";Ya()}
function $a(a){var b="",d="";Ga.checked&&Ia.checked&&(b+="abc\u00e7defg\u011fh\u0131ijklmno\u00f6prs\u015ftu\u00fcvyz");Ga.checked&&Ja.checked&&(b+="ABC\u00c7DEFG\u011eHI\u0130JKLMNO\u00d6PRS\u015eTU\u00dcVYZ");Ha.checked&&Ia.checked&&(b+="abcdefghijklmnopqrstuvwxyz");Ha.checked&&Ja.checked&&(b+="ABCDEFGHIJKLMNOPQRSTUVWXYZ");Ka.checked&&(b+="0123456789");La.checked&&(b+=".,:;!?");""==b&&(b+="abc\u00e7defg\u011fh\u0131ijklmno\u00f6prs\u015ftu\u00fcvyz");for(var g=0;g<a;g++)d+=b[Math.floor(Math.random()*
b.length)];return d}function ab(a){for(var b="",d=0;d<a;d++)b+=Y[Sa],Sa++,Sa==Y.length&&(Sa=0);return b}function Za(){f.fillStyle=B;f.fillRect(0,0,e.width,e.height);f.fillStyle=C;f.font="bold 144px Arial";f.textBaseline="middle";f.fillText(p,(h-f.measureText(p).width)/2,k/2);p?(p--,l=setTimeout(Za,1E3)):(clearTimeout(l),"nokta"==r&&bb(),"piramit"==r&&(f.font=A+"px "+z,f.textBaseline="top",cb()),"blok"==r&&(f.font=A+"px "+z,f.textBaseline="top",V=U=0,db()))}
function bb(){f.fillStyle=B;f.fillRect(0,0,e.width,e.height);f.fillStyle=C;f.beginPath();f.arc(O[Pa[m]-1],P[Pa[m]-1],18,0,2*Math.PI);f.closePath();f.fill();m++;m==n&&(m=0);p++;0<y&&p>6E4*y/x?Ua():l=setTimeout(bb,x)}
function cb(){f.fillStyle=B;f.fillRect(0,0,e.width,e.height);if(1==t||2==t){""!=D&&(f.fillStyle=D,f.beginPath(),f.arc(h/2,W+(m*w*R+w*R/2),Q/2,0,2*Math.PI),f.closePath(),f.fill());for(var a=0;a<X.length;a++){f.fillStyle=ma;a>=m*w&&a<(m+1)*w&&(f.fillStyle=C);var b=f.measureText(X[a]).width;f.fillText(X[a],(h-b)/2,W+a*R)}}else for(""!=D&&(f.fillStyle=D,f.beginPath(),f.arc(h/2,k/2,Q/2,0,2*Math.PI),f.closePath(),f.fill()),a=m*w;a<(m+1)*w;a++)f.fillStyle=C,b=f.measureText(X[a]).width,f.fillText(X[a],(h-
b)/2,k/2-w*R/2+(a-m*w)*R);m=Ra?m-1:m+1;1==u&&m==n?m=0:2==u&&m==n?(Ra=1,m-=2):2==u&&0==m&&(Ra=0);p++;0<y&&p>6E4*y/x?Ua():l=setTimeout(cb,x)}
function db(){f.fillStyle=B;f.fillRect(0,0,e.width,e.height);f.fillStyle=ma;for(var a=0;a<X.length;a++)f.fillText(X[a],Qa,W+a*R);1==u&&(U=m%S,V=Math.floor(m/S));2==u&&(U=Math.floor(m/T),V=m%T);3==u&&(U=m%2?S-1:0,V=Math.floor(m/2));""!=D&&(f.fillStyle=D,f.beginPath(),f.arc(Qa+U*v*Q+v*Q/2,W+V*w*R+w*R/2,Q/2,0,2*Math.PI),f.closePath(),f.fill());f.fillStyle=C;for(var b=0;b<w;b++){for(var d="",a=0;a<v;a++)d+=X[V*w+b][U*v+a];f.fillText(d,Qa+U*Q*v,W+(V*w+b)*R)}m++;m==n&&(m=0);p++;0<y&&p>6E4*y/x?Ua():l=setTimeout(db,
x)}function Xa(){la?(clearTimeout(l),e.style.display="none",la=!1):la=!0}function Ua(){document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen()};