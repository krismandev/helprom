@php
    $question = $questionGroups[$form - 1]->questions;
    $i = 0;
@endphp
@foreach ($question as $item)
    <div class="form-group">
        <label for="patient">{{ ++$i }}. {{ $item->question }}</label>
        @if ($item->listAnswer)
            @if ($form < 4)
                <select required class="form-control" id="questions.{{ $item->id }}"
                    name="questions.{{ $item->id }}" wire:model="questions.{{ $item->id }}">
                    <option value="">Pilih</option>
                    @foreach ($item->listAnswer->answers as $answer)
                        <option value="{{ $answer }}">{{ $answer }}</option>
                    @endforeach
                </select>
            @else
                <select class="form-control" id="questions.{{ $item->id }}" name="questions.{{ $item->id }}"
                    wire:model="questions.{{ $item->id }}">
                    <option value="">Pilih</option>
                    @foreach ($item->listAnswer->answers as $answer)
                        <option value="{{ $answer }}">{{ $answer }}</option>
                    @endforeach
                </select>
            @endif
        @else
            <input type="text" class="form-control" id="questions.{{ $item->id }}"
                name="questions.{{ $item->id }}" wire:model="questions.{{ $item->id }}" value="">
        @endif
    </div>
@endforeach
