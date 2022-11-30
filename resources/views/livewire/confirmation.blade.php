<div class="row">
    <div class="col-md-6">
        <form method="POST" wire:submit.prevent="confirmation">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="order-number">Order Number:</label>
                        <input type="text" class="form-control" wire:model.lazy="order_number" id="order-number">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="card">
            <h4 class="card-header">Informasi</h4>
            <div class="card-body">
                <p>Lakukan konfirmasi order jika kamu telah menerima pesanan dari waitress</p>
                <p>Untuk melakukan konfirmasi order, silahkan masukkan nomor order yang telah
                    diberikan
                    oleh sistem.</p>
                <p>Apabila nomor order yang dimasukkan tidak ditemukan, maka sistem akan memberikan
                    pesan error.</p>
            </div>
        </div>
    </div>
</div>
