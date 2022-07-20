// For Search box validation
function getValue(data){

	//alert(data.value);
	if(data.value.trim().length<1)
	{
		alert('How can you search without any valid keyword?');
		return false;
	}
	else
	{
		return true;
	}
}

function validatePswd(data){
	//alert(data.value);

	if(data.value.trim().length<1)
	{
		alert('Password can neither be empty nor can have only spaces.');
		return false;
	}
	else{
		return true;
	}
}	

function validateAdminName(data){
	//alert(data.value);

	if(data.value.trim().length<1)
	{
		alert('Administrator name can neither be empty ot can have only spaces.');
		return false;
	}
	else{
		return true;
	}
}	

function isNumberKey(evt){
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
     return true;
}

function isName(evt){
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122))
        return false;
     return true;
}

function isRollNo(evt){
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)&& (charCode < 48 || charCode > 57))
        return false;
     return true;
}

function populateProgramme(){
	var department = document.getElementById("dept").value;
	var programmes = ["p1","p2"];

	if(department == "Business Administration")
		programmes = ["MBA","P.G. Diploma in Tourism Management"];     
	else if (department == "Chemical Sciences")
		programmes = ["Integrated B.Sc. B.Ed. in Chemistry","Integrated M.Sc. in Chemistry","M.Sc. in Chemistry", "M.Tech. in Polymer Science and Technology"];    
	else if (department == "Commerce")
		programmes = ["Integrated M.Com."];
	else if (department == "Civil Engineering")
		programmes = ["B.Tech. in Civil Engineering"];
	else if (department == "Computer Science and Engineering")
		programmes = ["B.Tech. in Comuputer Science","MCA", "M.Tech. in Information Technology"];
	else if (department == "Cultural Studies")
		programmes = ["M.A. in Cultural Studies"];
	else if (department == "Electronics and Communication Engineering")
		programmes = ["B.Tech. in Electrical Communication Engineering","B.Tech. in Electronics Communication Engineering", "M.Tech. in Electronics Design and Technology","M.Tec. in Bioelectronics"];
	else if (department == "Energy")
		programmes = ["M.Tech. in Energy Technology"];
	else if (department == "English and Foreign Languages")
		programmes = ["M.A. in English", "M. A. in Linguistics and Language Technology", "Integrated M.A. in English", "Integrated B.A. B.Ed.", "Certificate in Chinese"];
	else if (department == "Environmental Science")
		programmes = ["M.Sc. in Environmental Science"];
	else if (department == "Food Engineering and Technology")
		programmes = ["Integrated M. Tech. in Food Engineering and Technology", "M.Tech. in Food Engineering and Technology", "B.Tech. in Food Engineering and Technology"];
	else if (department == "Hindi")
		programmes = ["M.A. in Hindi","P.G. Diploma in Translation (Hindi)"];
	else if (department == "Mass Communication and Journalism")
		programmes = ["M.A. in Mass Communication and Journalism","P.G. Diploma in Mobile and Multimedia Communication"];
	else if (department == "Mathematical Sciences")
		programmes = ["M.Sc. in Mathematics","Integrated M.Sc. in Mathematics", "Integrated B.Sc. B.Ed."];
	else if (department == "Mechanical Engineering")
		programmes = ["B.Tech. in Mechanical  Engineering","M. Tech. in Mechanical  Engineering"];
	else if (department == "Molecular Biology and Biotechnology")
		programmes = ["M.Sc. in Molecular Biology and Biotechnology","Integrated M.Sc. in Bioscience and Bioinformatics"];
	else if (department == "Physics")
		programmes = ["M.Sc. in Physics","M.Sc.in Nanoscience and Technology", "Integrated M.Sc. in Physics", "Integrated B.Sc. B.Ed"];
	else if (department == "Social Work")
		programmes = ["M.A. in Social Work"];
	else if (department == "Sociology")
		programmes = ["M.A. in Sociology"];

	clearProgrammeList();
	fillProgrammes(programmes);
}

function fillProgrammes(programmeList){
    var programmeDropdown = document.getElementById('programme');
	for(var i = 0; i < programmeList.length; i++)
	{
	    var option = document.createElement('option');
	    option.innerHTML = programmeList[i];
	    option.value = programmeList[i];
	    programmeDropdown.appendChild(option);
	}
}

