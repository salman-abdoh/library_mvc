<?php
namespace d\app\system;

class AppSystem{
   
    public  $request;
    
    function __construct()
    {

        $this->request=new Request();

    } 
    
    public function start(){
         $this->request->checkRequest();
        // echo "st";
        

    }
    
}

?>