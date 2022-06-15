<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillComponent extends Component
{

    public $skills;
    public function mount(){

        $this->skills=Skill::all();
       // var_dump($this->skills[0]->title);
    }


    public function render()
    {
        return view('livewire.skill-component', ['skills' => $this->skills]);
    }
}
