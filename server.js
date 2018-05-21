const http = require('http');
const fs = require('fs');
const path = require('path');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((request, response) => {

  if(request.url === "/") {
		sendFileContent(response, "index.html", "text/html");
	} else if(/^\/[a-zA-Z0-9\/]*.js$/.test(request.url.toString())){
		sendFileContent(response, request.url.toString().substring(1), "text/javascript");
	} else if(/^\/[a-zA-Z0-9\/]*.css$/.test(request.url.toString())){
		sendFileContent(response, request.url.toString().substring(1), "text/css");
	} else if(/^\/[a-zA-Z0-9\/]*.png$/.test(request.url.toString())) {
		sendFileContent(response,request.url.toString().substring(1), "image/png");
	} else if(/^\/[a-zA-Z0-9\/]*.jpg$/.test(request.url.toString())) {
		sendFileContent(response,request.url.toString().substring(1), "image/jpg");
	} else if(/^\/[a-zA-Z0-9\/]*.ico$/.test(request.url.toString())) {
		sendFileContent(response,request.url.toString().substring(1), "image/x-icon");
	} else {
		console.log("Requested URL is: " + request.url);
		response.end();
	}

});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

function sendFileContent(response, fileName, contentType){
	fs.readFile(fileName, function(err, data){
		if(err){
			response.writeHead(404);
			response.write("Not Found!");
		}
		else{
			response.writeHead(200, {'Content-Type': contentType});
			response.write(data);
		}
		response.end();
	});
}