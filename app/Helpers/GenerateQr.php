<?php
namespace App\Helpers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Storage;


class GenerateQr {
    public static function create($quantity): string
    {
        $qrisData = "00020101021126570011ID.DANA.WWW011893600915304788085502090478808550303UMI51440014ID.CO.QRIS.WWW0215ID10200369896110303UMI5204899953033605802ID5918Jasa Modding GTA V6015Kab. Deli Serda610520355626960650011ID.DANA.WWW0146https://qr.dana.id/v1/2810120520200529539820246304A279";
        $qris = substr($qrisData, 0, -4);
        $step1 = str_replace("010211", "010212", $qris);
        $step2 = explode("5802ID", $step1);
        $money = "54" . sprintf("%02d", strlen($quantity)) . $quantity;
        $money .= "5802ID";
        $step3 = trim($step2[0]) . $money . trim($step2[1]);
        $step3 .= ConvertCRC16($step3);
        //save qrcode to image
        $image = QrCode::format('png')
            ->size(600)
            ->margin(6)
            ->generate($step3);
        $output = time() . '.png';
        Storage::disk(config('filesystems.default'))->put('qr-code/' . $output, $image);
        return $output;
    }

}

function ConvertCRC16($str): string
{
    function charCodeAt($str, $i)
    {
        return ord(substr($str, $i, 1));
    }

    $crc = 0xFFFF;
    $strlen = strlen($str);
    for ($c = 0; $c < $strlen; $c++) {
        $crc ^= charCodeAt($str, $c) << 8;
        for ($i = 0; $i < 8; $i++) {
            if ($crc & 0x8000) {
                $crc = ($crc << 1) ^ 0x1021;
            } else {
                $crc = $crc << 1;
            }
        }
    }
    $hex = $crc & 0xFFFF;
    $hex = strtoupper(dechex($hex));
    if (strlen($hex) == 3) $hex = "0" . $hex;
    return $hex;
}
