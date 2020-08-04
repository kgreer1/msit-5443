--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Center for Applied Research in Information Technology | Student Job Application</title>
	<link rel="stylesheet" type="text/css" href="carit-site.css"/>
</head>
<body>
<div>
	<!--KSU header and links-->
	<div class="top-nav">
		<?php include ('includes/top-nav.php'); ?>
	</div>

	<!--site header-->
	<div class="header">
		<?php include ('includes/site-header.php'); ?>
	</div>
  
	<div class="row">
		<!--site menu-->
		<div class="leftcolumn">
			<?php include ('includes/site-nav.php'); ?>
		</div>
		
		<!--site content-->
		<div class="rightcolumn">
		  
      <h2>Student Job Application</h2>
      
          <form action="form-action.php" method="post">
          
            <table width="100%" border="0">
              <tr>
                <td width="20%"><label for="first name">First Name: </label></td>
                <td><input type="text" name="fname" size="30" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="last name">Last Name: </label></td>
                <td><input type="text" name="lname" size="30" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="street1">Street Address Line 1: </label></td>
                <td><input type="text" name="street1" size="60" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="street2">Street Address Line 2: </label></td>
                <td><input type="text" name="street2" size="60" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="city">City: </label></td>
                <td><input type="text" name="city" size="30" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="state">State: </label></td>
                <td><select name="state">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="GA">Georgia</option>
                        <option value="FL">Florida</option>
                        <option value="MS">Mississippi</option>
                        <option value="TN">Tennessee</option>
                        <option value="WA">Washington</option>
                    </select></td>
              </tr>
              <tr>
                <td width="20%"><label for="zip code">Zip: </label></td>
                <td><input type="text" name="zip" size="30" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="email">Email: </label></td>
                <td><input type="email" name="email" size="60" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="phone">Phone: </label></td>
                <td><input type="text" name="phone" size="30" /></td>
              </tr>
              <tr>
                <td width="20%"><label for="position">Position Applying For: </label></td>
                <td><input type="radio" name="position" value="Web Programming" />Web Programming
                    <input type="radio" name="position" value="Database Design" />Database Design</td>
              </tr>
              <tr>
                <td width="20%"><label for="essay">Write a short essay on how your experience has prepared you for this position (500 words max): </label></td>
                <td><textarea name="essay" style="width:600px; height:300px"></textarea></td>
              </tr>
              <tr>
                <td width="20%"><label for="references">Provide the names and contact information of two professional references: </label></td>
                <td><textarea name="references" style="width:600px; height:200px"></textarea></td>
              </tr>
            </table>
          
          <input type="submit" name="submit" class="form-button" value="Submit" />
          <input type="reset" name="reset" class="form-button" value="Clear Form" />
          
          </form>
    </div>
  
  </div>
	<!--footer-->
	<div class="footer">
		<?php include ('includes/footer.php'); ?>
	</div>

</div>
</body>
</html>

