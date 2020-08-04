// function determines course requirements according to user selection 
// and displays courses
function displayCourses()
{
	var status = document.getElementById("status").value;
	var position = document.getElementById("position").value;

	if ( status != 0 && position != 0 )
	{
		document.getElementById("class-table").style.display = "block";
	}
		
	if ( status == 1 && position == 1 )
	{
		document.getElementById("class1").innerHTML = "CS 1301 Programming Principles";
		document.getElementById("class2").innerHTML = "IT 3202 Intro to Web Development";
		document.getElementById("class3").innerHTML = "CSE 3203 Mobile System Overview";
		document.getElementById("class4").innerHTML = "IT 4213 Mobile Web Development";
	}
	else if ( status == 1 && position == 2 )
	{
		document.getElementById("class1").innerHTML = "CS 1301 Programming Principles";
		document.getElementById("class2").innerHTML = "CSE 3153 Database System";
		document.getElementById("class3").innerHTML = "CSE 3801 Professional Practices Ethics";
		document.getElementById("class4").innerHTML = "IT 4153 Advanced Database";
	}
	else if ( status == 2 && position == 1 )
	{
		document.getElementById("class1").innerHTML = "IT 5413 Software Design Development";
		document.getElementById("class2").innerHTML = "IT 5443 Web Technologies";
		document.getElementById("class3").innerHTML = "IT 6203 IT Design Studio";
		document.getElementById("class4").innerHTML = "IT 6753 Advanced Web Development";
	}
	else if ( status == 2 && position == 2 )
	{
		document.getElementById("class1").innerHTML = "IT 5433 Database Design Applications";
		document.getElementById("class2").innerHTML = "IT 6713 Business Intelligence";
		document.getElementById("class3").innerHTML = "IT 6733 Database Administration";
		document.getElementById("class4").innerHTML = "IT 7113 Data Visualization";
	}
}

// function calculates gpa based on submitted grades and displays message
function calcGPA()
{
    var gpa = 0;
	var status = document.getElementById("status").value;
    gpa = ( parseFloat(document.getElementById("grade1").value)
        + parseFloat(document.getElementById("grade2").value)
        + parseFloat(document.getElementById("grade3").value)
        + parseFloat(document.getElementById("grade4").value) ) / 4.0 ;
    document.getElementById("gpa").innerHTML = "Your average GPA is " + gpa.toFixed(2);
	
	var eligibleMessage = "Congratulations! You are eligible to apply for this position.";
	var ineligibleMessage = "Thank you for your interest, but you are not eligible to apply for this position.";
	
	if ( gpa < 3.2 && status == 1 )
	{
		document.getElementById("message").innerHTML = ineligibleMessage;
        document.getElementById("application-link").style.display = "none";
	}
	else if ( gpa < 3.7 && status == 2 )
	{
		document.getElementById("message").innerHTML = ineligibleMessage;
        document.getElementById("application-link").style.display = "none";
	}
	else
	{
		document.getElementById("message").innerHTML = eligibleMessage;
        document.getElementById("application-link").style.display = "block";
        document.getElementById("application-link").innerHTML = "<a href='application.php'>Go to Application</a>";
	}
}

