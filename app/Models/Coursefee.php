<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coursefee extends Model
{
    // Cho phép gán hàng loạt các trường này
     protected $fillable = [
        'course_id',
        'total_fee',
        'discount',
        'gift',
    ];

    /**
     * Quan hệ với model Course.
     * Mỗi học phí thuộc về 1 khóa học.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Accessor tính số tiền cần thanh toán sau khi giảm giá.
     * Nếu giảm giá vượt quá tổng học phí thì trả về 0.
     */
    public function getFinalAmountAttribute()
    {
        return max($this->total_fee - $this->discount, 0);
    }
}
