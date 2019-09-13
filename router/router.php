<?php 
class Router
{
	
    protected $routes;

    //Получаем массив с маршрутами и заносим в свойство routes
	public function __construct($routes){
		$this->routes = $routes;
	}

	//Получаем маршрут из URL и обрабатываем.
    public function checkRote($route)
    {
    		if ($this->routes[$route]) {
				//Если есть такой маршрут подключаем наш контроллер
				include $this->routes[$route];
			}else{
				//Если нет, переводим на страницу 404
				include $this->routes['404'];
			}
    }

}

 ?>