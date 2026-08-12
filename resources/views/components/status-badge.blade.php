<span class="inline-flex items-center gap-1.5 rounded-full border px-2.5 py-0.5 text-xs font-medium {{ $badgeClass }}">
    <span class="h-1.5 w-1.5 rounded-full {{ $statusText === 'Aktif' ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
    {{ $statusText }}
</span>