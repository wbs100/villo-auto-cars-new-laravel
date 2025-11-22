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
