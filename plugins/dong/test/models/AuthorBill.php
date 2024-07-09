<?php namespace Dong\Test\Models;

use Model;

/**
 * AuthorBill Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class AuthorBill extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'dong_test_author_bill';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
