<!--**********************************
    Content body start
***********************************-->

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <!--table-->
            <div class="col-12">
                <div class="card">
                    <div class="p-0 card-body">
                        <div class="table-responsive active-projects">
                            <div class="tbl-caption">
                                <h4 class="mb-0 heading">Import Inquiries</h4>
                            </div>
                            <div id="inquiryTableWrapper">
                                @include('admin-dashboard.partials.inquiry-table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Content body end
***********************************-->

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
    // const deleteForms = document.querySelectorAll('.delete-inquiry-form');

    // deleteForms.forEach(form => {
    //     form.addEventListener('submit', function(e) {
    //         e.preventDefault();

    //         if (confirm('Are you sure you want to delete this inquiry?')) {
    //             this.submit();
    //         }
    //     });
    // });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>

@push('page-ajax')
@include('admin-dashboard.partials.loading-modal')
@include('admin-dashboard.footer.inquiry-ajax')
@endpush

<!-- Highlight & scroll to inquiry when opened from notification -->
<style>
    .inquiry-highlight {
        animation: inquiry-pulse 3s ease-in-out;
        background: linear-gradient(90deg, rgba(255,250,240,0.6), rgba(255,245,240,0.3));
        transition: background 0.3s ease;
    }

    @keyframes inquiry-pulse {
        0% { box-shadow: 0 0 0 0 rgba(255,193,7,0.3); }
        50% { box-shadow: 0 8px 24px rgba(255,193,7,0.25); }
        100% { box-shadow: 0 0 0 0 rgba(255,193,7,0); }
    }
</style>

<script>
    (function(){
        // If query param inquiry_id is present, scroll to and highlight the row
        try{
            const params = new URLSearchParams(window.location.search);
            const inquiryId = params.get('inquiry_id');
            if (inquiryId) {
                const el = document.getElementById('inquiry-' + inquiryId);
                if (el) {
                    // scroll into view
                    el.scrollIntoView({behavior: 'smooth', block: 'center'});
                    // add highlight class
                    el.classList.add('inquiry-highlight');
                    // remove highlight after 6s
                    setTimeout(() => el.classList.remove('inquiry-highlight'), 6000);
                }
            }
        }catch(e){
            // ignore
        }
    })();
</script>
