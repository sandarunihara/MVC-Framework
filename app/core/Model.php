<?php

class Model{
    use Database;

    function insert($data){
        $keys=array_keys($data);

        $query="insert into user (".implode(",",$keys).") values (:".implode(",:",$keys).")";
        $this->query($query,$data);
        print_r($data);
        print_r($query);
    }

    function find($data){
        
        $keys=array_keys($data);
        $query="select * from user where ";

        foreach ($keys as $key){
            $query.=$key . "= :".$key . "&&";
        }
        $query=trim($query,"&&");
        print_r($query);
        $result=$this->query($query,$data);
        return $result;
    }

    function update($id,$data,$id_column='id'){
        $keys=array_keys($data);
        $query="update user set ";

        foreach($keys as $key){
            $query .= $key ." = :".$key .", ";
        }

        $query=trim($query,", ");

        $query.=" where $id_column = :$id_column";
        $data[$id_column]=$id;
              
         $this->query($query,$data);
         return false;

    }

    function delete($id){
        $data['id']=$id;

        $query='delete  from user where id =:id';
        $result=$this->query($query,$data);
        return $result;
    }
}