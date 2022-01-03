<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Article genaratoe</title>
    <script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="minified/themes/default.min.css" id="theme-style" />
        <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
        <script src="minified/sceditor.min.js"></script>
        <script src="minified/icons/monocons.js"></script>
        <script src="minified/formats/bbcode.js"></script>
</head>

<body>
    <div class="svg-container">
       <svg viewbox="0 0 800 400" class="svg">
         <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z"></path>

       </svg>
    </div>

               <textarea id="editor" data-sample-short><p style="text-align: center;"><strong><span style="font-size:24px">Article</span></strong></p>

<p style="text-align: center;"><strong><span style="color:#16a085">Autors [E-mail]</span></strong></p>

<p><strong><span style="font-size:16px">Keywords</span></strong></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:16px">Abstract</span></strong></p>

<p>&nbsp;</p>

<p><span style="font-size:16px"><strong>Introduction</strong></span></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:16px">Materials and Methods</span></strong></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:16px">Results</span></strong></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:16px">Discussion and Conclusion </span></strong></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:16px">Rferences</span></strong></p>

<p><strong>[1]</strong></p>

<p><strong>[2]</strong></p>

<p><strong>[3]</strong></p>

<p><strong>etc</strong></p>
</textarea>

    <script>
        // These styles are used to provide the "page view" display style like in the demo and matching styles for export to PDF.
        CKEDITOR.addCss(
            'body.document-editor { margin: 0.5cm auto; border: 1px #D3D3D3 solid; border-radius: 5px; background: white; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }' +
            'body.document-editor, div.cke_editable { width: 700px; padding: 1cm 2cm 2cm; } ' +
            'body.document-editor table td > p, div.cke_editable table td > p { margin-top: 0; margin-bottom: 0; padding: 4px 0 3px 5px;} ' +
            'blockquote { font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } ');

        var editor = CKEDITOR.replace('editor', {
            width: 940,
            height: 700,
            extraPlugins: 'colorbutton,font,justify,print,tableresize,liststyle,pagebreak,exportpdf',
            toolbar: [{
                    name: 'various',
                    items: ['ExportPdf', '-', 'Undo', 'Redo']
                },
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'Subscript', 'Superscript']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table']
                },
                {
                    name: 'editing',
                    items: ['Scayt']
                },
                '/',
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor', 'CopyFormatting']
                },
                {
                    name: 'align',
                    items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'document',
                    items: ['PageBreak', 'Source']
                }
            ],
            bodyClass: 'document-editor',
            removeButtons: 'PasteFromWord'
        });
    </script>
</body>

</html>
