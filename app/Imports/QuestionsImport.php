<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;

class QuestionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Question([
            'subject_id' => $row[0],
            'detail' => $row[1],
            'option_A' => $row[2],
            'option_B' => $row[3],
            'option_C' => $row[4],
            'option_D' => $row[5],
            'option_E' => $row[6],
            'answer' => $row[7],

        ]);
    }
}
