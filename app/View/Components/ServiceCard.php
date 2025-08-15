<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\View\View;

class ServiceCard extends Component
{
    public function __construct(public Service $service) {}
    public function render(): View
    {
        return view('components.service-card');
    }
}