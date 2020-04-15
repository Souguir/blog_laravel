@extends('layouts.main')
@section('title', '| Contact')

@section('content')

<div class="row">
        <div class="col-md-12">
          <h1>Contactez Nous</h1>
          <hr>
          <form action="{{ url('contact') }}" method="POST" >
            {{csrf_field()}}
          <form>
            <div class="form-group">
              <label name="contact_name">Nom:</label>
              <input id="contact_name" name="contact_name" class="form-control">
            </div>


            <div class="form-group">
              <label name="contact_email">Email:</label>
              <input id="contact_email" name="contact_email" class="form-control">
            </div>



            <div class="form-group">
              <label name="contact_message">Message:</label>
              <textarea id="contact_message" name="contact_message" class="form-control">Ecrivez votre message ici...</textarea>
            </div>

            <input type="submit" value="Envoyer Message" class="btn btn-success">
          </form>
        </div>
      </div>
</form>

@endsection
