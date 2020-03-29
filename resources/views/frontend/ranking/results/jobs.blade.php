<table class="table table-hover table-striped ">
    <thead>
    <tr>
        <th scope="col">{{ __('ranking.table.rank') }}</th>
        <th scope="col">{{ __('ranking.table.job-name') }}</th>
        <th scope="col">{{ __('ranking.table.job-type') }}</th>
        <th scope="col">{{ __('ranking.table.exp') }}</th>
    </tr>
    </thead>
    <tbody>
    @forelse($data as $jobs)
        <tr class="live-search-list">
            <td>
                {{ $loop->iteration }}
            </td>
            <td>
                <img src="{{ asset('image/chars/') }}/{{ $jobs->getCharacter->RefObjID }}.gif"
                     class="img-fluid" width="16" height="16" alt="{{ $jobs->getCharacter->CharName16 }}">
                {{ $jobs->getCharacter->NickName16 }}
            </td>
            <td>
                @if($jobs->JobType === 1)
                    {{ __('ranking.table.trader') }}
                @endif
                @if($jobs->JobType === 2)
                    {{ __('ranking.table.trader') }}
                @endif
                @if($jobs->JobType === 3)
                    {{ __('ranking.table.thief') }}
                @endif
            </td>
            <td>
                {{ __('ranking.table.job-level', ['level' => $jobs->Level, 'exp' => $jobs->Exp]) }}
            </td>
        </tr>
    @empty
        <tr>
            <th>{{ __('ranking.no-job') }}</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    @endforelse
    </tbody>
</table>