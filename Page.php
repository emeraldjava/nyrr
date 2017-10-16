<?php
    function __autoload($class_name)
    {
        //class directories
        $directorys = array(
            'classes/'
        );
       
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else
                return;
            }           
        }
    }
?>
<?php $index='NO';?>
<?php
 include('./includes/header.php');
?>
<?php
//include('./includes/topMechanics.php');
?>
<?php include('includes/nav.php');?>
<div class="container">
  <div class="jumbotron">
		<?php
			$returnValue = new MarathonInfoApp;
			if(isset($_GET['contentid'])){
				$jake = $_GET['contentid'];
				$jake = (int)$jake;
				$returnValue->returnByContentId($jake);
			}else if(isset($_GET['sectionid'])){
				$snoop = $_GET['sectionid'];
				$snoop = (int)$snoop;
				$returnValue->returnBySectionId($snoop);
			}else if(isset($_GET['groupid'])){
				$bake = $_GET['groupid'];
				$bake = (int)$bake;
				$returnValue->returnByGroupId($bake);
			}else if(isset($_GET['keywordid'])){
				$snoop = $_GET['keywordid'];
				$snoop = (int)$snoop;
				$returnValue->returnKeywordId($snoop);
			}else if(isset($_GET['keywordkeyword'])){
				$glen = $_GET['keywordkeyword'];
				$returnValue->returnKeywordKeyword($glen);			
			}else{
				Print '<p>No Content Specified</p>';
			}
		?>
  </div>
</div>

<?php
 include('./includes/footer.php');
?>