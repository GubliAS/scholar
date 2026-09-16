<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'category', 'category_label', 'author', 'price', 'image'])]
class Course extends Model
{
    /**
     * @return array<int, string>
     */
    protected $appends = ['filters'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'price' => 'integer',
        ];
    }

    /**
     * Space-separated isotope filter classes from the original template.
     *
     * @return Attribute<array<int, string>, never>
     */
    protected function filters(): Attribute
    {
        return Attribute::get(function (): array {
            return preg_split('/\s+/', (string) $this->category, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        });
    }
}
