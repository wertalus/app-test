<div>
    <div class="wagon-container" style="background-color: #333; padding: 1rem; margin-top: 1rem">
        @foreach ($wagons as $wagon)            
            <p class="prod-list {{$wagon->color_status}}" draggable="true" style="padding: 1rem; border: 1px solid black; cursore: move">{{$wagon->wagon_number}}</p>
        @endforeach
    </div>
    <div class="wagon-container" style="background-color: #333; padding: 1rem; margin-top: 1rem" >
        <p class="prod-list {{$wagon->color_status}}" draggable="true" style="padding: 1rem; border: 1px solid black; cursore: move">33 58 7586 345-9</p>
        <p class="prod-list {{$wagon->color_status}}" draggable="true" style="padding: 1rem; border: 1px solid black; cursore: move">33 58 5342 356-8</p>
    </div>
</div>