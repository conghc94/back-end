<?php

namespace App\Services;

use App\Models\Task;
use App\Repositories\TaskRepository;
use App\ModelViews\TaskViewModel;

class TaskService extends BaseService implements TaskRepository{


    public function __construct(Task $model){
        parent::__construct($model);
    }

    /*
    * function mappingListModelView
    * return Task View Model
    */
    private static function mappingModelView(Task $task = null){
        $taskViewModel = new TaskViewModel();
        $taskViewModel->taskId = $task->id;
        $taskViewModel->description = $task->description;

        return $taskViewModel;
    }

    /*
    * function mappingListModelView
    * return list Task View Model
    */
    public static function mappingListModelView($tasks = null){
        $taskViewModelList = array();
        foreach($tasks as $task){
            $taskVM = new TaskViewModel();
            $taskVM->id = $task->id;
            $taskVM->description = $task->description;
            array_push($taskViewModelList, $taskVM);
        }

        return $taskViewModelList;
    }
}