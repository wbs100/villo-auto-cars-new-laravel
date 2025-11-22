<table id="inquiries-tbl" class="table table-hover mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Color</th>
            <th>Condition</th>
            <th>Message</th>
            <th>Created</th>
            <th class="text-end">Actions</th>
        </tr>
    </thead>
    <tbody id="inquiriesTableBody">
        @forelse($inquiries as $inquiry)
        <tr id="inquiry-{{ $inquiry->id }}" class="border-bottom" data-inquiry-id="{{ $inquiry->id }}">
            <td class="align-middle text-start">{{ $inquiry->id }}</td>
            <td class="align-middle text-start">{{ $inquiry->name }}</td>
            <td class="align-middle text-start">{{ $inquiry->phone }}</td>
            <td class="align-middle text-start">{{ $inquiry->email }}</td>
            <td class="align-middle text-start">{{ $inquiry->brand }}</td>
            <td class="align-middle text-start">{{ $inquiry->model }}</td>
            <td class="align-middle text-start">{{ $inquiry->year }}</td>
            <td class="align-middle text-start">{{ $inquiry->color }}</td>
            <td class="align-middle text-start">{{ $inquiry->condition }}</td>
            <td class="align-middle text-start">
                <span data-bs-toggle="tooltip" title="{{ $inquiry->message }}">
                    {{ \Illuminate\Support\Str::limit($inquiry->message, 50) }}
                </span>
            </td>
            <td class="align-middle text-start">{{ $inquiry->created_at->format('Y-m-d H:i') }}</td>
            <td class="text-end align-middle">
                <div class="gap-2 d-flex justify-content-end">
                    <!-- View Button -->
                    <button type="button" class="btn btn-sm btn-outline-primary view-inquiry-btn"
                        data-inquiry-id="{{ $inquiry->id }}" data-bs-toggle="modal" data-bs-target="#viewInquiryModal"
                        data-inquiry='@json($inquiry)'>
                        <i class="bi bi-eye"></i> View
                    </button>

                    <!-- Delete Button -->
                    <form method="POST" action="/inquiries/{{ $inquiry->id }}" class="d-inline delete-inquiry-form"
                        data-inquiry-id="{{ $inquiry->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tfoot>
            <td colspan="12" class="text-center py-4">
                <p class="mb-0 text-muted">No inquiries found.</p>
            </td>
        </tfoot>
        @endforelse
    </tbody>
</table>
{{-- 
<!-- Pagination -->
<div class="p-4 d-flex justify-content-between align-items-center">
    <div class="text-muted">
        Showing {{ $inquiries->firstItem() ?? 0 }} to {{ $inquiries->lastItem() ?? 0 }} of {{
        $inquiries->total() }} results
    </div>
    <div>
        {{ $inquiries->links('pagination::bootstrap-5') }}
    </div>
</div> --}}