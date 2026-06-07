@extends('layouts.admin')

@section('admin_panel_settings_active', 'active')

@section('content')



    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('menu.Admin Panel Settings') }}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr class="text-center">
                        <th>NUM</th>
                        <th>{{ __('menu.System Name') }}</th>
                        <th>{{ __('menu.Address') }}</th>
                        <th>{{ __('menu.Logo') }}</th>
                        <th>{{ __('menu.Phone') }}</th>
                        <th>{{ __('menu.Status') }}</th>
                        <th>{{ __('menu.Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $setting->system_name }}</td>
                            <td>{{ $setting->address }}</td>
                            <td><img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" width="40"></td>
                            <td>{{ $setting->phone }}</td>
                            <td>
                                <form action="{{ route('admin_panel_settings.update_status', $setting->id) }}"
                                    method="POST" class="swal-confirm-form" style="display:inline;">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-sm {{ $setting->active ? 'btn-success' : 'btn-danger' }}">
                                        @if ($setting->active)
                                            <i class="fas fa-toggle-on"></i> {{ __('menu.Active') }}
                                        @else
                                            <i class="fas fa-toggle-off"></i> {{ __('menu.Inactive') }}
                                        @endif
                                    </button>
                                </form>
                            </td>
                            <td class="project-actions text-right">

                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin_panel_settings.show', $setting->id) }}">
                                    <i class="fas fa-folder"></i></a>
                                <a class="btn btn-info btn-sm"
                                    href="{{ route('admin_panel_settings.edit', $setting->id) }}">
                                    <i class="fas fa-pencil-alt"></i></a>

                                <form action="{{ route('admin_panel_settings.destroy', $setting->id) }}" method="POST"
                                    class="swal-delete-form" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm w-100">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تم بنجاح',
                text: @json(session('success')),
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                text: @json(session('error')),
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

@endsection
