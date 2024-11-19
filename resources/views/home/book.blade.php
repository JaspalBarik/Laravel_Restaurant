 <!-- book a table Section  -->
 <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <div class="">
        <h2 class="section-title mb-5">BOOK A TABLE</h2>


        <form action="{{url('book_table')}}" method="post">

            @csrf

        <div class="row mb-5">
            <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                <input type="text" id="booktable" class="form-control form-control-lg custom-form-control" name="phone" placeholder="Phone Number">
            </div>

            <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                <input type="number" id="booktable" class="form-control form-control-lg custom-form-control" name="n_guest" placeholder="Number of Guests" max="20" min="0">
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                <input type="time" id="booktable" class="form-control form-control-lg custom-form-control" name="time" placeholder="Time">
            </div>
            
            <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                <input type="date" id="booktable" class="form-control form-control-lg custom-form-control" name="date" placeholder="Date">
            </div>
        </div>
        <input type="submit" class="btn btn-lg btn-primary" id="rounded-btn" value="Book Table">

    </form>

    </div>
</div>
