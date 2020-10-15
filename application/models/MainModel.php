<?php
	class MainModel extends CI_Model{
		
		function createUsersTable(){
				
		}


		function storeDataToDB(){
			$firstName=$this->input->post('firstName');
			$lastName=$this->input->post('lastName');
			$email=$this->input->post('email');
			$userid=$this->input->post('userid');
			$password=$this->input->post('password');
			$address=$this->input->post('address');
			$nationality=$this->input->post('nationality');
			$phone=$this->input->post('phone');
			$catagory=$this->input->post('catagory');
			$days=$this->input->post('days');

             


            $random = rand(1000, 9999);
            $room=rand(100,999);

            $customerid=$random;

            $pay=$days*5000;

			$sql = "INSERT INTO customer (customerid,firstName, lastName, email,userid,password,address,nationality,phone) VALUES('$customerid','$firstName','$lastName','$email','$userid','$password','$address','$nationality','$phone')";
			

			$date=date("d/m/y");
			$time=date("h:i:sa");
			$this->db->query($sql);
			$sql2= " INSERT INTO booking(customerid,catagory,room,pay,days,date,time)VALUES('$customerid','$catagory','$room',$pay,'$days','$date','$time')  ";
            $this->db->query($sql2);
		}

		function checkLogin(){
			
			$userid=$this->input->post('userid');
			$password=$this->input->post('password');
			
			
			$sql=" SELECT *FROM customer WHERE userid = '$userid' AND password='$password'   ";

			if($this->db->query($sql)->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}

		function retriveData($userid){
			$sql = "SELECT * FROM customer WHERE userid='$userid'";
			return $this->db->query($sql)->result_array();
		}


		function checkAdminLogin(){
			$userid=$this->input->post('userid');
			$password=$this->input->post('password');
			
			
			$sql=" SELECT *FROM admin WHERE userid = '$userid' AND password='$password'   ";

			if($this->db->query($sql)->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}

		function adminData($userid){
			$sql = "SELECT * FROM customer WHERE userid='$userid'";
			return $this->db->query($sql)->result_array();
		}

		function fetch_data(){
			$query=$this->db->query("SELECT *FROM employee ORDER BY employeeid DESC");
			return $query;
		}
		function fetch_customer_data(){
			$query=$this->db->query("SELECT *FROM customer ORDER BY customerid DESC");
			return $query;
		}
		function Mbycatagory(){
			$catagory=$this->input->post('catagory');
			$query=$this->db->query("SELECT  *FROM customer, booking WHERE customer.customerid=booking.customerid ");
			return $query;
		}
		function Bycid(){
			$customerid=$this->input->post('$customerid');
			$query=$this->db->query("SELECT  *FROM customer  where customerid ='$customerid'  ");
			return $query;
		}








































	}
?>