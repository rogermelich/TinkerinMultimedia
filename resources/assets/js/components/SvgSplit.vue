<template>
    <div>
        <!-- Use the component -->
        <svg width="200" height="200">
            <cyrcle :stats="stats"></cyrcle>
        </svg>
        <!-- controls -->
        <div v-for="stat in stats">
            <label>{{stat.label}}</label>
            <input type="range" v-model="stat.value" min="0" max="100">
        </div>
        <pre id="raw">{{ stats }}</pre>
    </div>
    <axis-label
            v-for="(stat, index) in stats"
            :stat="stat"
            :index="index"
            :total="stats.length">
    </axis-label>

</template>

<script>
    export default {
        el: '#demo',
        data: {
            newLabel: '',
            stats: stats
        },
        methods: {
            add: function (e) {
                e.preventDefault()
                if (!this.newLabel) return
                this.stats.push({
                    label: this.newLabel,
                    value: 100
                })
                this.newLabel = ''
            },
            remove: function (stat) {
                if (this.stats.length > 3) {
                    this.stats.splice(this.stats.indexOf(stat), 1)
                } else {
                    alert('Can\'t delete more!')
                }
            }
        }
    }
</script>