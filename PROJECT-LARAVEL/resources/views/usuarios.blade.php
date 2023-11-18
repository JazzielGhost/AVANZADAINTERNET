@extends('layouts.app')

@section('container')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
</h4>
    <!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Accciones</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ( $usuarios as $user )
            <tr>
              <td><i class="ti ti-brand-angular ti-lg text-danger me-3"></i> <span class="fw-medium">{{ $user->name }}</span></td>
              <td>{{ $user->lastname }}</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="user-img">
                    <img src="{{ asset('/assets/img/avatars/1.png') }}" alt="user avatar" class="rounded-circle avatar-xs" />
                  </div>
                  <div class="ms-2">
                    <span class="fw-medium">{{ $user->email }}</span>
                  </div>
                </div>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
@endsection