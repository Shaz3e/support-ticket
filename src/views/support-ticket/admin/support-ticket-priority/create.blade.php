<h2>Support Ticket Package</h2>
<form action="{{ route('admin.ticket-priority.store') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
        <select name="status">
            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Enable</option>
            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Disable</option>
        </select>
    </div>

    <button type="submit">Create</button>
</form>