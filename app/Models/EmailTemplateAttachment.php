<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplateAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_template_id',
        'file_name',
        'file_path',
        'mime_type',
    ];

    public function emailTemplate()
    {
        return $this->belongsTo(EmailTemplate::class);
    }
}
