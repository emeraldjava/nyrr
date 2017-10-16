 <?php
 class TermsAutoComplete {
  		private $hostname='localhost';
		private $username='root';
		private $password='singtex2895';
		
		  public function returnTerms(){
			  	$rowCount = 0;
				$keywords='';
				$dbh = new PDO("mysql:host=$this->hostname;dbname=marathoninfo",$this->username,$this->password);
			$sql = "SELECT * FROM marathoninfo.terms";
			print '<ul>';
			foreach ($dbh->query($sql) as $row){
			$keywords.='"'.$row['term'].'",';
			$rowCount++;
			
			}
			return $keywords;
		  }
 
 }
 ?>