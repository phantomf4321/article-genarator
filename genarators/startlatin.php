<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - Multi-step form interface</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form id="signup" action="latinaversion.php" method="POST">
        <ul id="section-tabs">
            <li class="current active"><span>1.</span> Atricle</li>
            <li><span>2.</span> Autors</li>
            <li><span>3.</span> Keywords</li>
        </ul>
    <div id="fieldsets">
    <fieldset class="current">
        <label for="email">Article:</label>
        <input name="Article" type="text" class="" />
    </fieldset>
    <fieldset class="next">
        <label for="username">Autors:</label>
        <input name="autors" type="text">
        <label for="email">Email:</label>
        <input name="email" type="email" class="required email" />
    </fieldset>
    <fieldset class="next">
        <label for="username">Keywords:</label>
        <input name="Keywords" type="text">
    </fieldset>
    <fieldset class="next">
        <label for="referrer">data are saved!</label>
    </fieldset>
    <a class="btn" id="next">Next Section ▷</a>
    <input type="submit" class="btn">
    </div>
</form>
<!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
