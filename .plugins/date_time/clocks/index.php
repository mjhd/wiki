<!DOCTYPE html>
<html>
  <head>
    <script src="canvas_clock.js"></script>
    <style>
      html, body {
        overflow: hidden;
      }
      @media only screen and (orientation: landscape) {
        html, body {
          white-space: nowrap;
          height: 100%;
          direction: rtl !important;
          text-align: left;
        }
        body > canvas {
          position: relative;
          top: 50%;
          height: 100%;
          transform: translateY(-50%);
        }
      }
      @media only screen and (orientation: portrait) {
        body > canvas {
          display: block;
          width: 100%;
          margin: auto;
        }
      }
    </style>
  </head>

  <body>
    <!--<canvas id="clock1_" width="200px" height="200px">
    </canvas>-->
    <canvas id="clock12_" width="200px" height="200px">
    </canvas>
    <canvas id="clock11_" width="200px" height="200px">
    </canvas>
    <canvas id="clock10_" width="200px" height="200px">
    </canvas>
    <canvas id="clock14_" width="200px" height="200px">
    </canvas>
    <canvas id="clock9_" width="200px" height="200px">
    </canvas>
    <canvas id="clock8_" width="200px" height="200px">
    </canvas>
    <canvas id="clock7_" width="200px" height="200px">
    </canvas>
    <canvas id="clock6_" width="200px" height="200px">
    </canvas>
    <canvas id="clock5_" width="200px" height="200px">
    </canvas>
    <canvas id="clock4_" width="200px" height="200px">
    </canvas>
    <canvas id="clock2_" width="200px" height="200px">
    </canvas>
    <!--<canvas id="clock3_" width="200px" height="200px">
    </canvas>
    <canvas id="clock13_" width="200px" height="200px">
    </canvas>
    <canvas id="clock15_" width="200px" height="200px">
    </canvas>-->

    <script>
      clockd2_={
              "indicate": true,
              "dial1_color": "#666600",
              "time_24h": false,
              "timeoffset":0,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd4_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "date_add":3,
              "date_add_color": "#999",
              "time_24h": false,
             };
      clockd5_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd6_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_add_color": "#ccc",
              "time_24h": false,
              "timeoffset":0,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd7_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd8_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "date_add":5,
              "date_add_color": "#999",
             };
      clockd9_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd10_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "track": "#4b4b00",
             };
      clockd11_={
              "dial1_color": "#666600",
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
              "time_24h": false,
             };
      clockd12_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "dial2_color": "#81812e",
              "dial3_color": "#9d9d5c",
              "time_add": 1,
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
             };
      clockd14_={
              "indicate": true,
              "indicate_color": "#222",
              "dial1_color": "#666600",
              "time_add": 1,
              "time_24h": false,
              "date_add":3,
              "date_add_color": "#999",
              "time_24h": false,
             };


      var c = document.getElementById('clock2_');
      cns2_ = c.getContext('2d');
      var c = document.getElementById('clock4_');
      cns4_ = c.getContext('2d');
      var c = document.getElementById('clock5_');
      cns5_ = c.getContext('2d');
      var c = document.getElementById('clock6_');
      cns6_ = c.getContext('2d');
      var c = document.getElementById('clock7_');
      cns7_ = c.getContext('2d');
      var c = document.getElementById('clock8_');
      cns8_ = c.getContext('2d');
      var c = document.getElementById('clock9_');
      cns9_ = c.getContext('2d');
      var c = document.getElementById('clock10_');
      cns10_ = c.getContext('2d');
      var c = document.getElementById('clock11_');
      cns11_ = c.getContext('2d');
      var c = document.getElementById('clock12_');
      cns12_ = c.getContext('2d');
      var c = document.getElementById('clock14_');
      cns14_ = c.getContext('2d');

      clock_digital(200,cns2_,clockd2_);
      clock_binary(200,cns4_,clockd4_);
      clock_follow(200,cns5_,clockd5_);
      clock_circles(200,cns6_,clockd6_);
      clock_dots(200,cns7_,clockd7_);
      clock_roulette(200,cns8_,clockd8_);
      clock_num(200,cns9_,clockd9_);
      clock_planets(200,cns10_,clockd10_);
      clock_digitalran(200,cns11_,clockd11_);
      clock_bars(200,cns12_,clockd12_);
      clock_random(200,cns14_,clockd14_);
      
    </script>
  </body>
</html>