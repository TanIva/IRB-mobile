<?php include 'header.php'; ?>

<div class="modal-example">
    
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal1">oткрыть мoдaльнoе oкнo large</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal2">oткрыть мoдaльнoе oкнo small</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal3">oткрыть мoдaльнoе oкнo small2</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal4">oткрыть мoдaльнoе oкнo declining</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal5">oткрыть мoдaльнoе oкнo experience</button>


  
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title-segoe">Modal window large</h4>
          </div>
          <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit, mi accumsan ullamcorper tempor, augue magna accumsan tellus, eget lobortis sapien orci vulputate sapien. Sed eget placerat mi. Morbi sed quam maximus, pulvinar ante a, egestas nisi. Aliquam erat volutpat. Phasellus pellentesque velit id placerat semper. Donec orci mauris, efficitur non elementum condimentum, congue nec mi. Curabitur ultricies est vel accumsan ultrices. Phasellus efficitur ipsum non odio egestas, ac sollicitudin risus posuere. Sed id quam at magna gravida sodales. Donec vitae mauris ac justo pretium interdum sit amet quis arcu. Vestibulum nec arcu vel mi maximus scelerisque in eget dui. Quisque faucibus risus ligula, a interdum dui posuere eget.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title-segoe">Modal window small</h4>
          </div>
          <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit, mi accumsan ullamcorper tempor, augue magna accumsan tellus, eget lobortis sapien orci vulputate sapien. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="pinkBtn">Yes, do best for me</button>
            <p data-dismiss="modal">No, thank you</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title-segoe">Modal window small2</h4>
          </div>
          <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit, mi accumsan ullamcorper tempor, augue magna accumsan tellus, eget lobortis sapien orci vulputate sapien. </p>
          </div>
          <div class="modal-footer row">
              <div class="col-xs-6"><button type="button" class="pinkBtn">Yes</button></div>
              <div class="col-xs-6"><button type="button" class="pinkBtn" data-dismiss="modal">No</button></div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title-segoe">Reason for Declining</h4>
          </div>
          <div class="modal-body">
            <form>
                <textarea class="form-control" placeholder="YOUR MESSAGE"></textarea>
                
                <div class="radio">
                    <input id="radio_check" type="radio" name="radio" checked>
                    <label for="radio_check">checked</label>
                    <input id="radio_uncheck" type="radio" name="radio">
                    <label for="radio_uncheck">unchecked</label>
                </div>
                
                <div class="checkbox">
                    <input id="check" type="checkbox" name="check" checked>
                    <label for="check">checked</label>
                    <input id="uncheck" type="checkbox" name="check">
                    <label for="uncheck">unchecked</label>
                </div>
                
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="pinkBtn">send comment</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title-segoe">Please Rate Your Experience</h4>
          </div>
          <div class="modal-body">
                <form>
                    <div class="star-rating">
                        <div class="star-rating_wrap">
                          <input class="star-rating_input" id="star-rating-5" type="radio" name="rating" value="5">
                          <label class="star-rating_ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                          <input class="star-rating_input" id="star-rating-4" type="radio" name="rating" value="4">
                          <label class="star-rating_ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                          <input class="star-rating_input" id="star-rating-3" type="radio" name="rating" value="3">
                          <label class="star-rating_ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                          <input class="star-rating_input" id="star-rating-2" type="radio" name="rating" value="2">
                          <label class="star-rating_ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                          <input class="star-rating_input" id="star-rating-1" type="radio" name="rating" value="1">
                          <label class="star-rating_ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="YOUR MESSAGE"></textarea>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="pinkBtn">send comment</button>
          </div>
        </div>
      </div>
    </div>


</div>

<style>
    .modal-example>button{
        display: block;
        padding: 20px;
        width: 90%;
        background-color: #e22250;
        margin: 20px auto;
    }
</style>
<?php include 'footer.php'; ?>