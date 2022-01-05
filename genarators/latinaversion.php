<!DOCTYPE html>
<?php
  $article=$_POST['Article'];
  $autors=$_POST['autors'];
  $email=$_POST['email'];
  $keywords=$_POST['Keywords'];

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
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

<style>
.header-dark {
    background:url(../../assets/img/mountain_bg.jpg) #444;
    background-size:cover;
    padding-bottom:80px;
}

@media (min-width:768px) {
    .header-dark {
        padding-bottom:120px;
    }
}

.header-dark .navbar {
    background:transparent;
    padding-top:0;
    padding-bottom:0;
    color:#fff;
    border-radius:0;
    box-shadow:none;
    border:none;
}

@media (min-width:768px) {
    .header-dark .navbar {
        padding-top:.75rem;
        padding-bottom:.75rem;
    }
}

.header-dark .navbar .navbar-brand {
    font-weight:bold;
    color:inherit;
}

.header-dark .navbar .navbar-brand:hover {
    color:#f0f0f0;
}

.header-dark .navbar .navbar-collapse span {
    margin-top:5px;
}

.header-dark .navbar .navbar-collapse span .login {
    color:#d9d9d9;
    margin-right:.5rem;
    text-decoration:none;
}

.header-dark .navbar .navbar-collapse span .login:hover {
    color:#fff;
}

.header-dark .navbar .navbar-toggler {
    border-color:#747474;
}

.header-dark .navbar .navbar-toggler:hover, .header-dark .navbar-toggler:focus {
    background:none;
}

.header-dark .navbar .navbar-toggler {
    color:#eee;
}

.header-dark .navbar .navbar-collapse, .header-dark .navbar .form-inline {
    border-color:#636363;
}

@media (min-width: 992px) {
    .header-dark .navbar.navbar .navbar-nav .nav-link {
        padding-left:1.2rem;
        padding-right:1.2rem;
    }
}

.header-dark .navbar.navbar-dark .navbar-nav .nav-link {
    color:#d9d9d9;
}

.header-dark .navbar.navbar-dark .navbar-nav .nav-link:focus, .header-dark .navbar.navbar-dark .navbar-nav .nav-link:hover {
    color:#fcfeff !important;
    background-color:transparent;
}

.header-dark .navbar .navbar-nav > li > .dropdown-menu {
    margin-top:-5px;
    box-shadow:0 4px 8px rgba(0,0,0,.1);
    background-color:#fff;
    border-radius:2px;
}

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .dropdown-item {
    line-height:2;
    font-size:14px;
    color:#37434d;
}

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .drodown-item:hover {
    background:#ebeff1;
}

.header-dark .navbar .action-button, .header-dark .navbar .action-button:active {
    background:#208f8f;
    border-radius:20px;
    font-size:inherit;
    color:#fff;
    box-shadow:none;
    border:none;
    text-shadow:none;
    padding:.5rem .8rem;
    transition:background-color 0.25s;
}

.header-dark .navbar .action-button:hover {
    background:#269d9d;
}

.header-dark .navbar .form-inline label {
    color:#ccc;
}

.header-dark .navbar .form-inline .search-field {
    display:inline-block;
    width:80%;
    background:none;
    border:none;
    border-bottom:1px solid transparent;
    border-radius:0;
    color:#ccc;
    box-shadow:none;
    color:inherit;
    transition:border-bottom-color 0.3s;
}

.header-dark .navbar .form-inline .search-field:focus {
    border-bottom:1px solid #ccc;
}

.header-dark .hero {
    margin-top:60px;
}

@media (min-width:768px) {
    .header-dark .hero {
        margin-top:20px;
    }
}

.header-dark .hero h1 {
    color:#fff;
    font-family:'Bitter', serif;
    font-size:40px;
    margin-top:20px;
    margin-bottom:80px;
}

@media (min-width:768px) {
    .header-dark .hero h1 {
        margin-bottom:50px;
        line-height:1.5;
    }
}

.header-dark .hero .embed-responsive iframe {
    background-color:#666;
}


</style>

<body>
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"><a href="#" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
<textarea id="editor" data-sample-short><p style="text-align: center;"><strong><span style="font-size:24px"><?php echo $article; ?></span></strong></p>

<p style="text-align: center;"><strong><span style="color:#16a085"><?php echo $autors;?> [<?php echo $email; ?>]</span></strong></p>

<p><strong><span style="font-size:16px">Keywords</span></strong></p>

<p><?php echo $keywords;?></p>

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
</textarea>                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script>
        // These styles are used to provide the "page view" display style like in the demo and matching styles for export to PDF.
        CKEDITOR.addCss(
            'body.document-editor { margin: 0.5cm auto; border: 1px #D3D3D3 solid; border-radius: 5px; background: white; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }' +
            'body.document-editor, div.cke_editable { width: 700px; padding: 1cm 2cm 2cm; } ' +
            'body.document-editor table td > p, div.cke_editable table td > p { margin-top: 0; margin-bottom: 0; padding: 4px 0 3px 5px;} ' +
            'blockquote { font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } ');

        var editor = CKEDITOR.replace('editor', {
            width: 700,
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
