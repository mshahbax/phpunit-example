<?php

class FileTest extends PHPUnit_Framework_TestCase
{
    private static $fileName = 'test.txt';
    private static $dir = 'temp';
    
    public static function setUpBeforeClass()
    {
        if (!is_dir(self::$dir)) {
            mkdir(self::$dir);
        }
        require_once ('src\File.php');
    }

    public function testSaveToFile()
    {
        
        $fileMapper = new File(self::$dir."\\".self::$fileName);
        $data = array(
        'email' => 'test@mail.com',
        'phone' => '032464464646',
        'address' => 'address testing',
        'company' => 'Test Putitout company',
        );
   
        $saved = $fileMapper->saveToFile($data);
        $this->assertInternalType("int", $saved);
        
    }

    /**
     * @depends testSaveToFile
     */
    public function testGetFromFile()
    {
       $fileMapper = new File(self::$dir."\\".self::$fileName);
       $result = $fileMapper->getFromFile();

       //Assertion
       $this->assertFileExists(self::$dir."\\".self::$fileName);
       $this->assertTrue(is_array($result));
       
       return $result;
       
    }

    /**
     * @depends testGetFromFile
     */
    public function testCheckIndexes(array $result){
        foreach($result as $row){
            $this->assertArrayHasKey('email', $row);
            $this->assertArrayHasKey('email', $row);
            $this->assertArrayHasKey('email', $row);
            $this->assertArrayHasKey('email', $row);
        }
        
    }

    public static function tearDownAfterClass()
    {
        if (file_exists(self::$dir."\\".self::$fileName)) {
            unlink(self::$dir."\\".self::$fileName);
        }
    }
    	
}
?>