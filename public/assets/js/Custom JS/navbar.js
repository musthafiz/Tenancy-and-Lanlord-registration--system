window.onload=showActive();


function showActive(){

 var url = window.location.pathname;
 var tr="";
for (var i = url.length - 1; i >= 0; i--) {

	if(url[i]!='/')
	{
		tr=url[i]+tr;
	}
		

	if(url[i]=='/')
	{
		break;	
	}

}

var navitem=document.getElementsByClassName('nav-item');
       for (var i =  0; i < navitem.length; i++) {
       	if (tr==getHref(navitem[i])){
    navitem[i].classList.add("active");
       	}
       }
     

}
   
   function getHref(navitem){
   	var navlink=navitem.getElementsByClassName('nav-link');
   	var href=navlink[0].getAttribute("href")
   	return href;
   }