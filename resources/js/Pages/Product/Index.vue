<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    products: Object
});


function formatPrice(value) {
    let val = (value / 1).toFixed(2).replace('.', ',');
    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}



</script>

<template>
    <p class="text-muted">Tambahkan menu makanan yang ada di resto</p>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <Link name="" id="" class="btn btn-blue mb-3" href="product/create" role="button">
                <i class="bx bx-plus"></i> Tambah Menu
            </Link>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-secondary" v-for="(product, index) in products" :key="product.id">
                            <td scope="row">{{ index + 1 }}</td>
                            <td>{{ product.name }}</td>
                            <td>{{ product.picture }}</td>
                            <td>Rp {{ formatPrice(product.price) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
