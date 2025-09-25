<?php
    namespace Assets\Controllers;

    use Assets\Core\Controller;
    use Assets\Core\Database;
    use Assets\Models\Usuario;

    class HomeController extends Controller {
        public function index() {
            $usuario = new Usuario();
            $data = $usuario->getUserData();

            $userId1 = $usuario->getUserById(2);
            $totalUsuarios = $usuario->getUsersCount();

            echo 'Usuario com id 1: ' . $userId1['nome'] . '<br>';
            echo 'Total de usuarios cadastrados: ' .$totalUsuarios;
            
            //retorn a view de home
            $this->view('home/index', $data);
        }

        public function contact() {
            $this->view('home/contact');
        }
    }
?>