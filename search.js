window.onload=function(){
    var search=document.getElementById("search");
    search.onclick=function(){
        var jobnumber=prompt("请输入工号:","");
        window.location.href="./search.php?jobnumber="+jobnumber;
    };
    var id=document.getElementsByTagName("td")[0];
    if(id&&document.getElementById("result")){
        var result=document.getElementById("result");
        result.style.display="none";
    }
};