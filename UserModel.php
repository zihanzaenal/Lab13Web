<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model

{
    protected $table = 'user';
    protected $primmarykey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'useremail', 'userpassword';
}