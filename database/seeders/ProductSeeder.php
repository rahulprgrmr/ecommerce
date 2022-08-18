<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 13 Pro Max',
                'price' => 151900,
                'description' => '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel.Cinematic mode adds shallow depth of field and shifts focus automatically in your videos.Pro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording.12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.A15 Bionic chip for lightning-fast performance.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '16-inch MacBook Pro',
                'price' => 329900,
                'description' => '6-core Neural Engine.41.05 cm (16.2-inch) Liquid Retina XDR display.Three Thunderbolt 4 ports, HDMI port, SDXC card slot, MagSafe 3 port.Magic Keyboard with Touch ID.Force Touch trackpad.140W USB-C Power Adapter',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Fog Scent Xpressio Perfume',
                'price' => 200,
                'description' => 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ASUS TUF Gaming F15',
                'price' => 137990,
                'description' => 'Processor: 12th Gen Intel Core i7-12700H, 14 cores (6 P-cores and 8 E-cores), 2.3 GHz Base Speed, Up to 4.7 GHz Max Turbo Speed, 24MB Cache.Play over 100 high-quality PC games, plus new and upcoming blockbusters on day one like Halo Infinite, Forza Horizon 5, and Age of Empires IV with your new FX507ZM-HF068WS and one month of Game Pass-including EA Play.Memory: 16GB (8GB SO-DIMM *2) DDR5 4800MHz, Support Up to 32GB | Storage: 1TB SSD M.2 NVMe PCIe 3.0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Acer Predator Helios 300',
                'price' => 149999,
                'description' => 'Processor : Intel Core i7-11800H processor |RAM : 16 GB of DDR4 system memory, upgradable to 32 GB using two soDIMM module.Display : 15.6" display with IPS, QHD 2560 x 1440, high-brightness (300 nits) Acer ComfyView LED-backlit TFT LCD, supporting 165 Hz, 3 ms Overdrive, 16:9 aspect ratio, DCI-P3 100% | Graphics : NVIDIA GeForce RTX 3060 with 6 GB of dedicated GDDR6 VRAM.Storage : SSD : 1 TB, PCIe Gen4, 16 Gb/s, NVMe ; HDD: Supports up to 2 TB 2.5-inch 5400 RPM | OS : Windows 10 Home 64-bit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ASUS ROG 5s',
                'price' => 57999,
                'description' => '12 GB RAM | 256 GB ROM.17.22 cm (6.78 inch) Full HD+ Display.64MP + 13MP + 5MP | 24MP Front Camera.6000 mAh Lithium Polymer Battery.Qualcomm Snapdragon 888 Plus (SM8350) Processor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'MSI Alpha 15',
                'price' => 93990,
                'description' => '15.6 inch Full HD, 144Hz 72%NTSC IPS-Level, close to 100%sRGB.Light Laptop without Optical Disk Drive.Pre-installed Genuine Windows 10 OS',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Rynox Stealth Evo 3 Riding Jacket',
                'price' => 12750,
                'description' => 'mpact Protection: Comprehensive CE Certified impact protection from KNOX with smart, soft and temperature stable MICROLOCK technology. SHOULDER and ELBOW – Knox CE Level 2 protector certified to EN 1621-1:2012 (T+/T-). BACK – Knox CE Level 2 protector certified to EN 1621-2:2012 (T+/T-). CHEST – Knox CE Level 1 two-piece protector certified to EN 1621-3:2017 (T+/T-).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Royal Enfield Gritty Riding Gloves',
                'price' => 2500,
                'description' => 'Material: 100% Goat Leather (Goat Nappa Conductive and Goat Nappa) Roll PU binding Microsuede palm patch Tricot inner lining.Protection: Knuckles : PVC Knuckle protectors Palm : 5mm rubber sponge (100% PU) for palm reinforcement Grip : Microsuede (50% polyamide , 50% polyurethane) palm patch',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Scala Gears Street Armored Riding Pant',
                'price' => 8890,
                'description' => 'Heavy duty 100% 600DN polyester Fabric to insure the maximum Strength and Durability',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
