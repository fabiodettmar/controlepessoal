<?php

namespace controlepessoal;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Base extends Model {
    private $errors;

    public function validate($data)
    {
        if(!empty($this->rules)) {
            $v = Validator::make($data, $this->rules);

            if ($v->fails()) {
                $this->errors = $v->errors();
                return false;
            }
        }

        return true;
    }

    public function errors()
    {
        return $this->errors;
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function getAllColumnsNames() {

        $query = 'SHOW COLUMNS FROM ' . $this->table;
        $column_name = 'Field';
        $reverse = false;

        $columns = [];

        foreach (DB::select($query) as $column) {
            $columns[] = $column->$column_name;
        }

        if ($reverse) {
            $columns = array_reverse($columns);
        }

        return $columns;
    }

}
