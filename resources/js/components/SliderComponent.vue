<template>
    <div class="form-group row">
        <label for="age" class="col-md-4 col-form-label text-md-right">Vanus</label>
        <div class="col-md-5">
            <input id="age" type="range" v-model="valuesid" class="slider form-control" name="age" min="18" max="99" required autofocus>
        </div>
        <span for="ageNumber" class="ageNumber col-md-1 col-form-label">{{valuesid}}</span>
    </div>
</template>
<script>
    import 'vue-range-component/dist/vue-range-slider.css'
    import VueRangeSlider from 'vue-range-component'

    export default {
        data() {
            return {
                valuesid: document.getElementById("userIdBox").value
            }
        },
        components: {
            VueRangeSlider
        }
    }
</script>
