<script>
    function showErrorAndScrollUp(errorText)
    {
        $("#paymentErrorAlert").hide();
        $("#validationErrorText").html(errorText);
        $("#validationErrorAlert").show();
        resetFieldsAfterPayFail();
    }

    function resetFieldsAfterPayFail()
    {
        $("#payStartSpinner").hide();
        if( $("#payment-button").length )
        {
            $("#payment-button").prop("disabled", false);
        }
    }

    function changeFieldsAfterPayStart()
    {
        $("#validationErrorAlert").hide();
        $("#validationErrorText").html("");
        $("#paymentErrorAlert").hide();
        $("#payStartSpinner").show();
        if( $("#payment-button").length )
        {
            $("#payment-button").prop("disabled", true);
        }
    }
    function beautifyJson(passedStr)
    {
        passedStr = passedStr.replace(/{/g, "");
        passedStr = passedStr.replace(/}/g, "");
        passedStr = passedStr.replace(/\[/g, "");
        passedStr = passedStr.replace(/]/g, "");
        passedStr = passedStr.replace(/,/g, "");
        passedStr = passedStr.replace(/"/g, "");
        passedStr = passedStr.replace(/:/g, ": ");
        passedStr = passedStr.replace(/\./g, ".</br>");
        return passedStr;
    }

</script>
