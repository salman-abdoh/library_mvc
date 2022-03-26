<?php 
namespace d\app\system;
class Router{



    protected  static $routes=array(); 

    public static function get($url,$callback){
        self::$routes['GET'][$url]=$callback;



    }
    public static function post($url,$callback){
        self::$routes['POST'][$url]=$callback;


    }
    public function put(){

    }
    public function delete(){

    }

    public static function executeRoute($method,$url){
            
        
            if(isset(self::$routes[$method][$url]))
            call_user_func(self::$routes[$method][$url]);
            else {
                echo "page not found";
            }



    }

}
?>