@extends('layout.main')

@section('title', 'Fakultas')
    
@section('content')

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Fakultas</h4>
        <p class="card-description">
          list data Fakultas
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Nama Fakultas</th>
                <th>Singkatan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fakultas as $item)
                    <tr>
                        <td>{{$item ["nama"]}}</td>
                        <td>{{$item ["singkatan"]}}</td>
                    </tr> 
                @endforeach
              <tr>
                <td>Jacob</td>
                <td>53275531</td>
                <td>12 May 2017</td>
                <td><label class="badge badge-danger">Pending</label></td>
              </tr>
              <tr>
                <td>Messsy</td>
                <td>53275532</td>
                <td>15 May 2017</td>
                <td><label class="badge badge-warning">In progress</label></td>
              </tr>
              <tr>
                <td>John</td>
                <td>53275533</td>
                <td>14 May 2017</td>
                <td><label class="badge badge-info">Fixed</label></td>
              </tr>
              <tr>
                <td>Peter</td>
                <td>53275534</td>
                <td>16 May 2017</td>
                <td><label class="badge badge-success">Completed</label></td>
              </tr>
              <tr>
                <td>Dave</td>
                <td>53275535</td>
                <td>20 May 2017</td>
                <td><label class="badge badge-warning">In progress</label></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
