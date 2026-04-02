<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface
{
    public function list(int $limit);
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
