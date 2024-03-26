@extends('layouts.app')

@section('content')
    <div class="pb-4">
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
                        <th>{{ __('Phone') }}</th>
                        <th>{{ __('Role') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone ?? '-' }}</td>
                            <td>
                                <span class="badge bg-{{ $user->getUserRole()->color() }}">{{ $user->getUserRole()->label() }}</span>
                            </td>
                            <td>
                                @if($user->id !== auth()->id())
                                <form id="delete-form-{{ $user->id }}" method="POST" action="{{ route('user.destroy', $user->id) }}">
                                    @csrf
                                </form>

                                <button data-bs-toggle="modal" data-bs-target="#show-modal-{{ $user->id }}" class="btn btn-primary">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $user->id }}" class="btn btn-success">
                                    <i class="ti ti-pencil"></i>
                                </button>
                                <button type="button" data-toggle="modal" data-target="#deleteModal-{{ $user->id }}" class="btn btn-danger">
                                    <i class="ti ti-trash"></i>
                                </button>
                                @else
                                <span class="d-flex gap-2 text-info flex-nowrap align-items-center">
                                    <i class="ti ti-info-circle"></i>
                                    {{ __('This is you') }}
                                </span>
                                @endif
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
