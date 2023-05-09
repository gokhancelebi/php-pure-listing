<?php

function get_contect_messages($id = null){
    $db = gc_db();

    if ($id == null){

        $query = $db->prepare('SELECT * FROM contact order by id desc');
        $query->execute();
        $messages = $query->fetchAll(PDO::FETCH_ASSOC);
        return $messages;
    }

    $query = $db->prepare('SELECT * FROM contact where id = :id');
    $query->execute([
        'id' => $id
    ]);


    if ($query->rowCount() == 0){
        return null;
    }

    $message = $query->fetch(PDO::FETCH_ASSOC);
    return $message;
}

function delete_contact_message($id){
    $db = gc_db();
    $query = $db->prepare('DELETE FROM contact where id = :id');
    $query->execute([
        'id' => $id
    ]);

    return true;
}