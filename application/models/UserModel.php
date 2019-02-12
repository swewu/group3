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

    public function Login($id, $pass){
		$sql ="SELECT * FROM user where username = '".$id."' and password = '".$pass."' ";
		// var_dump($sql);
		$query = $this->db->query($sql);
		$result = false;
		if($query){
			foreach ($query->result() as $row ) {
				if($row->password == $pass){
					$_SESSION['login'] = 1;
					$_SESSION['userid'] = $row->userid;
					$_SESSION['username'] = $row->username; 
					$_SESSION['role'] = $row ->role;	
					$result = true;			
				}
			}
        }
        var_dump($result);
		return $result;
    }

    public function insert($studentid, $coursename, $name,  $courseid, $year, $term, $grade){
        $data = array(
            'studentid' => $studentid,
            'courseid' => $courseid,
            'coursename' => $coursename,
            'name'=> $name,
            'year' => $year,
            'term' => $term,
            'grade' => $grade
        );
        $this->db->insert('historygrade', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getsubjectre()
    {
        $sql = "SELECT * FROM regrade";
		$query = $this->db->query($sql);
		return $query;
    }

    public function gethistory()
    {
        $sql = "SELECT * FROM historygrade";
		$query = $this->db->query($sql);
		return $query;
    }

    // public function delete($historyid){
    //     return $this->db->delete('history', array('historyid' => $historyids));
    // }


    // public function delete($historyid){
    //     return $this->db->delete('history', array('historyid' => $historyids));
    // }

    // public function check($historyid){
    //     $status = 2;
    //     $sql ="SELECT * FROM history where historyid = '".$historyid."' and status = '".$status."' ";
	// 	// var_dump($sql);
    //     $query = $this->db->query($sql);
    //     return $query;
        
    // }
    



    // public function deletesubjecthistory($historyid)
	// {
	// 	$sql = "delete  FROM historygrade where historyid= '".$historyid."' ";
	// 	$query = $this->db->query($sql);	
	// 	return $query;
    // }
    // public function deletesubjectre($historyid)
	// {
	// 	$sql = "delete  FROM regrade where gradeid= '".$historyid."' ";
	// 	$query = $this->db->query($sql);	
	// 	return $query;
    // }
    // public function editsubject($historyid){
	// 	$sql ='SELECT * FROM historygrade where historyid = "'.$historyid.'" ';
	// 	//var_dump($sql);
	// 	$query = $this->db->query($sql);
	// 	return $query;
    // }
    

    public function updateeditsubject($historyid, $studentid, $courseid, $year, $term, $grade)
    {
        $sql ='UPDATE historygrade SET courseid="'.$courseid.'", year="'.$year.'", term="'.$term.'", grade="'.$grade.'" WHERE historyid="'.$historyid.'";';
		$query = $this->db->query($sql);
		
		return $query;
    }
    public function updateeditsubjectteacher($historyid, $studentid, $courseid, $year, $term)
    {
        $sql ='UPDATE historygrade SET courseid="'.$courseid.'", year="'.$year.'", term="'.$term.'"  WHERE historyid="'.$historyid.'";';
		$query = $this->db->query($sql);
		
		return $query;
    }

    
}
