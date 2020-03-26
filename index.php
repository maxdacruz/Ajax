<!DOCTYPE html>
<html>
<head>
	<title>My First Ajax Call</title>
</head>
<?php
require_once 'database.php';
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
$query = " SELECT id, first_name, last_name FROM directors ";
$result = mysqli_query($connect, $query);
?>
<body>
	<a href="search.html">Search</a>
	<div id="resultForm">...</div>
	<p>Insert a movie</p>
	<form method="POST">
		<div>
			<label for="title">Title :</label>
			<input type="text" name="title" id="title" required>
		</div>
		<div>
			<label for="year">Year :</label>
			<input type="date" name="year" id="year" required>
		</div>
		<div>
      <textarea name="descriptions" id="" cols="30" rows="10"></textarea>
		</div>
		<div>
    <select name="director" id="directors">
    <option selected="selected" value="">Slect director</option>
      <?php  while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="'. $row["id"].' ">'. $row["first_name"] .'</option>';
      }
      ?>
    </select>
		</div>
		<input type="submit" name="submit" value="Add a movie">

	</form>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
$(function(){
	$('input[type="submit"]').click(function(e){
		console.log('hohoho');
		e.preventDefault();
		$.ajax({
			url: 'addMovie.php',
			type: 'post',
			data: $('form').serialize(),
			success: function(result) {
				$('#resultForm').html('<div >'+result+'</div>');
			},
			error: function(err){
				// If ajax errors happens
			}
		});
	});
});
</script>
</body>
</html>