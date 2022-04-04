/** toastr functions starts **/
function toastSuccess(msg){
    toastr.success(msg)
}

function toastError(msg){
    toastr.error(msg)
}
/** toastr functions ends **/

/** alertify functions starts **/
function alertifySuccess(msg){
    Swal.fire(
        'Success!',
        msg,
        'success'
    )
}
function alertifySuccessAndRedirect(msg, redirect_url){
    Swal.fire(
        'Success!',
        msg,
        'success'
    ).then(function() {
        window.location = redirect_url;
    });
}
function alertifyError(msg){
    Swal.fire(
        'Oops!',
        msg,
        'error'
    )
}
/** alertify functions ends **/

