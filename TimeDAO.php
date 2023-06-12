<?php
require_once 'Time.php';
require_once 'Conexao.php';
class TimeDAO{

    public function create(Time $time){
        $sql = 'INSERT INTO time(nome,ano,libertadores,brasileirao,estadual,copadobrasil) values(?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $time->getNome());
        $stmt->bindValue(2, $time->getAno());
        $stmt->bindValue(3, $time->getLibertadores());
        $stmt->bindValue(4, $time->getBrasileirao());
        $stmt->bindValue(5, $time->getEstadual());
        $stmt->bindValue(6, $time->getCopadobrasil());
        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM time';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Time $time){
        $sql = 'UPDATE time SET nome = ?, ano = ?, libertadores = ?, brasileirao = ?, estadual = ?, copadobrasil = ?  WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $time->getNome());
        $stmt->bindValue(2, $time->getAno());
        $stmt->bindValue(3, $time->getLibertadores());
        $stmt->bindValue(4, $time->getBrasileirao());
        $stmt->bindValue(5, $time->getEstadual());
        $stmt->bindValue(6, $time->getCopadobrasil());
        $stmt->bindValue(7,$time->getId());
        $stmt->execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM time WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}


?>