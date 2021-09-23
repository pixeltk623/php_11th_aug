<?php  
    $basic=9000;      
if ($basic>=5000 && $marks<10000) {    

           $hra= ($basic*15)/100;
           $SA = ($basic*10)/100;
           $CN=($basic*7)/100;
           $SHA=($basic*11)/100;
           $CA=2500;
           $pf1= ($basic*8)/100;
           $ESI1=($basic*7)/100;
           $IT1= ($basic*2)/100;;
           $PT1=200;
           $Earning1=$basic+$hra+$SA+$CN+$SHA+$CA;
           $Deductions1 =$pf1+$ESI1+$IT1+$PT1;
           $salary1=$Earning1-$Deductions1;
           
        echo "$salary1";    
    }    
 
?>  