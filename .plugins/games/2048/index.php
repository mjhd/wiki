
<html>
<!--Play the game in fullscreen for better view. 
First click anywhere on the square box to start the game. To play the game use up, down, right and left arrows or use mouse to direct the tiles -->

<head>
    <title>2048</title>
    <!--<link rel="stylesheet" href="game2048.css"/>
    <script type="text/javascript" src="game2048.js"></script>-->
<style>
html{
    height: 100%;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
}

p{
    color: black;
    font-family: "microsoft yahei";
    font-weight: bold;
    left: -10px;
    
}

body{
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: "microsoft yahei";
    background-color: white ;
    overflow: hidden;
}
 .container{
     margin:auto;
     width: 452px;
     height: 100%;
     overflow: hidden;
     position: relative;
 }
 
 .logo{
     width:40%;
     font-size: 70px;
     font-weight: bold;
     color: #d13100;
     float: left;
     position: relative;
 }
 .scoreBar{
     width: 50%;
     float:right;
     background: #fff;
     color: #111;

     padding:10px;
     position: relative;
     margin-top:10px;
 }
.scoreBar:before{
    content: "";
    display: block;
    border-width: 20px;
    border-color: transparent #fff transparent transparent ;
    border-style: solid;
    position: absolute;
    top:50%;
    left:-40px;
    margin-top:-20px;
}
 #score{
     font-size: 50px;
 }
 
 #addScore{
     position: absolute;
     bottom: 0px;
     font-size: 30px;
     color:#999;
     opacity: .8;
     top:4px;
     right: 0;
 }
#addScore.show{
    opacity: .8;
    transition:all .5s ease;   -ms-transition:all .5s ease; -moz-transition:all .5s ease; -o-transition:all .5s ease; -webkit-transition:all .5s ease; 

}
#addScore.hide{
    opacity: 0;
    transition:all .5s ease;   -ms-transition:all .5s ease; -moz-transition:all .5s ease; -o-transition:all .5s ease; -webkit-transition:all .5s ease; 
}

#stage{
    background: #01bfae;
    cursor: pointer;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
    position: absolute;
    width: 450px;
    height: 450px;
    top:50%;
    left:0;
    margin-top: -200px;
    border: 1px solid #eee;
    z-index: 1;
}

#undo{
    position: relative;
    z-index: 990;
}

.cover{
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    opacity: 0.1;
    cursor: pointer;
}

