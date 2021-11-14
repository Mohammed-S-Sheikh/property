<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            // SALE OR RENT
            [
                'id' => 1,
                'name_ar' => 'للبيع',
                'name_en' => 'Sale',
                'path' => '/1',
                'order' => 1,
            ],
            [
                'id' => 2,
                'name_ar' => 'للإيجار',
                'name_en' => 'Rent',
                'path' => '/2',
                'order' => 1,
            ],

            // SALE
            [
                'id' => 3,
                'name_ar' => 'شقق',
                'name_en' => 'Apartments',
                'path' => '/1/3',
                'order' => 2,
            ],
            [
                'id' => 4,
                'name_ar' => 'منازل',
                'name_en' => 'Houses',
                'path' => '/1/4',
                'order' => 2,
            ],
            [
                'id' => 5,
                'name_ar' => 'فلل - قصور',
                'name_en' => 'Villas - Palaces',
                'path' => '/1/5',
                'order' => 2,
            ],
            [
                'id' => 6,
                'name_ar' => 'اراضي - مزارع',
                'name_en' => 'Lands - Farms',
                'path' => '/1/6',
                'order' => 2,
            ],
            [
                'id' => 7,
                'name_ar' => 'تجاري',
                'name_en' => 'Commercial',
                'path' => '/1/7',
                'order' => 2,
            ],
            [
                'id' => 8,
                'name_ar' => 'عمارات',
                'name_en' => 'Whole Building',
                'path' => '/1/8',
                'order' => 2,
            ],
            [
                'id' => 9,
                'name_ar' => 'شاليهات - مصايف',
                'name_en' => 'Chalets - Summerhouses',
                'path' => '/1/9',
                'order' => 2,
            ],
            [
                'id' => 10,
                'name_ar' => 'شركات',
                'name_en' => 'Companies & Businesses',
                'path' => '/1/10',
                'order' => 2,
            ],
            [
                'id' => 11,
                'name_ar' => 'عقارات اجنبية',
                'name_en' => 'Foreign Property',
                'path' => '/1/11',
                'order' => 2,
            ],

            // RENT
            [
                'id' => 12,
                'name_ar' => 'شقق وأجنحة فندقية',
                'name_en' => 'Hotel Apartments & Suites',
                'path' => '/2/12',
                'order' => 2,
            ],
            [
                'id' => 13,
                'name_ar' => 'غرف ومشاركة سكن',
                'name_en' => 'Shared Rooms',
                'path' => '/2/13',
                'order' => 2,
            ],
            [
                'id' => 14,
                'name_ar' => 'منازل',
                'name_en' => 'Houses',
                'path' => '/2/14',
                'order' => 2,
            ],
            [
                'id' => 15,
                'name_ar' => 'فلل - قصور',
                'name_en' => 'Villas - Pallaces',
                'path' => '/2/15',
                'order' => 2,
            ],
            [
                'id' => 16,
                'name_ar' => 'اراضي - مزارع',
                'name_en' => 'Lands & Farms',
                'path' => '/2/16',
                'order' => 2,
            ],
            [
                'id' => 17,
                'name_ar' => 'تجاري',
                'name_en' => 'Commercial',
                'path' => '/2/17',
                'order' => 2,
            ],
            [
                'id' => 18,
                'name_ar' => 'عمارات',
                'name_en' => 'Whole Building',
                'path' => '/2/18',
                'order' => 2,
            ],
            [
                'id' => 19,
                'name_ar' => 'شاليهات - مصايف',
                'name_en' => 'Chalets - Summerhouses',
                'path' => '/2/19',
                'order' => 2,
            ],
            [
                'id' => 20,
                'name_ar' => 'عقارات اجنبية',
                'name_en' => 'Foreign Property',
                'path' => '/2/20',
                'order' => 2,
            ],
        ];

        Section::insertOrIgnore($sections);
    }
}
