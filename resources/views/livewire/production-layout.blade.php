<div class="mx-5">
    <div class="container-fluid text-center">
        {{-- SM2 & SR8 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SM2a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM2a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SM2a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SM2a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM2a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM2a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SM2a",
                            wire:click="$set('location','SM2a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM2a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SM2'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SM2">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SM2'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM2</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SM2",
                            wire:click="$set('location','SM2')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM2a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR8'][0]))
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR8</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR8">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR8'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR8</div>
                </div>
            @else
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR8</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR8",
                            wire:click="$set('location','SR8')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom">
                                {{__('messages.work center empty')}}      
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR8</div>
                </div>
            @endif              
        </div>
        {{-- SR5 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR5a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR5a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR5a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR5a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR5a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR5a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR5a",
                            wire:click="$set('location','SR5a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR5a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR5'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR5</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR5">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR5'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR5</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR5</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR5",
                            wire:click="$set('location','SR5')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR5</div>
                </div>
            @endif
        </div>
        {{-- SR7 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR7'][0]))
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR7</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR7">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR7'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR7</div>
                </div>
            @else
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR7</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR7"
                            wire:click="$set('location','SR7')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom">
                                {{__('messages.work center empty')}}      
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR7</div>
                </div>
            @endif
        </div>
        {{-- SR4 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR4a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR4a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR4a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR4a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR4a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR4a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR4a"
                            wire:click="$set('location','SR4a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR4a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR4'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR4</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR4">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR4'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR4</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR4</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR4"
                            wire:click="$set('location','SR4')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR4</div>
                </div>
            @endif
        </div>
        {{-- SM1 & SR6 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SM1a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM1a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SM1a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SM1a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM1a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM1a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SM1a",
                            wire:click="$set('location','SM1a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM1a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SM1'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM1</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SM1">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SM1'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM1</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SM1</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SM1",
                            wire:click="$set('location','SM1')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SM1</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR6'][0]))
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR6</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR6">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR6'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR6</div>
                </div>
            @else
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR6</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR6",
                            wire:click="$set('location','SR6')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom">
                                {{__('messages.work center empty')}}      
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR6</div>
                </div>
            @endif
        </div>
        {{-- SR3 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR3a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR3a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR3a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR3a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR3a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR3a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR3a",
                            wire:click="$set('location','SR3a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR3a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR3'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR3</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR3">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR3'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR3</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR3</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR3",
                            wire:click="$set('location','SR3a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR3</div>
                </div>
            @endif
        </div>
        {{-- Main road --}}
        <div class="row mb-4">
            <div class="col border fs-1 bg-green-200" style="min-height:20px;">
                <p class="align-middle" style="text-align: center">Główna droga komunikacyjna</p>
            </div>
        </div>
        {{-- SR2 & SH2 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR2a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR2a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR2a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR2a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR2a
                    </div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR2a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR2a",
                            wire:click="$set('location','SR2a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR2a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR2'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR2">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR2'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR2</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR2",
                            wire:click="$set('location','SR2')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR2</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SH2'][0]))
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SH2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SH2">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SH2'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SH2</div>
                </div>
            @else
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SH2</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SH2",
                            wire:click="$set('location','SH2')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom">
                                {{__('messages.work center empty')}}      
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SH2</div>
                </div>
            @endif
        </div>
        {{-- SH3 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SH3'][0]))
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SH3</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SH3">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SH3'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SH3</div>
                </div>
            @else
                <div class="col-3 ms-auto rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SH3</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SH3",
                            wire:click="$set('location','SH3')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom">
                                {{__('messages.work center empty')}}      
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SH3</div>
                </div>
            @endif
        </div>
        {{-- SR1 --}}
        <div class="row mb-4">
            @if(isset($wagons_PNM['SR1a'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR1a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR1a">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR1a'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR1a</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR1a</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR1a",
                            wire:click="$set('location','SR1a')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR1a</div>
                </div>
            @endif
            @if(isset($wagons_PNM['SR1'][0]))
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR1</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#SR1">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{$wagons_PNM['SR1'][0]->wagon_number}}
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR1</div>
                </div>
            @else
                <div class="col-3 rounded-2 border border-teal-500 p-0 mx-2" tabindex="0">
                    <div class="fs-5 border-secondary mb-2 bg-teal-500 text-light">SR1</div>
                        <button id="example" type="button" class="btn btn-outline-success"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-bs-whatever="SR1",
                            wire:click="$set('location','SR1')">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('messages.wagon info') }}">
                                {{__('messages.work center empty')}}       
                            </a>
                        </button>
                    <div class="fs-5 mt-2 bg-teal-500 rounded-bottom text-light">SR1</div>
                </div>
            @endif
        </div>
        @foreach ($work_centers as $wc)   
        <!-- Modal for wc in use-->
        <div class="modal fade" id="{{$wc}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Szczegóły</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        @if(isset($wagons_PNM[$wc][0]))
                        <div class="card border border-2 {{$wagons_PNM[$wc][0]->color_status}} bg-opacity-25" style="width: 21rem">
                            <div class="card-header border {{$wagons_PNM[$wc][0]->color_status}} bg-opacity-50">
                                <h4 class="card-title text-center">{{$wagons_PNM[$wc][0]->wagon_number}}</h4> 
                            </div>
                            <div class="card-body">
                                <img src="../img/GATX_452.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-footer bg-light">
                                <h5 class="card-title">Typ wagonu: {{$wagons_PNM[$wc][0]->type}}</h5>
                                <h5 class="card-title">Typ rewizji podwozia: {{$wagons_PNM[$wc][0]->uf_revision}}</h5>
                                <h5 class="card-title">Typ rewizji zbiornika: {{$wagons_PNM[$wc][0]->tank_revision}}</h5>
                                <h5 class="card-title">Malowanie: {{$wagons_PNM[$wc][0]->painting}}</h5>
                                <h5 class="card-title">Status czystości: {{$wagons_PNM[$wc][0]->cleaning_status}}</h5>
                                <a href="#" class="btn btn-outline-primary d-block">Pokaz więcej</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary mx-2 w-100">
                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wymień na kolejny wagon do naprawy">
                                <i class="bi bi-arrow-repeat"></i> Wymień wagon         
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit="Save">
                            <div class="mb-3">
                                <label for="select_track">Wybierz lokalizację z której chcesz wstawić wagon</label>
                                <select name="location" id="location" required class="form-select" aria-label="Default select example">
                                    <option selected>Dostępne lokalizacje</option>
                                    <option value="T3" wire:click="WagonsForPNM('T3')">T3</option>
                                    <option value="T4" wire:click="WagonsForPNM('T4')">T4</option>
                                    <option value="T5" wire:click="WagonsForPNM('T5')">T5</option>
                                    <option value="T6" wire:click="WagonsForPNM('T6')">T6</option>
                                    <option value="T7" wire:click="WagonsForPNM('T7')">T7</option>
                                    <option value="T8" wire:click="WagonsForPNM('T8')">T8</option>
                                    <option value="Park" wire:click="WagonsForPNM('Park')">Park</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                @if($no_of_wagons!=0)
                                    <select wire:model="wagon_id" name="wagon_number" id="wagon_number" required class="form-select" aria-label="Default select example">
                                        <option selected>Dostępne wagony</option>
                                        @foreach ($wagons_to_enter as $item)
                                            <option value="{{$item->id}}">{{$item->wagon_number}}</option>
                                        @endforeach
                                    </select>
                                        Liczba wagonów w tej lokalizacji : {{$no_of_wagons}}
                                @else
                                    Liczba wagonów w tej lokalizacji : {{$no_of_wagons}}
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
