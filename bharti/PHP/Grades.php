  


<?php  
    $basic=4000;      
    if ($basic<4000){  
          
           $pf= ($basic*5)/100;
           $ESI=($basic*7)/100;
           $IT=0;
           $PT=200;
          $Deductions =$pf+$ESI+$IT+$PT;

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

          $hra= ($basic*15)/100;
           $SA = ($basic*10)/100;
           $CN=($basic*7)/100;
           $SHA=($basic*11)/100;
           $CA=2500;
           $Earning=$basic+$hra+$SA+$CN+$SHA+$CA;
           $salary=$Earning-$Deductions;  

           echo $salary;    
?>  