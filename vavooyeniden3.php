<?php
if (isset($_GET['source'])) {
    $url = $_GET['source'];

    // Ana domain
    $mainDomain = 'ngolpdkyoctjcddxshli469r.org';

    // URL'nin parselanması
    $parsedUrl = parse_url($url);
    
    if (isset($parsedUrl['host'])) {
        // Ana domain ile karşılaştırma
        if (preg_match('/^([a-z0-9-]+\.)?' . preg_quote($mainDomain, '/') . '$/i', $parsedUrl['host'])) {
            // URL içeriğinin alınması
            $content = file_get_contents($url);
            
            if ($content !== false) {
                echo $content;
            } else {
                echo "URL içeriği alınamadı.";
            }
        } else {
            echo "Geçersiz URL. Sadece belirli domainler kabul edilmektedir.";
        }
    } else {
        echo "Geçersiz URL.";
    }
} elseif (isset($_GET['id'])) {
    // ID parametresini al
    $id = $_GET['id'];

    // ID mevcutsa dinamik URL oluştur
    if ($id) {
        $url = "https://vavoo.to/play/$id/index.m3u8";

        // cURL oturumu başlat
        $ch = curl_init();

        // cURL ayarları
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Yönlendirmeleri takip et
        curl_setopt($ch, CURLOPT_HEADER, false); // Başlıkları dahil etme

        // İstek gönder
        $response = curl_exec($ch);

        // Son URL'yi al
        $lastUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

        // cURL oturumunu kapat
        curl_close($ch);

        // Son URL'den "index.m3u8" kısmını çıkar
        $baseUrl = rtrim($lastUrl, 'index.m3u8');

        // İçeriği düzenle
        $lines = explode("\n", $response);
        $output = [];

        // Mevcut sunucunun URL'sini belirle (Örneğin: https://koprulu.global.ssl.fastly.net/3.m3u8/index.php)
        $serverPath = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?source=';

        foreach ($lines as $line) {
            if (strpos($line, '.ts') !== false) {
                // .ts dosyalarının başına sunucunun kendi URL'sini ekle
                $fullTsUrl = $serverPath . $baseUrl . trim($line);
                $output[] = $fullTsUrl;
            } else {
                $output[] = $line; // Diğer satırları olduğu gibi ekle
            }
        }

        // M3U8 içeriğini kullanıcıya indirt
        header('Content-Type: application/vnd.apple.mpegurl');
        header('Content-Disposition: attachment; filename="index.m3u8"');
        echo implode("\n", $output);
    } else {
        echo "Lütfen bir ID değeri girin.";
    }
} else {
    echo "Lütfen 'source' veya 'id' parametresi girin.";
}
?>
