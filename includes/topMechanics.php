<div id="topMechanics">
<table id="tableMechanics">
	<tr>
		<td valign="top" id="TitleTD"><h1 id="MarathonTitle">Marathon Information</h1></td>
		
		<td valign="top"><form method="get" action="page.php">
		<div class="ui-widget"><input name="keywordkeyword" id="tags" size="60"></div>
		<div><input type="submit" value="Search Text" id="SearchSubmit"/></div></form></td>
		<td>
	</tr>
	<tr><td colspan="2">
		<?php if($index=='YES'){
			print "&nbsp;";
			}else{
				print '<p align="left"><button onclick="goBack()">Go Back</button></p>';
			}
			?>
		</td></tr>
</table>
</div>