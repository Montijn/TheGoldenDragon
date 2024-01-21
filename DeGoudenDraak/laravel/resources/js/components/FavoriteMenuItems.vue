<template>
    <div>
        <h1>Je favoriete gerechten</h1>

        <div v-for="favoriteMenuItem in favoriteMenuItems" :key="favoriteMenuItem.id">
            <div>
                <p>{{ favoriteMenuItem.name }}</p>
                <p>{{ favoriteMenuItem.description }}</p>
                <p>Prijs: € {{ favoriteMenuItem.price }}</p>
            </div>
            <hr>
        </div>

        <div v-if="favoriteMenuItems.length === 0">
            <p>Je hebt geen favorieten!</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        favoriteMenuItems: {
            type: Array,
            default: () => [],
        },
    },
};
</script>
