
<!DOCTYPE html>
<html lang="en">


<body>

<!-- Header section -->
@extends('home.navbar') <!-- Include a header partial if needed -->

<!-- Content section --><section>
@yield('content') <!-- This is where the content for each page will go -->
</section>
<!-- Footer section -->
@extends('home.footer') <!-- Include a footer partial if needed -->

</body>
</html>
