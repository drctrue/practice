<?php
class ModelFiles extends Database 
{
	public function addFile($filename)
	{
		return $this->insert_to_db("INSERT INTO `files` (`filename`) VALUES ('$filename')");
	}
	
	public function getFiles() 
	{
		return $this->get_all_db("SELECT * FROM `files` WHERE `filename` IS NOT NULL");
	}
	
	public function deleteFileOne($id) {
		
		return $this->update_to_db("DELETE FROM `files` WHERE `id` = '". $id ."'");
		
	}
}