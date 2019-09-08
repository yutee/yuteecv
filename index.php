
<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Utibe Okon CV">
  	<meta name="keywords" content="Resume, CV, Utibe, Okon, Utibe Okon, Hire, Employ">
  	<meta name="author" content="Utibe Okon">
  	<meta name="description" content="A resume page of Frontend Developer Utibe Okon">
	<title>Utibe Okon CV</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="contact_action.js"></script>
</head>
<body>
	<div class="bio">
		<div id="legend"><h2>CURRICULUM VITAE</h2></div>
		<div>
		<img class="pic" src="https://res.cloudinary.com/yutee/image/upload/v1566997725/yutee.png" width="150px" height="150px">
		</div>
		<p style="color:#003366;">
		<strong>Name:</strong> Okon Utibe Ekom 
		<br> <br>
		<strong>Date of Birth:</strong> 23 August 1996
		<br> <br>
		<strong>Gender:</strong> Male
		<br> <br>
		<strong>Nationality:</strong> Nigeria
		<br> <br>
		<strong>State of Origin:</strong> Akwa Ibom State
		<br> <br>
		<strong>City of Residence:</strong> Uyo
		</p>
	</div>
	<br>
	<br>
	<div class="tablediv" align="center";>
		<table style="color:#003366;" style="width:100%">
			<tr id="tableHead">
				<th>WORK EXPERIENCE</th>
				<th>EDUCATION</th>
				<th>SKILLS</th>
				<th>PROJECTS</th>
			</tr>
			<tr>
				<td>Rapida Broadband, Uyo <br>
					<strong>Role:</strong> Network Installation Assistant (Intern)
				<strong>Duration:</strong> 6 months
				</td>
				<td>West African Examination Council Cardinal Ekanem Seminary,<br> <strong>Uyo 2006 - 2012</strong>
				<br>
				<br>
				Computer Engineering (Degree)
				University of Uyo, Uyo <br>
				<strong>2014 - Present</strong>
				</td>
				<td>Graphics Design (Adobe Photoshop, Adobe Illustrator and Adobe InDesign)
				<br>
				<br>
				Computer Networking
				<br>
				<br>
				HTML and CSS
				</td>
				<td>Media Campaign Design for Akwa United Football Club 2019 NPFL football season.
				<br>
				<br>
				Brand Identity development for Inter Alumni Football Association
				</td>
			</tr>
		</table>
		<br>
		<br>
		<br>
 	<div class="buttondiv" align="center";>
		<!-- Trigger/Open The Modal -->
			<button id="myBtn">CONTACT UTIBE</button>

		<!-- The Modal -->
			<div id="myModal" class="modal">

  		<!-- Modal content -->
  			<div class="modal-content">
    			<span class="close">&times;</span>
    			<!-- This is the form -->
		<div>
            <form action="index.php" method="post" id="contact-form">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="name" class="sr-only">NAME:</label>
                    <br>
                    <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Name" value="" minlength=4>
                  </div>
                </div>
                <div>
                  <div class="form-group">
                    <label for="email" class="sr-only">EMAIL:</label>
                    <br>
                    <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" value="">
                  </div>
                </div>
                <div>
                  <div class="form-group">
                    <label for="subject" class="sr-only">SUBJECT:</label>
                    <br>
                    <input type="text" class="form-control input-lg" id="subject" name="subject" placeholder="Subject" value="">
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="form-group">
                    <label for="message" class="sr-only">MESSAGE:</label>
                    <br>
                    <textarea class="form-control input-lg" rows="8" id="message" name="message" placeholder="Message" minlength=20></textarea>
                  </div>
                  	<br>
                  <div>
                  	<button type="submit" name="submit" class="btn btn-default btn-lg btn-block" id="mySubmitButton" data-loading-text="Sending...">SEND MESSAGE</button>
                  </div>
  			</div>
	</div>

</body>

<script src="contact_action.js"></script>
</html>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];
$userFeedback= $name. " |". $email. " |". $subject. " |". $message;
if (($name=="")||($email=="")||($message=="")||($subject==""))
{
echo "Kindly complete all the fields <a href=\"\">the form</a> again.";  
}
else {

}

$myFile = fopen ("feedback.txt", "w") or die("Unable to open file!");
echo '<script language="javascript">';
echo 'alert ("Thank You For Contacting Me")';
echo '</script>';
// $txt = "Thank You StartNG";
// fwrite ($myFile, $txt);
fwrite ($myFile, $userFeedback);
fclose ($myFile);

?>