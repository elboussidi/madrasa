<?php 
    if(isset($_SESSION['lev'])){
        $i= $_SESSION['id'] ;
        $tstlev=$_SESSION['lev'];
    echo "  <a class='nav-link active'  href='prof.php?id=$i' role='tab' aria-controls='v-pills-home' aria-selected='true'>profile</a> ";
    if($tstlev == "derecteur"){
        echo "
          
        <a class='nav-link'   href='member.php?id=$i' role='tab' aria-controls='v-pills-profile' aria-selected='false'>member</a>
        <a class='nav-link' href='student.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>student</a>
        <a class='nav-link' href='note.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>note</a>
    
    ";}elseif ($tstlev == "prof") {
echo "      
        <a class='nav-link' href='student.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>student</a>
        <a class='nav-link' href='note.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>note</a>
         <a class='nav-link' href='note.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>MY student</a>
    "; 
            } elseif ($tstlev == "student"){
                 echo "  
                       <a class='nav-link' href='mynote.php?id= $i role=tab' aria-controls='v-pills-settings' aria-selected='false'>MY NOTE</a>
                ";   
            }
    
           
    }
    
    
    
    ?>