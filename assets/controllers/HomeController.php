<?php
    namespace Assets\Controllers;

    use Assets\Core\Controller;
    use Assets\Models\Usuario;

    class HomeController extends Controller {
        public function index() {
            $usuario = new Usuario();
            $data = $usuario->getUserData();
            //retorn a view de home
            $this->view('home/index', $data);
        }

        public function contact() {
            $this->view('home/contact');
        }
    }
?>