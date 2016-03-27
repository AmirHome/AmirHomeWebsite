<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'news';
    
    protected $fillable = [
          'items_id',
          'keywords',
          'originId',
          'title',
          'slug',
          'published',
          'content',
          'visual_url',
          'direction',
          'language'
    ];
    
    public static $direction = ["rtl" => "rtl", "ltr" => "ltr"];
    public static $language = ["fa" => "fa", "en" => "en", "tr" => "tr"];


    public static function boot()
    {
        parent::boot();

        News::observe(new UserActionsObserver);
    }
    
    
    
    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setPublishedAttribute($input)
    {
        $this->attributes['published'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $input)->format('Y-m-d H:i:s');
    }

    /**
     * Get attribute from datetime format
     * @param $input
     *
     * @return string
     */
    public function getPublishedAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('quickadmin.date_format') . ' ' .config('quickadmin.time_format'));
    }


}