<!-- HTMX -->

<form method="POST" action="/dailyreport/entry/<?= $id_laporan ?>/delete" class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Anda sudah yakin?</div>
            <div>Jika dilanjutkan, maka penugasan/target ini akan terhapus.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Yes, hapus penugasan ini</button>
        </div>
    </div>
</form>