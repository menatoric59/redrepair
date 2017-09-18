$(function(){
	$('.dropdown-toggle').dropdown()
	$('.data-table').DataTable({
        "language": {
        "url": "/js/dataTables.spanish.lang",
        },
    });
});