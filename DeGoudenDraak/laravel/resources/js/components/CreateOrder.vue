<template>
    <div>
        <h3 class="text-center">Bestelling plaatsen</h3>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr v-for="item in items" :key="item.id">
                        <td>{{ item.name }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'create-order',
    data() {
        return {
            items: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/orders/')
            .then(response =>
                this.items = response.data
            );
    }
}
</script>

<style scoped>

</style>
