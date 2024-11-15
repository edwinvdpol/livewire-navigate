<div class="space-y-2">
    <h1>Page 2</h1>
    <p>That's right, the stylesheet loaded again because of the injected styles on page one(<a href="https://github.com/livewire/livewire/blob/main/js/plugins/navigate/bar.js#L36" target="_blank">here</a>)</p>
    <p>If you do the same as before with the link below, this doesn't happen as the header is not different than this page.</p>
    <p>It applies the diffences in the header...</p>
    <p><a href="/three" class="underline" wire:navigate>Goto page 3</a></p>
</div>
