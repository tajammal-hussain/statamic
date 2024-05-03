import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Now you can use ClassicEditor to create editor instances
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log('Editor initialized successfully:', editor);
    })
    .catch(error => {
        console.error('Error initializing editor:', error);
    });