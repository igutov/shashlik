<?php

namespace App\Exports;

use App\Food;
use App\Categories;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GoodsExport implements FromQuery, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Food::query();
    }

    public function map($food): array
    {
        $category = Categories::where('id', $food->categories_id)->value('name');

        return [
            $food->id,
            $food->title,
            $food->weight,
            $food->composition,
            $food->hit,
            $food->price,
            $food->price_new,
            $food->image,
            $food->categories_id = $category,
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'weight',
            'composition',
            'hit',
            'price',
            'price_new',
            'image',
            'category_name',
        ];
    }
}
