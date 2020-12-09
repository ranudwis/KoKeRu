<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Bukti extends Model
{
    public const TYPE_IMAGE = 1;
    public const TYPE_VIDEO = 2;
    public const TYPE_UNKNOWN = 3;

    use HasFactory;

    protected $table = 'bukti';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan', 'id_laporan');
    }

    public function getMime()
    {
        $filePath = Storage::path($this->bukti);
        $mime = mime_content_type($filePath);

        return $mime;
    }

    public function getType()
    {
        $mime = $this->getMime();

        if (strstr($mime, 'image') !== false) {
            return self::TYPE_IMAGE;
        } elseif (strstr($mime, 'video') !== false) {
            return self::TYPE_VIDEO;
        }

        return self::TYPE_UNKNOWN;
    }
}
