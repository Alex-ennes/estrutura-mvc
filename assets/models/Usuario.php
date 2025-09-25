<?php 
    namespace Assets\Models;

    use Assets\Core\Model;

    class Usuario extends Model {
        public function getUserData() {
            // Simulando dados do usuário!!!
            return [
                'nome' => 'Alex Ennes',
                'idade' => 44,
                'email' => 'ennes22@gmail.com'
            ];
        }

        public function createUser($name) {
            $sql = "INSERT INTO usuarios (nome) VALUES (:name)";
            $params = ['name' => $name];
            return $this->db->execute($sql, $params);
        }

        public function getAllUsers() {
            return $this->db->fetchAll('SELECT * FROM usuarios');
        }

        public function getUserById($id) {
            $sql = 'SELECT * FROM usuarios WHERE id = :id';
            $params = ['id' => $id];
            return $this->db->fetch($sql, $params);
        }

        public function getUsersCount() {
            //$sql = 'SELECT COUNT(*) AS count FROM usuarios';
            //$params = ['count'];
            //return $this->db->fetch($sql, $params);
            return $this->db->fetch('SELECT COUNT(*) AS count FROM usuarios')['count'];
        }
    }
?>