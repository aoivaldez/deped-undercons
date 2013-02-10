

<script language="javascript" type="text/javascript">
 function dropdownlist(listindex)
 {
 
document.curriculum.subcategory.options.length = 0;
 switch (listindex)
 {
 	case "elementary":
 		 document.curriculum.subcategory.options[0]=new Option("Select Grade Level","");
 		 document.curriculum.subcategory.options[1]=new Option("Grade 1","Grade 1");
 		 document.curriculum.subcategory.options[2]=new Option("Grade 2","Grade 2");
 		 document.curriculum.subcategory.options[3]=new Option("Grade 3","Grade 3");
 		 document.curriculum.subcategory.options[4]=new Option("Grade 4","Grade 4");
 		 document.curriculum.subcategory.options[5]=new Option("Grade 5","Grade 5");
 		 document.curriculum.subcategory.options[6]=new Option("Grade 6","Grade 6");
 	break;

 	case "highschool":
 		document.curriculum.subcategory.options[0]=new Option("Year Level","");
 		document.curriculum.subcategory.options[1]=new Option("1st Year","1st Year");
 		document.curriculum.subcategory.options[2]=new Option("2nd Year","2nd Year");
 		document.curriculum.subcategory.options[3]=new Option("3rd Year","3rd Year");
 		document.curriculum.subcategory.options[4]=new Option("4th Year","4th Year");
 	break;

 }
 	return true;
 }
 </script>

 <form action = "test.php" method = "post" name = "curriculum">

 		Subject Name: <input type = "text" name = "subj_name"><br>
 		School Level: 
 		<select name = "sch_level" id="category" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
 		 <option value="">Select Category</option>
		 <option value="elementary">Elementary</option>
		 <option value="highschool">High School</option>
		</select><br>
		Academic Level:
		<script type="text/javascript" language="JavaScript">
 			document.write('<select name="subcategory"><option value="">Select Sub-Category</option></select>')
 		</script>
		<noscript>
				<select name="subcategory" id="subcategory" >
 					<option value="">Select Sub-Category</option>
 				</select>
 		</noscript>	
 		<br>School Year: <input type = "text" name = "sch_year"><br>
 		<input type = "submit" name = "sub">
 </form>

