<div class="modal fade modal-mini modal-primary" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to do this?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <form id="destroy" method="POST">
                    @csrf
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-link">Yes
                        <div class="ripple-container"></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

  $(document).on('click', '#deleteModal', function(e) {
    var url = $(this).attr('data-href');
    $('#destroy').attr('action', url );
    $('#import').attr( 'method', 'delete' );
    $('#delete-modal').modal('show');
    e.preventDefault();
  });
});
</script>
