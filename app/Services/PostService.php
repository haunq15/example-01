<?php

namespace App\Services;

use App\Repositories\Interfaces\PostRepositoryInterface;

class PostService
{
    protected PostRepositoryInterface $postRepo;
    public function __construct(PostRepositoryInterface $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function list(int $limit)
    {
        return $this->postRepo->list($limit);
    }

    public function detail($id)
    {
        return $this->postRepo->findById($id);
    }

    public function create(array $data)
    {
        return $this->postRepo->create($data);
    }

    public function update($id, array $data)
    {
        return $this->postRepo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->postRepo->delete($id);
    }
}
