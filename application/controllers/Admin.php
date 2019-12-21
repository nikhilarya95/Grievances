<?php
    class admin extends CI_controller
    {
        public function index()
                {
                    $this->form_validation->set_rules('emil','Email ID','required|valid_email');
                    $this->form_validation->set_rules('pass','Password','required');
                    $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;">','</p>');
                    if($this->form_validation->run())
                    {
                        $email=$this->input->post('emil');
                        $pass=$this->input->post('pass');
                        $this->load->model('Authenicate');
                        $q=$this->Authenicate->getdata($email,$pass);
                        if($q)
                        {    

                            $this->session->set_userdata('Authorisedpt',$q);
                            
                            return redirect('admin/dashboard');
                        }
                        else
                        {
                            $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                            return redirect('admin/index');
                        }
                    }   
                    else
                    {
                        $this->load->view('feedback/home');
                    }
        
                    
                }
               
        public function reply_sol()
        {
           
            $this->form_validation->set_rules('sol','solution','required');
            $this->form_validation->set_rules('sol_val','solution','required');
            $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;">','</p>');
            if($this->form_validation->run())
            {
               $sol=$this->input->post('sol');
                $sol_val=$this->input->post('sol_val');
                $conn= mysqli_connect('localhost', 'root',"",'kec1'); 
                $quer= "update grievancesdetails SET Gsolution='$sol' WHERE Gid='$sol_val';";
                mysqli_query($conn, $quer);
                echo "<script>alert('Solution inserted');</script>";
                $this->load->model('Authenicate');
                $this->load->view('feedback/prin');
            }
            else
            {
                echo "<script>alert('Solution not inserted');</script>";
            }

        }
              /*  public function filt()
                {
                    
                    $connection = mysqli_connect('localhost', 'root',"",'kec1');
                    $cate=$this->input->post('ctg');
                    $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Category= '$cate' ;";
                    $result = mysqli_query($connection, $query); 
                    
                    if($result->num_rows>0)
                    {
                        while($row=$result-> fetch_assoc())
                        { if($row["Category"]=='College'&& $s=='Principal')
                            {
                            echo"<tr ><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>
                       
                        Accept</button>
                            </div>
                            </div></td></tr>";
              
                        }}
                        echo "</table>";
                    }
                    else{
                        echo"0";
              
                    }
                    
                }*/
         public function dashboard()
        {
        if(!$this->session->userdata('Authorisedpt'))
         
          return redirect('user/login');
          $this->load->view('feedback/prin');
         
        }

    }