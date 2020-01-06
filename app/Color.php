<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Color
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $colorProducts
 * @property-read int|null $color_products_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Color onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Color withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Color withoutTrashed()
 * @mixin \Eloquent
 */
class Color extends Model
{
    use SoftDeletes;

    public $table = 'colors';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function colorProducts()
    {
        return $this->hasMany(Product::class, 'color_id', 'id');
    }
}
