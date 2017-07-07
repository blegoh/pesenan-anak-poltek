<?php

use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'question' => "Apakah Anda pernah melakukan hubungan seks dibawah usia 20?",
                'if_yes' => 2,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah Anda memiliki anak lebih dari 3 ?",
                'if_yes' => 3,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah Anda pengguna kontrasepsi oral selama lebih dari 4 tahun?",
                'if_yes' => 4,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah siklus menstruasi tidak lancar?",
                'if_yes' => 5,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah saat menstruasi terasa sakit berlebih?",
                'if_yes' => 6,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah Anda berganti-ganti pasangan seksual?",
                'if_yes' => 7,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah terjadi pendarahan setelah menopause?",
                'if_yes' => 8,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah terjadi pendarahan diluar menstruasi?",
                'if_yes' => 9,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah terdapat benjolan di sekitar area vagina?",
                'if_yes' => 10,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah Anda seorang perokok?",
                'conclusion_yes' => 1,
                'if_no' => 11,
            ],
            [
                'question' => "Apakah anda menggigil?",
                'if_yes' => 12,
                'if_no' => 12,
            ],
            [
                'question' => "Apakah anda mual?",
                'if_no' => 13,
                'if_yes' => 13,
            ],
            [
                'question' => "Apakah anda demam?",
                'if_no' => 14,
                'if_yes' => 14,
            ],
            [
                'question' => "Apakah perut anda bengkak atau terdapat benjolan?",
                'conclusion_yes' => 0,
                'conclusion_no' => 1,
            ]
        ];

        foreach ($datas as $data) {
            \App\Models\Question::create($data);
        }
    }
}
