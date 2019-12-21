<?php
class Authenicate extends CI_model
{
    
    public function forget($email,$sq1,$sq2,$ans1,$ans2)
    {
        $f=$this->db->where(['Aemail'=>$email,'ques1'=>$sq1,'ans1'=>$ans1,'ques2'=>$sq2,'ans2'=>$ans2])
                    ->get('headdetalis');
                    if($f->num_rows())
                    {
                        return $f->row()->Aemail;
                    }
                    else
                    {
                        return false;
                    }
    }   
    public function ucheck($u_email)
    {
        $uc=$this->db->where(['Uemail'=>$u_email])
                     ->get('userverification');
                    if($uc->num_rows())
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
    }
    public function inse($tb,$grei)
	{
    
    $this->db->insert($tb,$grei);
    }
    public function updat($em)
    {
        echo "yyyyy";
        $u_submit = $this->input->post('repss_submit');
        if(isset($u_submit))
        {
            echo "okk";
        }
    }
    public function upda()
    {
       

        $this->db->update('headdetalis'); 
        $this->db->set('Apassword', 'password2');
        $this->db->set('Apassword', 'SecuQues1');
        $this->db->set('Apassword', 'security_answer');
        $this->db->set('Apassword', 'SecuQues2');
        $this->db->set('Apassword', 'security_answer1');
        $this->db->where('Aemail', '$f_email');
       // $this->db->update('headdetalis'); 
        
    }
    public function user_veri($u_otp)
    {
      
    }
    public function fotp($f_otp)
    {
        $u=$this->db->where(['AOTP'=>$f_otp])
                    ->get('headdetalis');
                    if($u->num_rows())
                    {
                        return True;
                    }
                    else{
                        return false;
                    }
    }
    /*public function gri($u_email)
    {
        $u=$this->db->qurey("select Uemail from userverification where Uemail= )
                    ->get('grievancesdetails');
                    echo "<pre>";
                    print_r($u->row());
                    exit;
                    if($u->num_rows())
                    {
                        return $q->row()->Uemail;
                    }
                    else{
                        return false;
                    }
    }*/
    public function getdata($email,$password)
    {   
        $q=$this->db->where(['Aemail'=>$email,'Apassword'=>$password])
                    ->get('headdetalis');
                
                   
                    if($q->num_rows())
                    {
                        return $q->row()->Authorisedpt;
    
                    }
                    else
                    {
                        return false;
                    }
    }
    
}
?>