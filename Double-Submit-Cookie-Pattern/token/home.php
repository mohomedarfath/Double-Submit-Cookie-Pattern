<?php
require_once 'chek.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){
	
	var cookie_value = "";
    var dCookie = decodeURIComponent(document.cookie);
	var csrfC = dCookie.split(';')[2]
	if(csrfC.split('=')[0] = "csrfTokenCookie" ){
		cookie_value = csrfC.split('csrfTokenCookie=')[1];
		document.getElementById("token_value").setAttribute('value', cookie_value) ;
	}
	});
</script>

</head>

<body>>
    <h2>Update a Status</h2>
    
    <div >
            <form class="homet" action="result.php" method="post" name="update_form">
          
                 
                    <textarea id="msg"  name="msg" placeholder="comment here" ></textarea><br><br>
           		
					<input type="hidden" name="token" value="" id="token_value"/>
					        
                    <input type="submit" name="cSubmit" class="subcom" value="Update">
                   
                
    </div>

</body>

</html>