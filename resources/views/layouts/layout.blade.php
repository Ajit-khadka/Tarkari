<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarkari | welcome</title>

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/homeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/popularProduct.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/advertise.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/welcomeTarkari.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sort.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sortByProducts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/productInfo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}" />

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- owl careousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- Sliders --}}
    <script src="{{ asset('js/sliders.js') }}"></script>

    {{-- dual range --}}
    <script src="{{ asset('js/dualRange.js') }}"></script>


    <script type="text/javascript">
        // sidenav
        function openNav() {
            document.querySelector('.sidenav').classList.toggle('sidenav-intro');
        }

        function closeNav() {
            document.querySelector('.sidenav').classList.remove('sidenav-intro');
        }


        // custom arrow input product info page
        $('.btn-minus').on('click', function(e) {
            var input = $(e.target).closest('.form-type-number').find('input');
            input[0]['stepDown']();
        });
        $('.btn-plus').on('click', function(e) {
            var input = $(e.target).closest('.form-type-number').find('input');
            input[0]['stepUp']();
        });
    </script>



</body>

</html>
