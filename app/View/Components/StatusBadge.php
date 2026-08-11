<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $statusText;
    public string $badgeClass;

    /**
     * Create a new component instance.
     */
    public function __construct(string $status)
    {
        // Normalize status value to handle lowercase/uppercase inputs
        $normalizedStatus = strtolower(trim($status));

        if (in_array($normalizedStatus, ['active', 'aktif', '1'], true)) {
            $this->statusText = 'Aktif';
            $this->badgeClass = 'bg-emerald-100 text-emerald-800 border-emerald-200';
        } else {
            $this->statusText = 'Tidak Aktif';
            $this->badgeClass = 'bg-rose-100 text-rose-800 border-rose-200';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}