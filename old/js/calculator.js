function calculateSGPA(){
	//lert('How can you search without any valid keyword?');
	var c1 = c2 = c3 = c4 = c5 = c6 = c7 = c8 = c9 = c10 = 0.00;
	var g1 = g2 = g3 = g4 = g5 = g6 = g7 = g8 = g9 = g10 = 0.00;

	if(document.getElementById('credit0').value > 0)
	{
		c1 = document.getElementById('credit0').value;
		g1 = getGradeValue(document.getElementById('grade0').value);
	}
	if(document.getElementById('credit1').value > 0)
	{
		 c2 = document.getElementById('credit1').value;
		 g2 = getGradeValue(document.getElementById('grade1').value);
	}
	if(document.getElementById('credit2').value > 0)
	{
		 c3 = document.getElementById('credit2').value;
		 g3 = getGradeValue(document.getElementById('grade2').value);
	}
	if(document.getElementById('credit3').value > 0)
	{
		 c4 = document.getElementById('credit3').value;
		 g4 = getGradeValue(document.getElementById('grade3').value);
	}
	if(document.getElementById('credit4').value > 0)
	{
		 c5 = document.getElementById('credit4').value;
		 g5 = getGradeValue(document.getElementById('grade4').value);
	}
	if(document.getElementById('credit5').value > 0)
	{
		 c6 = document.getElementById('credit5').value;
		 g6 = getGradeValue(document.getElementById('grade5').value);
	}
	if(document.getElementById('credit6').value > 0)
	{
		 c7 = document.getElementById('credit6').value;
		 g7 = getGradeValue(document.getElementById('grade6').value);
	}
	if(document.getElementById('credit7').value > 0)
	{
		 c8 = document.getElementById('credit7').value;
		 g8 = getGradeValue(document.getElementById('grade7').value);
	}
	if(document.getElementById('credit8').value > 0)
	{
		 c9 = document.getElementById('credit8').value;
		 g9 = getGradeValue(document.getElementById('grade8').value);
	}
	if(document.getElementById('credit9').value > 0)
	{
		 c10 = document.getElementById('credit9').value;
		 g10 = getGradeValue(document.getElementById('grade9').value);
	}

	var total_credit = parseFloat(c1)+parseFloat(c2)+parseFloat(c3)+parseFloat(c4)+parseFloat(c5)+parseFloat(c6)+parseFloat(c7)+parseFloat(c8)+parseFloat(c9)+parseFloat(c10);
	var total_grade_value = parseFloat(g1)+parseFloat(g2)+parseFloat(g3)+parseFloat(g4)+parseFloat(g5)+parseFloat(g6)+parseFloat(g7)+parseFloat(g8)+parseFloat(g9)+parseFloat(g10);
	if((total_credit > 0) && (total_grade_value > 0))
	{
		var grade_point = (c1*g1) + (c2*g2) + (c3*g3) + (c4*g4) + (c5*g5) + (c6*g6) + (c7*g7) + (c8*g8) + (c9*g9) + (c10*g10);
		var sgpa = parseFloat(grade_point) / parseFloat(total_credit);
		alert('Congratulation!\nYour Semester Grade Point Avaerage (SGPA) is '+sgpa.toFixed(2));
	}
	else
		alert('Error! Some or all data are missing for calculation.');
}

function calculateCGPA(){
	var s1 = s2 = s3 = s4 = s5 = s6 = s7 = s8 = s9 = s10 = 0.00;
	var c1 = c2 = c3 = c4 = c5 = c6 = c7 = c8 = c9 = c0 = 0.00;
	var total_sgpa=0, total_credit = 0;

	if(document.getElementById('sgpa0').value > 0)
	{
		s0 = parseFloat(document.getElementById('sgpa0').value);
		c0 = parseFloat(document.getElementById('cgpa_credit0').value);
	}
	if(document.getElementById('sgpa1').value > 0)
	{
		s1 = parseFloat(document.getElementById('sgpa1').value);
		c1 = parseFloat(document.getElementById('cgpa_credit1').value);
	}
	if(document.getElementById('sgpa2').value > 0)
	{
		s2 = parseFloat(document.getElementById('sgpa2').value);
		c2 = parseFloat(document.getElementById('cgpa_credit2').value);
	}
	if(document.getElementById('sgpa3').value > 0)
	{
		s3 = parseFloat(document.getElementById('sgpa3').value);
		c3 = parseFloat(document.getElementById('cgpa_credit3').value);
	}
	if(document.getElementById('sgpa4').value > 0)
	{
		s4 = parseFloat(document.getElementById('sgpa4').value);
		c4 = parseFloat(document.getElementById('cgpa_credit4').value);
	}
	if(document.getElementById('sgpa5').value > 0)
	{
		s5 = parseFloat(document.getElementById('sgpa5').value);
		c5 = parseFloat(document.getElementById('cgpa_credit5').value);
	}
	if(document.getElementById('sgpa6').value > 0)
	{
		s6 = parseFloat(document.getElementById('sgpa6').value);
		c6 = parseFloat(document.getElementById('cgpa_credit6').value);
	}
	if(document.getElementById('sgpa7').value > 0)
	{
		s7 = parseFloat(document.getElementById('sgpa7').value);
		c7 = parseFloat(document.getElementById('cgpa_credit7').value);
	}
	if(document.getElementById('sgpa8').value > 0)
	{
		s8 = parseFloat(document.getElementById('sgpa8').value);
		c8 = parseFloat(document.getElementById('cgpa_credit8').value);
	}
	if(document.getElementById('sgpa9').value > 0)
	{
		s9 = parseFloat(document.getElementById('sgpa9').value);
		c9 = parseFloat(document.getElementById('cgpa_credit9').value);
	}

	var total_credit = parseFloat(c1)+parseFloat(c2)+parseFloat(c3)+parseFloat(c4)+parseFloat(c5)+parseFloat(c6)+parseFloat(c7)+parseFloat(c8)+parseFloat(c9)+parseFloat(c0);
	var total_sgpa = parseFloat(s1)+parseFloat(s2)+parseFloat(s3)+parseFloat(s4)+parseFloat(s5)+parseFloat(s6)+parseFloat(s7)+parseFloat(s8)+parseFloat(s9)+parseFloat(s0);

	if((total_credit > 0) && (total_sgpa > 0))
	{
		var summationCiGi = (s1*c1) + (s2*c2) + (s3*c3) + (s4*c4) + (s5*c5) + (s6*c6) + (s7*c7) + (s8*c8) + (s9*c9) + (s0*c0);
		var cgpa = parseFloat(summationCiGi) / parseFloat(total_credit);
		alert('Congratulation!\nYour Cummulative Grade Point Avaerage (CGPA) is '+cgpa.toFixed(2));
	}
	else
		alert('Error! Some or all data are missing for calculation.');
}

function getGradeValue(grade){
	if (grade == 'A+')
		return 10;
	else if (grade == 'A')
		return 9;
	else if (grade == 'B+')
		return 8;
	else if (grade == 'B')
		return 7;
	else if (grade == 'C+')
		return 6;
	else if (grade == 'C')
		return 5;
	else if (grade == 'D')
		return 4;
	else if (grade == 'F')
		return 0;
}

function isSgpa(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
 	if (charCode == 46 && evt.srcElement.value.split('.').length>1)
        return false;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isCredit(evt){
 	var charCode = (evt.which) ? evt.which : event.keyCode
 	if (charCode > 31 && (charCode < 48 || charCode > 57)) 
        return false;
 	return true;
}