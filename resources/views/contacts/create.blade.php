@extends('layouts.app', ['title' =>'About'])

@section('content')
<div class="container">
   <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
       <h2>Get In Touch</h2>
       <p class="text-muted">If you having trouble with this service. please <a href="mailto:boubacarelvally@gmail.com">ask for help</a></p>

       <form action="#" method="POST">
           <div class="form-group">
               <label for="name" class="control-label">Name </label>
               <input type="text" name="name" id="name" class="form-control" required>
           </div>

           <div class="form-group">
                <label for="email" class="control-label">Email </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                    <label for="message" class="control-label sr-only">Message </label>
                    <textarea name="message" id="message" class="form-control" rows="10" cols="10" required></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>       
                </div>

       </form>
   </div>
</div>


@stop