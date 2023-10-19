<script setup>
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';

defineProps({
    errors: Object
});

const form = useForm({
    name: null,
    picture: null,
    price: null,
});

function submit() {
    router.post('/product', form);
}

</script>

<template>
    <div class="card shadow-sm">
        <div class="card-body">
            <p class="text-blue card-title mb-4">Tambahkan Menu</p>

            <form @submit.prevent="submit">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" v-model="form.name"
                        required>
                    <small v-if="errors.name" class="text-danger">{{ errors.name }}</small>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Gambar</label>
                    <!-- <input type="file" name="name" id="name" class="form-control" v-model="form.name"
                        required> -->
                    <input type="file" @input="form.picture = $event.target.files[0]"
                        class="form-control" id="picture" required
                        accept="image/png,image/jpg,image/jpeg" />
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                        {{ form.progress.percentage }}%
                    </progress>
                    <small v-if="errors.picture" class="text-danger">{{ errors.picture }}</small>
                </div>

                <label for="price" class="form-label">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control" name="price" id="price" v-model="form.price"
                        required>
                    <small v-if="errors.price" class="text-danger">{{ errors.price }}</small>
                </div>
                <button class="btn btn-blue" type="submit">Submit</button>

            </form>
        </div>
    </div>
</template>
