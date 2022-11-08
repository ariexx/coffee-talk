<div class="card">
    <div class="card-header">
        <h4>Order Details</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST" wire:submit.prevent="saveCustomer">
            @csrf
            @if($successMessage)
                <div class="alert alert-success" role="alert">
                    {{ $successMessage }}
                    <button wire:click="$set('successMessage', null)" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" wire:model.lazy="email" placeholder="Email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" wire:model.lazy="name"
                           placeholder="Nama pengunjung">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tableNumber">Nomor Meja</label>
                    <input type="number" class="form-control" id="tableNumber" wire:model.lazy="table_number"
                           placeholder="50">
                    @error('table_number') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="type">Tipe Order</label>
                    <select id="type" class="form-control" wire:model.lazy="type">
                        <option selected>Pilih</option>
                        <option value="dine_in">Dine in</option>
                        <option value="take_away">Take away</option>
                    </select>
                    @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" readonly>
                </div>
            </div>
            <button class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</div>
