<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Merchandise Image Generator</title>

    <meta name="description" content="Merchandise Image Generator - Image Generate to make custom avatar.">
    <meta name="keywords" content="merchandise, image generator, image, merchandise image generator">
    <meta name="author" content="Merchandise Image Generator">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Merchandise Image Generator | Image Generate to make custom avatar">
    <meta property="og:description" content="Image Generate to make custom avatar.">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:url" content="https://www.merchandise.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Merchandise Image Generator | Image Generate to make custom avatar">
    <meta name="twitter:description" content="Image Generate to make custom avatar.">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">

    <link rel="preload" href="{{ asset('assets/css/style6572.css?v1.5.0') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/style6572.css?v1.5.0') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    {{-- <base href="{{ asset('assets/') }}"> --}}
</head>

<body class="nk-body" data-menu-collapse="lg">
    <div class="nk-app-root">
        <header class="nk-header bg-darker is-dark has-mask">
            <div class="nk-mask bg-line-a"></div>
            <div class="nk-header-main nk-menu-main will-shrink is-transparent on-dark ignore-mask">
                <div class="container">
                    <div class="nk-header-wrap">
                        <div class="nk-header-logo"><a href="/" class="logo-link">
                                <div class="logo-wrap"><img class="logo-img logo-light" src="assets/images/logo.png"
                                        alt=""><img class="logo-img logo-dark" src="assets/images/logo.png"
                                        alt="">
                                </div>
                            </a></div>
                        <div class="nk-header-toggle"><button class="dark-mode-toggle dark-active"><em
                                    class="off icon ni ni-sun-fill"></em><em
                                    class="on icon ni ni-moon-fill"></em></button>
                        </div>
                        <nav class="nk-header-menu nk-menu menu-mobile">
                            <div class="mx-2 d-none d-lg-block ms-auto"><button class="dark-mode-toggle dark-active"><em
                                        class="off icon ni ni-sun-fill"></em><em
                                        class="on icon ni ni-moon-fill"></em></button></div>
                            <ul class="nk-menu-buttons flex-lg-row-reverse">
                                <li><a href="#main" class="btn btn-primary">Let's Generate</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="nk-hero pt-6 pt-lg-8 pt-xl-12 pb-6 pb-lg-8 pb-xl-12" id="main">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xxl-10 col-xl-11">
                            <h1 class="title display-6 mb-3 mb-lg-4">Generate an image from avatar using the <span
                                    class="text-gradient-primary">Avatar Image</span> Generator.</h1>
                            <div class="px-xl-10 px-lg-8">
                                <p class="lead">Easily craft breathtaking masterpieces and unlock boundless creative
                                    potential with Image-generated using Merchandise - the image generator.</p>
                            </div>
                            <div class="p-2 rounded mt-5 mx-xl-10 mx-lg-9">
                                <form id="imageForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="category-btn py-5 border border-3 border-light border-opacity-10 rounded-4 mb-7"
                                        style="border-style: dashed !important; backdrop-filter: blur(15px)">
                                        <div class="px-5">
                                            <img class="w-100 rounded-3 mb-5 d-none" id="imagePreview"
                                                src="assets/images/gfx/cta-a.jpg" alt="">
                                        </div>
                                        <div class="d-flex justify-content-center gap-2">
                                            <label for="chooseImage" style="width: 220px; height: 47px;"
                                                class="btn btn-primary mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    width="24" height="24" filter="none"
                                                    style="cursor: pointer;" class="me-2">
                                                    <g>
                                                        <path d="M26 14v10h-20v-10h-2v12h24v-12z"
                                                            fill="rgba(255,255,255,1)"></path>
                                                        <path
                                                            d="M15 6.4v13.6h2v-13.6l4.2 4.4 1.6-1.6-6.8-6.6-6.8 6.6 1.6 1.6z"
                                                            fill="rgba(255,255,255,1)"></path>
                                                    </g>
                                                </svg> Upload an image
                                            </label>
                                            <button type="button" class="btn btn-danger px-5 d-none"
                                                style="height: 47px;" id="resetImageBtn">Remove Image</button>
                                        </div>
                                        <input type="file" id="chooseImage" name="avatar"
                                            accept=".png,.jpg,.jpeg" class="d-none" required>
                                        <div class="supported-formats">
                                            <p class="pb-0">Supported formats:</p>
                                            <div class="d-flex gap-2 justify-content-center"><span
                                                    class="rounded border border-1 border-light border-opacity-25 px-3 py-1">
                                                    png
                                                </span><span
                                                    class="rounded border border-1 border-light border-opacity-25 px-3 py-1">
                                                    jpeg
                                                </span><span
                                                    class="rounded border border-1 border-light border-opacity-25 px-3 py-1">
                                                    jpg
                                                </span></div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-form-s1 rounded d-flex flex-wrap flex-md-nowrap p-2 is-light align-items-center">
                                        <div
                                            class="w-100 w-md-auto  d-flex align-items-center flex-grow-1 ps-3 pb-2 pb-md-0">
                                            <span class="flex-grow-0 pe-2">✏️</span>
                                            <input type="text" class="form-control-plaintext is-light"
                                                placeholder="Enter your name" name="name" required>
                                            <div class="border border-1 border-primary border-opacity-25 h-100 mx-3"
                                                style="width: 5%;">
                                            </div>
                                            <span class="flex-grow-0 pe-2">✏️</span>
                                            <input type="text" class="form-control-plaintext is-light"
                                                placeholder="Enter your greetings" name="greeting" required>
                                        </div>
                                        <div class="w-100  w-md-auto flex-shrink-0">
                                            <button class="btn btn-lg w-100 btn-primary"
                                                type="submit">Generate</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-11" id="preview">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="nk-pages">
            <section class="section section-lg bg-white pb-0">
                <div class="container">
                    <div class="section-head">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-9 col-xl-8 col-xxl-7">
                                <h6 class="overline-title text-primary">Get started for free</h6>
                                <h2 class="title">How to generate Avatar images</h2>
                                <p class="lead">Give our Merchandise a few descriptions and we'll automatically
                                    create avatar and more for you within just few second.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row gx-gs gy-6 align-items-xl-center">
                            <div class="col-xl-7 col-lg-7">
                                <div class="block-gfx p-3 p-xl-4 bg-primary bg-opacity-10 me-xl-3 rounded"><img
                                        class="rounded-4" src="assets/images/gfx/cta-a.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <ul class="step-list">
                                    <li class="step-list-item">
                                        <div class="step-list-icon"><em class="icon ni ni-check"></em></div>
                                        <div class="step-list-text">
                                            <h6 class="overline-title text-primary">Step 1</h6>
                                            <h3 class="title">Open Merchandise generator</h3>
                                            <p>Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="step-list-item">
                                        <div class="step-list-icon"><em class="icon ni ni-check"></em></div>
                                        <div class="step-list-text">
                                            <h6 class="overline-title text-primary">Step 2</h6>
                                            <h3 class="title">Feed in your name & greetings</h3>
                                            <p>Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada
                                                magna.</p>
                                        </div>
                                    </li>
                                    <li class="step-list-item">
                                        <div class="step-list-icon"><em class="icon ni ni-check"></em></div>
                                        <div class="step-list-text">
                                            <h6 class="overline-title text-primary">Step 3</h6>
                                            <h3 class="title">Choose your avatar image</h3>
                                            <p>Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada
                                                magna.</p>
                                        </div>
                                    </li>
                                    <li class="step-list-item">
                                        <div class="step-list-icon"><em class="icon ni ni-check"></em></div>
                                        <div class="step-list-text">
                                            <h6 class="overline-title text-primary">Step 4</h6>
                                            <h3 class="title">Create your image</h3>
                                            <p>Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla
                                                sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-bottom-0 section-lg bg-white pb-10">
                <div class="container container-xl">
                    <div class="section-wrap card shadow-sm border-0 rounded-4 overflow-hidden">
                        <div class="section-content p-4 p-sm-5 p-xl-6">
                            <div class="row justify-content-between align-items-center flex-lg-row-reverse g-4 g-lg-5">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="block-gfx"><img class="w-100 rounded-3 shadow-sm"
                                            src="assets/images/gfx/cta-a.jpg" alt=""></div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="block-text">
                                        <h2 class="title">When it comes to amazing videos, all you need is
                                            Merchandise.
                                        </h2>
                                        <p class="fs-5">Get the best working experience that you never feel before
                                        </p>
                                        <ul class="btn-list btn-list-inline gy-0">
                                            <li><a href="#main"
                                                    class="btn btn-lg btn-primary rounded-pill"><span>Create your first
                                                        avatar</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="nk-footer bg-darker is-dark">
            <div class="border-top border-white border-opacity-10 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <p class="mb-2 mb-md-0">© 2024 Merchandise Image Generator.</p>
                        </div>
                        <div class="col-md">
                            <ul class="btn-list btn-list-inline g-1 justify-content-start justify-content-md-end">
                                <li><a class="link-base" href="#"><em
                                            class="icon fs-4 ni ni-facebook-fill"></em></a></li>
                                <li><a class="link-base" href="#"><em
                                            class="icon fs-4 ni ni-twitter-round"></em></a></li>
                                <li><a class="link-base" href="#"><em
                                            class="icon fs-4 ni ni-youtube-round"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/dist/sweetalert2.min.js') }}" defer></script>

    <script>
        $('#chooseImage').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#resetImageBtn').removeClass('d-none');
                    $('#imagePreview').removeClass('d-none');
                    $('#imagePreview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        $('#resetImageBtn').click(function() {
            $('#chooseImage').val('');
            $('#imagePreview').attr('src', '');
            $('#imagePreview').addClass('d-none');
            $(this).addClass('d-none');
        });

        $('#imageForm').on('submit', function(e) {
            e.preventDefault();
            $('.badge.text-danger').text('');
            let formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('generate.image') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('button[type="submit"]').prop('disabled', true).html(`
                            <div class="d-flex align-items-center">
                                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                Generating...
                            </div>
                        `);
                },
                success: function(response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    if (response.success) {
                        $("#resetImageBtn").trigger("click");
                        $('#imageForm')[0].reset();
                        if (response.image_url) {
                            document.getElementById('preview').innerHTML = `
                            <div class="nk-hero-gfx mx-xl-10 mx-lg-9">
                                <div class="p-1 rounded-3 bg-gradient-primary mt-5 position-relative">
                                    <img class="w-100 rounded-3" src="${response.image_url}" alt="">
                                    <a class="btn btn-primary d-flex align-items-center justify-content-center p-2 fs-4 mt-5 me-5 rounded-circle position-absolute top-0 end-0"
                                            href="${response.image_url}" download>
                                            <em class="ni ni-download"></em>
                                    </a>
                                </div>
                            </div>
                            `;
                        }
                        Toast.fire({
                            icon: "success",
                            title: response.success,
                        });
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: "Something went wrong. Please try again.",
                        });
                    }
                },
                complete: function() {
                    $('button[type="submit"]').prop('disabled', false).html(`
                            Generate
                        `);
                },
            });
        });

    </script>
</body>
<script src="{{ asset('assets/js/bundle6572.js?v1.5.0') }}"></script>
<script src="{{ asset('assets/js/scripts6572.js?v1.5.0') }}"></script>

</html>
