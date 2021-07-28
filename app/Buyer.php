<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $appends = [
        'total_diary_taken',
        'total_eraser_taken',
        'total_pen_taken',
        'total_item_taken',
    ];

    protected $totalItemTaken = null;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function diaryTaken()
    {
        return $this->hasMany(DiaryTaken::class);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function eraserTaken()
    {
        return $this->hasMany(EraserTaken::class);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function penTaken()
    {
        return $this->hasMany(PenTaken::class);
    }

    public function getTotalDiaryTakenAttribute()
    {
       return $this->diaryTaken->count();
    }

    public function getTotalEraserTakenAttribute()
    {
       return $this->eraserTaken->count();
    }

    public function getTotalPenTakenAttribute()
    {
       return $this->penTaken->count();
    }

    public function getTotalItemTakenAttribute()
    {
       return $this->total_diary_taken + $this->total_eraser_taken + $this->total_pen_taken;
    }
}
