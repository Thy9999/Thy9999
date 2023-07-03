<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StaffManagementModel extends Model
{
    use HasFactory;
    protected $table = 'staff_management';
    protected $primaryKey = 'id';
    protected $fillable = ['name','phone','gender','dateofbirth','placeofbirth'];
}
