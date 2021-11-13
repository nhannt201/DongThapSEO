function okokkokoko() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        document.getElementById('output').innerHTML = '<center><h1>Đang tìm dữ liệu của tên miền...</h1></center><br>';
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
           if(xmlhttp.status == 200){
               document.getElementById("output").innerHTML = xmlhttp.responseText;
           }
        }
    }
    
    var filename = document.getElementById('domain').value;
    
    xmlhttp.open("GET", "/gettag.php?domain=" + filename, true);
    xmlhttp.send();
}  