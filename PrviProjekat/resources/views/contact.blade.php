@extends('layout')
@section('naslovStranice')
   Contact
@endsection
@section ('sadrzajStranice')
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Subject</label>
    <input type="text" class="form-control" name="subject" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" name="message" id="message">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.1877611243503!2d20.4544144766028!3d44.8177393763383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6e056c9bb357%3A0x58b1f0ecae30d7a1!2sKneza%20Mihaila%2C%20Beograd!5e0!3m2!1sen!2srs!4v1728211921525!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection