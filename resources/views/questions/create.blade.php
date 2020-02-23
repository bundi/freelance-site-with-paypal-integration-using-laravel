@extends('base')

@section('main')
    <div class="container">
       <div class="card">
           <div class="card-body">
               <div class="row justify-content-center text-center">
                   <div class="col-md-1-">
                       <nav aria-label="breadcrumb">
                           <ol class="breadcrumb text-center">
                               <li class="breadcrumb-item active" aria-current="page">Let your Order be worked on by our Qualified Writers</li>
                           </ol>
                       </nav>


                   </div>
               </div>
               <div class="row justify-content-center">
                   <div class="col-md-8">

                      <div class="card rounded-bottom">
                          <div class="card-header bg-success">
                              <h5 class="text-center text-white"><b>Add Order Details Below</b></h5>
                              @if($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach($errors->all() as $error)
                                              <li>{{$error}}</li>
                                          @endforeach
                                      </ul>
                                  </div><br />
                              @endif
                          </div>
                          <div class="card-body">
                              <form action="{{route('questions.store')}}" method="post">
                                  @csrf
                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">LEVEL</label>
                                      <select class="form-control" name="level" id="exampleFormControlSelect1" required>
                                          <option disabled selected>-- choose ---</option>
                                          <option>PHP</option>
                                          <option>MASTERS</option>
                                          <option>UNDERGRADUATE</option>
                                          <option>HIGH SCHOOL</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">CATEGORY</label>
                                      <select class="form-control" name="subject" id="exampleFormControlSelect1" required>
                                          <option disabled selected>--choose--</option>
                                          <option>Science</option>
                                          <option>Accounting</option>
                                          <option>Medicine</option>
                                          <option>Business</option>
                                          <option>Mathematics</option>
                                          <option>Nursing</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label for="title">Question Title</label>
                                      <input type="text" name="title" class="form-control" id="title" placeholder="" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlTextarea2">Question Details/Instructions</label>
                                      <textarea class="form-control rounded-0" name="details" id="details" rows="3" ></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">Pages</label>
                                      <select class="form-control" name="pages" id="exampleFormControlSelect1" required>
                                          <option disabled selected>--choose--</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">Duration/Time</label>
                                      <select class="form-control" name="duration" id="exampleFormControlSelect1" required>
                                          <option disabled selected>--choose--</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>
                                  <button type="submit" class="btn btn-success btn-lg btn-block rounded">Continue</button>
                              </form>
                          </div>
                      </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
