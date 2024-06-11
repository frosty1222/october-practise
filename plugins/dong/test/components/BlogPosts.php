<?php namespace Dong\Test\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use Dong\Test\Models\Author;
use Dong\Test\Models\Post;
use Flash;

/**
 * BlogPosts Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BlogPosts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'BlogPosts Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'max' => [
                'description' => 'Enter value for posts',
                // 'title' => 'Max items',
                // 'default' => 10,
                'type' => 'string',
            ],
        ];
    }
    public function onRun()
    {
        $this->page['posts'] = $this->loadPosts();
        $this->page['authors'] = $this->loadAuthors();
    }

    protected function loadPosts()
    {
        return Post::all();
    }
    protected function loadAuthors()
    {
        return Author::all();
    }
    public function onAddItem()
    {
        $title = post('title');
        $content = post('content');
        $authorId = post('author_id');
        $post = new Post();
        $success = $post->createNewPost($title, $content,$authorId);

        if ($success) {
            Flash::success('Post created successfully.');
            return [
                '#posts-list' => $this->renderPartial('@posts', ['posts' => Post::all()])
            ];
        } else {
            Flash::error('Post created unsuccessfully.');
            return;
        }
    }
}
