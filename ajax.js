var request ;
request = new XMLHttpRequest();
request.open('GET','data.txt');

request.send();
request.onreadystatechange = function(){
    console.log(request.status);
    document.writeln(request.responseText);
    
}
