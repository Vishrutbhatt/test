

<html>

   <body>
      <form action = "/updateuser" method = "post">
         
      		{{ csrf_field() }}
         <input type="hidden" name='uid' value="<?php echo $data[0]->uid; ?>">
         Name:<input type = 'text' name = 'uname' value = '<?php echo $data[0]->uname; ?>'/>
         Age:<input type = 'text' name = 'age' value = '<?php echo $data[0]->age; ?>'/>
               
                  <input type = 'submit' value = "Update" />

                  
               
      </form>
   </body>
</html>
