<?php

namespace App\Helpers;

class VehicleHelper
{
    public static function getImagePath($model)
    {
        $model = strtolower($model);
        $mainModels = [
            'avanza' => ['avanza, AVANZA 1.3 E A/T, AVANZA 1.3 E M/T, AVANZA 1.3 G A/T,AVANZA 1.3 G M/T,'],
            'rush' => ['rush'],
            'agya' => ['agya'],
            'innova' => ['innova'],
            'fortuner' => ['fortuner'],
            // Tambahkan model lain sesuai kebutuhan
        ];

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