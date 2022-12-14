<?php

namespace App\Repositories;

use App\Comment\Comment;

interface CommentRepositoryInterface {
  public function save(Comment $comment): void;
  public function get(int $id): Comment;
}