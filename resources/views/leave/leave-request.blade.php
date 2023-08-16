<x-dashboard-layout title='dashboard'>
    <style>
        table {
            width: 100%;
        }

        table tr th,
        table tr td {
            background: transparent;
        }
    </style>
    <div class="container ml-4" style="width: 97%;">

        <h1 style="margin-bottom: 35px;padding-top:15px;">Leave <a href="{{ route('leave.create') }}"
                class="btn btn-primary" style="float:right;">Create
                New
                Leave</a></h1>
        @if (count($leave))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="background: transparent; color:#fff;">#</th>
                        <th scope="col" style="background: transparent; color:#fff;">Type</th>
                        <th scope="col" style="background: transparent; color:#fff;">Status</th>
                        <th scope="col" style="background: transparent; color:#fff;">Send At</th>
                        <th scope="col" style="background: transparent; color:#fff;">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($leave as $key => $value)
                        <tr>
                            <th style="background: transparent; color:#fff;" scope="row">{{ $key + 1 }}</th>
                            <td style="background: transparent; color:#fff;">{{ $value->name }}</td>
                            <td style="background: transparent; color:#fff;">{{ $value->pivot?->status }}</td>
                            <td style="background: transparent; color:#fff;">
                                {{ $value->pivot?->send_at->diffForHumans() }}
                            </td>
                            <td style="background: transparent; color:#fff;">
                                <form action="{{ route('leave.destroy', $value->id) }}" method="post"
                                    style="display: inline">
                                    @csrf
                                    @method('put')
                                    <input type="submit" value="Accept"
                                        style="color:#007bff;background:transparent;border:none;" />
                                </form>
                                <form action="{{ route('leave.destroy', $value->id) }}" method="post"
                                    style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete"
                                        style="color:#007bff;background:transparent;border:none;" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="font-size: 95px; margin-top:120px; text-align:center;">No Leave</p>
        @endif
    </div>
</x-dashboard-layout>
