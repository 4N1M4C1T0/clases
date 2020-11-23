<?php
class profesor
{

    private $pdo;

    public $idProfesor;
    public $nombre;
    public $idioma;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Connect();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(profesor $data)
    {
        try {
            $sql = "INSERT INTO Profesor (nombre, idioma) VALUES (?, ?)";

            $this->pdo
                ->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->idioma
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM Profesor");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM Profesor WHERE idProfesor = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE profesor SET 
						nombre       = ?,
						idioma       = ?
				    WHERE idProfesor = ?";

            $this->pdo
                ->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->idioma,
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM Profesor WHERE idProfesor = ?");
            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
