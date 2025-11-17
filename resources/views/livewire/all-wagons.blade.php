<div>
    <div class="tab-content border border-2 my-4">
        <div class="tab-pane fade {{$tab1}}" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <table class="table table-hover table-striped">
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
                    @foreach ($wagons as $row => $wagon)
                        <tr class="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="$set('id',{{$wagon->id}})">
                            <th scope="row">{{$row+1}}</th>
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
    </div>
</div>
