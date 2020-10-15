








 <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>Employee ID</th>  
                     <th>First Name</th>  
                     <th>Last Name</th>  
                     <th>salary</th>
                     
                      
                </tr>  
           <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->employeeid; ?></td>  
                     <td><?php echo $row->firstName; ?></td>  
                     
                     <td><?php echo $row->lastName; ?></td>
                     <td><?php echo $row->salary; ?></td> 
                       

                       
                </tr>  
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
           </table>  
