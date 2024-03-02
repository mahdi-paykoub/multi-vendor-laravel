<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductAttrValuePivot extends Pivot
{
    public function value()
    {
        return $this->belongsTo(AttrValue::class, 'attr_value_id', 'id');
    }
}
