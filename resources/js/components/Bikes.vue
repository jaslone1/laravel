<template>
    <div>
        <h3 class="text-center">All Bikes</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Owner</th>
                <th>Email</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Maintenance</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="bike in bikes" :key="bike.id">
                <td>{{ bike.owner }}</td>
                <td>{{ bike.email }}</td>
                <td>{{ bike.brand }}</td>
                <td>{{ bike.model }}</td>
                <td>{{ bike.maintenance }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: bike.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteProduct(bike.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                bikes: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/bikes/')
                .then(response => {
                    this.bikes = response.data;
                });
        },
        methods: {
            deleteProduct(id) {
                this.axios
                    .delete(`http://localhost:8000/api/bikes/${id}`)
                    .then(response => {
                        let i = this.bikes.map(item => item.id).indexOf(id); // find index of your object
                        this.bikes.splice(i, 1)
                    });
            }
        }
    }
</script>
