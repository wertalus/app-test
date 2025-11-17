<div class="container-fluid text-center dark-table">
    <ul class="nav justify-content-center p-2">
        <li class="nav-item">
            <button class="btn btn-outline-secondary mx-2" wire:click="All_Wagons()">Wszystkie wagony</button>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline-secondary mx-2" wire:click="Repair_Wagons()">W naprawie</button>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline-secondary mx-2" wire:click="Hold_Wagons()">Wstrzymane</button>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline-secondary mx-2" wire:click="KJ_Wagons()">KJ</button>
        </li>        
    </ul>
    <div class="container-fluid">
        <table class="table table-hover table-striped dark-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Numer wagonu</th>
                    <th scope="col">Typ wagonu</th>
                    <th scope="col">Rewizja podwozia</th>
                    <th scope="col">Rewizja zbiornika</th>
                    <th scope="col">Lokalizacja</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wagons as $wagon)
                    <tr class="" wire:key="item-{{ $wagon->id }}" id="profile-button" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="$set('id',{{$row_number-1}})">
                        <th scope="row">{{$row_number++}}</th>
                        <td>{{$wagon->wagon_number}}</td>
                        <td>{{$wagon->type}}</td>
                        <td>{{$wagon->uf_revision}}</td>
                        <td>{{$wagon->tank_revision}}</td>
                        <td>{{$wagon->location}}</td>
                        <td>{{$wagon->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$wagons[$id]->wagon_number}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
