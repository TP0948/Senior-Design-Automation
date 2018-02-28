<?php include "CreateUser.php";


$userDir = new UserDir($pathToUserDir);
$userDir->createImageDirectory();

class UserDir extends SplFileInfo
{
    public function createThumbDirectory()
    {
        return $this->createSubdirectory('thumb');
    }
    public function createImageDirectory()
    {
        return $this->createSubdirectory('image');
    }
    private function createSubdirectory($email)
    {
        $path = $this->getPathname();
        $dir = $path . PATH_SEPARATOR . $email;
		
        return mkdir($dir);
    }
}

createSubdirectory();
createImageDirectory();


?>