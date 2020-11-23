<?php
class estudiante
{

    private $pdo;

    public $idEstudiante;
    public $nombre;
    public $email;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Connect();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(estudiante $data)
    {
        try {
            $sql = "INSERT INTO Estudiante (nombre, email) VALUES (?, ?)";

            $this->pdo
                ->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->email
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM Estudiante");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM Estudiante WHERE idEstudiante = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE Estudiante SET 
						nombre       = ?,
						email       = ?
				    WHERE idEstudiante = ?";

            $this->pdo
                ->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->email,
                        $data->idEstudiante
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM Estudiante WHERE idEstudiante = ?");
            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
