<?php
 require_once 'SearchInterface.php';

class Product implements SearchInterface
{
    private $table = [
        ['ProductID' => 1, 'Name' => 'Acer Predator x34', 'Price' => '$1,199', 'Description' => 'Acer Predator X34 Curved IPS NVIDIA G-sync Gaming Monitor 21:9 WQHD Display with Built-in Overclocking 100Hz Refresh Rate Boost'],
        ['ProductID' => 2, 'Name' => 'PowerColor RED DEVIL Radeon RX 480', 'Price' => '$229', 'Description' => 'PowerColor RED DEVIL Radeon RX 480 DirectX 12 AXRX 480 8GBD5-3DH/OC 8GB 256-Bit GDDR5 PCI Express 3.0 CrossFireX Support ATX Video Card'],
        ['ProductID' => 3, 'Name' => 'MSI 15.6" GT62VR Dominator-012', 'Price' => '1,449', 'Description' => 'MSI 15.6" GT62VR Dominator-012 Intel Core i7 6700HQ (2.60 GHz) NVIDIA GeForce GTX 1060 32 GB Memory 256 GB SSD 1 TB HDD Windows 10 Home 64-Bit G-Sync Gaming Laptop VR Ready'],
        ['ProductID' => 4, 'Name' => 'CyberPower GX1325U 1325 VA 810', 'Price' => '$124', 'Description' => 'CyberPower GX1325U 1325 VA 810 Watts 10 Outlets UPS, Pure Sine Wave with USB Charging Ports'],
        ['ProductID' => 5, 'Name' => 'Lenovo ThinkCentre M91p', 'Price' => '$174', 'Description' => 'Lenovo ThinkCentre M91p Intel i5 Quad Core 3100 MHz 320Gig 4096MB DVD ROM Windows 10 Professional 64 Bit Desktop Computer'],
        ['ProductID' => 6, 'Name' => 'Lenovo IdeaPad 700', 'Price' => '$853', 'Description' => 'Lenovo IdeaPad 700 (80RU00FSUS) Gaming Laptop Intel Core i7 6700HQ (2.60 GHz) 16 GB DDR4 Memory 1 TB HDD 256 GB SSD NVIDIA GeForce GTX 950M 4 GB 15.6" Windows 10 Home 64-Bit'],
        ['ProductID' => 7, 'Name' => 'Lenovo 17.3" Y700-17ISK', 'Price' => '$1,199', 'Description' => 'Lenovo 17.3" Y700-17ISK (80Q000BYUS) Intel Core i7 6th Gen 6700HQ (2.60 GHz) NVIDIA GeForce GTX 960M 16 GB Memory 512 GB SSD 1 TB HDD Windows 10 Home 64-Bit Gaming Laptop'],
        ['ProductID' => 8, 'Name' => 'MSI 15.6" GL62 6QF-627', 'Price' => '$999', 'Description' => 'MSI 15.6" GL62 6QF-627 Intel Core i7 6700HQ (2.60 GHz) NVIDIA GeForce GTX 960M 8 GB Memory 1 TB HDD Windows 10 Home 64-Bit Gaming Laptop'],
        ['ProductID' => 9, 'Name' => 'ASUS ROG Strix GL702VM', 'Price' => '$1,199', 'Description' => 'ASUS ROG Strix GL702VM-DB74 Gaming Laptop Intel Core i7 6700HQ (2.6 GHz) 16 GB Memory 1 TB HDD 256 GB SSD NVIDIA GeForce GTX 1060 6 GB 17.3" FHD 1920 x 1080 Windows 10 Home'],
        ['ProductID' => 10, 'Name' => 'Lenovo IdeaPad Y700 80NV00Q9US', 'Price' => '$989', 'Description' => 'Lenovo IdeaPad Y700 80NV00Q9US Gaming Laptop Intel Core i7 6700HQ 16 GB Memory 1 TB HDD 256 GB PCIE SSD GeForce GTX 960M 4 GB 15.6" FHD Windows 10 Home 64-Bit'],
        ['ProductID' => 11, 'Name' => 'DELL Alienware', 'Price' => '$1,973', 'Description' => 'DELL Alienware AW17R3-7092SLV Gaming Laptop 6th Generation Intel Core i7 6700HQ (2.60 GHz) 16 GB Memory 1 TB HDD 256 GB SSD NVIDIA GeForce GTX 980M 4 GB GDDR5 17.3" 1920 x 1080 Windows 10 Home 64-Bit'],
        ['ProductID' => 12, 'Name' => 'Eluktronics P650RG-G', 'Price' => '$2,443', 'Description' => 'Eluktronics P650RG-G Premium Gaming Laptop - Intel Core i7-6700HQ Quad Core Windows 10 Home NVIDIA GeForce GTX 980M 8GB GDDR5 + G-SYNC 15.6” Full HD IPS Display 1TB Performance SSD 16GB Memory'],
        ['ProductID' => 13, 'Name' => 'MSI 17.3 4K/UHD', 'Price' => '$2,279', 'Description' => 'MSI 17.3" 4K/UHD GT73VR TITAN 4K-226 Intel Core i7 6th Gen 6820HK (2.70 GHz) NVIDIA GeForce GTX 1070 16 GB Memory 1 TB HDD Windows 10 Home 64-Bit Gaming Laptop'],
        ['ProductID' => 14, 'Name' => 'Eluktronics P650RS-G', 'Price' => '$1,799', 'Description' => 'Eluktronics P650RS-G Performance VR Ready Gaming Laptop - Intel Core i7-6700HQ Quad Core Windows 10 Home 8GB GDDR5 NVIDIA GeForce GTX 1070 + G-SYNC 15.6” Full HD IPS 256GB SSD + 1TB HDD 16GB DDR4 RAM'],
    ];

// do some search
    function search($word)
    {

        $result = [];
        // do some search

        foreach ($this->table as $record) {
            foreach ($record as $key => $value) {
                if (strstr($value, $word)) {
                    $result[] = $record;
                }
            }
        }

        return $result;
    }
}