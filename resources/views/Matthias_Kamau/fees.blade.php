@extends('Matthias_Kamau.layouts.app')
@section('work') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Register new Student</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action=" {{ route('storePayment') }} ">
                        @csrf
                        <div class="form-group">
                          <label for="student_number">Student</label>
                          <select name="student_number" class="form-control">
                              <option selected disabled>Select Student</option>
                              @foreach ($students as $item)
                              <option value=" {{ $item->student_number }} ">{{ $item->full_name }} <small>( {{ $item->student_number }} )</small></option>
                              @endforeach
                          </select>
                          <small class="form-text text-muted">Select student</small>
                        </div>
                        <div class="form-group">
                          <label for="date_of_payment">Date of Payment</label>
                          <input type="date" class="form-control"  name="date_of_payment">
                          <small class="form-text text-muted">Enter your Date of Payment</small>
                        </div>
                        <div class="form-group">
                          <label for="amount">Amount Paid</label>
                          <input type="number" name="amount" class="form-control">
                          <small class="form-text text-muted">Enter amount paid</small>
                        </div>


                        <button type="submit" class="btn btn-dark">Add new Fee Payment</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  