<?php 

class App{
	
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        
        //controller
        if(file_exists('../application/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../application/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan controller dan method serta kirim parameter jika ada

        call_user_func_array([$this->controller,$this->method],($this->params));
    
    }

    # method for get and parse the url
    public function parseUrl ()
    {
        if (isset($_GET['url'])){
            # Removes '/' characters from both sides of a string
            $url = trim($_GET['url'],'/');
            # Removes strange characters                    
            $url = filter_var($url,FILTER_SANITIZE_URL);
            # Parsing with '/' delimiter
            $url = explode('/',ucwords($url));                       
            return $url;
        }

    }
}
