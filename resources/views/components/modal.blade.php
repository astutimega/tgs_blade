<div>
<button type="button" class="btn btn-{{$mtheme1}}" data-toggle="modal" data-target="#staticBackdrop">
    Test Modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="staticBackdropLabel">Percobaan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-dark">
          {{$slot}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-{{$mtheme2}}" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-{{$mtheme3}}">Yes</button>
        </div>
      </div>
    </div>
  </div>
</div>