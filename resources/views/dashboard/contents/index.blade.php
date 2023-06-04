@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Content</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/contents/create" class="btn btn-primary">Create new content</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contents as $content)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $content->title }}</td>
          <td>
            <a href="/dashboard/contents/{{ $content->id }}" class="badge bg-info" ><span data-feather="eye"></span></a>
            <a href="/dashboard/contents/{{ $content->id }}/edit" class="badge bg-warning" ><span data-feather="edit"></span></a>
            <form action="/dashboard/contents/{{ $content->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
