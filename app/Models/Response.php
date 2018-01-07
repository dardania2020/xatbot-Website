<?php

namespace xatbot\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['phrase', 'response'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'responses';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function responseBot()
    {
        return $this->hasOne('xatbot\Models\Bot', 'id', 'bot_id');
    }
}
