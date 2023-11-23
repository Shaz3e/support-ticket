<form action="{{ route('admin.ticket-priority.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <input type="text" name="name" value="{{ old('name', $data->name) }}">
    </div>
    <div>
        <select name="status">
            <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Enable</option>
            <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Disable</option>
        </select>
    </div>

    <button type="submit">Update</button>
</form>