function clearProgrammeList(){
	var programmeDropdown = document.getElementById('programme');
	for(var i = (programmeDropdown.options.length -1) ; i >=0; i--)
	    programmeDropdown[i] = null;
}

function populateProgrammeEdit(){
	var department = document.getElementById("edept").value;

	if(department == "Business Administration")
		programmes = ["MBA","P.G. Diploma in Tourism Management"];     
	else if (department == "Chemical Sciences")
		programmes = ["Integrated B.Sc. B.Ed. in Chemistry","Integrated M.Sc. in Chemistry","M.Sc. in Chemistry", "M.Tech. in Polymer Science and Technology"];    
	else if (department == "Commerce")
		programmes = ["Integrated M.Com."];
	else if (department == "Civil Engineering")
		programmes = ["B.Tech. in Civil Engineering"];
	else if (department == "Computer Science and Engineering")
		programmes = ["B.Tech. in Comuputer Science","MCA", "M.Tech. in Information Technology"];
	else if (department == "Cultural Studies")
		programmes = ["M.A. in Cultural Studies"];
	else if (department == "Electronics and Communication Engineering")
		programmes = ["B.Tech. in Electrical Communication Engineering","B.Tech. in Electronics Communication Engineering", "M.Tech. in Electronics Design and Technology","M.Tec. in Bioelectronics"];
	else if (department == "Energy")
		programmes = ["M.Tech. in Energy Technology"];
	else if (department == "English and Foreign Languages")
		programmes = ["M.A. in English", "M. A. in Linguistics and Language Technology", "Integrated M.A. in English", "Integrated B.A. B.Ed.", "Certificate in Chinese"];
	else if (department == "Environmental Science")
		programmes = ["M.Sc. in Environmental Science"];
	else if (department == "Food Engineering and Technology")
		programmes = ["Integrated M. Tech. in Food Engineering and Technology", "M.Tech. in Food Engineering and Technology", "B.Tech. in Food Engineering and Technology"];
	else if (department == "Hindi")
		programmes = ["M.A. in Hindi","P.G. Diploma in Translation (Hindi)"];
	else if (department == "Mass Communication and Journalism")
		programmes = ["M.A. in Mass Communication and Journalism","P.G. Diploma in Mobile and Multimedia Communication"];
	else if (department == "Mathematical Sciences")
		programmes = ["M.Sc. in Mathematics","Integrated M.Sc. in Mathematics", "Integrated B.Sc. B.Ed."];
	else if (department == "Mechanical Engineering")
		programmes = ["B.Tech. in Mechanical  Engineering","M. Tech. in Mechanical  Engineering"];
	else if (department == "Molecular Biology and Biotechnology")
		programmes = ["M.Sc. in Molecular Biology and Biotechnology","Integrated M.Sc. in Bioscience and Bioinformatics"];
	else if (department == "Physics")
		programmes = ["M.Sc. in Physics","M.Sc.in Nanoscience and Technology", "Integrated M.Sc. in Physics", "Integrated B.Sc. B.Ed"];
	else if (department == "Social Work")
		programmes = ["M.A. in Social Work"];
	else if (department == "Sociology")
		programmes = ["M.A. in Sociology"];

	clearProgrammeListEdit();
	fillProgrammesEdit(programmes);
}

function fillProgrammesEdit(programmeList){
    var programmeDropdown = document.getElementById('eprogramme');
	for(var i = 0; i < programmeList.length; i++)
	{
	    var option = document.createElement('option');
	    option.innerHTML = programmeList[i];
	    option.value = programmeList[i];
	    programmeDropdown.appendChild(option);
	}
}

function clearProgrammeListEdit(){
	var departmentDropdown = document.getElementById('edept');
	departmentDropdown[0]=null;

	var programmeDropdown = document.getElementById('eprogramme');
	for(var i = (programmeDropdown.options.length -1) ; i >=0; i--)
	    programmeDropdown[i] = null;
}


// For preventing right click
var message="You are not permitted to perform this gesture.";

function clickIE() {
	if (document.all) 
	{
		(message);
		return false;
	}
}

function clickNS(e){
	if(document.layers||(document.getElementById&&!document.all))
	{
		if (e.which==2||e.which==3)
		{
			(message);
			return false;
		}
	}
}
if (document.layers)
{
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS;
}
else
{
	document.onmouseup=clickNS;
	document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")