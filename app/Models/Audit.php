<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'urls' => 'array',
        'accessibility' => 'bool',
        'best_practices' => 'bool',
        'performance' => 'bool',
        'pwa' => 'bool',
        'seo' => 'bool',
        'headers' => 'array',
        'webhook_enabled' => 'bool',
        'webhook_delay' => 'int',
        'notify_emails' => 'array',
        'project_id' => 'int',
    ];
}
