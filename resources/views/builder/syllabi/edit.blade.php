@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">
            <div >
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center">
                        <?php $counter = 0 ?>
                        @foreach($syllabi as $syllabus)
                        <li class="page-item"><a class="page-link" href="{{ route('builder.syllabi.show', $syllabus->id)}}">{{++$counter}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            @if($lastSyllabus->stage==0)
            <div class="card">
                <div class="card-header">{{$lastSyllabus->title}}</div>
                <div class="card-body">

                    <form action="{{route('builder.syllabi.update',$lastSyllabus ) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <textarea class="form-control" name="syllabusText" id="syllabusText" rows="20">{{$lastSyllabus->syllabus}}</textarea>
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
            @elseif($lastSyllabus->stage>0)
            <div class="card">
                <div class="card-header">{{$lastSyllabus->title}}</div>
                <div class="card-body">
                    @if($lastSyllabus->stage==2)
                    <div class="alert alert-success" role="alert">
                        This syllabus is confirmed
                    </div>
                    @elseif($lastSyllabus->stage==1)
                    <div class="alert alert-info" role="alert">
                        Syllabus waiting validation
                    </div>
                    @endif
                    {!! $lastSyllabus->syllabus!!}
                </div>

            </div>
            @endif

        </div>
    </div>

</div>
@endsection