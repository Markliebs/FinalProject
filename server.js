var mysql = require('mysql');
var express = require('express');
var flash = require('connect-flash');
var methodOverride = require('method-override');
var bodyParser = require('body-parser');
// var exphbs = require('express-handlebars');
var connection = require('./config/connection.js');
var path = require('path');
var passport = require('passport');
var session = require('express-session');

//sets express calls for use
var app = express();

var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'testDB'
});

function connectToDB(){
	connection.connect(function(err){
		if (err) {
			console.error('error connection:', err.stack);
			return
		} else {
		console.log('connected to MySQL DB') }
	});
}

connectToDB();

var port = process.env.PORT || 3000;
//confirms active server in node
app.listen(port, function() {
    console.log("Listening on PORT " + port);
});