<?php
    namespace App\Models;

    class City
     {
        private static $table = "cidade";
    
        public static function getCity($cep)
        {
            $conexaoBD = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = "SELECT cep, endereco, bairro, cidade, estado FROM cidade WHERE cep = :cep";
            $statement = $conexaoBD->prepare($sql);
            $statement->bindValue(':cep', $cep);
            $statement->execute();

            if($statement->rowCount() > 0) {
                return $statement->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhuma cidade encontrada");
            }
        }

        public static function insert($data)
        {

            $conexaoBD = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = "INSERT INTO cidade (cep, endereco, bairro, cidade, estado) VALUES (:cep, :endereco, :bairro, :cidade, :estado)";
           
            $teste = "SELECT cep from cidade WHERE cep = {$_POST['cep']}";
            $result = $conexaoBD->query($teste);
            
        



            $statement = $conexaoBD->prepare($sql);
            $statement->bindValue(':cep', $data["cep"]);
            $statement->bindValue(':endereco', $data["endereco"]);
            $statement->bindValue(':bairro', $data["bairro"]);
            $statement->bindValue(':cidade', $data["cidade"]);
            $statement->bindValue(':estado', $data["estado"]);
            $statement->execute();

    
            if ($statement->rowCount() > 0) {
                return 'CEP INSERIDO COM SUCESSO!!';
            } else {
                echo json_encode(array('data'=>"O Cep já foi inserido!"), JSON_UNESCAPED_UNICODE);
                exit;
            }
        }

      
    }