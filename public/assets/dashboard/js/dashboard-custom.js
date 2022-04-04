$(function () {
});
/** confirm delete will be triggered as confirm box for every delete request **/
function confirmDelete(callback) {
    Swal.fire({
        title: "Are you sure?",
        text: "You are about to delete this record",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        confirmButtonColor: "#ff2828",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.value) {
            callback();
        }
    });
}

/** confirm delete ends **/
/**
 * following row remove and show row are used while deleting from table
 * first the row will be hidden before submitting, to improve user experience
 * if failed, will be shown back
 **/
/** remove row removes row from table **/

function removeRowFromTable(table, id) {
    $('#' + table + ' tr#' + id).hide();
}
/** show row row from table (which was hidden earlier) **/
function showRowFromTable(table, id) {
    $('#' + table + ' tr#' + id).show();
}
