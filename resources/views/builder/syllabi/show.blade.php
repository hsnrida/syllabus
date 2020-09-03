@extends('layouts.app')

@section('content')

<head>
    <script src="https://cdn.tiny.cloud/1/eruoytojxm7ishgkcmamh6peesye0k5hkq64egzj46p9dr0c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,

            link_list: [{
                    title: 'My page 1',
                    value: 'http://www.tinymce.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'http://www.tinymce.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            file_picker_callback: function(callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {
                        text: 'My text'
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {
                        alt: 'My alt text'
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [{
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 900,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
</head>
<div class="row justify-content-center">
    @if($currentSyllabus->stage==0)
    <div class="col-md-2">
        @include('builder.syllabi.sidebar')
    </div>
    @endif
    <div class="col-md-10">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-12">
                    <div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-lg justify-content-center">
                                <?php $counter = 0;
                                $status = "" ?>
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
                        <div class="card-header text-center  " style="background-color:#F5F5F5;">
                            <h1><span class="badge badge-secondary">{{$currentSyllabus->title}}</span></h1>
                        </div>
                        <div class="card-body" style="background-color:#F5F5F5">

                            <form action="{{route('builder.syllabi.update',$currentSyllabus ) }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <textarea id="syllabusText" name="syllabusText">
                                    {{$currentSyllabus->syllabus}}
                                    </textarea>
                                </div>


                        </div>
                        <div class="card-footer  text-white" style="background-color: #F5F5F5;">
                            <div class="row justify-content-center">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="submit" value="save" name="action" class="btn btn-primary" style="margin:0 auto; display:block;">Save</button>
                                    <button type="submit" value="submit" name="action" class="btn btn-success" style="margin:0 auto; display:block;">submit</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    @elseif($currentSyllabus->stage>0)
                    <div class="card">
                        <div class="card-header text-center  " style="background-color:#F5F5F5;">
                            <h1><span class="badge badge-secondary">{{$currentSyllabus->title}}</span></h1>
                        </div>
                        <div class="card-body">
                            @if($currentSyllabus->stage==2)
                            <div class="alert alert-secondary text-center" role="alert">
                               <h3> This syllabus is confirmed by validator</h3>
                            </div>
                            @elseif($currentSyllabus->stage==5)
                            <div class="alert alert-success text-center" role="alert">
                                <h3>This syllabus is confirmed by supervisor!</h3>
                            </div>
                            @elseif($currentSyllabus->stage==10)
                            <div class="alert alert-success text-center" role="alert">
                                <h3>This syllabus is online</h3>
                            </div>
                            @elseif($currentSyllabus->stage==1)
                            <div class="alert alert-info text-center" role="alert">
                                <h3>Syllabus waiting validation</h3>
                            </div>
                            @endif
                            {!! $currentSyllabus->syllabus!!}
                        </div>

                    </div>
                    @elseif($currentSyllabus->stage==-1)
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-white text-center"  style="background-color: #eb7175;">
                                    <h3>{{$currentSyllabus->title}} syllabus</h3>
                                </div>
                                <div class="card-body">
                                    {!! $currentSyllabus->syllabus!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card" style="position: fixed; width:30%">
                                <div class="card-header text-white text-center" style="background-color: #eb7175;">
                                    <h3>Validator Comments</h3>
                                </div>
                                <div class="card-body">
                                    {{$currentSyllabus->validation->comments}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($currentSyllabus->stage==-3)
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: #eb7175;">
                                    <h3> {{$currentSyllabus->title}} syllabus
                                </div>
                                <div class="card-body">
                                    {!! $currentSyllabus->syllabus!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card" style="position: fixed;">
                                <div class="card-header text-white text-center" style="background-color: #eb7175;">
                                    <h3>Supervisor Comments</h3>
                                </div>
                                <div class="card-body">
                                    {{$currentSyllabus->confirmation->comments}}
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
                                <div class="card-header  text-white text-center" style="background-color: #b31e1e;">
                                    <h3> {{$rejectedSyllabus->title}} syllabus</h3>
                                </div>
                                <div class="card-body ">
                                    {!! $rejectedSyllabus->syllabus!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 " style="position: fixed; bottom:50px">
                            <div class="card">
                                <div class="card-header  text-white text-center" style="background-color: #b31e1e;">
                                    <h5>Attention</h5>
                                </div>
                                <div class="card-body">
                                    Your last syllabus was rejected by validator <a href="{{ route('builder.syllabi.show', $rejectedSyllabus->id)}}">check comments!</a>
                                </div>
                                <div class="card-footer text-muted center text-center">
                                    <a type="button" class="btn btn-success" href="{{ route('builder.syllabi.retry', $currentSyllabus->id)}}">Retry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($currentSyllabus->stage==-4)
                    <div class="row justify-content-center">
                        <?php

                        $allSyllabus = $syllabi;
                        $allSyllabus->pop();
                        $rejectedSyllabus = $allSyllabus->last();
                        ?>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: #b31e1e;">
                                    <h3> {{$rejectedSyllabus->title}} syllabus</h3>
                                </div>
                                <div class="card-body ">
                                    {!! $rejectedSyllabus->syllabus!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 " style="position: fixed; bottom:50px">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: #b31e1e;">
                                    <h5>Attention</h5>
                                </div>
                                <div class="card-body">
                                    Your last syllabus was rejected by supervior <a href="{{ route('builder.syllabi.show', $rejectedSyllabus->id)}}">check comments!</a>
                                </div>
                                <div class="card-footer text-muted  text-center">
                                    <a type="button" class="btn btn-success" href="{{ route('builder.syllabi.retry', $currentSyllabus->id)}}">Retry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection