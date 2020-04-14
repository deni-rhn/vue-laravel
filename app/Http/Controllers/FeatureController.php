<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function listFeature()
    {
        return [
                [
                    'name' => 'Solusi PHP untuk performa query yang lebih cepat.'
                ],
                [
                    'name' => 'Konsumsi memori yang lebih rendah.'
                ],
                [
                    'name' => 'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7'
                ],
                [
                    'name' => 'Fitur enkripsi ionCube dan Zend Guard Loaders'
                ]
            ];
    }

    public function discountFeature()
    {
        $discount = array(
            "discount" => "Diskon 40% Domain dan SSL Gratis untuk Anda"
        );
        return $discount;
    }
}
