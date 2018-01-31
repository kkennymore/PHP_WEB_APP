<?php
class SliderPage extends Model{
	public function getSlide($alias){
                if(urlArrayPos(1)){
		$sql = "SELECT * FROM ".urlArrayPos(1)."_content WHERE Status = 1 ORDER BY ID DESC LIMIT 0,{$alias}";
                $singleFile = $this->db->prepare($sql);
		return $singleFile;
                }else{
                $sql = "SELECT * FROM en_content WHERE Status = 1 ORDER BY ID DESC LIMIT 0,{$alias}";
                $singleFile = $this->db->prepare($sql);
		return $singleFile; 
                }
	}
        
}