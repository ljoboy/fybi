<?php
/**
 * FILE ExpenseCategory.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 9:33 PM
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class ExpenseCategory extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'expense_categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
