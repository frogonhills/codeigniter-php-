








 <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>Customer ID</th>  
                     <th>First Name</th>  
                     <th>Last Name</th>  
                     <th>E-mail</th>
                     <th>Address</th>
                     <th>Nationality</th>
                     <th>phone</th>
                     
                      
                </tr>  
           <?php  
           if($fetch_customer_data->num_rows() > 0)  
           {  
                foreach($fetch_customer_data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->customerid; ?></td>  
                     <td><?php echo $row->firstName; ?></td> 
                     <td><?php echo $row->lastName; ?></td> 
                     <td><?php echo $row->email; ?></td>
                     <td><?php echo $row->address; ?></td>
                     <td><?php echo $row->nationality; ?></td> 
                     <td><?php echo $row->phone; ?></td>
                       

                       
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
