<div>
    <div class="card">
        <div class="card-header">
            <h4>Customer Data</h4>
        </div>
        <form method="POST" action="" wire:submit.prevent="saveCustomer">
            <div class="card-body">
                @csrf
                @if ($successMessage)
                    <div class="alert alert-success" role="alert">
                        {{ $successMessage }}
                        <button wire:click="$set('successMessage', null)" type="button" class="close"
                            data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if ($errorMessage)
                    <div class="alert alert-danger" role="alert">
                        {{ $errorMessage }}
                        <button wire:click="$set('errorMessage', null)" type="button" class="close"
                            data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" wire:model.lazy="email"
                            placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" wire:model.lazy="name"
                            placeholder="Nama pengunjung">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tableNumber">Nomor Meja</label>
                        <input type="number" class="form-control" id="tableNumber" wire:model.lazy="table_number"
                            placeholder="50">
                        @error('table_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="type">Tipe Order</label>
                        <select id="type" class="form-control" wire:model.lazy="type">
                            <option selected>Pilih</option>
                            <option value="dine_in">Dine in</option>
                            <option value="take_away">Take away</option>
                        </select>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-outline-success">Simpan Data</button>
            </div>
        </form>
    </div>

    @if (session()->get('customer'))
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Detail</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i
                                    class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <b>Informasi :</b>
                                <li>Jika ingin mengubah data customer silahkan isi form diatas kembali.</li>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <b>Email : {{ session()->get('customer')['email'] ?? null }}</b> <br />
                                    <b>Nomor Meja : {{ session()->get('customer')['table_number'] ?? null }}</b><br />
                                    <b>Tipe Order : {{ session()->get('customer')['type'] ?? null }}</b><br />
                                    <b>E-mail : {{ session()->get('customer')['email'] ?? null }}</b><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
