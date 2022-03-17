<!-- DataTables  & Plugins -->
<script src="{!! asset('backend/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/jszip/jszip.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/pdfmake/pdfmake.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/pdfmake/vfs_fonts.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') !!}"></script>
<script src="{!! asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') !!}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "autoWidth": true, "paging": true,
            //"lengthChange": false,
            aLengthMenu: [
                [5, 10, 25, 50, 100, 200, -1],
                [5, 10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
