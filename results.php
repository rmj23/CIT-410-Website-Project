<?php 
include_once('connect_to_data.php');
// write code below

$sql = "SELECT * FROM dbo.forminfo ORDER BY ID DESC";
$query = sqlsrv_query($conn, $sql);
$row_result = sqlsrv_fetch_array($query);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Results</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Styles/results.css">
	<script src="Scripts/index.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129735479-2"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-129735479-2');
	</script>
	
	<!-- Google AdSense (Moneization) -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
  		(adsbygoogle = window.adsbygoogle || []).push({
    	google_ad_client: "ca-pub-9452657992596164",
    	enable_page_level_ads: true
  		});
	</script>
</head>

<body>
	
<div class="container">
	<img class="imageCenter" src="Images/sugarScience2.png" alt="Sugar Science Logo">
</div>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EFCAD4;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	  <ul class="navbar-nav">
		  <li class="nav-item">
        	<a class="nav-link" href="index.html">Home</a>
		  </li>
		  <li class="nav-item active">
			  <a class="nav-link" href="#">Results<span class="sr-only">(current)</span></a>
		  </li>
	  </ul>
  </div>
</nav>
	
<div class="container centerSection">
	<div class="row" style="margin-bottom: 30px;">
		<div class="col center">
			<h1><b>Hi <?php echo $row_result['FirstName']; ?>!</b></h1>
			<h3>Your Sugar Intake Is:</h3>
			<h3><b><?php echo $row_result['Daily_Sugar']; ?> grams/day</b></h3>
			<p>This is about <b><?php echo $row_result['Percentage']; ?>%</b> of your daily calories. Your TDEE was <b><?php echo $row_result['TDEE']; ?></b> the FDA reccomended sugar intake would be ~30 g/d.</p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>In the US, added sugars account for up to 17% of the total calorie intake of adults and up to 14% for children.</p>
	</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/P7B4fuufMOor6" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><a href="https://giphy.com/gifs/good-burger-dummy-brain-dead-P7B4fuufMOor6"></a></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>Consuming fructose increases your hunger and desire for food more than glucose, the main type of sugar found in starchy foods. Additionally, excessive fructose consumption may cause resistance to leptin, an important hormone that regulates hunger and tells your body to stop eating.</p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/GJKaveXvhTkPu" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/food-pizza-burgers-GJKaveXvhTkPu"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>High-sugar diets have been associated with an increased risk of many diseases, including heart disease, the number one cause of death worldwide.</p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/ZFiNY3IDiP9UA" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/heart-biology-ZFiNY3IDiP9UA"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>A population study comprising over 175 countries found that the risk of developing diabetes grew by 1.1% for every 150 calories of sugar, or about one can of soda, consumed per day.</p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/3o7TKUfdgGbAVTlzX2" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/signwithrobert-sign-with-robert-3o7TKUfdgGbAVTlzX2"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p> Eating too much sugar can cause cavities. Bacteria in your mouth feed on sugar and release acid byproducts, which cause tooth demineralization. </p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/p9AFx1AXZihdS" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/p9AFx1AXZihdS"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>A study in over 30,000 people found that those who consumed 17–21% of calories from added sugar had a 38% greater risk of dying from heart disease, compared to those consuming only 8% of calories from added sugar.</p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/3o6EhFq4JKF6fcJbCE" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/percolategalactic-beating-the-heart-wants-what-it-3o6EhFq4JKF6fcJbCE"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>A study following 8,000 people for 22 years showed that men who consumed 67 grams or more of sugar per day were 24% more likely to develop depression than men who ate less than 40 grams per day. </p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/l0MYNMLrgTrfpqD16" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dark-hat-darkness-l0MYNMLrgTrfpqD16"></a></p></p>
		</div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>A study in over 430,000 people found that added sugar consumption was positively associated with an increased risk of esophageal cancer, pleural cancer and cancer of the small intestine. </p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/rl82PGPJWS5MY" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/and-own-prints-rl82PGPJWS5MY"></a></p></p>
	  </div>
	</div>
	<div class="row">
		<div class="col center" style="padding: 40px;">
		  <p>Consuming high amounts of sugar has been shown to accelerate telomere shortening, which increases cellular aging. In fact, each daily 20-ounce (591-ml) serving of sugar-sweetened soda equated to 4.6 additional years of aging, independent of other variables. </p>
		</div>
		<div class="col center">
			<p><iframe src="https://giphy.com/embed/JnFGSoZkr4AJW" width="250" height="175" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hoppip-hoppip-imt-death-JnFGSoZkr4AJW"></a></p></p>
	  </div>
	</div>
	<div class="row">
		<div class="col center" style="padding-top: 40px;">
		  <p><b>Over the course of the 15-year study on added sugar and heart disease, participants who took in 25% or more of their daily calories as sugar were more than twice as likely to die from heart disease as those whose diets included less than 10% added sugar. Overall, the odds of dying from heart disease rose in tandem with the percentage of sugar in the diet—and that was true regardless of a person’s age, sex, physical activity level, and body-mass index. </b></p>
		</div>
	</div>
</div>

<?php sqlsrv_close($conn); ?>

<footer>
	<p><a href="https://www.uncw.edu">UNCW</a> | <a href="https://csb.uncw.edu/">Cameron School of Business</a> | <a href="https://csb.uncw.edu/isom/mis.html">Management Information Systems</a><br/>Created by Ruben Morales Jr and Jake Wnuk | rm6839@uncw.edu</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
