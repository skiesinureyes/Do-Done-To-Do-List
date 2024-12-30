<?php
namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'tasks'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = [
        'user_id',
        'category',
        'task',
        'priority',
        'due_date',
        'due_time',
        'status',
        'additional_notes',
        'completed',
    ];
}