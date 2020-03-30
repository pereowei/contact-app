<html>
    <head>
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact</title>
        <link rel="stylesheet" href="stylesheet.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">    
        
        <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = document.getElementById("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementById("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
    </head>
    
   <body>
    <div class="main">
       <div class="purplehead">
        <div class="top">Contacts<a href="add.php"> | <a href="add.php"><img src="images/add.png" /></a></div>
        </div>
        <div class="search">  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
</div>
