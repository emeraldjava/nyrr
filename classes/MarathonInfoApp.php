<?php
  class MarathonInfoApp{
  public static $gleb=1;
  public static $gleb2="Here is a String";
  		private $hostname='localhost';
		private $username='root';
		//private $password="gleem7458";
		//private $password='';
		private $password='singtex2895';
		
  public function menu(){
				$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT * FROM marathoninfo.terms where terms.contentgroup LIKE 'Yes'";
			print '<ul>';
			foreach ($dbh->query($sql) as $row){
			print '<li><a href="Page.php?groupid='.$row["id"].'">'.$row["term"].'</a></li>';
			}
			print '</ul>';
  }
  
   public function menu2(){
				$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT * FROM marathoninfo.terms where terms.section LIKE 'Yes'";
			print '<ul>';
			foreach ($dbh->query($sql) as $row){
			//print '<div class="col-sm-4"><a href="Page.php?sectionid='.$row["id"].'" class="menuModLinks">'.$row["term"].'</a></div>';
			print '<div class="col-sm-4"><a href="Page.php?sectionid='.$row["id"].'" class="menuModLinks">
					<button type="button" class="btn btn-default">'.$row["term"].'</button></a></div>';
			}
			print '</ul>';
  }
  
	public function toString(){
	 print '<p>'.self::$gleb.' string value is "'.self::$gleb2.'"'.'</p>';
	}
	public function returnByContentId($contentid){
		try {
			$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT * FROM marathoninfo.content where id='".$contentid."'";
		foreach ($dbh->query($sql) as $row)
			{
			echo '<h2>'.$row["title"] .'</h2>';
			echo $row["content"]."<br/>";
			}
			$dbh = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}
	public function returnByGroupId($groupid){
		try {
			$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT content.id, content.title, content.content FROM marathoninfo.linksgroups LEFT JOIN  marathoninfo.content ON linksgroups.content=content.id WHERE linksgroups.contentgroup=".$groupid."";
		foreach ($dbh->query($sql) as $row)
			{
			echo '<h2><a href="Page.php?contentid='.$row['id'].'">'.$row["title"] .'</a></h2>';
			}
			$dbh = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}

	public function returnBySectionId($sectionid){
		try {
			$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT content.id, content.title, content.content FROM marathoninfo.content WHERE content.section=".$sectionid."";
		foreach ($dbh->query($sql) as $row)
			{
			echo '<h2><a href="Page.php?contentid='.$row['id'].'">'.$row["title"] .'</a></h2>';
			}
			$dbh = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}	
	
	public function returnKeywordId($keyword){
		try {
			$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT content.title, content.content FROM marathoninfo.linkskeywords LEFT JOIN  marathoninfo.content ON linkskeywords.content=content.id WHERE linkskeywords.keyword=".$keyword."";
		foreach ($dbh->query($sql) as $row)
			{
			print '<h2>'.$row['title'].'</h2>';
			print $row['content'];
			}
			$dbh = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}
	public function returnKeywordKeyword($keyword){
		try {
			$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT content.id, content.title, content.content FROM marathoninfo.terms LEFT JOIN marathoninfo.linkskeywords ON linkskeywords.keyword = terms.id LEFT JOIN content ON linkskeywords.content = content.id WHERE terms.term LIKE '".$keyword."'";
		foreach ($dbh->query($sql) as $row)
			{
			print '<h2>'.$row['title'].'</h2>';
			print $row['content'];
			}
			$dbh = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}
  }
?>