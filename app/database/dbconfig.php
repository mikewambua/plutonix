<?php
session_start();

require('connect.php');

function test($value){ //To be deleted duration production
    echo "<pre>", print_r($value), "</pre>";
    die();
}


function executeQuery($sql, $data){
    global $connection;
    $stmt = $connection->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions=[]){
    global $connection;
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }else{
        $i = 0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}


function selectOne($table, $conditions){
    global $connection;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach($conditions as $key => $value){
        if($i===0){
            $sql = $sql . " WHERE $key=?";
        }else{
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $result = $stmt->get_result()->fetch_assoc();
    return $result;
}

function create($table, $data){
    global $connection;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
        foreach($data as $key => $value){
            if($i===0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


function update($table, $id, $data){
    global $connection;
    $sql = "UPDATE $table SET ";

    $i = 0;
        foreach($data as $key => $value){
            if($i===0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

    $sql = $sql . " WHERE id=?";
    $data['id'] =$id;
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $stmt->affected_rows;
}


function delete($table, $id){
    global $connection;
    $sql = "DELETE FROM clients WHERE id=?";
    $stmt = executeQuery($sql, ['id' => $id]);
    $id = $stmt->insert_id;
    return $stmt->affected_rows;
}

// To be used when implementing for published posts
function getpublishedposts(){
    global $connection;
    // SELECT * posts WHERE published=1
    $sql = "SELECT P.*u.username FROM posts AS P JOIN users AS u ON p.user_id=u.id WHERE p.published=?";
    $stmt = executeQuery($sql, ['published'=>1]);
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $result;
}

// Search Posts to be implemented
function searchPosts($term){
    global $connection;

    $match = '%' . '%';
    $sql = "SELECT 
                P.*u.username 
                FROM posts AS P 
                JOIN users AS u 
                ON p.user_id=u.id 
                WHERE p.published=?
                AND p.title LIKE ? OR p.content LIKE ?";
    $stmt = executeQuery($sql, ['published'=>1, 'title'=>$match, 'content'=>$match]);
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $result;
}
