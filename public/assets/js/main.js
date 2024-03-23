// DATATABLES
let datasTable = $('#datas-table').DataTable({
    // responsive: true,
    // dom: 'rlftip',
    pageLength: 25,
    dom: 't<"grid p-4 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 " <"flex items-center col-span-3" i><"col-span-2"> <"flex col-span-4 mt-2 sm:mt-auto sm:justify-end"p>><"clear">',
    language: {
        "decimal": "",
        "emptyTable": "Aucun élément disponible",
        "info": "Affichage de _START_ à _END_ parmi _TOTAL_ élements",
        "infoEmpty": "Aucun élément",
        "infoFiltered": "(filtrés parmi _MAX_ éléments)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Affichage de _MENU_ éléments",
        "loadingRecords": "Chargement",
        "processing": "",
        "search": "Rechercher:",
        "paginate": {
            "first": "First",
            "last": "Last",
            "next": 'Suivant',
            "previous": "Précédent "
        },
    }
}).columns.adjust()
.responsive.recalc();
;

$('#custom-search-input').keyup(function () {
    datasTable.search($(this).val()).draw();
})

// var tableTools = $.fn.dataTable.TableTools( datasTable, {
//     buttons: [
//         { extend: 'copy', className: 'btn-main' },
//         { extend: 'excel', className: 'btn-main' },
//         { extend: 'print', className: 'btn-main'}
//     ],
// } );
// $( tableTools.fnContainer() ).insertIn('div.table-search-container');



// LIVEWIRE & SELECT2
$(document).ready(function() {
    $('.simple-select').select2();
    $('.multiple-select').select2();
    $('.parent-select').select2();
});



// DELETE CONFIRMATION  MODAL CUSTOMIZING...

let deleteConfirmation = function (e) {
    if(typeof(swal) !== 'undefined') {
        swal({
            title: "Suppression",
            text: "Cet element sera supprimé",
            dangerMode: true,
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: "Oui, Supprimer",
            },
            cancel: true,
        }).then((value) => {
            if(value) {
                e.submit();
            }
            else {
                swal("Suppression annulée", {
                    timer: 2000,
                });
            }
        });
    }
    else {
        value = confirm('Voulez vous supprimer cet element ?')
        if(value) {
            e.submit();
        }
    }
    // e.submit();
}