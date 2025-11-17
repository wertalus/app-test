<div class="ps-4 row">
    <ul x-sort class="list-group list-group-horizontal ">
    @foreach ($wagons as $wagon)        
       <li x-sort-item class="list-group-item border border-0">
            <div class="card border border-2 {{$wagon->color_status}} bg-opacity-25" style="width: 21rem">
                <div class="card-header border {{$wagon->color_status}} bg-opacity-50">
                    <h4 class="card-title text-center">{{$wagon->wagon_number}}</h4> 
                </div>
                <div class="card-body">
                    <img src="../img/GATX_452.png" class="card-img-top" alt="...">
                </div>
                <div class="card-footer bg-light">
                    <h5 class="card-title">Typ wagonu: {{$wagon->type}}</h5>
                    <h5 class="card-title">Typ rewizji podwozia: {{$wagon->uf_revision}}</h5>
                    <h5 class="card-title">Typ rewizji zbiornika: {{$wagon->tank_revision}}</h5>
                    <h5 class="card-title">Malowanie: {{$wagon->painting}}</h5>
                    <h5 class="card-title">Status czystości: {{$wagon->cleaning_status}}</h5>
                    <a href="#" class="btn btn-outline-primary d-block">Pokaz więcej</a>
                </div>
            </div>
        </li>
    @endforeach

    </ul>
    <div>
            <button class="btn btn-primary"
                            data-bs-toggle="tooltip" 
                            
                            title="This top tooltip is themed via CSS variables."> hej</button>
    </div>
</div>
