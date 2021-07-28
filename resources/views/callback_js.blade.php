<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 20px 40px;;
        }
    </style>
    
</head>

<body>
    <h1>Callback Js</h1>
    <p>See output in console</p>

    <div>
        function checkAge(data) { <br>
            let parseData = JSON.parse(data);<br><br>

            if (parseData.age < 18) {<br>
                console.log('Age is not valid');<br>
            } else {<br>
                console.log('Age is valid')<br>
            }<br>
        }<br><br>

        function takeUserInput(callback) {<br>
            let userInput = prompt('Please enter your name and age in json format like this {"name": "Peter", "age": 22}');<br>
            callback(userInput);<br>
        }<br><br>

        takeUserInput(checkAge);
    </div>

    <script>
        // function checkAge(data) {
        //     let parseData = JSON.parse(data);

        //     if (parseData.age < 18) {
        //         console.log('Age is not valid');
        //     } else {
        //         console.log('Age is valid')
        //     }
        // }

        // function takeUserInput(callback) {
        //     let userInput = prompt('Please enter your name and age in json format like this {"name": "Peter", "age": 22}');
        //     callback(userInput);
        // }

        // takeUserInput(checkAge);
    </script>
</body>

</html>
