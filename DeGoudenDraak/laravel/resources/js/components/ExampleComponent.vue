<script>
export default {
    name: 'example',
    props: ['items'],
    mounted() {
        console.log(this.items)
    }
}
</script>

<template>
    <div>
        <div class="modal-body">
            <div v-for="category in items">
                <div>{{ category }}</div>
            </div>
        </div>
    </div>
</template>
