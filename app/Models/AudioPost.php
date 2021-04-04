<?php

namespace App\Models;

use Storage;
use Balping\HashSlug\HasHashSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AudioPost extends Model
{
    use HasFactory, HasHashSlug;

    protected $table = "audioposts";

    protected $fillable = [
        'title', 
        'audio_file_path',
        'thumb_file_path',
        'description',
        'user_id',
    ];

    // Define relationship
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get Image path
     *
     * @return String
     */
    public function getImage() {
        $filename = $this->thumb_file_path;

        if(!preg_match('/(http)/', $filename)) {
            $filename = Storage::url($this->thumb_file_path);
        }

        return $filename;
    }
}
