import React from 'react';
import ReactDOM from 'react-dom';

function Editor() {
    var editor = new FroalaEditor('#editor');
    return editor;
}

export default Editor;

if (document.getElementById('editor')) {
    ReactDOM.render(<Editor />, document.getElementById('editor'));
}