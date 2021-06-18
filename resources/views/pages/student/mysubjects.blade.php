@extends('layouts.master')
@section('page_title', 'Manage Subjects')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Subjects</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#mysubject" class="nav-link active" data-toggle="tab">My Subjects</a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane fade show active" id="mysubject">
                    <table class="table datatable-button-html5-columns ">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Teacher</th>
                            </tr>
                            </thead>
                        <tbody>
                            @foreach($subjects->where('my_class.id', $dd) as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->name }} </td>
                                <td>{{ $s->slug }} </td>
                                <td>{{ $s->teacher->name }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            {{-- <div class="tab-content">
                @foreach($subjects->where('my_class.id', $dd) as $s)
                    <div class="tab-pane active fade" id="mysubject">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Teacher</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->name }} </td>
                                    <td>{{ $s->slug }} </td>
                                    <td>{{ $s->teacher->name }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    @endforeach
            </div> --}}
        </div>
    </div>

    {{--subject List Ends--}}

@endsection
