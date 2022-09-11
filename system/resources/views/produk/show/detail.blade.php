<p>
    {{ $produk->harga }} |
    Stok : {{ $produk->stok }} |
    Berat : {{ $produk->berat }} kg |
    Tanggal Produk : {{ $produk->created_at->diffForHumans() }}
</p>
