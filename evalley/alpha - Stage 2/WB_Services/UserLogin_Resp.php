<?php
header("Content-Type: application/json; charset=UTF-8");

require ('../Engine/SQLManager.php');
require ('../Engine/SessionManager.php');
require ('../Config/Conn_Config.php');

$data = json_decode($_POST["inf"], false);

$login_id = $data->UserID;
$login_pw = $data->UserPw;


$SqlMgr = new SQLManager(Connection::$Host, Connection::$DB_Id, Connection::$DB_Pw, Connection::$Schema);
$SqlMgr->Connect();
$Conn = $SqlMgr->GetConnection();
$stmt = $Conn->prepare("CALL sp_Login(?,?);");
$stmt->bind_param("ss", $login_id, $login_pw);
$res = $stmt->execute();
$st_res = $stmt->get_result();

$Status = 0;
$Pid = null;
$Roles = null;

if($st_res->num_rows > 0){
    while($rows = $st_res->fetch_assoc()){
        $Status = $rows["isLogged"];
        $Pid = $rows["uid"];
        $Admin = $rows["roles"];
    }
}

$stmt->close();
$SqlMgr->Disconnect();

$data_enc = "";

if($Status > 0){
    $Session = new SessionManager();
    $Session->StartSession();
    $Session->CreateSession();
    
    $Session->AddData("Login_Status", $Status);
    $Session->AddData("Login_ID", $Pid);
    $Session->AddData("Login_Roles", $Admin);
    $data_enc = "true";
}
else{
    $data_enc = "false";
}


echo json_encode(array("Result"=>$data_enc));
