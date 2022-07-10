<div>
    <div class="row">
    <div class="col-lg-3">
        @foreach($types as $type)
            <button class="btn-outline-primary col-lg-12" wire:click="selectType({{$type->id}})">
                <span>{{$type->name}}</span>
            </button>
        @endforeach
    </div>

    <div class="col-lg-5">
            <table class="table">
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            <div class="row font-weight-bold">{{$item->name}}</div>
                            <div class="row">{{$item->description}}</div>
                        </td>
                        <td>
                            <div class="font-weight-bold">{{$item->price}}</div>
                        </td>
                        <td>
                            <button type="button" class="btn-primary">+</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>

        <div class="col-lg-4">
            @if($order)
                @foreach($order as $index=> $value)

                    {{$value['name']}}
                @endforeach
            @endif
            <div></div>
            <button></button>
        </div>
    </div>
</div>
