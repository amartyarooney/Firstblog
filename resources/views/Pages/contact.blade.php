@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
            <label name="email">Email:</label>
            <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label name="subject">Subject:</label>
            <input id="Subject" name="Subject" class="form-control">
            </div>
            <div class="form-group">
            <label name="message">Message:</label>
            <textarea id="message" name="message" class="form-control">Type your message....</textarea>
             </div>
             <div>
             <input type="submit" value="Send Message" class="btn btn-success">
             </div>
        </form>
    </div>
    </div>
  
@endsection