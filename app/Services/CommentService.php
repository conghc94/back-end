<?php 

namespace App\Services;

use App\Models\Comment;
use App\Repositories\CommentRepository;

class CommentService extends BaseService implements CommentRepository{

    public function __construct(Comment $model){
        parent::__construct($model);
    }

}