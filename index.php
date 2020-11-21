<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"DELETE rows for table using ajax";
        ?>

    <!--    button with the id of the row using onclick-->
    
    <!--    make sure the delete row has id so that the row will be removed based on the id-->
    <tr id="delete<?php echo $field1name; ?>"> 
       
    <td>                  
    <!-- button with onclick function and id to delete the row-->
    <button name="delete" onclick="deleteAjax(<?php echo $field1name; ?>)">Delete</button>
    </td>
    </tr>
    <script type="text/javascript">
        //function to delete row
        function deleteAjax(id) {
            $.ajax({
                type: 'post',

                //call delete php file 
                url: 'delete.php',
                
                //post to delete php called $delete_id
                data: {delete_id: id},
                success: function (data) {
                    //hide the row after delete
                    $('#delete' + id).hide('slow');
                }
            });
        }
    </script>
<!--    script for ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>
