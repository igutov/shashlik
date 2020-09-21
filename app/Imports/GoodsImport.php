<?php

namespace App\Imports;

use App\Food;
use App\Categories;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GoodsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $category = Categories::where('name', $row['category_name'])->value('id');

        return new Food([
            'id' => $row['id'],
            'title' => $row['title'],
            'weight' => $row['weight'],
            'composition' => $row['composition'],
            'hit' => $row['hit'],
            'price' => $row['price'],
            'price_new' => $row['price_new'],
            'image' => $row['image'],
            'categories_id' => $category,
        ]);
    }
}
