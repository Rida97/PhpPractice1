<?php
  include 'jsPractice.html';             //onclick is the ATTRIBUTE of javascript !
  ?>
  
<html>
<body>
  
    <script>console.log(" Hello ");
   
   </script>
     
     <script src= "script.js" > </script>
     
    
      <p id ="demo" style="display: none"> Hello Rida, javascripting?</p>
 
   
     <button type ="button" onclick ="document.getElementById('demo')"> Click me! </button>      
     
     
      
     <script>
     var age = 12;
     if (age < 18 )
         text = "too young fella ";
     
     
     </script>
     
<select id="year" name="year">
  
    <?php
  

  for($i = 1900; $i < date("Y")+1; $i++){
	  echo '<option value="'.$i.'">'.$i.'</option>';
  }
  ?>
   
</select>

</body>

</html>