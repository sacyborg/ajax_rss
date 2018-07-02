<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function showRSS(str){
            if(str.length==0){
                document.getElementById("output").innerHTML= "";
                return;
            }
            
            if(window.XMLHttpRequest){
                xmlhttp= new XMLHttpRequest();
            }
            else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if(xmlhttp.readyState==4&& xmlhttp.status==200){
                    document.getElementById("output").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","rss.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <p>Please select an option to get RSS</p>
    <form>
    <select onchange="showRSS(this.value)">
        <option value="">Select an RSS-Feed</option>
        <option value="cnn">CNN</option>
        <option value="bbc">BBC</option>
        <option value="pc">PC World</option>
        </select>
    </form>
    <div id="output">
    
    </div>
</body>
</html>