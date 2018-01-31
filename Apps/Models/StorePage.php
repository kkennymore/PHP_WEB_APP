<?php
class StorePage extends Model{
	public function getList($limit){
                if(urlArrayPos(1)){
		$sql = "SELECT * FROM ".urlArrayPos(1)."_content ORDER BY ID DESC LIMIT 0,$limit";
		return $this->db->prepare($sql);
                } else {
                 $sql = "SELECT * FROM en_content ORDER BY ID DESC LIMIT 0,$limit";
		  return $this->db->prepare($sql);
                }
	}
	public function getByAlias($alias){
            if(urlArrayPos(1)){
		$sql = "SELECT * FROM ".urlArrayPos(1)."_content WHERE '{$alias}' = ID AND Status = 1";
                $singleFile = $this->db->prepare($sql);
		return $singleFile->fetch();
            } else {
                $sql = "SELECT * FROM en_content WHERE '{$alias}' = ID AND Status = 1";
                $singleFile = $this->db->prepare($sql);
		return $singleFile->fetch();
            }
	}
        
}