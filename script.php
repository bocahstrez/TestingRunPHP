<?php

// URL tujuan
$url = 'https://pmulihan-pmblokiran-pbf3988.webnode.page/contact/';

// Data yang akan dikirimkan
$data = array(
    'wnd_ShortTextField_561929084' => 'Ya Allah Semoga yang bikin Phising Facebook ini, tidak diterima di Surga, dan Hidupnya susah serba kekurangan... AAMIIN....',
    'wnd_ShortTextField_574214566' => 'semogahidupmusengsara@gmail.com',
    'wnd_ShortTextField_137976793' => 'berikan azab untuk pembuat akun phising ini',
    'wnd_DateField_331770975' => '1975-02-15',
    'wnd_LongTextField_462380817' => '0856666666666',
    'send' => 'wnd_FormBlock_358891434'
);

// Format data menjadi URL-encoded string
$postData = http_build_query($data);

// Inisialisasi Curl
$ch = curl_init();

// Set opsi Curl
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set header sesuai dengan yang diberikan
$headers = array(
    'Host: pmulihan-pmblokiran-pbf3988.webnode.page',
    'Connection: keep-alive',
    'Content-Length: ' . strlen($postData),
    'Cache-Control: max-age=0',
    'sec-ch-ua: "Not A(Brand";v="99", "Microsoft Edge";v="121", "Chromium";v="121"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'Upgrade-Insecure-Requests: 1',
    'Origin: https://pmulihan-pmblokiran-pbf3988.webnode.page',
    'Content-Type: application/x-www-form-urlencoded',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.0.0',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: navigate',
    'Sec-Fetch-User: ?1',
    'Sec-Fetch-Dest: document',
    'Referer: https://pmulihan-pmblokiran-pbf3988.webnode.page/contact/',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-US,en;q=0.9',
    'Cookie: _ga=GA1.1.406001474.1707971312; PHPSESSID=15e467te6m24p7n04sbkkvfvo8; isbrowser=1; _ga_92DTJYQXGQ=GS1.1.1707971312.1.1.1707972265.0.0.0'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Eksekusi Curl dan tangkap response
$response = curl_exec($ch);

// Tangkap jika ada error
if(curl_errno($ch)){
    echo 'Error: ' . curl_error($ch);
}

// Tutup Curl
curl_close($ch);

// Tampilkan response
echo $response;

?>
