<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*laravel automaticamente transforma singular en plural al buscar en DB*/
class Job extends Model
{
    //si tabla esta en español
    //protected $table  = 'Trabajo';
    //relaciones
    public function typeJob()
    {
        /*
        $this->hasMany();
        $this->belongsTo();
        */
        //'TypeJon'
        return $this->belongsTo(TypeJob::class, 'type_job_id');

    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'jobs_categories', 'job_id');
    }

}
