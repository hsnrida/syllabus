<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="container">
        <div class="alert alert-info" role="alert">
            Templates
        </div>

        @foreach($templates as $template)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$template->title}}</h5>
                <p class="card-text"> {{$template->description}}</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id{{$template->id}}">View</button>

            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="id{{$template->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$template->id}}label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="id{{$template->id}}">{{$template->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('builder.syllabi.storeTemplate', $currentSyllabus->id)}}">
                            @csrf
                            {!! $template->template!!}
                            <input type="text" name="template" id="temple" hidden value="{{$template->template}}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" value="submit" name="action" class="btn btn-outline-info" style="margin:0 auto; display:block;">use</button><br>
                    </div>
                    </form>


                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>