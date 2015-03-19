<!doctype html>
<html>
<head>
  <title>CSS3 Animation Test</title>
  <style>
    ::selection {
        background-color: rgb(251, 198, 198);
        color: #000;
    }
    ::-moz-selection {
        background-color: rgb(218, 252, 255);
        color: #000;
    }
    #title{
      position: relative;
    }
    @-webkit-keyframes typing { from { width: 0; } }
    @-webkit-keyframes blink-caret { 50% { border-color: transparent; } }
    @keyframes typing { from { width: 0; } }
    @keyframes blink-caret { 50% { border-color: transparent; } }
    #title h1 { 
      font: bold 200% Consolas, Monaco, monospace;
      border-right: .1em solid;
      width: 40ch;
      margin: 2em 1em;
      white-space: nowrap;
      overflow: hidden;
      -webkit-animation: typing 5s steps(40, end),
      blink-caret .3s step-end infinite;
      animation: typing 5s steps(40, end),
      blink-caret .3s step-end infinite;
    }


    @-webkit-keyframes BeRotate{
      0%{
        -webkit-transform-origin:right;
        -webkit-transform:rotate(270deg);
      }
      100%{
        -webkit-transform-origin:right;
        -webkit-transform:rotate(360deg);
      }
    }
    @keyframes BeRotate{
      0%{
                transform-origin:right;
                transform:rotate(270deg);
      }
      100%{
                -ms-transform-origin:right;
                -ms-transform:rotate(360deg);
      }
    }
    .rotate{
      margin-top: 150px;
      margin-left: 280px;
      background-color: #B3D5F7;
      font-family:Consolas, Monaco, monospace;
      padding:15px;
      width:210px;
      font-size: 22px;
      -webkit-animation: BeRotate 1 1s forwards;
      animation: BeRotate 1 1s forwards;

    }
    .rotate:hover{
     background-color: #3F79BA;
     color:#FFFFFF;
     -webkit-transition: color .4s linear, background-color .4s linear;
     transition: color .4s linear, background-color .4s linear;
    }
    .rotate2{
      position: relative;
      margin-top: 30px;
      margin-left: 30px;
    }
    .rotate2 img{
      position: absolute;
    }
    @-webkit-keyframes BeRotate2_1{
      25%{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
      }
      50%{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg);

      }
      75%{
        -webkit-transform:rotate(270deg);
                transform:rotate(270deg);
      }
      100%{
        -webkit-transform:rotate(360deg);
                transform:rotate(360deg);
      }
    }
    @keyframes BeRotate2_1{
      25%{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
      }
      50%{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg);
      }
      75%{
        -webkit-transform:rotate(270deg);
                transform:rotate(270deg);              
      }
      100%{
        -webkit-transform:rotate(360deg);
                transform:rotate(360deg);
      }
    }

    #img1{
      -webkit-animation: BeRotate2_1 infinite 0.8s;
      animation:BeRotate2_1 infinite 0.8s;
    }

    @-webkit-keyframes BeRotate2_2{
      25%{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
      }
      50%{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg);
      }
      75%{
        -webkit-transform:rotate(270deg);
                transform:rotate(270deg);
      }
      100%{
        -webkit-transform:rotate(360deg);
                transform:rotate(360deg);
      }
    }
    @keyframes BeRotate2_2{
      25%{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
      }
      50%{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg);
      }
      75%{
        -webkit-transform:rotate(270deg);
                transform:rotate(270deg);
      }
      100%{
        -webkit-transform:rotate(360deg);
                transform:rotate(360deg);
      }
    }

    #img2{
      -webkit-animation: BeRotate2_2 0.8s infinite 0.2s;
      animation:BeRotate2_2 0.8s infinite 0.2s;
    }

  </style>
</head>

<body>
  <div class='rotate2'>
    <img id='img1' src='image/1.png' />
    <img id='img2' src='image/2.png' />
  </div>

  <div id='title'>
    <h1>Hi I am KK , How are you today ?</h1>
  </div>

  <div class='rotate'>
    Something Rotate.
  </div>

  

</body>
</html>