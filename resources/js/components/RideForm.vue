<template>
    <div>
        <h3 class="text-center">Add Ride</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="RideForm">
                    <div class="form-group">
                        <label>Ride Leader</label>
                        <input type="text" class="form-control" v-model="ride.leader">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" v-model="ride.type">
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" v-model="ride.brand">
                    </div>
                    <div class="form-group">
                        <label>Departure Time:</label>
                        <input type="text" class="form-control" v-model="ride.departure_time">
                    </div>
                    <div class="form-group">
                        <label>Departure Location:</label>
                        <input type="text" class="form-control" v-model="ride.departure_location">
                    </div>
                    <div class="form-group">
                        <label>miles:</label>
                        <input type="text" class="form-control" v-model="ride.miles">
                    </div>
                    <div class="form-group">
                        <label>Intensity:</label>
                        <input type="text" class="form-control" v-model="ride.intensity">
                    </div>
                    <div class="form-group">
                        <label>Ride Notes</label>
                        <textarea class="form-control" v-model="ride.notes"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Ride</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ride: {}
            }
        },
        methods: {
            addRide() {
                this.axios
                    .post('http://localhost:8000/api/rides', this.ride)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
