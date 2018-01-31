<?php
class Message extends Model{
	public function save($data, $id = null){
		if(!isset($data['name']) || !isset($data['email']) || !isset($data['message'])){
			return false;
		}
		$id = (int)$id;
		$name = $this->db->escape($data['name']);
		$email = $this->db->escape($data['email']);
		$message = $this->db->escape($data['message']);
		
		if(!$id){//add data
			$sql = "
			INSERT INTO messages
			set name = '{$name}',
		    email = '{$email}',
			message = '{$message}'
			";
		}else{//update data
			$sql = "
			UPDATE messages
			set name = '{$name}',
		    email = '{$email}',
			message = '{$message}'
			WHERE id = {$id}
			";
		}
		return $this->db->query($sql);
	}
}
