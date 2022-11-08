<form action="" wire:submit.prevent="addToCart" method="POST">
        <div class="alert alert-danger">
            {{ $totalQuantity }} || {{ $totalPrice }}
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
