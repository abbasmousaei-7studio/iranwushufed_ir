<?php
session_start();

include 'DB.php';
$db = new DB();

$tblName = 'test';





// INSERT DATA
$userData = array(
                'usrname' => 'Abbas Mousaei',
                'usrpassword' => 'taha1363',
                'usrdate' => date("Y-m-d")
            );
    $insert = $db->insert($tblName,$userData);
    $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
    echo $statusMsg;







    // UPDATE DATE 
    $id = 1;
    $condition = array('id' => $id);
    $update = $db->update($tblName,$userData,$condition);
    $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
    echo $statusMsg;








    //DELETE DATE
    $condition = array('id' => $id);
    $delete = $db->delete($tblName,$condition);
    $statusMsg = $delete?'User data has been deleted successfully.':'Some problem occurred, please try again.';
    echo $statusMsg;









    // SELECT QUERY
    // @conditions array select, where, order_by, limit and return_type
    $conditions = array(
        'order_by' => 'id ASC',
        'return_type' => 'all'
    ); 

    $count = $db->getRows($tblName, array('return_type'=>'count'));
    echo $count . "Item(s)<br>";
    
    $users = $db->getRows($tblName, $conditions);
    if(!empty($users)) { $count = 0; 
    foreach($users as $user){ 
        $count++;?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $user['usrname']; ?></td>
            <td><?php echo $user['usrpassword']; ?></td>
            <td><?php echo $user['usrdate']; ?></td>
        </tr>
        <?php 
            } 
            } 
        ?>
