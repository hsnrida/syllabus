@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center">
                        <?php $counter = 0 ; $status="" ?>
                        @foreach($syllabi as $syllabus)
                        @if($syllabus==$currentSyllabus) @php $status="active" @endphp @endif
                        <li class="page-item  {{$status}}"><a class="page-link " href="{{ route('builder.syllabi.show', $syllabus->id)}}">{{++$counter}}</a></li>
                        @php $status="" @endphp
                        @endforeach
                    </ul>
                </nav>
            </div>

            @if($currentSyllabus->stage==0)
            <div class="card">
                <div class="card-header">{{$currentSyllabus->title}}</div>
                <div class="card-body">

                    <form action="{{route('builder.syllabi.update',$currentSyllabus ) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <textarea class="form-control" name="syllabusText" id="syllabusText" rows="20">{{$currentSyllabus->syllabus}}</textarea>
                        </div>
                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#syllabusText'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <button type="submit" value="save" name="action" class="btn btn-outline-success" style="margin:0 auto; display:block;">Save</button><br>

                </div>
                <div class="card-footer text-muted">
                    <button type="submit" value="submit" name="action" class="btn btn-outline-danger" style="margin:0 auto; display:block;">submit</button><br>
                </div>
                </form>
            </div>
            @elseif($currentSyllabus->stage>0)
            <div class="card">
                <div class="card-header">{{$currentSyllabus->title}}</div>
                <div class="card-body">
                    @if($currentSyllabus->stage==2)
                    <div class="alert alert-success" role="alert">
                        This syllabus is confirmed
                    </div>
                    @elseif($currentSyllabus->stage==1)
                    <div class="alert alert-info" role="alert">
                        Syllabus waiting validation
                    </div>
                    @endif
                    {!! $currentSyllabus->syllabus!!}
                </div>

            </div>
            @elseif($currentSyllabus->stage==-1)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Syllabus</div>
                        <div class="card-body">
                            {!! $currentSyllabus->syllabus!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header">Comments</div>
                        <div class="card-body">
                            {{$currentSyllabus->validation->comments}}
                        </div>
                    </div>
                </div>
            </div>
            @elseif($currentSyllabus->stage==-2)
            <div class="row justify-content-center">
                <?php

                $allSyllabus = $syllabi;
                $allSyllabus->pop();
                $rejectedSyllabus = $allSyllabus->last();
                ?>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Syllabus</div>
                        <div class="card-body">
                            {!! $rejectedSyllabus->syllabus!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header">Comments</div>
                        <div class="card-body">
                            {{$rejectedSyllabus->validation->comments}}
                        </div>
                        <div class="card-footer text-muted">
                            <a type="button" class="btn btn-success" href="{{ route('builder.syllabi.retry', $currentSyllabus->id)}}">Retry</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>

</div>
@endsection