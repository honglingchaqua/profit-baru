<?php

namespace App\Helpers;

class VehicleHelper
{
    public static function getImagePath($model)
    {
        $model = strtolower($model);
        $mainModels = [
            'avanza' => ['avanza'],
            'rush' => ['rush'],
            'calya' => ['calya'],
            'corolla' => ['corolla'],
            'agya' => ['agya'],
            'hilux' => ['hilux'],
            'innova' => ['innova'],
            'fortuner' => ['fortuner'],
            'veloz' => ['veloz'],
            // Tambahkan model lain sesuai kebutuhan
        ];

        // Penanganan khusus untuk Innova
        if (strpos($model, 'innova') !== false) {
            if (strpos($model, 'venturer') !== false) {
                return "assets/images/products/innova_venturer.png";
            } elseif (strpos($model, 'zenix') !== false) {
                return "assets/images/products/innova_zenix.png";
            } else {
                return "assets/images/products/innova.png";
            }
        }

        foreach ($mainModels as $mainModel => $variants) {
            if (self::modelMatches($model, $variants)) {
                return "assets/images/products/{$mainModel}.png";
            }
        }

        return "assets/images/products/default.png"; // Gambar default jika model tidak ditemukan
    }

    private static function modelMatches($model, $variants)
    {
        foreach ($variants as $variant) {
            if (strpos($model, $variant) !== false) {
                return true;
            }
        }
        return false;
    }
}