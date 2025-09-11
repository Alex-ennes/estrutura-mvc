<?php 
    class HttpErrorController extends Controller{
        public function NotFound() {
            http_response_code(404);            
            $this->view('erros/404');
        }

        public function InternalserverError() {
            http_response_code(500);
            $this->view('erros/500');
        }

        public function Aunauthorized() {
            http_response_code(403);
            $this->view('erros/403');
        }
    }
?>