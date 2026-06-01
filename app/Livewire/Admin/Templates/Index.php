<?php

namespace App\Livewire\Admin\Templates;

use App\Models\Template;
use Livewire\Component;

class Index extends Component
{
    public function delete(Template $template)
    {
        $template->delete();
    }

    public function render()
    {
        return view('livewire.admin.templates.index', [
            'templates' => Template::latest()->get(),
        ]);
    }
}
