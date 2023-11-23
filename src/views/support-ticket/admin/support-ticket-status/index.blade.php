<h1>from package</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataSet as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->slug }}</td>
                <td>{{ $data->description }}</td>
                <td>
                    @if ($data->status == 1)
                        Enable
                    @else
                        Disable
                    @endif
                </td>
                <td>
                    <!-- Status -->
                    @if ($data->status == 1)
                        <a href="?id={{ $data->id }}&status=0">Disable</a>
                    @else
                        <a href="?id={{ $data->id }}&status=1">Enable</a>
                    @endif
                    <!-- Edit -->
                    <a href="{{ route('admin.ticket-status.edit', $data->id) }}">Edit</a>
                    <!-- Delete -->
                    <form action="{{ route('admin.ticket-status.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="DeleteFormSubmit(this)" class="btn btn-flat btn-danger">
                            <i class="fa-solid fa-trash-can"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<script>
    function DeleteFormSubmit(element) {
        element.closest('form').submit();
    }
</script>
