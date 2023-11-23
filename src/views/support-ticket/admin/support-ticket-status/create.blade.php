<h2>Support Ticket Package</h2>
<form action="{{ route('admin.ticket-status.store') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
        <input type="text" name="slug" value="{{ old('slug') }}">
    </div>
    <div>
        <select name="status">
            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Enable</option>
            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
    <textarea name="description" cols="30" rows="10">{{ old('description') }}</textarea>

    <button type="submit">Create</button>
</form>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    /**
     * Slug should be based on name
     * Replace space and special character to hyphen
     */
    $(document).ready(function () {
        $('input[name="name"]').keyup(function () {
            let name = $(this).val();
            $('input[name="slug"]').val(name.replace(/[^a-zA-Z0-9\s]/gi, '-').replace(/\s+/g, '-').toLowerCase());
        })
    })
</script>
