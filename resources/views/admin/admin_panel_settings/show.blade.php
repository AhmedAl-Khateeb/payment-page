@extends('layouts.admin')

@section('admin_panel_settings_active', 'active')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <!-- Header -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">System Settings Details</h5>
        </div>

        <div class="card-body">

            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $setting->logo) }}"
                    class="rounded-circle border shadow"
                    width="100"
                    height="100"
                    alt="Logo">

                <h4 class="mt-3">{{ $setting->system_name }}</h4>

                
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">

                    <tbody>

                        <tr>
                            <th width="25%">System Name</th>
                            <td>{{ $setting->system_name }}</td>
                        </tr>

                        <tr>
                            <th>General Alert</th>
                            <td class="text-break">
                                {!! nl2br(e($setting->general_alert)) !!}
                            </td>
                        </tr>

                        <tr>
                            <th>Address</th>
                            <td class="text-break">
                                {{ $setting->address }}
                            </td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>{{ $setting->phone }}</td>
                        </tr>

                        <tr>
                            <th>Created By</th>
                            <td>
                                {{ $setting->admin?->name ?? $setting->created_by_name }}
                            </td>
                        </tr>

                        <tr>
                            <th>Updated By</th>
                            <td>
                                {{ $setting->admin?->name ?? $setting->updated_by_name }}
                            </td>
                        </tr>

                        <tr>
                            <th>Com Code</th>
                            <td>{{ $setting->com_code }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($setting->active)
                                    <span class="badge badge-success">
                                        Active
                                    </span>
                                @else
                                    <span class="badge badge-danger">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td>{{ $setting->created_at?->format('Y-m-d h:i A') }}</td>
                        </tr>

                        <tr>
                            <th>Updated At</th>
                            <td>{{ $setting->updated_at?->format('Y-m-d h:i A') }}</td>
                        </tr>

                    </tbody>

                </table>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('admin_panel_settings.index') }}"
                    class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Back
                </a>
            </div>

        </div>

    </div>

</div>

@endsection