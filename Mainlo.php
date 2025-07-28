<?php
// Màu
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$tim = "\033[1;39m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";

// Xoá màn hình
system(PHP_OS_FAMILY == "Windows" ? "cls" : "clear");

// Banner
function banner() {
    echo "\033[1;31m ██████╗ ███████╗████████╗████████╗ ██████╗ ██████╗ \n";
    echo "\033[1;36m ██╔══██╗██╔════╝╚══██╔══╝╚══██╔══╝██╔══██╗██╔══██╗\n";
    echo "\033[1;32m ██████╔╝███████╗   ██║      ██║   ██████╔╝██║  ██║\n";
    echo "\033[1;34m ██╔══██╗╚════██║   ██║      ██║   ██╔══██╗██║  ██║\n";
    echo "\033[1;35m ██║  ██║███████║   ██║      ██║   ██║  ██║██████╔╝\n";
    echo "\033[1;31m ╚═╝  ╚═╝╚══════╝   ╚═╝      ╚═╝   ╚═╝  ╚═╝╚═════╝ \n";
    echo "\n\033[1;97mTool By: \033[1;32mRS-TOOL            \033[1;97mPhiên Bản: \033[1;32mV1\n";
    echo "\033[97m══════════════════════════════════════════════════\n";
    echo "\033[1;97m[\033[1;91m<>\033[1;97m] TELEGRAM SUPPORT  : \033[1;36m@Tdtdev";
    echo "\033[1;97m[\033[1;91m<>\033[1;97m] YOUTUBE : \033[1;32mRSTOOL\n";
    echo "\033[1;97m[\033[1;91m<>\033[1;97m] ADMIN   : \033[1;33mRSTOOL\n";
    echo "\033[97m══════════════════════════════════════════════════\n";
}
$tool_map = [
 "1.0" => "https://raw.githubusercontent.com/tronggtran2912/Maintiktok99/main/Maintttt.php",
 "1.1" => "https://raw.githubusercontent.com/tronggtran2912/Maintiktokvip/main/Tiktokvip.php",
 "1.2" => "https://raw.githubusercontent.com/tronggtran2912/Instagram-/main/Mainig.php",
 "1.3" => "https://raw.githubusercontent.com/tronggtran2912/Igv1/main/Igv1.php",
 "1.4" => "https://raw.githubusercontent.com/tronggtran2912/X/main/Mainx.php",
 "1.5" => "https://raw.githubusercontent.com/tronggtran2912/Thrread/main/Thrread.php",
 "1.6" => "https://raw.githubusercontent.com/tronggtran2912/Snapchat/main/Mainsnap.php",
 "1.7" => "https://raw.githubusercontent.com/tronggtran2912/Linkedin/main/Mainlinkedin.php",
 "1.8" => "https://raw.githubusercontent.com/tronggtran2912/Shoppe/main/Mainshope.php",
];

try {
    while (true) {
        system(php_uname('s') == 'Windows NT' ? 'cls' : 'clear');
        banner();
echo "\033[1;37m╔══════════════════════╗\n";
echo "\033[1;37m║  \033[1;32mTool Auto Golike    \033[1;37m║\n";
echo "\033[1;37m╚══════════════════════╝\n";
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.0 \033[1;97m: \033[1;34mTool Auto TikTok \033[1;33m[AutoClick] \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.1 \033[1;97m: \033[1;34mTool Auto TikTok V1 \033[1;33m[Vip] \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.2 \033[1;97m: \033[1;34mTool Auto Instagram \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.3 \033[1;97m: \033[1;34mTool Auto Instagram V1 \033[1;33m[Vip] \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.4 \033[1;97m: \033[1;34mTool Auto Twitter \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.5 \033[1;97m: \033[1;34mTool Auto Threads \033[1;32m[Online]\n";            
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.6 \033[1;97m: \033[1;34mTool Auto Snapchat \033[1;32m[Online]\n";  
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.7 \033[1;97m: \033[1;34mTool Auto Linkedin \033[1;33m[Vip] \033[1;32m[Online]\n";  
echo "\033[1;97m[\033[1;32m*\033[1;97m] \033[1;33m1.8 \033[1;97m: \033[1;34mTool Auto Shoppe \033[1;33m[Vip] \033[1;32m[Online]\n";  
echo "\033[1;33mNhập lựa chọn: \033[0m";
        $chon = trim(fgets(STDIN));
         
        if (array_key_exists($chon, $tool_map)) {
            $url = $tool_map[$chon];
            echo "\n\033[1;36m🔄 Đang tải script từ GitHub...\n\n";
            $code = file_get_contents($url);
            if ($code !== false) {
                eval("?>" . $code);
                break;
            } else {
                echo "\033[1;31m❌ Không thể tải file từ: $url\n";
            }
        } else {
            echo "\033[1;31m❌ Lựa chọn không hợp lệ, vui lòng thử lại.\n";
            sleep(1);
        }
    }
} catch (Exception $e) {
    die("\033[1;31mLỗi hệ thống: " . $e->getMessage());
}
?>
