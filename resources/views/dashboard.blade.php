<x-dashboard-layout title='dashboard'>
    <style>
        table {
            width: 100%;
        }

        /* table tr {
            display: block;
        }

        table tr th,
        table tr td {
            display: inline-block;
            width: calc((100% - 15px) / 4);
            padding: 12px;
            border:solid 1px #fff;
        } */
    </style>
    <div class="container ml-4" style="width: 97%;">
        <h1 style="margin-bottom: 35px;padding-top:15px;">Leave</h1>
        {{-- <table class="">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>bla bal</td>
                    <td>active</td>
                    <td>now</td>
                </tr>
            </tbody>
        </table> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-dashboard-layout>
