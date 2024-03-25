@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h1 class="h3 mb-2">{{ __('User') }}</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('User') }}</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header py-4">
            <div class="d-flex gap-2 justify-content-between">
                <h1 id="title" class="h3 mb-0">{{ __('User') }}</h1>
                <a href="{{ route('user.create') }}" class="btn btn-primary">{{ __('Add User') }}</a>
            </div>
        </div>
        <div class="table-responsive">
            <table aria-labelledby="title" class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Role') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles->implode('name', ', ') }}</td>
                            <td>
                                <form id="delete-form-{{ $user->id }}" method="POST" action="{{ route('user.destroy', $user->id) }}">
                                    @csrf
                                </form>

                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">
                                    <i class="ti ti-eye"></i>
                                </a>
                                <button type="button" data-toggle="modal" data-target="#deleteModal-{{ $user->id }}" class="btn btn-danger btn-sm">
                                    <i class="ti ti-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">{{ __('No data available') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-body">
            {{ $users->links() }}
        </div>
    </div>
@endsection
