<?php

header('Content-Type: text/html; charset=utf-8');

require_once './control/connection.php';

require_once './control/DB.php';

require_once './control/PersianCalendar.php';

require_once './control/class.php';

$dbcon = new DB();

// admin to dailyword
        // $stmt = $conn->prepare('SELECT * FROM tbladmin');
        // $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_BOTH);
        // $count = $stmt->rowCount();
        // while ($result = $stmt->fetch()) {
        //     $PicAdmin = explode('/', $result['PicAdmin']);
        //     $inserData = [
        //         'title' => $result['NameAdmin'],
        //         'imageurl' => end($PicAdmin),
        //     ];
        //     $insert = $dbcon->insert('dailyword', $inserData);
        // }
        // echo 'Successfuly Done!';

// age to ageCategories
        // $stmt = $conn->prepare('SELECT * FROM tblage');
        // $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_BOTH);
        // $count = $stmt->rowCount();
        // while ($result = $stmt->fetch()) {
        //     $inserData = [
        //         'title' => $result['NameAge'],
        //     ];
        //     $insert = $dbcon->insert('ageCategories', $inserData);
        // }
        // echo 'Successfuly Done!';

// boss to boardOfDirectors
        // $stmt = $conn->prepare('SELECT * FROM tblboss');
        // $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_BOTH);
        // $count = $stmt->rowCount();
        // while ($result = $stmt->fetch()) {
        //     $PicBoss = explode('/', $result['PicBoss']);
        //     $inserData = [
        //         'title' => $result['NameBoss'],
        //         'position' => $result['BossBoss'],
        //         'imageurl' => end($PicBoss),
        //     ];
        //     $insert = $dbcon->insert('boardofdirectors', $inserData);
        // }
        // echo 'Successfuly Done!';

// calendar to calendars

// champcomitee to boards (هیئت ها)
