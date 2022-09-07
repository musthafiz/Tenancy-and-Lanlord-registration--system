function addElement(idd){


	//create form group 1
	var fgroup = document.createElement("div");
	fgroup.setAttribute('class','form-group row');
	//create label for name
	var leb= document.createElement("label");
	leb.setAttribute('class','col-sm-8');
	leb.setAttribute('style','text-align: left;');
	leb.textContent +='Name';

	//create label for age
	var lebage= document.createElement("label");
	lebage.setAttribute('class','col-sm-4');
	lebage.setAttribute('style','text-align: left;');
	lebage.textContent +='Age';

	//input for name
	var inp= document.createElement("input");
	inp.setAttribute('class','form-control col-sm-12 required');
	inp.setAttribute('type','text');
	inp.setAttribute('name',idd+'fname');
	inp.setAttribute('placeholder','Name');
	inp.setAttribute('title','Name');
	inp.setAttribute('id',idd+'fname');
	leb.appendChild(inp); //add name input with label

	//input for age
	var inpage= document.createElement("input");
	inpage.setAttribute('class','form-control col-sm-12 required-age');
	inpage.setAttribute('type','text');
	inpage.setAttribute('name',idd+'fage');
	inpage.setAttribute('placeholder','Age');
	inpage.setAttribute('title','Age');
	inpage.setAttribute('id',idd+'fage');
	lebage.appendChild(inpage); //add age input with label


	//create label for occupation
	var leboccu= document.createElement("label");
	leboccu.setAttribute('class','col-sm-8');
	leboccu.setAttribute('style','text-align: left;');
	leboccu.textContent +='Occupation';

	//create label for phone
	var lebphn= document.createElement("label");
	lebphn.setAttribute('class','col-sm-4');
	lebphn.setAttribute('style','text-align: left;');
	lebphn.textContent +='Phone';

	//input for occupation
	var inpoccu= document.createElement("input");
	inpoccu.setAttribute('class','form-control col-sm-12 required');
	inpoccu.setAttribute('type','text');
	inpoccu.setAttribute('name',idd+'foccu');
	inpoccu.setAttribute('placeholder','Occupation');
	inpoccu.setAttribute('title','Occupation');
	inpoccu.setAttribute('id',idd+'foccu');
	leboccu.appendChild(inpoccu); //add name input with label

	//input for phn
	var inpphn= document.createElement("input");
	inpphn.setAttribute('class','form-control col-sm-12 required required-bdnum');
	inpphn.setAttribute('type','text');
	inpphn.setAttribute('name',idd+'fphn');
	inpphn.setAttribute('placeholder','+880');
	inpphn.setAttribute('title','Phone');
	inpphn.setAttribute('id',idd+'fphn');
	lebphn.appendChild(inpphn); //add age input with label


	//add label to form group 2
	
	
	

	//add form group with form or tab
	var element = document.getElementById("family");
	var header=document.createElement("h6");
	header.setAttribute('style','margin-bottom: 20px; margin-top: 30px;');
	header.setAttribute('class','text-center col-sm-12');
	var t='Details for family/mess member:'+(idd+1);
	header.textContent +=t;
	fgroup.appendChild(header);
	fgroup.appendChild(leb);
	fgroup.appendChild(lebage);
	fgroup.appendChild(leboccu);
	fgroup.appendChild(lebphn);
	element.appendChild(fgroup);
	

	
	
}

function addel(n){

	var element = document.getElementById("family");
	var header=document.createElement("h4");
	header.setAttribute('style','margin-bottom: 20px;');
	header.setAttribute('class','text-center');
	element.appendChild(header);

	for (var i = 0; i < n; i++) {
	addElement(i);
}
}

function remove(n){
	
	n.innerHTML="";
}

var x=document.getElementById("fnumber").value;
addel(n);

function myFunction(){
    
	var element = document.getElementById("family");
	var v=document.getElementById("fnumber");
    var n=v.value;

	remove(element);
	addel(n);
}




