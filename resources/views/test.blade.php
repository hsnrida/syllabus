@extends('layouts.app')

@section('content')

<head>
    <script src="https://cdn.tiny.cloud/1/eruoytojxm7ishgkcmamh6peesye0k5hkq64egzj46p9dr0c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugin: '',
            menubar: '',
            toolbar: 'backcolor ',
            custom_colors: false,
            init_instance_callback: function(editor) {
               editor.execCommand('HiliteColor', true, '#FFFF99');
            }


        });
    </script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editor</div>

                <div class="card-body">
                    <h1>TinyMCE Quick Start Guide</h1>
                    <form method="post">
                        <textarea id="mytextarea" name="mytextarea">
                      Hello, World! new
                  </textarea>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection