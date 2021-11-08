<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name_ar' => 'طرابلس',
                'name_en' => 'Tripoli',
            ],

            [
                'name_ar' => 'بنغازي',
                'name_en' => 'Benghazi',
            ],

            [
                'name_ar' => 'مصراته',
                'name_en' => 'Misurata',
            ],

            [
                'name_ar' => 'سرت',
                'name_en' => 'Sert',
            ],

            [
                'name_ar' => 'سبها',
                'name_en' => 'Sabha',
            ],

            [
                'name_ar' => 'زوارة',
                'name_en' => 'Zwara',
            ],

            [
                'name_ar' => 'البيضاء',
                'name_en' => 'Albaydaa',
            ],

            [
                'name_ar' => 'المرج',
                'name_en' => 'Almarj',
            ],

            [
                'name_ar' => 'درنة',
                'name_en' => 'Darna',
            ],

            [
                'name_ar' => 'توكرة',
                'name_en' => 'Tokrah',
            ],

            [
                'name_ar' => 'سلوق',
                'name_en' => 'Seluk',
            ],

            [
                'name_ar' => 'قمينس',
                'name_en' => 'Qaminis',
            ],

            [
                'name_ar' => 'الجميل',
                'name_en' => 'Aljamil',
            ],

            [
                'name_ar' => 'مسلاتة',
                'name_en' => 'Mslath',
            ],

            [
                'name_ar' => 'سوق الخميس',
                'name_en' => 'Soq Alkhamis',
            ],

            [
                'name_ar' => 'بنت بيه',
                'name_en' => 'Bent Bayah',
            ],

            [
                'name_ar' => 'الغريفة',
                'name_en' => 'Alghreefa',
            ],

            [
                'name_ar' => 'جردس العبيد',
                'name_en' => 'Jardis Alaabied',
            ],

            [
                'name_ar' => 'الماية',
                'name_en' => 'Almaya',
            ],

            [
                'name_ar' => 'مرادة',
                'name_en' => 'Mrada',
            ],

            [
                'name_ar' => 'العمامرة',
                'name_en' => 'AlAmamra',
            ],

            [
                'name_ar' => 'العربان',
                'name_en' => 'Alorban',
            ],

            [
                'name_ar' => 'براك الشاطئ',
                'name_en' => 'Braque Alshatea',
            ],

            [
                'name_ar' => 'الدرسية',
                'name_en' => 'Aldersiaa',
            ],

            [
                'name_ar' => 'صرمان',
                'name_en' => 'Sorman',
            ],

            [
                'name_ar' => 'الزاوية',
                'name_en' => 'Alzawia',
            ],

            [
                'name_ar' => 'زليتن',
                'name_en' => 'Zliten',
            ],

            [
                'name_ar' => 'زلطن',
                'name_en' => 'Zultn',
            ],

            [
                'name_ar' => 'رأس جدير',
                'name_en' => 'Ras Ajdir',
            ],

            [
                'name_ar' => 'تاجوراء',
                'name_en' => 'Tajora',
            ],

            [
                'name_ar' => 'الخمس',
                'name_en' => 'Khums',
            ],
        ];

        City::insertOrIgnore($cities);
    }
}
