
<script>
    $(function(){
        $('#tabla_material').DataTable( {
            "language": {
                "url": "/js/dataTables.spanish.lang",
            },
            "paging" : false,
            "order": [[ 2, "asc" ]],
            "columnDefs": [
                {
                    "targets": [ 0 ],

                    "searchable": false
                }
            ]
        } );
    });

</script>