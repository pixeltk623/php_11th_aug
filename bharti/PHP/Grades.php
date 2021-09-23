  


<?php  
    $basic=5000;      
    if ($basic<33){    
        echo "fail";    
    }    
    else if ($basic>=34 && $basic<50) {    
        echo "D grade";    
    }    
    else if ($basic>=50 && $basic<65) {    
       echo "C grade";   
    }    
    else if ($basic>=65 && $basic<80) {    
        echo "B grade";   
    }    
    else if ($basic>=80 && $basic<90) {    
        echo "A grade";    
    }  
    else if ($basic>=90 && $basic<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
?>  