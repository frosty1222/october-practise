<?php namespace Dong\Test\Models;

use Model;

/**
 * Author Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'dong_test_authors';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'name' => 'required',
    ];

    public $hasMany = [
        'posts' => 'Dong\Test\Models\Post',
    ];

    protected $fillable = [
        'name',
        'bio',
    ];
}
