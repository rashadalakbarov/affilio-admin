<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySettings extends Model
{
    protected $table = 'company_settings';
    
    protected $fillable = ['key', 'value'];

    public static function getValue($key)
    {
        return self::where('key', $key)->value('value');
    }

    public static function setValue($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
