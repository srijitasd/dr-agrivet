<?php
session_start();

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods');

include_once "../dbh.inc.php";

$send_email = true;

$data = json_decode(file_get_contents("php://input"), true);

$filter = escape_string($conn, $data);

if (empty($filter['vstr_nm']) || empty($filter['vstr_cntct_no']) || empty($filter['vstr_email']) || empty($filter['vstr_note']) || empty($filter['vstr_cntry_code'])) {
    echo json_encode(array('message' => "Please fill the required fields", "status" => 400));
} elseif (empty($filter['verify_captcha']) || $filter['verify_captcha'] != $_SESSION['captcha']) {
    echo json_encode(array('message' => "captcha verification failed", "status" => 400));
} elseif (!filter_var($filter['vstr_email'], FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9_ -]/", $filter['vstr_nm'])) {
    echo json_encode(array('message' => "invalid", "status" => 400));
} elseif (!filter_var($filter['vstr_email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('message' => "Please check your Email Address", "status" => 400));
} elseif (!preg_match("/^[a-zA-Z -]/", $filter['vstr_nm'])) {
    echo json_encode(array('message' => "Please check your Name", "status" => 400));
} elseif (strlen($filter['vstr_cntry_code']) > 4) {
    echo json_encode(array('message' => "Please check your country code", "status" => 400));
} elseif (strlen($filter['vstr_cntct_no']) > 14 || strlen($filter['vstr_cntct_no']) < 10  && gettype($filter['vstr_cntct_no']) !== "integer") {
    echo json_encode(array('message' => "Contact number should range between 10 to 14 charecters", "status" => 400));
} else {
    if ($filter['vstr_alt_cntct_no'] == "") {
        unset($filter['vstr_alt_cntct_no']);
    }
    unset($filter['verify_captcha']);

    $status = insert_data($conn, "tbl_web_nqry", $filter);

    if (!$status) {
        echo json_encode(array('message' => "failed", "status" => 400));
    } else {
        if ($send_email) {
            require "PHPMailer-master/PHPMailerAutoload.php";
            $mail = new PHPMailer(true);
            //$mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Username = "online.comprint@gmail.com";
            $mail->Password = "Comprint.1234";
            $mail->setFrom($filter['vstr_email'], 'contact form');
            $mail->addAddress("online.comprint@gmail.com");
            $mail->addReplyTo($filter['vstr_email']);
            $mail->SMTPOptions = array('ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'llow_self_signed' => false
            ));
            $mail->Subject = "Contact Us";
            $mail->Body    = "<h1>dr agrivet</h1>";

            if (!$mail->send()) {
                echo "Message could not be sent.";
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo json_encode(array("status" => 201));
            }
        }
    }
}









//* FUNCTIONS

function escape_string($conn, $array)
{
    $initial_filter = array();
    foreach ($array as $key => $value) {
        $a = trim(mysqli_real_escape_string($conn, $array[$key]));
        //* CUSTOM FUNCTION (REF: ../functions.php)
        $initial_filter = array_push_assoc($initial_filter, $key, $a);
    }

    return $initial_filter;
}

function array_push_assoc($array, $key, $value)
{
    $array[$key] = $value;
    return $array;
}

function insert_data($conn, $table_name, $data)
{
    //* EMPTY ARRAYS
    $columnNames = array();
    $placeHolders = array();
    $values = array();
    $bindString = array();
    $bindValues = array();

    foreach ($data as $key => $val) {
        $columnNames[] = '`' . $key . '`';
        $placeHolders[] = '?';
        $values[] = $val;
    }

    $sql = "Insert into `{$table_name}` (" . join(',', $columnNames) . ") VALUES (" . join(',', $placeHolders) . ")";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        http_response_code(500);
        print_r($conn);
        echo (json_encode(array("message" => "error", "status" => 500)));
        exit();
    }

    // build bind mapping (ssdib) as an array
    foreach ($values as $value) {
        $valueType = gettype($value);

        if ($valueType == 'string') {
            $bindString[] = 's';
        } else if ($valueType == 'integer') {
            $bindString[] = 'i';
        } else if ($valueType == 'double') {
            $bindString[] = 'd';
        } else {
            $bindString[] = 'b';
        }

        $bindValues[] = $value;
    }

    array_unshift($bindValues, join('', $bindString));

    //* convert the array to an array of references
    $bindReferences = array();
    foreach ($bindValues as $k => $v) {
        $bindReferences[$k] = &$bindValues[$k];
    }

    //* call the bind_param function passing the array of referenced values
    call_user_func_array(array($stmt, "bind_param"), $bindReferences);

    mysqli_stmt_execute($stmt);
    return true;
}
