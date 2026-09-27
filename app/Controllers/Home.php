<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'today' => date('F j, Y'),
            'tasks' => $taskModel->getTodayTasks()
        ];

        return view('templates/header', $data)
            . view('welcome/index', $data)
            . view('templates/footer');
    }
}