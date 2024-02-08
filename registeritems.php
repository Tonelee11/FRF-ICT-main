<?php
    require "connection.php";
    header("content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $data=[];
        $sql="select  *  from items";
       $result=$conn->query($sql);
        if ($result){
            // fetch results
            if(mysqli_num_rows( $result)>0){
                while($row=$result->fetch_assoc()){
                    $data[]=$row;       
                }
                $status=200;
                $message="data fetched";
             
            }else{
                $status=404;
                $message="no data fetched";
                
            }
          
        }
        $response=[
            "status"=>$status,
            "data"=>$data,
            "message"=>$message
        ];
        
        echo json_encode($response);
    }
?>