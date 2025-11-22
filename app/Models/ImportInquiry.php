<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Notification as NotificationFacade;
use App\Notifications\NewImportInquiry;
use App\Models\User;

class ImportInquiry extends Model
{
    use HasFactory;

    protected $table = 'import_inquiries';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'brand',
        'model',
        'year',
        'color',
        'condition',
        'message',
    ];

    protected static function booted()
    {
        static::created(function ($inquiry) {
            try {
                // Only send notification if notifications table exists and users table exists
                if (Schema::hasTable('notifications') && Schema::hasTable('users')) {
                    // Notify all users — adjust this if you have an admin flag
                    $users = User::all();
                    if ($users->count()) {
                        NotificationFacade::send($users, new NewImportInquiry($inquiry));
                    }
                }
            } catch (\Throwable $e) {
                // swallow errors to avoid breaking the create flow
            }
        });
    }
}
