<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    protected $fillable = [
        'name',
        'email',
        'gender',
        'occupation',
        'type_of_contract',
        'user_id',
        'company_id',
        'calification',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7',
        'question_8',
        'question_9',
        'question_10',
        'question_11',
        'question_12',
        'question_13',
        'question_14',
        'question_15',
        'question_16',
        'question_17',
        'question_18',
        'question_19',
        'question_20',
        'question_21',
        'question_22',
        'question_23',
        'question_24',
        'question_25',
        'question_26',
        'question_27',
        'question_28',
        'question_29',
        'question_30',
        'question_31',
        'question_32',
        'question_33',
        'question_34',
        'question_35',
        'question_36',
        'question_37',
        'question_38',
        'question_39',
        'question_40',
        'question_41',
        'question_42',
        'question_43',
        'question_44',
        'question_45',
        'question_46',
        'ambiente_trabajo',
        'factores_propios',
        'organizacion_tiempo',
        'liderazgo_trabajo',
        'condiciones_ambiente',
        'carga_trabajo',
        'jornada_trabajo',
        'trabajo_familia',
        'falta_control',
        'liderazgo',
        'relaciones_trabajo',
        'violencia'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function scopeCompany($query, $company){
        if($company)
            return $query->where('company_id', $company);
    }

}
