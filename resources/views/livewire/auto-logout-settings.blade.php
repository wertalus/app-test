<div class="container-fluid text-center" >
    <h3>Ustaw automatyczne wylogowanie</h3>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label for="lifetime" class="form-label">Czas bezczynności przed wylogowaniem (minuty):</label>
            <input type="number" min="1" wire:model.defer="lifetime" id="lifetime" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
</div>
