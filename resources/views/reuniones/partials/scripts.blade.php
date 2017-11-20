
<script>
    $(function(){
        $('#tabla_reuniones').DataTable( {
            "language": {
                "url": "/js/dataTables.spanish.lang",
            },
            "paging" : false,
            "order": [[ 0, "desc" ]],
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