.row0{
    top:10px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.row1{
    top:120px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.row2{
    top:230px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.row3{
    top:340px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}

.cell0{
    left:10px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.cell1{
    left:120px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.cell2{
    left:230px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}
.cell3{
    left:340px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
}

span{
    display: block;
    width: 100px;
    height: 100px;
    position: absolute;
    text-align: center;
    line-height: 100px;
    cursor: pointer;
    background: #fff;
    font-size: 43px;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
}

div{
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;

}

.num2{
    background: #fff;
    color:#777;
    font-size: 100px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
    animation: myfirst .5s;
    -moz-animation: myfirst .5s;	/* Firefox */
    -webkit-animation: myfirst .5s;	/* Safari or Chrome or opera */
}

.num4{
    background: #fafafa;
    color: #e9b856;
    font-size: 100px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
    animation: myfirst .5s;
    -moz-animation: myfirst .5s;	/* Firefox */
    -webkit-animation: myfirst .5s;	/* Safari or Chrome */
}

.num8{
    background: #f3f3f3;
    color:#f94e2f;
    font-size: 100px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
    animation: myfirst .5s;
}

.num16{
    background: #F5EC00;
    color:#fff;
    font-size: 80px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease; 
    animation: myfirst .5s;
}

.num32{
    background: #fcc20e;
    color: #fdfdfd;
    font-size: 80px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num64{
    background: #f94a3b;
    color:#fff;
    font-size: 80px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num128{
    background: #222;
    color: #f94e2f;
    font-size: 52px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num256{
    background: #d13100;
    color:#ffcc66;
    font-size: 52px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num512{
    background: #fff300;
    color: #FB4E4E;
    font-size: 52px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num1024{
    background: #6483b5;
    color: #f6f7ff;
    font-size: 52px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num2048{
    background: #000000;
    color: #fff300;
    font-size: 52px;

    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

.num4096{
    background: #ff0099;
    color: #fff;
    font-size: 52px;
    transition:all .2s ease;   -ms-transition:all .2s ease; -moz-transition:all .2s ease; -o-transition:all .2s ease; -webkit-transition:all .2s ease;
}

@keyframes myfirst
{
    0%{opacity: 0;transform:scale(0)}
    50% {opacity: .5;transform:scale(1.5)}
    100%{opacity: 1;transform:scale(1)}
}

@-moz-keyframes myfirst /* Firefox */
{
    0%{opacity: 0;-moz-transform:scale(0)}
    50% {opacity: .5;-moz-transform:scale(1.5)}
    100%{opacity: 1;-moz-transform:scale(1)}
}
@-webkit-keyframes myfirst /* Safari or Chrome */
{
    0%{opacity: 0;-webkit-transform:scale(0)}
    50% {opacity: .5;-webkit-transform:scale(1.5)}
    100%{opacity: 1;-webkit-transform:scale(1)}
}
</style>
</head>
<body>

<p> join the number to get 2048 tile!</p>
<div class="cover"></div>
<div class="container">
    <div class="logo">2048</div>
    <div class="scoreBar">
        <label style="position: relative; top:-13px;">score:</label>
        <label id="score"> 0</label>
        <div id="addScore"></div>
    </div>
    <div id="stage"></div>
    <!--<div id="gameOver hide">-->
        <!--<div class="overText">GameOver!</div>-->
    <!--</div>-->
</div>

<script type="text/javascript">
var gameObj = {
    points: {
        score: 0,
        history: [],
        status: 1
    },
    stage: [],
    intiStage: function () {
        for (var cell = 0; cell < 4; cell++) {
            this.stage[cell] = [];
            for (var row = 0; row < 4; row++) {
                this.stage[cell][row] = {
                    boxObj: null,
                    position: [cell, row]
                };
            }
        }

    },
    
        empty: function () {
        var emptyList = [];
        for (var row = 0; row < 4; row++) {
            for (var cell = 0; cell < 4; cell++) {
                if (this.stage[cell][row].boxObj == null) {
                    emptyList.push(this.stage[cell][row]);
                }
            }
        }
        return emptyList;
    },
    newBox: function () {
        var _this = this;
        
        
        var box = function (obj) {
            var num = Math.random() > 0.9 ? 4 : 2;
            this.value = num;
            this.parent = obj;
            this.domObj = function () {
                var domBox = document.createElement('span');
                domBox.innerText = num;
                domBox.textContent = num;
                domBox.className = 'row' + obj.position[0] + ' ' + 'cell' + obj.position[1] + ' ' + 'num' + num;
                var root = document.getElementById('stage');
                root.appendChild(domBox);
                return  domBox;
            }();
            obj.boxObj = this;
        }
        var emptyList = this.empty();
        if (emptyList.length) {
            var randomIndex = Math.floor(Math.random() * emptyList.length);
            new box(emptyList[randomIndex]);
            return true;
        }
    },
    isEnd:function(){
        var emptyList = this.empty();
        if (!emptyList.length) {
            for(var i=0;i<4;i++){
                for(var j=0;j<4;j++){
                    var obj=this.stage[i][j];
                    var objLeft=(j==0)?{boxObj:{value:0}}:this.stage[i][j-1];
                    var objRight=(j==3)?{boxObj:{value:0}}:this.stage[i][j+1];
                    var objUp=(i==0)?{boxObj:{value:0}}:this.stage[i-1][j];
                    var objDown=(i==3)?{boxObj:{value:0}}:this.stage[i+1][j];
                    if(obj.boxObj.value==objLeft.boxObj.value
                        ||obj.boxObj.value==objDown.boxObj.value
                        ||obj.boxObj.value==objRight.boxObj.value
                        ||obj.boxObj.value==objUp.boxObj.value){
                        return false
                    }
                }
            }
            return true;
        }
        return false;
    },
    gameOver:function(){
        alert('GAVE OVER!');
    },
    moveTo :function (obj1, obj2) {
            obj2.boxObj = obj1.boxObj;
            obj2.boxObj.domObj.className = 'row' + obj2.position[0] + ' ' + 'cell' + obj2.position[1] + ' ' + 'num' + obj2.boxObj.value;
//            obj1.boxObj.domObj.parentNode.removeChild(obj1.boxObj.domObj);
            obj1.boxObj = null;
        },
    addTo : function (obj1, obj2) {
            obj2.boxObj.domObj.parentNode.removeChild(obj2.boxObj.domObj);
            obj2.boxObj = obj1.boxObj;
            obj1.boxObj = null;
            obj2.boxObj.value = obj2.boxObj.value * 2;
            obj2.boxObj.domObj.className = 'row' + obj2.position[0] + ' ' + 'cell' + obj2.position[1] + ' ' + 'num' + obj2.boxObj.value;
            obj2.boxObj.domObj.innerText = obj2.boxObj.value;
            obj2.boxObj.domObj.textContent = obj2.boxObj.value;
            this.points.score+=obj2.boxObj.value;
        var scoreBar= document.getElementById('score');
        scoreBar.innerText=this.points.score;
        scoreBar.textContent=this.points.score;
        return obj2.boxObj.value;


    },
    clear:function(x,y){
        var can=0;
      for(var i=0;i<4;i++){
          var fst=null;
          var fstEmpty=null;
          for(var j=0;j<4;j++){
              var objInThisWay=null;
              switch (""+x+y){
                  case '00': objInThisWay=this.stage[i][j];break;
                  case '10':objInThisWay=this.stage[j][i];break;
                  case '11':objInThisWay=this.stage[3-j][i];break;
                  case '01':objInThisWay=this.stage[i][3-j];break;
              }
              if(objInThisWay.boxObj!=null){
                 if(fstEmpty){
                   this.moveTo(objInThisWay,fstEmpty)
                    fstEmpty=null;
                    j=0;
                     can=1;
                 }
              }else if(!fstEmpty){
                   fstEmpty=objInThisWay;
              }
          }
      }
        return can;
    },
    
    move: function (x,y) {
        var can=0;
        can=this.clear(x,y)?1:0;
        var add=0;
        for(var i=0;i<4;i++){
            for(var j=0;j<3;j++){
                var objInThisWay=null;
                var objInThisWay2=null;
                switch (""+x+y){
                    case '00':{
                        objInThisWay=this.stage[i][j];
                        objInThisWay2=this.stage[i][j+1];break;
                    }
                    case '10':{
                        objInThisWay=this.stage[j][i];
                        objInThisWay2=this.stage[j+1][i];break;
                    }

                    case '11':{
                        objInThisWay=this.stage[3-j][i];
                        objInThisWay2=this.stage[2-j][i];break;
                    }
                    case '01':{
                        objInThisWay=this.stage[i][3-j];
                        objInThisWay2=this.stage[i][2-j];break;
                    }
                }
                if(objInThisWay2.boxObj&&objInThisWay.boxObj.value==objInThisWay2.boxObj.value){
                  add+=this.addTo(objInThisWay2,objInThisWay);
                    this.clear(x,y);
//                    j++;
                    can=1;
                }
//                console.log(this.stage);
            }
        }
        if(add){
            var addscore=document.getElementById('addScore');
            addscore.innerText="+"+add;
            addscore.textContent="+"+add;
            addscore.className="show";
            setTimeout(function(){
                addscore.className="hide";
            },500);
        }
        if(can){
            this.newBox();
        }
        if(this.isEnd()){
            this.gameOver();
        }
    },

    inti: null
}
var controller = function () {
    var startX = 0;
    var startY = 0;
    var ready = 0;
    this.start = function (x, y) {
        ready = 1;
        startX = x;
        startY = y;
    };
    this.move = function (x, y) {
        if (x - startX > 100 && ready) {
            gameObj.move(0, 1);
            ready = 0;
        } else if (startX - x > 100 && ready) {
            gameObj.move(0, 0);
            ready = 0;
        }
        else if (startY - y > 100 && ready) {
            gameObj.move(1, 0);
            ready = 0;
        }
        else if (y - startY > 100 && ready) {
            gameObj.move(1, 1);
            ready = 0;
        }
    }
    this.end = function (x, y) {
        ready = 0;
    }
    return {
        start: this.start,
        move: this.move,
        end: this.end
    }
}();
function disableSelection(target){
    if (typeof target.onselectstart!="undefined") //IE route
        target.onselectstart=function(){return false}
    else if (typeof target.style.MozUserSelect!="undefined") //Firefox route
        target.style.MozUserSelect="none"
    else //All other route (ie: Opera)
        target.onmousedown=function(){return false}
    target.style.cursor = "default"
}
window.onload = function () {
    gameObj.intiStage();
    gameObj.newBox();
//    gameObj.newBox();
    var stage = document.getElementById('stage');
    document.onmousedown = function (e) {
        var event = e || window.event;
        var obj = event.target || event.srcElement;
        var x = event.clientX;
        var y = event.clientY;
        controller.start(x, y);
    }
    document.onmousemove = function (e) {
        var event = e || window.event;
        var obj = event.target || event.srcElement;
        var x = event.clientX;
        var y = event.clientY;
        controller.move(x, y);
    }
    document.onmouseup = function (e) {
        var event = e || window.event;
        var obj = event.target || event.srcElement;
        var x = event.clientX;
        var y = event.clientY;
        controller.end(x, y);
    }
    function keyUp(e) {
        var currKey=0,e=e||event;
        currKey=e.keyCode||e.which||e.charCode;
        var keyName = String.fromCharCode(currKey);
        switch (currKey){
            case 37:gameObj.move(0, 0);break;
            case 38:gameObj.move(1, 0);break;
            case 39:gameObj.move(0, 1);break;
            case 40:gameObj.move(1, 1);break;
        }
//        alert("key code: " + currKey + " Character: " + keyName);
    }
    document.onkeyup = keyUp;
//    disableSelection(document.body);
}
</script>
</body></html>
