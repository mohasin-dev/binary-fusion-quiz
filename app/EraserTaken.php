<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EraserTaken extends Model
{
    protected $table = 'eraser_taken';

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
