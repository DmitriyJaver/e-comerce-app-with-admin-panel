<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\ProductTag
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $tagProducts
 * @property-read int|null $tag_products_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\ProductTag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductTag withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ProductTag withoutTrashed()
 * @mixin \Eloquent
 */
class ProductTag extends Model
{
    use SoftDeletes;

    public $table = 'product_tags';

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

    public function tagProducts()
    {
        return $this->belongsToMany(Product::class);
    }
}
