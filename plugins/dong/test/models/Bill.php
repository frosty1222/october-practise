<?php namespace Dong\Test\Models;

use Model;

/**
 * Bill Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Bill extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'dong_test_bills';
    public $fillable = ['name','price','quantity'];
    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $belongsToMany = [
        'authors' => [
            'dong\test\Models\Author',
            'table'    => 'dong_test_author_bill',
            'key'      => 'bill_id',
            'otherKey' => 'author_id'
        ]
    ];
}
