var e,f,g,h,k,l,m,n,p,r,t;
window.onload=function(){g=document.getElementById("seri");h=document.getElementById("dcml");k=document.getElementById("iter");l=document.getElementById("slow");m=document.getElementById("curi");n=document.getElementById("mdec");p=document.getElementById("pi");r=document.getElementById("mj");t=document.getElementById("btn");for(var a=100;1E3>=a;a+=100){var b=document.createElement("option");b.value=a;b.innerHTML=a;h.appendChild(b)}for(a=1E3;1E6>=a;a*=10)b=document.createElement("option"),b.value=
a,b.innerHTML=a,k.appendChild(b);for(a=0;200>=a;a++)b=document.createElement("option"),b.value=a,b.innerHTML=a,l.appendChild(b);f=!1;t.onclick=u;g.onchange=v;v();w(0,0,0,0)};
function u(){if(f)e.terminate(),f=!1,t.textContent="Calculate";else{w(0,0,0,0);e=new Worker("https://aydos.com/js/pi/pi.js");var a=g.value,b=h.value,d=k.value,q=l.value,c=0;if("pi_euler_5"==a||"pi_euler_6"==a)c=1;1==c&&1E4<d?alert("Calculating "+d+" primes will take long... Please choose a smaller iteration."):(f=!0,t.textContent="Stop",e.postMessage({se:a,dc:b,it:d,sl:q,pr:c}),e.onmessage=function(a){w(a.data.p,a.data.i,a.data.k,b);if(a.data.k==b||a.data.i==d)e.terminate(),f=!1,t.textContent="Calculate"})}}
function w(a,b,d,q){a=a.toString();m.innerHTML=b;n.innerHTML=d;b=a.indexOf(".");var c="<span class='big'>"+a.substr(0,b+1)+"</span>";a=a.substr(b+1);c+="<span class='red'>";for(b=0;b<q;b++)b==d&&(c+="</span>"),c+=void 0===a[b]?0:a[b];p.innerHTML=c}function v(){r.innerHTML="";var a=new Worker("https://aydos.com/js/pi/mj.js");a.postMessage({se:g.value});a.onmessage=function(b){r.innerHTML="$$"+b.data.mj+"$$";a.terminate();MathJax.Hub.Queue(["Typeset",MathJax.Hub,r])}};
