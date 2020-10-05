<template>
    <div>
    <div class="form-group row">
        <label for="company" class="col-md-4 col-form-label text-md-right">Ettevõte</label>
        <div class="col-md-1 text-md-left">
            <input id="company" type="checkbox" class="reg form-control" name="company" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="companyName" class="col-md-4 col-form-label text-md-right">Ettevõtte nimi</label>
        <div class="col-md-6">
            <input id="companyName" type="text" class="reg form-control" name="companyName" autofocus autocomplete="off">
        </div>
    </div>

    <div class="form-group row">
        <label for="companyCode" class="col-md-4 col-form-label text-md-right">Ettevõtte registrikood</label>
        <div class="col-md-6">
            <input id="companyCode" type="number" class="reg form-control" name="companyCode" autofocus autocomplete="off" maxlength="8">
        </div>
    </div>
        </div>
</template>
<script>

</script>
