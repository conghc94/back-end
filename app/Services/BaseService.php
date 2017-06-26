<?php 

namespace App\Services;

// use App\Models\Comment;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class BaseService implements BaseRepository{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function getById($id){
        return $this->model->find($id);
    }

    public function create(array $attribute){
        return $this->model->create($attribute);
    }

    public function update($id, array $attribute){
        return $this->model->find($id)->update($attribute);
    }

    public function delete($id){
        return $this->model->find($id)->delete();
    }
    
    public function getBody() {
        return $this->model->body;
    }
}