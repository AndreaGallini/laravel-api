<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $array = config('new_array_project');
        // foreach($array as $project){
        //     $newProject = new Project;
        //     $truncateDate = Str::limit($project['created_at'], 10,'');
        //     $newProject->nome_progetto = $project['name'];
        //     $newProject->slug = $project['name'];
        //     $newProject->descrizione = $project['description'];
        //     $newProject->collaboratori = $project['visibility'];
        //     $newProject->autore = Str::limit($project['full_name'],13,'');
        //     $newProject->data_inizio_progetto = $truncateDate;
        //     $newProject->save();

        // }
        $array = config('array_progetti');
        foreach($array as $project){
            $newProject = new Project;

            $newProject->nome_progetto = $project['nome_progetto'];
            $newProject->slug =  Str::slug($newProject->nome_progetto, '-');
            $newProject->descrizione = $project['descrizione'];
            $newProject->collaboratori = $project['collaboratori'];
            $newProject->autore = $project['autore'];
            $newProject->data_inizio_progetto = $project['data_inizio_progetto'];
            $newProject->save();

        }

    }
}
