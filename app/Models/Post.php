<?php

namespace App\Models;

use App\Enums\PostCurrencySalaryEnum;
use App\Enums\PostStatusEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'company_id',
        'job_title',
        'levels',
        'city',
        'status',
        'district',
        'remotable',
        'min_salary',
        'max_salary',
        'currency_salary',
        'status',
        'is_pinned',
        'slug'
    ];

//    protected $appends =[
//      'currency_salary_code',
//    ];

    public static function booted(): void
    {
        static::creating(static function ($object) {
//            $object->user_id = user()->id();
            $object->user_id = 1;
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'job_title'
            ]
        ];
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function file(): HasOne
    {
        return $this->hasOne(File::class);
    }

    public function getCurrencySalaryCodeAttribute()
    {
        return PostCurrencySalaryEnum::getKey($this->currency_salary);
    }
    public function getStatusNameAttribute()
    {
        return PostStatusEnum::getKey($this->status);
    }
}
