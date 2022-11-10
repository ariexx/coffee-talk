<div>

    <form action="" wire:submit.prevent="addToCart" method="POST">
        <div class="alert alert-danger">
            {{ $totalQuantity }} || {{ $totalPrice }} {{ print_r(session()->get('customer')) }}
        </div>
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
                                    <b>Email : {{session()->get('customer')['email'] ?? null}}</b> <br/>
                                    <b>Nomor Meja : {{session()->get('customer')['table_number'] ?? null}}</b><br/>
                                    <b>Tipe Order : {{session()->get('customer')['type'] ?? null}}</b><br/>
                                    <b>E-mail : {{session()->get('customer')['email'] ?? null}}</b><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-sm-4 col-lg-4 col-xs-2">
                <img src="https://source.unsplash.com/random/?Coffee&width=100&height=100/"
                     class="card-img-top" alt="">
                <div class="card card-light ">
                    <div class="card-header">
                        <h4>V60 <span class="text-small text-muted">Rp.20.000</span></h4>
                    </div>
                    <div class="card-body">
                        <p>Card <code>.card-primary</code></p>
                        <button class="btn btn-light"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
                        <th scope="col">Total</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session()->get('cart') as $key => $item)
                        {{--                    @dd($key, $item, session()->get('cart'))--}}
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item['name'] ?? null}}</td>
                            <td>{{$item['price']?? null}}</td>
                            <td>{{$item['quantity']?? null}}</td>
                            <td>
                                <button class="btn btn-danger" wire:click="removeFromCart({{$key}})">Hapus</button>
                            </td>
                        </tr>
                        @if($loop->last)
                            <tr>
                                <td>Total</td>
                                <td>Rp. <b>{{$totalPrice}}</b></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
