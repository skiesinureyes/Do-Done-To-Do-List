<?php

namespace App\Controllers;

class Todo extends BaseController
{
    public function index()
    {
        $session = session();
        $data = [
            'logged_in' => $session->get('logged_in'),
            'user_email' => $session->get('user_email'),
            'full_name' => $session->get('full_name'),
        ];

        return view('header').view('menu', $data).view('todo').view('footer');
    }

    public function addTask()
    {
        $db = \Config\Database::connect();

        $data = [
            'category' => $this->request->getPost('category'),
            'task' => $this->request->getPost('task'),
            'priority' => $this->request->getPost('priority'),
            'due_date' => $this->request->getPost('due_date'),
            'due_time' => $this->request->getPost('due_time'),
            'status' => $this->request->getPost('status'),
            'additional_notes' => $this->request->getPost('additional_notes'),
        ];

        $db->table('tasks')->insert($data);

        return redirect()->to('/todo');
    }

}