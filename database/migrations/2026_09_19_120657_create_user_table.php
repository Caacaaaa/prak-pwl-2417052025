<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'user';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guarded = ['id'];

    public function getUser()
    {
        return $this->join(
            'kelas',
            'kelas.id',
            '=',
            'user.kelas_id'
        )
        ->select('user.*', 'kelas.nama_kelas as nama_kelas')
        ->get();
    }
}
