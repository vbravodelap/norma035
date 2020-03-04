<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
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
        'question_47',
        'question_48',
        'question_49',
        'question_50',
        'question_51',
        'question_51',
        'question_53',
        'question_54',
        'question_54',
        'question_56',
        'question_57',
        'question_58',
        'question_59',
        'question_60',
        'question_61',
        'question_62',
        'question_63',
        'question_64',
        'question_65',
        'question_66',
        'question_67',
        'question_68',
        'question_69',
        'question_70',
        'question_71',
        'question_72',
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
}


