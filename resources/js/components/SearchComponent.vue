<template>
    <div class="row">
        <h5 class="ml-3 pt-1">Filtrid:</h5>
        <a href="/home" class="h5 pt-1 px-2">Kõik</a> <h5 class="pt-1">|</h5>
        <a href="/home?companies" class="h5 pt-1 pl-2">Ettevõtted</a> <h5 class="pt-1">/</h5>
        <a href="/home?citizen" class="h5 pt-1">Eraisikud</a>
        <form id="companyNameForm" method="GET" class="ml-2" autocomplete="off">
            <input id="companyName" class="filter form-control form-control-sm" type="text" name="companyName" placeholder="Ettevõtte nimi">
        </form>
        <form id="companyCodeForm" method="GET" class="ml-2" autocomplete="off">
            <input id="companyCode" class="filter form-control form-control-sm" type="number" name="companyCode" placeholder="Registrikood" maxlength="6">
        </form>
        <form id="nameForm" method="GET" class="ml-2" autocomplete="off">
            <input id="name" class="filter form-control form-control-sm" type="search" name="name" placeholder="Nimi">
        </form>
        <form id="ageForm" method="GET" class="ml-2" autocomplete="off">
            <input id="age" class="filter form-control form-control-sm" type="number" name="age" placeholder="Vanus" maxlength="2">
        </form>
        <form id="emailForm" method="GET" class="ml-2" autocomplete="off">
            <input id="email" class="filter form-control form-control-sm" type="search" name="email" placeholder="Email">
        </form>
    </div>
</template>
<script>

    $(document).ready(function(){

        $("#companyName").keyup(function(){
            $("#companyNameForm").submit();
        });
        if(typeof(GetURLParameter('companyName')) != "undefined" && GetURLParameter('companyName') !== null) {
            $("#companyName").val(GetURLParameter('companyName')).focus();
        }
        $("#companyCode").keyup(function(){
            $("#companyCodeForm").submit();
        });
        if(typeof(GetURLParameter('companyCode')) != "undefined" && GetURLParameter('companyCode') !== null) {
            $("#companyCode").val(GetURLParameter('companyCode')).focus();
        }
        $("#name").keyup(function(){
            $("#nameForm").submit();
        });
        if(typeof(GetURLParameter('name')) != "undefined" && GetURLParameter('name') !== null) {
            $("#name").val(GetURLParameter('name')).focus();
        }
        $("#age").keyup(function(){
            $("#ageForm").submit();
        });
            if(typeof(GetURLParameter('age')) != "undefined" && GetURLParameter('age') !== null) {
                $("#age").val(GetURLParameter('age')).focus();
            }
        $("#email").keyup(function(){
            $("#emailForm").submit();
        });
                if(typeof(GetURLParameter('email')) != "undefined" && GetURLParameter('email') !== null) {
                    $("#email").val(GetURLParameter('email')).focus();
                }
    });

    function GetURLParameter(sParam){

        const sPageURL = window.location.search.substring(1);
        const sURLVariables = sPageURL.split('?');
        for (let i = 0; i < sURLVariables.length; i++)
        {
            const sParameterName = sURLVariables[i].split('=');
            if (sParam === sParameterName[0])
            {
                return sParameterName[1];
            }
        }
    }
</script>
