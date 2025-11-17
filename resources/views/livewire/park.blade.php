<div class="container py-4">
    <h2 class="mb-4">Wagony w parku</h2>
    <div id="park-area">
        @foreach($tracks as $i => $track)
            <div class="park-track" data-track="{{ $i+1 }}"
                ondragover="highlightTrack(event, this)" 
                ondragleave="unhighlightTrack(event, this)" 
                ondrop="handleDrop(event, {{ $i+1 }}, this)">
                <span class="park-track-label">Tor {{ $i+1 }}</span>
                <div class="park-wagons-list d-flex align-items-center" data-track-list="{{ $i+1 }}">
                    @for($slot = 1; $slot <= 20; $slot++)
                        @php
                            $wagon = collect($track)->firstWhere('position_on_list', $slot);
                        @endphp
                        @if(!$wagon)
                            <div class="drop-slot mx-1 text-center" data-slot-index="{{ $slot-1 }}" data-track="{{ $i+1 }}"
                                style="min-width:32px; font-size:10px; color:#888;"
                                ondragover="event.preventDefault(); this.classList.add('slot-over')"
                                ondragleave="this.classList.remove('slot-over')"
                                ondrop="handleSlotDrop(event, {{ $i+1 }}, {{ $slot-1 }})">
                                {{ $slot }}
                            </div>
                        @endif
                        @if($wagon)
                            <div class="park-wagon mx-1" draggable="true" data-wagon-id="{{ $wagon->id }}" ondragstart="dragWagon(event)" ondragend="this.classList.remove('dragging')" style="cursor: grab;">
                                <span class="park-wagon-number mx-2">{{ $wagon->wagon_number }}</span>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        @endforeach
    </div>
</div>
