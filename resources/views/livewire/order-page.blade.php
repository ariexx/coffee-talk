<div>
    @if($ads->first()->image ?? false)
        <div class="text-center">
            <img
                src="{{asset('storage/' . $ads->first()->image)}}" height="60" width="468" alt="iklan"
                class="img-fluid mb-3">
        </div>
    @endif
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6">
                @if($product->image)
                    <img src="{{($product->image ? asset('storage/' . $product->image) : asset('assets/img/not-found-photo.png'))}}"
                         alt="{{$product->name}}"
                         class="card-img-top img-fluid">
                @endif
                <div class="card card-light ">
                    <div class="card-header">
                        <h4>{{$product['name']}}</h4>
                        <div class="align-content-between badge badge-info">
                            {{$product->category->name ?? 'Tidak ada category'}}
                        </div>
                    </div>
                    <div class="card-body">
                        @if($product->is_discount)
                            <div class="row">
                                <div class="col-6">
                                    <span class="text-danger"><strike>{{rupiah($product->price)}}</strike> <span class="badge badge-danger">{{$product->discount}}%</span></span>
                                </div>
                                <div class="col-6">
                                    <span class="text-success">{{rupiah($product->discount_price)}}</span>
                                </div>
                            </div>
                        @endif
                        <p>{{$product['description']}}</p>
                        <button class="btn btn-success w-100" wire:click.prevent="addToCart({{$product['id']}})"><i
                                class="fa fa-plus"></i> Tambah ke keranjang
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(session()->get('cart'))
        <div class="card">
            <div class="card-header">
                <h4>Order Detail</h4>
            </div>
            <div class="card-body p-0">
                <table class="table table-responsive-xl">
                    @if($successMessage)
                        <div class="alert alert-success m-3 p-3">
                            {{ $successMessage }}
                            <button wire:click="$set('successMessage', null)" type="button" class="close"
                                    data-dismiss="alert"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session()->get('cart') as $key => $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item['name'] ?? null}}</td>
                            <td>{{ rupiah($item['price']) ?? null}}</td>
                            <td>{{ $item['quantity']?? null}}</td>
                            <td>
                                <button class="btn btn-danger" wire:click="removeFromCart({{$key}})">Hapus</button>
                            </td>
                        </tr>
                        @if($loop->last)
                            <tr>
                                <td>Total</td>
                                <td>{{rupiah($totalPrice)}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="1">
                            <button class="btn btn-success w-100" wire:click="checkout" wire:loading.attr="disabled">
                                Bayar
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
