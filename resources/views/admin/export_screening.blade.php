<table border="2px">
    <thead>
        <tr>
            <th rowspan="2">Nama Pasien</th>
            <th rowspan="2">NIP/NIK/NIM</th>
            <th rowspan="2">Tanggal Screening</th>
            @foreach ($questionGroup as $item)
                <th colspan="{{ count($item->questions) }}">{{ $item->group_name }}</th>
            @endforeach
        </tr>
    </thead>
    <thead>
        <tr>
            {{-- <th></th>
            <th></th>
            <th></th> --}}
            @foreach ($questionGroup as $item)
                @foreach ($item->questions as $quest)
                    <th>{{ $quest->question }}</th>
                @endforeach
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($screening as $s)
            <tr>
                <td>{{ $s->patient->full_name }}</td>
                <td>{{ $s->patient->identity }}</td>
                <td>{{ $s->created_at }}</td>
                @foreach ($questionGroup as $item)
                    @foreach ($item->questions as $quest)
                        <td>
                            {{ $s->screeningAnswers->where('question_id', $quest->id)->first() == null ? '-' : $s->screeningAnswers->where('question_id', $quest->id)->first()->answer }}
                        </td>
                    @endforeach
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
