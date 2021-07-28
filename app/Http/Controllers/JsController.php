<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function defineCallbackJs()
    {
        return "function checkAge(data) { <br>
            let parseData = JSON.parse(data);<br><br>

            if (parseData.age < 18) {<br>
                console.log('Age is not valid');<br>
            } else {<br>
                console.log('Age is valid')<br>
            }<br>
        }<br><br>

        function takeUserInput(callback) {<br>
            let userInput = prompt('Please enter your name and age in json format like this {'name': 'Peter', 'age': 22}');<br>
            callback(userInput);<br>
        }<br><br>

        takeUserInput(checkAge);";
        //return view('callback_js');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function sortJs()
    {
        return "
        const months = ['March', 'Jan', 'Feb', 'Dec'];
        months.sort();
        console.log(months);
        // expected output: Array ['Dec', 'Feb', 'Jan', 'March']

        ";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function foreachJs()
    {
        return "
        let names = ['Taylor', 'Jeffrey', 'Mohasin', 'Saddam'];
        
        names.forEach(name => console.log(name));
        

        // expected output: 'Taylor', 'Jeffrey', 'Mohasin', 'Saddam'
        ";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function filterJs()
    {
        return "
        const words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

        const result = words.filter(word => word.length > 6);

        console.log(result);
        // expected output: Array ['exuberant', 'destruction', 'present']
        ";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function mapJs()
    {
        return "
        const myArray = ['Sam', 'Alice', 'Nick', 'Matt'];

        // Appends text to each element of the array
        const newArray = myArray.map(name => {
            return 'My name is ' + name; 
        });

        console.log(newArray);
         // xpected output: ['My name is Sam', 'My Name is Alice', ...]
        ";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function reduceJs()
    {
        return "
        var numbers = [29.76, 41.85, 46.5]; 

        let sum = numbers.reduce( (total, amount) => total + amount);

        sum // 118.11
        ";
    }
}
