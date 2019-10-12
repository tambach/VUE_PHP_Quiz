# VUE_PHP_Quiz
Simple Quiz App using core php and vue.js


* npm install
* Stay in the parent directory of the project and run the command in the terminal
php -S localhost:8084 -t vue_quiz (please note if you need to change the port number,
it should be changed also in the index.html file, line 129
[ axios.get('http://localhost:8084/api.php?action=read') ]
* Open the browser http://localhost:8084
* Now you can sign up or login in with the credentials
Email: admin@gmail.com
password: admin
* After login you will see the button start
If you click you start the test. Each test has 3 options you can simply click one of them
and the question will change, also you will see the message above, like this Correct!
The right answer is ... /Sorry, you are wrong! The right answer is ...
After 10 questions you will see the total score and the restart button.

In the process of writing the project I used php(without any framework), javascript
and vue.js. Also html and css. The data is saved in mysql tables. There are two
databases: api_db and vuequiz. First one is to save information about users and the
second one is used to save the questions with the answers.
