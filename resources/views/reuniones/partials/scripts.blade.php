
<script>
    $(function(){
        $('#tabla_reuniones').DataTable( {
            "language": {
                "url": "/js/dataTables.spanish.lang",
            },
            "paging" : false,
            "order": [[ 4, "asc" ]],
            "columnDefs": [
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": false
                }
            ]
        } );
    });

</script>