<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['id', 'body'];

    public function scopeSearchItems($query, $terms)
    {
        return $query->where(function ($query) use ($terms) {
            foreach ($terms as $term) {
                $query->orWhere('body', 'LIKE', "%$term%");
            }
        });
    }
}
