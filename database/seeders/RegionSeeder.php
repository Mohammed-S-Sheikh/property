<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();

        $regions = [
            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'الرئيسي طرابلس',
                'name_en' => 'Al-raaisy Tripoli',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'الرئيسي بنغازي',
                'name_en' => 'Al-raaisy Benghazi',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'الرشيد',
                'name_en' => 'Al-rasheed',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'السواني',
                'name_en' => 'Al-swani',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'المغاربة',
                'name_en' => 'Al-moghareba',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'الأندلس',
                'name_en' => 'Al-andalus',
            ],

            [
                'city_id' => $cities->where('name_en', 'Zwara')->first()->id,
                'name_ar' => 'زوارة',
                'name_en' => 'Zwara',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'المختار',
                'name_en' => 'Al-mokhtar',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'أبوسليم',
                'name_en' => 'Abu Sleem',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'البركة',
                'name_en' => 'Al-baraka',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tokrah')->first()->id,
                'name_ar' => 'العقورية',
                'name_en' => 'Al-euquria',
            ],

            [
                'city_id' => $cities->where('name_en', 'Seluk')->first()->id,
                'name_ar' => 'سلوق',
                'name_en' => 'Seluk',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'ميناء بنغازي',
                'name_en' => 'Benghazi Harbor',
            ],

            [
                'city_id' => $cities->where('name_en', 'Qaminis')->first()->id,
                'name_ar' => 'قمينس',
                'name_en' => 'Qaminis',
            ],

            [
                'city_id' => $cities->where('name_en', 'Aljamil')->first()->id,
                'name_ar' => 'الجميل',
                'name_en' => 'Aljamil',
            ],

            [
                'city_id' => $cities->where('name_en', 'Mslath')->first()->id,
                'name_ar' => 'مسلاتة',
                'name_en' => 'Mslath',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'سيدي خليفة',
                'name_en' => 'Sedi Khalifa',
            ],

            [
                'city_id' => $cities->where('name_en', 'Soq Alkhamis')->first()->id,
                'name_ar' => 'سوق الخميس',
                'name_en' => 'Soq Alkhamis',
            ],

            [
                'city_id' => $cities->where('name_en', 'Misurata')->first()->id,
                'name_ar' => 'مصراتة',
                'name_en' => 'Misurata',
            ],

            [
                'city_id' => $cities->where('name_en', 'Bent Bayah')->first()->id,
                'name_ar' => 'بنت بيه',
                'name_en' => 'Bent Bayah',
            ],

            [
                'city_id' => $cities->where('name_en', 'Misurata')->first()->id,
                'name_ar' => 'قصر أحمد',
                'name_en' => 'Qasr Ahmed',
            ],

            [
                'city_id' => $cities->where('name_en', 'Alghreefa')->first()->id,
                'name_ar' => 'الغريفة',
                'name_en' => 'Alghreefa',
            ],

            [
                'city_id' => $cities->where('name_en', 'Misurata')->first()->id,
                'name_ar' => 'ميناء مصراتة',
                'name_en' => 'Misurata Harbor',
            ],

            [
                'city_id' => $cities->where('name_en', 'Sabha')->first()->id,
                'name_ar' => 'سبها',
                'name_en' => 'Sabha',
            ],

            [
                'city_id' => $cities->where('name_en', 'Jardis Alaabied')->first()->id,
                'name_ar' => 'جردس الأحرار',
                'name_en' => 'Jardis AlAhrara',
            ],

            [
                'city_id' => $cities->where('name_en', 'Almarj')->first()->id,
                'name_ar' => 'المرج',
                'name_en' => 'Almarj',
            ],

            [
                'city_id' => $cities->where('name_en', 'Almaya')->first()->id,
                'name_ar' => 'الماية',
                'name_en' => 'Almaya',
            ],

            [
                'city_id' => $cities->where('name_en', 'Mrada')->first()->id,
                'name_ar' => 'مرادة',
                'name_en' => 'Mrada',
            ],

            [
                'city_id' => $cities->where('name_en', 'AlAmamra')->first()->id,
                'name_ar' => 'العمامرة',
                'name_en' => 'AlAmamra',
            ],

            [
                'city_id' => $cities->where('name_en', 'Alorban')->first()->id,
                'name_ar' => 'العربان',
                'name_en' => 'Alorban',
            ],

            [
                'city_id' => $cities->where('name_en', 'Braque Alshatea')->first()->id,
                'name_ar' => 'براك',
                'name_en' => 'Braque',
            ],

            [
                'city_id' => $cities->where('name_en', 'Aldersiaa')->first()->id,
                'name_ar' => 'الدرسية',
                'name_en' => 'Aldersiaa',
            ],

            [
                'city_id' => $cities->where('name_en', 'Sorman')->first()->id,
                'name_ar' => 'صرمان',
                'name_en' => 'Sorman',
            ],

            [
                'city_id' => $cities->where('name_en', 'Darna')->first()->id,
                'name_ar' => 'درنة',
                'name_en' => 'Darna',
            ],

            [
                'city_id' => $cities->where('name_en', 'Albaydaa')->first()->id,
                'name_ar' => 'البيضاء',
                'name_en' => 'Albaydaa',
            ],

            [
                'city_id' => $cities->where('name_en', 'Alzawia')->first()->id,
                'name_ar' => 'الزاوية',
                'name_en' => 'Alzawia',
            ],

            [
                'city_id' => $cities->where('name_en', 'Sert')->first()->id,
                'name_ar' => 'سرت',
                'name_en' => 'Sert',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'وكالة السكة',
                'name_en' => 'Sekka Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Zliten')->first()->id,
                'name_ar' => 'وكالة شهداء كعام',
                'name_en' => 'shohadaa kaam Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'عبدالمنعم رياض',
                'name_en' => 'AbdelMoneim Riad',
            ],

            [
                'city_id' => $cities->where('name_en', 'Ras Ajdir')->first()->id,
                'name_ar' => 'وكالة رأس جدير',
                'name_en' => 'Sert',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'وكالة كورنتيا',
                'name_en' => 'Corinthia Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'وكالة النهر',
                'name_en' => 'Alnaher Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tajora')->first()->id,
                'name_ar' => 'وكالة تاجوراء',
                'name_en' => 'Tajora Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'وكالة قوز زناتة',
                'name_en' => 'Qous Zenata Agency',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'بن عاشور',
                'name_en' => 'Ben Ashur',
            ],

            [
                'city_id' => $cities->where('name_en', 'Benghazi')->first()->id,
                'name_ar' => 'الفويهات',
                'name_en' => 'Fwehat',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'راديسون',
                'name_en' => 'Radisson',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'باب المدينة',
                'name_en' => 'Bab Almadina',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'جنزور',
                'name_en' => 'Janzour',
            ],

            [
                'city_id' => $cities->where('name_en', 'Zultn')->first()->id,
                'name_ar' => 'زلطن',
                'name_en' => 'Zultn',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'سوق الجمعة',
                'name_en' => 'Souq Aljumaa',
            ],

            [
                'city_id' => $cities->where('name_en', 'Tripoli')->first()->id,
                'name_ar' => 'وكالة عين زارة',
                'name_en' => 'Ain Zara Agency',
            ],
        ];

        Region::insertOrIgnore($regions);
    }
}
