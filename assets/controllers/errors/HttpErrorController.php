<?php 
    namespace Assets\Controllers\Errors;

    use Assets\Core\Controller;
    
    class HttpErrorController extends Controller{
        public function notFound() {
            http_response_code(404);            
            $this->view('erros/404');
        }

        public function internalserverError() {
            http_response_code(500);
            $this->view('erros/500');
        }

        public function Aunauthorized() {
            http_response_code(403);
            $this->view('erros/403');
        }
    }
?>