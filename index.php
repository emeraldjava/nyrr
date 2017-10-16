<?php
include('./classes/MarathonInfoApp.php');
?>
<?php
$pagemechanics = new MarathonInfoApp;
?>
<?php
	$index='YES';
?>
<?php
 include('./includes/header.php');
?>

 
<?php include('includes/nav.php');?>

<?php
 include('./classes/TermsAutoConmplete.php');
 $vickyCracky = new TermsAutoComplete;
 $values=$vickyCracky->returnTerms();
?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    var availableTags = [
   <?php print($values);?>
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
</head>
<body>
 

<!--
<table><tr><td valign="middle">
		<form method="get" id="form1" action="page.php">
		<div class="ui-widget"><input name="keywordkeyword" class="form-control" id="tags">
	    </form></td><td valign="middle">
			<button type="submit" form="form1" value="Submit">Submit</button></td></tr></table>	</div>	
-->


<div class="container">
  <div class="row">
			<?php
				$pagemechanics->menu2();
			?>	
  </div>
</div>

<?php
 include('./includes/footer.php');
?>