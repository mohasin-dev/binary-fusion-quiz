<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
       #box {
  height: 100%;
  width: 100%;
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

#screensaver {
  position: relative;
  display:inline-block;
  animation: DVD 10s linear infinite alternate;
  left: 0px;
  top: 0px;
  padding: 30px;
  background-color: green;
}

@keyframes DVD {
  to {
    left: 100%;
    top: 100%;
    transform:translate(-100%,-100%);
  }
} 
    </style>
</head>

<body>
    <h1>Animation</h1>

    <div id="box"><span id="screensaver"></span></div>
</body>

</html>
