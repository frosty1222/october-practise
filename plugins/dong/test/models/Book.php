<?php namespace Dong\Test\Models;

use Model;

/**
 * Book Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Book extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'dong_test_books';
    public $fillable = ['name','price','type','author_id'];
    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $belongsTo = [
        'author' =>Author::class
    ];
}
