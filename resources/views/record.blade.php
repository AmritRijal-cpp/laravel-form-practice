<x-layout>
    <x-slot:title>Records</x-slot:title>
    <x-slot:heading>Records</x-slot:heading>

    <table id="myTable" class="display px-4 nowrap" style="width:100%">
        <thead>
            <tr>
                <th>URL</th>
                <th>Update Date</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Server</th>
                <th>Folder</th>
                <th>Mode</th>
                <th>Date</th>
                <th>Call Date</th>
                <th>Response Type</th>
                <th>Database Detail</th>
                <th>Status</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->url}}</td>
                    <td>{{ toNepaliDate($item->update_date) }}</td>
                    <td>{{ $item->customer_name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->user_name }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->server }}</td>
                    <td>{{ $item->folder }}</td>
                    <td>{{ $item->mode }}</td>
                    <td>{{ toNepaliDate($item->date) }}</td>
                    <td>{{ toNepaliDate($item->call_date) }}</td>
                    <td>{{ $item->response_type }}</td>
                    <td>{{ $item->database_detail }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->age }}</td>
                    <td>
                        <a href="{{ route('edit', $item->id)}}"><button type="button" class="btn btn-info">
                            Edit
                        </button></a>
                        <form action="{{route('destroy', $item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>