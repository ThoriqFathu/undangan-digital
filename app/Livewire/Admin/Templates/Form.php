<?php

namespace App\Livewire\Admin\Templates;

use App\Models\Template;
use Livewire\Component;

class Form extends Component
{
    public ?Template $template = null;

    public string $name = '';
    public string $slug = '';
    public string $view_name = '';
    public ?string $category = null;
    public float $price = 0;
    public bool $is_active = true;

    public function mount(?Template $template = null)
    {
        if ($template?->exists) {
            $this->template = $template;

            $this->fill(
                $template->only([
                    'name',
                    'slug',
                    'view_name',
                    'category',
                    'price',
                    'is_active',
                ])
            );
        }
    }

    public function save()
    {
        $data = $this->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'view_name' => ['required'],
            'price' => ['required', 'numeric'],
        ]);

        Template::updateOrCreate(
            ['id' => $this->template?->id],
            [
                ...$data,
                'category' => $this->category,
                'is_active' => $this->is_active,
            ]
        );

        return redirect()->route('templates.index');
    }

    public function render()
    {
        return view('livewire.admin.templates.form');
    }
}