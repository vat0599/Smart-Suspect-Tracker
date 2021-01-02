<?php include('d.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Intelligent Surveillance Aid</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
  
</head>
	<body>
    <div id="login">
      <h1 class="h"> ENTER A NAME </h1>
	  
      <form name='form-login' method="post" action="d.php?action=add&name=$name&radio=today=value" >
		<?php include('errors.php'); ?>
		
		  <span class="fontawesome-user"></span>
          <input type="text" name="user" id="user" placeholder="Name" required value="<?php echo $name; ?>">
		  
		  <label class="container">Today
		  <input type="radio" checked="checked" name="radio" value="today">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="container">Week
		  <input type="radio" name="radio" value="week">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="container">Month
		  <input type="radio" name="radio" value="month">
		  <span class="checkmark"></span>
		  </label>
		  
        <input type="submit" value="Get Data" name="get_data" formaction="d.php?action=add&name=$name&radio=today=value">
		
		<p> <button class="GFG"><a href="display.php" style="color: white;"><strong>Display all the data</strong></a> </button></p>
		</form>


</body>
</html>