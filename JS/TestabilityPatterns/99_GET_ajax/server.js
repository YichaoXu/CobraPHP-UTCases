var http = require('http');
var fs = require('fs');
var route = require('url');
const querystring = require('querystring');

function handleServer(req, res){
    var path = route.parse(req.url, true);

    if(req.url === '/'){
        res.writeHead(200, {"Content-Type" : "text/html"});
        //fs.createReadStream('./example.html').pipe(res);
    }else if(path.pathname === '/query/'){
        console.log(req.method);

        //PATTERN CODE {1}
        //it takes element from a form 
        var s = {
            func: function f(){
                const parsed = route.parse(req.url);
                const query  = querystring.parse(parsed.query);
                var a = query.name;
                res.setHeader('Access-Control-Allow-Origin', '*');
                res.writeHead(200, {"Content-Type" : "text/html"});
                res.write(a);  
                res.end(); 
            }
        
    }
    s.func();
    }else{
        res.writeHead(404, {"Content-Type": "text/plain"});
        res.end('Page not found');
    }
}

http.createServer(handleServer).listen(8080);
console.log('Server running on port 8080.');
