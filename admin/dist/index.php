<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ADMIN FORM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<!-- code here -->
	<div class="card">
		<div class="card-image">
		<img src="imgages/create.png">	
			<h2 class="card-heading">
				Get <br>started
				
			</h2>
		</div>

		<form class="card-form" method="POST" action="insert.php" enctype="multipart/form-data">

			<div class="input">
				<input type="file" class="input-field" name="image">
				<label class="input-label">Insert Image</label>
			</div>

			<div class="input">
				<input type="text" class="input-field"  name="name" required/>
				<label class="input-label">Name</label>
			</div>

			<div class="input">
				<input type="textarea" class="input-field" name="about" required/>
				<label class="input-label">Information About You</label>
			</div>

			<div class="input">
				<input type="text" class="input-field" name="language" multiple>
				<label class="input-label">Languages Known to You</label>
			</div>

			
			
			
			<div class="input">
				<input type="text" class="input-field" name="ten_10" required/>
				<label class="input-label">10th Grade Percentage</label>
			</div>

			<div class="input">
				<input type="text" class="input-field"  name="diploma" required/>
				<label class="input-label">Final Year Diploma Percentage</label>
			</div>

			<div class="input">
				<input type="text" class="input-field" name="skills" required/>
				<label class="input-label">Skills</label>
			</div>

			<div class="input">
				<input type="text" class="input-field"  name="hobby" required/>
				<label class="input-label">Hobbies</label>
			</div>



			<div class="action">
			   
				<button class="action-button" name="submit" type="submit">CREATE NOW</button>
			</div>
		</form>
		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
