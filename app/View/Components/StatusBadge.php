<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $statusText;
    public string $badgeClass;

    public function __construct(string $status = 'Aktif')
    {
        $this->statusText = $status;

        if ($status === 'Aktif') {
            $this->badgeClass = 'bg-emerald-50 text-emerald-700 border-emerald-200';
        } else {
            $this->badgeClass = 'bg-slate-100 text-slate-600 border-slate-200';
        }
    }

    public function render()
    {
        return view('components.status-badge');
    }
}