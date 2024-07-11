<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $task->title ?? '') }}" required>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" required>{{ old('description', $task->description ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="due_date">Due Date</label>
    <input type="date" name="due_date" id="due_date" class="form-control" value="{{ old('due_date', $task->due_date ?? '') }}" required>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control" required>
        <option value="pending" {{ old('status', $task->status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="in-progress" {{ old('status', $task->status ?? 'pending') == 'in-progress' ? 'selected' : '' }}>In-Progress</option>
        <option value="completed" {{ old('status', $task->status ?? 'pending') == 'completed' ? 'selected' : '' }}>Completed</option>
    </select>
</div>
