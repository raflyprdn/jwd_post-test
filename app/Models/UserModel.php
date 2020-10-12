<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $useTimestamps = false;
    protected $allowedFields = ['type', 'username', 'password', 'name', 'email', 'phone', 'verification'];
}
