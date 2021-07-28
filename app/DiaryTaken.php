<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryTaken extends Model
{
    protected $table = 'diary_taken';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
