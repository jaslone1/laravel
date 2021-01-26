<template>
    <div>
        <h3 class="text-center">Add Bike</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBike">
                    <div class="form-group">
                        <label>Owner Name</label>
                        <input type="text" class="form-control" v-model="bike.owner">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="bike.email">
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" v-model="bike.brand">
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" class="form-control" v-model="bike.model">
                    </div>
                    <div class="form-group">
                        <label>Maintenance Notes</label>
                        <textarea class="form-control" v-model="bike.maintenance"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Bike</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                bike: {}
            }
        },
        methods: {
            addBike() {
                this.axios
                    .post('http://localhost:8000/api/bikes', this.bike)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
