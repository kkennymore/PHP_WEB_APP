<?php
class NewsPage extends Model{
	public function getList($page,$limit){
            if(urlArrayPos(1)){
		$sql = "SELECT * FROM ".urlArrayPos(1)."_content WHERE Page = '{$page}' AND Status = 1 AND Approved = 1 ORDER BY ID DESC LIMIT 0,$limit";
		return $this->db->prepare($sql);
            }else {
                $sql = "SELECT * FROM en_content WHERE Page = '{$page}' AND Status = 1 AND Approved = 1 ORDER BY ID DESC LIMIT 0,$limit";
		return $this->db->prepare($sql);
            }
	}
	public function getByAlias($alias){
            if(urlArrayPos(1)){
		$sql = "SELECT * FROM ".urlArrayPos(1)."_content WHERE '{$alias}' = ID AND Status = 1";
                $singleFile = $this->db->prepare($sql);
		return $singleFile->fetch();
            }else {
                $sql = "SELECT * FROM en_content WHERE '{$alias}' = ID AND Status = 1";
                $singleFile = $this->db->prepare($sql);
		return $singleFile->fetch();
            }
	}
}