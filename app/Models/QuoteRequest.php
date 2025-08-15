<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class QuoteRequest extends Model
{
    /** @use HasFactory<\Database\Factories\QuoteRequestFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'message',
        'services',
        'budget',
        'status',
        'contacted_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'services' => 'array',
            'budget' => 'decimal:2',
            'contacted_at' => 'datetime',
        ];
    }

    /**
     * Scope a query to filter by status.
     */
    public function scopeByStatus(Builder $query, string $status): void
    {
        $query->where('status', $status);
    }

    /**
     * Scope a query to order by newest first.
     */
    public function scopeLatest(Builder $query): void
    {
        $query->orderByDesc('created_at');
    }

    /**
     * Mark the quote request as contacted.
     */
    public function markAsContacted(): void
    {
        $this->update([
            'status' => 'contacted',
            'contacted_at' => now(),
        ]);
    }
}
