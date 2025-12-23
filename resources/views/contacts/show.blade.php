<!-- View Contact Message Modal -->
<div class="modal fade p-0" id="ViewContactModal" tabindex="-1" role="dialog" aria-hidden="true"
    aria-labelledby="viewModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h5 class="modal-title fw-bold" id="addModalLabel">View Contact Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-white">
                <div class="row g-3">
                    <div class="col-md-6">
                        <span class="fw-bold mb-1">Name</span>
                        <div>{{ $contact->name ?? '-' }}</div>
                    </div>
                    <div class="col-md-6">
                        <span class="fw-bold mb-1">Email</span>
                        <div>{{ $contact->email ?? '-' }}</div>
                    </div>
                    <div class="col-md-6">
                        <span class="fw-bold mb-1">Phone</span>
                        <div>{{ $contact->phone ?? '-' }}</div>
                    </div>
                    <div class="col-md-6">
                        <span class="fw-bold mb-1">Subject</span>
                        <div>{{ $contact->subject ?? '-' }}</div>
                    </div>
                    <div class="col-md-12">
                        <span class="fw-bold mb-1">Message</span>
                        <p>
                            {!! $contact->message ?? 'No Message !!' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
