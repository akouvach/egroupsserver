
<?php

class Conexion {

    // Local 
    private $driver = "mysql";
    private $host = "localhost";
    private $port = 3306;
    private $user = "root";
    private $pass = "";
    private $dbName =  "participemos";
    private $charset = "utf8";

    private $heroku = false;
    
    protected function conex(){

    //     if($this->heroku){
    //         //cambio el contenido de las variables

    //         $dbopts = parse_url(getenv('DATABASE_URL'));
    // //$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
    //         $driver = "pgsql";
    //         $host = $dbopts["host"];
    //         $port = $dbopts["port"];
    //         $user = $dbopts["user"];
    //         $pass = $dbopts["pass"];
    //         $dbName =  ltrim($dbopts["path"],'/');
    //         $charset = "utf8";

    //     }


        try {
            $pdo = new PDO("{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbName};charset={$this->charset}",$this->user,$this->pass);

            if($pdo){
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              return $pdo;
            } else {
                throw new Exception("error en la conexion la creación de la conexión");
            }

        } catch (PDOException $err){
            throw $err;
        } catch (Error $err){
            throw $err;
        } catch (Exception $ex){
            throw $ex;
        }

    }
}
?>
