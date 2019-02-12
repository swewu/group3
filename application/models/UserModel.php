<?php

class UserModel extends CI_Model
{

    public function create($id, $username, $password, $role)
    {
        $data = array(
            'userid' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function checkLogin($id, $pass)
    {
		$sql ="SELECT * FROM user where username = '".$id."' and password = '".$pass."' ";
		// var_dump($sql);
		$query = $this->db->query($sql);
		$result = false;
        if($query)
        {
			foreach ($query->result() as $row ) {
				if($row->password == $pass){
					$_SESSION['login'] = 1;
                    $_SESSION['username'] = $row->username; 
                    // $_SESSION['role']=$row->role;	
					$result = true;			
				}
			}
        }
        var_dump($result);
		return $result;
    }

    public function getuser()
    {
        $sql = "SELECT * FROM historygrade";
		$query = $this->db->query($sql);
		return $query;
    }

    public function insertsubjecthistory($historyid, $term, $year, $grade, $studentid, $courseid)
    {
        $data = array(
            'historyid' => $historyid,
            'term' => $term,
            'year' => $year,
            'grade' => $grade,
            'studentid' => $studentid,
            'courseid' => $courseid
        );
        $this->db->insert('historygrade', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insertsubjectre($gradeid, $term, $year, $grade, $studentid, $courseid)
    {
        $data = array(
            'gradeid' => $gradeid,
            'term' => $term,
            'year' => $year,
            'grade' => $grade,
            'studentid' => $studentid,
            'courseid' => $courseid
        );
        $this->db->insert('regrade', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getsubjecthistory()
    {
        $sql = "SELECT * FROM historygrade";
		$query = $this->db->query($sql);
		return $query;

    }
    public function getsubjectre()
    {
        $sql = "SELECT * FROM regrade";
		$query = $this->db->query($sql);
		return $query;

    }
    public function deletesubjecthistory($historyid)
	{
		$sql = "delete  FROM regrade where gradeid= '".$historyid."' ";
		$query = $this->db->query($sql);	
		return $query;
    }
    public function deletesubjectre($historyid)
	{
		$sql = "delete  FROM regrade where gradeid= '".$historyid."' ";
		$query = $this->db->query($sql);	
		return $query;
	}

  
    
    
}
