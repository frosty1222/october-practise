<?php namespace Dong\Test\Models;

use Model;

/**
 * Post Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $jsonable = ['data'];
    public $table = 'dong_test_posts';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'title' => 'required',
        'content' => 'required',
        'author_id' => 'required|exists:dong_test_authors,id',
    ];
    public $fillable = ['title','content','author_id'];

    public $belongsTo = [
        'author' => ['Dong\Test\Models\Author', 'key' => 'author_id']
    ];

    public $hasMany = [
       'messages'=>['Dong\Test\Models\Message', 'key' => 'post_id']
    ];

    public function createNewPost($title, $content, $author_id): bool
    {
        $this->title = $title;
        $this->content = $content;
        $this->author_id = $author_id;
    
        return $this->save();
    }
}
