/usr/bin/php

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.drsuporti.com.br/core/v2/api/chats/send-text',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "number" : "5598981633677",
    "message" : "Vubis Informa:Servidor  Proxmox  iniciado com sucesso [CSHC]",
    "forceSend" : true,
    "verifyContact" : false
}',
  CURLOPT_HTTPHEADER => array(
    'access-token: 5fad509a6039bac8482982cd',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.drsuporti.com.br/core/v2/api/chats/send-text',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "number" : "55999878126601",
    "message" : "Vubis Informa:Servidor  Proxmox  iniciado com sucesso [CSHC]",
    "forceSend" : true,
    "verifyContact" : false
}',
  CURLOPT_HTTPHEADER => array(
    'access-token: 5fad509a6039bac8482982cd',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
