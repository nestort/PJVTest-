<div class="row">
    @foreach ($this->products as $product)
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">$ {{ $product->price }}</p>
                    <input wire:click="buy({{ $product->id }})" type="button" value="BUY" class="btn btn-primary">
                </div>
            </div>
        </div>
    @endforeach
</div>
