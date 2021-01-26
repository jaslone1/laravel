<template>
    <div>
        </br><h3 class="text-center">Rides in the area</h3></br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Leader</th>
                <th>Type</th>
                <th>Start Time</th>
                <th>Meeting location</th>
                <th>Miles</th>
                <th>Intensity</th>
                <th>Notes</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="ride in rides" :key="ride.id">
                <td>{{ ride.leader }}</td>
                <td>{{ ride.type }}</td>
                <td>{{ ride.departure_time }}</td>
                <td>{{ ride.departure_location }}</td>
                <td>{{ ride.miles }}</td>
                <td>{{ ride.intensity }}</td>
                <td>{{ ride.notes }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: ride.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteProduct(ride.id)">Delete</button>
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
                rides: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/rides/')
                .then(response => {
                    this.rides = response.data;
                });
        },
        methods: {
            deleteProduct(id) {
                this.axios
                    .delete(`http://localhost:8000/api/rides/${id}`)
                    .then(response => {
                        let i = this.rides.map(item => item.id).indexOf(id); // find index of your object
                        this.rides.splice(i, 1)
                    });
            }
        }
    }
</script>
