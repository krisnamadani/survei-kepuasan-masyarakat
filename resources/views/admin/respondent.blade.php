@extends('layouts.admin')

@section('title', 'Respondent')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Education</th>
            <th>Occupation</th>
            <th>Institution</th>
            <th>Services</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach($respondents as $respondent)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $respondent->gender }}</td>
              <td>{{ $respondent->age }}</td>
              <td>{{ $respondent->email }}</td>
              <td>{{ $respondent->education }}</td>
              <td>{{ $respondent->occupation }}</td>
              <td>{{ $respondent->institution }}</td>
              <td>{{ $respondent->services }}</td>
              <td>{{ $respondent->actions }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
@endsection

@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection