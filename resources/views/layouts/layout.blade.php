<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    @include("layouts.style")
    
</head>

<body>

   @include("layouts.top-bar")

    @include("layouts.navbar")
    
    @yield("content")

    @include("layouts.footer")
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include("layouts.script")
</body>

</html>