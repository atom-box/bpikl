<div class=" alert alert-primary" style="max-width: 55rem;">
    <strong>Success!</strong> New link created. <a href="https://pikl.us">Create another</a>
</div>



<div class="container">
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">What next?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
        Copy your short URL; use it anywhere you would have used the long URL! 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
        $('#myModal').modal('show')
    });
</script>