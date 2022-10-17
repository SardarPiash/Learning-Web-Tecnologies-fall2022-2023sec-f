<?php
   $currentpass=$_POST['cpass'];
   $newpass=$_POST['npass'];
   $renpass=$_POST['rnpass'];

   if(($currentpass!=$newpass) && ($newpass==$renpass))
   {
    echo "Valid";
   }
   else{
    echo "INVALID";
   }

   
?>