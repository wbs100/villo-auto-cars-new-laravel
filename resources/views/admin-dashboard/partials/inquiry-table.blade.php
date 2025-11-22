<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="inquiries-tbl" class="table table-hover">
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
                                        data-inquiry-id="{{ $inquiry->id }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#viewInquiryModal"
                                        data-inquiry='@json($inquiry)'>
                                    <i class="bi bi-eye"></i> View
                                </button>

                                <!-- Delete Button -->
                                <form method="POST" action="/inquiries/{{ $inquiry->id }}" class="d-inline delete-inquiry-form" data-inquiry-id="{{ $inquiry->id }}">
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
                    <tr>
                        <td colspan="12" class="text-center py-4">
                            <p class="mb-0 text-muted">No inquiries found.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <div class="text-muted">
                Showing {{ $inquiries->firstItem() ?? 0 }} to {{ $inquiries->lastItem() ?? 0 }} of {{ $inquiries->total() }} results
            </div>
            <div>
                {{ $inquiries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

<!-- View Inquiry Modal -->
<div class="modal fade" id="viewInquiryModal" tabindex="-1" aria-labelledby="viewInquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewInquiryModalLabel">Inquiry Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Name:</label>
                        <p id="modal-name" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Phone:</label>
                        <p id="modal-phone" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email:</label>
                        <p id="modal-email" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Brand:</label>
                        <p id="modal-brand" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Model:</label>
                        <p id="modal-model" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Year:</label>
                        <p id="modal-year" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Color:</label>
                        <p id="modal-color" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Condition:</label>
                        <p id="modal-condition" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Message:</label>
                        <p id="modal-message" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Submitted On:</label>
                        <p id="modal-created" class="form-control-plaintext"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
/* Pagination Styling */
.pagination {
    margin: 0;
    gap: 5px;
}

.pagination .page-link {
    color: #6c757d;
    background-color: #fff;
    border: 1px solid #dee2e6;
    padding: 8px 14px;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    color: #fff;
    background-color: #5a3d99;
    border-color: #5a3d99;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(90, 61, 153, 0.2);
}

.pagination .page-item.active .page-link {
    color: #fff;
    background-color: #5a3d99;
    border-color: #5a3d99;
    box-shadow: 0 2px 4px rgba(90, 61, 153, 0.3);
}

.pagination .page-item.disabled .page-link {
    color: #c4c4c4;
    background-color: #f8f9fa;
    border-color: #dee2e6;
    cursor: not-allowed;
}

/* Table styling improvements */
#inquiries-tbl thead th {
    background-color: #f8f9fa;
    font-weight: 600;
    color: #495057;
    border-bottom: 2px solid #dee2e6;
    padding: 12px 15px;
}

#inquiries-tbl tbody tr {
    transition: background-color 0.2s ease;
}

#inquiries-tbl tbody tr:hover {
    background-color: #f8f9fa;
}

/* Button styling */
.btn-sm {
    padding: 6px 12px;
    font-size: 13px;
    border-radius: 5px;
    font-weight: 500;
}

.btn-outline-primary {
    color: #5a3d99;
    border-color: #5a3d99;
}

.btn-outline-primary:hover {
    background-color: #5a3d99;
    border-color: #5a3d99;
    color: #fff;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}

/* Modal styling */
.modal-content {
    border-radius: 10px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.modal-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.form-control-plaintext {
    padding: 5px 0;
    color: #495057;
}

/* Responsive table */
.table-responsive {
    overflow-x: auto;
}

@media (max-width: 768px) {
    #inquiries-tbl {
        font-size: 12px;
    }

    #inquiries-tbl th,
    #inquiries-tbl td {
        padding: 8px 10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // View inquiry modal
    const viewButtons = document.querySelectorAll('.view-inquiry-btn');

    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const inquiry = JSON.parse(this.getAttribute('data-inquiry'));

            // Populate modal
            document.getElementById('modal-name').textContent = inquiry.name || '-';
            document.getElementById('modal-phone').textContent = inquiry.phone || '-';
            document.getElementById('modal-email').textContent = inquiry.email || '-';
            document.getElementById('modal-brand').textContent = inquiry.brand || '-';
            document.getElementById('modal-model').textContent = inquiry.model || '-';
            document.getElementById('modal-year').textContent = inquiry.year || '-';
            document.getElementById('modal-color').textContent = inquiry.color || '-';
            document.getElementById('modal-condition').textContent = inquiry.condition || '-';
            document.getElementById('modal-message').textContent = inquiry.message || '-';
            document.getElementById('modal-created').textContent = inquiry.created_at ?
                new Date(inquiry.created_at).toLocaleString() : '-';
        });
    });

    // Delete confirmation
    const deleteForms = document.querySelectorAll('.delete-inquiry-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this inquiry?')) {
                this.submit();
            }
        });
    });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
