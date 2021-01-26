<template>
  <div >
    <h3 class="text-center">Send Jared a Message</h3>
    <form @submit.prevent="addContact" >
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" v-model="contact.name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" v-model="contact.email">
      </div>
      <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control" v-model="contact.subject">
      </div>
      <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" v-model="contact.message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
</template>

<script>
export default {
    data() {
        return {
            contact: {}
        }
    },
    methods: {
        addContact() {
            this.axios
                .post('http://localhost:8000/api/contacts', this.contact)
                .then(response => (
                    this.$router.push({name: 'home'})
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        }
    }
}
</script>
