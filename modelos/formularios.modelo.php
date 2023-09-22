<?php

require_once 'conexion.php';

class ModeloFormularios
{
    /*=====================================
    REGISTRO
    ======================================*/
    public static function mdlRegistro($tabla, $datos)
    {
        #statement: declaracion
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)"
        );

        #bindParam(): Vincula una variable de PHP a un parámetro de sustitucion con nombre o de signo de interrogación correspondiente
        #de la sentencia SQL que fue usada para preparar la sentencia
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $datos['password'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();

        $stmt = null;
    }

    /* =====================================
    SELECCIONAR REGISTROS
    ======================================*/

    public static function mdlSeleccionarRegistros($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare(
                "SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha  FROM $tabla ORDER BY id DESC"
            );

            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare(
                "SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla  WHERE $item = :$item ORDER BY id DESC"
            );
            $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }
        $stmt->close();

        $stmt = null;
    }

    /* =====================================
    ACTUALIZAR REGISTROS
    ======================================*/
    public static function mdlActualizarRegistro($tabla, $datos)
    {
        #statement: declaracion
        $stmt = Conexion::conectar()->prepare(
            "UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id=:id"
        );

        #bindParam(): Vincula una variable de PHP a un parámetro de sustitucion con nombre o de signo de interrogación correspondiente
        #de la sentencia SQL que fue usada para preparar la sentencia
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();

        $stmt = null;
    }

    /* =====================================
    ELIMINAR REGISTROS
    ======================================*/

    public static function mdlEliminarRegistro($tabla, $valor)
    {
        #statement: declaracion
        $stmt = Conexion::conectar()->prepare(
            "DELETE FROM $tabla WHERE id=:id"
        );

        $stmt->bindParam(':id', $valor, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();

        $stmt = null;
    }
}