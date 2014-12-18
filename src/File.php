<?php

class File
{
	private $fileName='data.txt';

	public function __construct($file=null)
	{
		if($file !== null){
			$this->fileName = $file;
		}
	}
    /**
	 * saves the data to file
	 *
	 */
	public function saveToFile($data)
	{
		if(!empty($data) && is_array($data)){
			if(isset($data['email']) && isset($data['phone']) && isset($data['address']) && isset($data['company'])){
				$string = implode(',', array($data['email'], $data['phone'], $data['address'], $data['company']));
				return file_put_contents($this->fileName, $string.PHP_EOL, FILE_APPEND);	
			}else{
				return false;
			}
			
		}
		return false;
	}

	/**
	 * returns the data fetched form file
	 *
	 */
	public function getFromFile()
	{
		$fileData = file_get_contents($this->fileName);
		if($fileData){
	 		$fileArray = explode("\n", $fileData);
	 		$resultSet = array();
	 		foreach($fileArray as $row){
	 			if(!empty(trim($row))){
	 				$explodArray = explode(',', $row);
	 				$resultSet[] = array(
						'email' => $explodArray[0],
						'phone' => $explodArray[1],
						'address' => $explodArray[2],
						'company' => $explodArray[3],
						);
	 			}
	 		}
	 		return $resultSet;
 		}else{
 			return false;
 		}
 		
		
	}
	
}
?>