<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['mytest@test.ru'])) {$email = $_POST['p.zhigarev703@mail.ru'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "p.zhigarev703@mail.ru"; /*Укажите адрес, га который должно приходить письмо*/
    $sendfrom   = "mytest@test.ru"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $message = "$formData
 <b>Имя пославшего:</b> $name
<b>Телефон:</b> $phone";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo "Спасибо за отправку вашего сообщения!";
    }
    else
    {
    echo "Ошибка. Сообщение не отправлено!";
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>