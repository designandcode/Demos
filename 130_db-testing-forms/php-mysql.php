<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/jquery-json-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery/jquery-1.4.2.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
<script type="text/javascript">
					
$(function(){

	
	
	// Autopopulate records into dropdown
	for (i in db["records"]) {
		//$('#single form select').append('<option>'+db["records"][i][0]+'</option>');
		$('#single form select').append('<option value="'+db["records"][i][0]+'">'+db["records"][i][1]+'</option>');
	}
	
	// Select all fields from a single record
	$("select").change(function(){
		var selectedOption = $(this).val();
		$("#single-results").empty();
			$('.table tr').removeClass('active');
		
		if (selectedOption == "Select a Record") {
			$("#single-results").append(selectedOption);
		}
		for (i in db["records"][selectedOption]) {
			$("#single-results").append(db["records"][selectedOption][i] +"<br />");
			$('.table tr.'+selectedOption).addClass('active');
		}
	});	
		
	
	// Search for single record
	$('#search input:submit').click(function(){
		inputVal = $('#search input:text').val();
			$('#search #search-single-results').empty();
			if (typeof db["records"][inputVal] == 'undefined') {
				$("#search #search-single-results").append("Record does not exist in the database");
			}
			
			$('.table tr').removeClass('active');
			
			for (i in db["records"][inputVal]) {
				$("#search #search-single-results").append(db["records"][inputVal][i] +"<br />");
				
				$('.table tr.'+inputVal).addClass('active');
			};
			
			
		
		return false;
	});

	
	// Return all fields from all records
	$(".table").append('<p>Count: '+ db["count"] +'</p>');
	var myRows = [], $myTable = $('.table');
	myRows.push('<table><tbody>');
	
	for (i in db["records"]) {
		myRows.push('<tr class="'+db["records"][i][0]+'">');
		for (j in db["records"][i]) {
			myRows.push('<td>' + db["records"][i][j] + '</td>');
		}
		myRows.push('</tr>');
	}
	
	myRows.push('</tbody></table>');
	$myTable.append(myRows.join(''));
	
	
	
});					
</script>
</head>
<body>
<div id="single">
	<form>
		<h4>Single Record</h4>
		<select>
			<option>Select a Record</option>
		</select>
		</form>
	<div id="single-results">Single Record</div>
</div>
	<div id="search">
		<form>
			<input type="text" />
			<input type="submit" value="Search" />
		</form>
		<div id="search-single-results"></div>
	</div>
	<h4 class="all-records">All Records</h4>
	<div id="all">
	<div class="table"></div>
	</div>
</body>
</html>