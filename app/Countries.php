<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    public function currency()
    {
        return $this->belongsTo(Currencies::class, 'currency_id');
    }

    public function continent()
    {
        return $this->belongsTo(Continents::class, 'continent_id');
    }
}
