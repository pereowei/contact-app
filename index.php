<?php
	$title = 'Contact'; 
	
	include 'header.php'; 
	require 'db_connect.php'; 

	 $result = $mysqli->query('SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `image` FROM `contact`');
		
	

$rows = mysqli_num_rows($result); 


for ($j = 0 ; $j < $rows ; ++$j)
{	

	extract(mysqli_fetch_assoc($result)); 
echo
    

'
       <div class="listname" id="myTable">
        <div class="listcontent" id="tr">
           <div class="listimage"><img src="' . $image . '" width="50px" height="50px" style="border-radius:50%" /></div>
            <div class="list-text">
            <div class="name" id="td"><a href="contact.php?id=' . $id .'">' . $firstname . " " . $lastname . '</a></div>
            <div class="phone">' . $phone .'</div>
            
            </div>
            <div class="icon"><a href="edit.php?id='. $id .'"><img src="images/edit.png" /></a></div>
            <div class="icon"><a href="delete.php?id='. $id .'"><img src="images/delete.png" /></a></div>

            
           
           </div>
       
       
       </div>';
    
}

include 'footer.php'; 
?>
