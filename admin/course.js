function coursefun(path, id){

               req = new XMLHttpRequest();

               req.open('GET',path,true);
               req.send();

               req.onreadystatechange = function(){
                   if(req.readyState == 4 && req.status == 200){
                       document.getElementById(id).innerHTML = req.responseText;
                   }
               };
           }
