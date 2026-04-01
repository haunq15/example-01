<?php
namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function list(int $limit)
    {
        return Post::paginate($limit);
    }

    public function findById($id)
    {
        return Post::findOrFail($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($id, array $data)
    {
        $post = $this->findById($id);
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        return Post::destroy($id);
    }
}
