 <?php
//接收到设备发来的token,这里我手动填上。
$deviceToken = "820e451031704b0f58b00ffb50366d90bddb96db8ac0da42f1b98ef9ece12e36";
//构造消息体
$passphrase = '123456';
$body = array("aps" => array("alert" => '测试测试测试', "badge" => 1, "sound" => 'received5.caf'));
$ctx = stream_context_create();
stream_context_set_option($ctx, "ssl", "local_cert", "push_pro_all.pem");//push_dev_all.pem
stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
//建立socket连接
//'ssl://gateway.push.apple.com:2195', $err,
//'ssl://gateway.sandbox.push.apple.com:2195', $err,
$fp = stream_socket_client("ssl://gateway.push.apple.com:2195", $err, $errstr, 60, STREAM_CLIENT_CONNECT, $ctx);
if (!$fp) { print "Failed to connect $err $errstrn"; return; }
print "Connection OK";
$payload = json_encode($body);
$msg = chr(0) . pack("n",32) . pack("H*", $deviceToken) . pack("n",strlen($payload)) . $payload;
print "sending message :" . $payload . "\n";
fwrite($fp, $msg);
fclose($fp);