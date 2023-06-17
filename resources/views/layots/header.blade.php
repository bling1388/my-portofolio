<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portofolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        border: none;
        outline: none;
        scroll-behavior: smooth;
        /* font-family: 'Poopins', sans-serif; */

    }

    :root {
        --bg-color: #081b29;
        --second-bg-color: #112e42;
        --text-color: #ededed;
        --main-color: #00abf0;
    }

    html {
        font-size: 62.5%;
        /* overflow: hidden; */
    }

    body {
        background: var(--bg-color);
        color: var(--text-color);
        font-family: 'Poppins';
        overflow: auto;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 2rem 9%;
        background: transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
    }



    .logo {
        font-size: 2.5rem;
        color: var(--text-color);
        font-weight: 600;
    }

    .navbar a {
        font-size: 1.7rem;
        color: var(--text-color);
        font-weight: 500;
        margin-left: 3.5rem;
        transition: .3s;

    }

    .navbar a:hover,
    .navbar .active {
        color: var(--main-color);
    }

    #menu-icon {
        font-size: 3.6rem;
        color: var(--main-color);
        cursor: pointer;
        display: none;
    }


    section {
        min-height: 100vh;
        padding: 10rem;

    }

    .home {
        display: flex;
        align-items: center;
        padding: 0 9%;
        background: url({{ asset('assets/bust-foto3.png') }}) no-repeat;
        bacground-color: var(--main-color);
        background-size: 600px;
        /* margin-right: 145px; */
        background-position: right;
    }

    .home-content {
        max-width: 70rem;
    }

    .home-content h1 {
        font-size: 5.6rem;
        font-weight: 700;
        line-height: 1.3;
    }

    .home-content .text-animate {
        position: relative;
        width: 32.8rem
    }

    .home-content .text-animate h3 {
        font-size: 3.2rem;
        font-weight: 700;
        color: transparent;
        -webkit-text-stroke: .7px var(--main-color);
    }

    .home-content p {
        font-size: 1.6rem;
        margin: 2rem 0 4rem;
    }

    .btn-box {
        position: relative;
        display: flex;
        justify-content: space-between;
        width: 34.5rem;
        height: 5rem;
    }

    .btn-box .btn {
        position: relative;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 15rem;
        height: 100%;
        background: var(--main-color);
        border-radius: .8rem;
        font-size: 1.8rem;
        font-weight: 600;
        letter-spacing: .1rem;
        color: var(--bg-color);
        z-index: 1;
        overflow: hidden;
        transition: .5s;
    }

    .btn-box .btn:hover {
        color: var(--main-color);
    }

    .btn-box .btn:nth-child(2) {
        background: transparent;
        color: var(--main-color);
    }

    .btn-box .btn:nth-child(2):hover {
        color: var(--bg-color);
    }

    .btn-box .btn:nth-child(2)::before {
        background: var(--main-color);
    }

    .btn-box .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--bg-color);
        z-index: -1;
        transition: .5s;
    }


    .btn-box .btn:hover::before {
        width: 100%;
    }

    .home-sci {
        position: absolute;
        bottom: 4rem;
        width: 170px;
        display: flex;
        justify-content: space-between;
    }

    .home-sci a {
        position: relative;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        background: transparent;
        border: .2rem solid var(--main-color);
        border-radius: 50%;
        font-size: 20px;
        color: var(--main-color);
        z-index: 1;
        overflow: hidden;
        transition: .5s;
    }

    .home-sci a:hover {

        color: var(--bg-color);
    }

    .home-sci a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--main-color);
        z-index: -1;
        transition: .5s
    }

    .home-sci a:hover::before {
        width: 100%;
    }

    .home-imgHover {
        position: absolute;
        top: 0;
        right: 0;
        width: 45%;
        height: 100%;
        background: transparent;

        transition: 1s;
    }

    .home-imgHover:hover {
        background: var(--bg-color);
        opacity: .6;
    }


    .about {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
        background: var(--second-bg-color);
        padding-bottom: 3rem;
    }

    .heading {
        font-size: 5rem;
        font-weight: bolder;
        margin-bottom: 2rem;
        text-align: center;
    }

    span {
        color: var(--main-color);
    }

    .about-img {
        position: relative;
        width: 25rem;
        height: 25rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-img img {
        width: 90%;
        border-radius: 50%;
        border: .2rem solid var(--main-color);
    }

    .about-img .circle-spin {

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border-top: .2rem solid var(--second-bg-color);
        border-bottom: .2rem solid var(--second-bg-color);
        border-left: .2rem solid var(--main-color);
        border-right: .2rem solid var(--main-color);
    }

    .about-content {
        text-align: center;
    }


    .about-content h3 {
        font-size: 2.5rem;
    }

    .about-content p {
        font-size: 1.5rem;
        margin: 2rem 0 2rem;
    }

    .btn-box.btns {
        display: inline-block;
        width: 15rem;

    }

    .btn-box.btns a::before {
        background: var(--second-bg-color);
    }



    .skills {
        min-height: auto;
        padding-bottom: 7rem;
        background: var(--second-bg-color);
    }


    .skills .skills-row {
        display: flex;
        flex-wrap: wrap;
        gap: 5rem;
    }

    .skills-row .skills-column {
        flex: 1 1 40rem;
    }


    .skills-column .title {
        font-size: 2.5rem;
        margin: 0 0 1.5rem;
    }

    .skills-box .skills-content {
        position: relative;
        border: .2rem solid var(--main-color);
        border-radius: .6rem;
        padding: .5rem 1.5rem;
        z-index: 1;
        overflow: hidden;
    }

    .skills-box .skills-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--bg-color);
        z-index: -1;
        transition: .5s;
    }

    .skills-box .skills-content:hover::before {
        width: 100%;
    }

    .skills-content .progress {
        padding: 1rem 0;
    }

    .skills-content .progress2 h3 {
        font-size: 1.7rem;
        display: flex;
        justify-content: space-between;
    }

    .skills-content .progress2 h3 span {
        color: var(--text-color);
    }

    .skills-content .progress2 .bar {
        height: 2.5rem;
        border-radius: .6rem;
        border: .2rem solid var(--main-color);
        padding: .5rem;
        margin: 1rem 0;
    }

    .skills-content .progress2 .bar span {
        display: block;
        height: 100%;
        border-radius: .3rem;
        background: var(--main-color);
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(1) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(2) .bar span {
        width: 70%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(3) .bar span {
        width: 65%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(4) .bar span {
        width: 65%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(5) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(6) .bar span {
        width: 65%;
    }

    .skills-column:nth-child(1) .skills-content .progress2:nth-child(7) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(1) .bar span {
        width: 70%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(2) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(3) .bar span {
        width: 75%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(4) .bar span {
        width: 85%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(5) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(6) .bar span {
        width: 90%;
    }

    .skills-column:nth-child(2) .skills-content .progress2:nth-child(7) .bar span {
        width: 60%;
    }

    .contact {
        min-height: auto;
        padding-bottom: 7rem;
    }

    .contact form {
        max-width: 70rem;
        margin: 0 auto;
        text-align: center;
    }

    .contact form .input-box {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .contact form .input-box .input-field {
        position: relative;
        width: 49%;
        margin: .8rem 0;
    }

    .contact form .input-box .input-field input,
    .contact form .textarea-field textarea {
        width: 100%;
        height: 100%;
        padding: 1.5rem;
        font-size: 1.6rem;
        color: var(--text-color);
        background: transparent;
        border-radius: .6rem;
        border: .2rem solid var(--main-color);
    }

    .contact form .input-box .input-field input::placeholder,
    .contact form .textarea-field textarea::placeholder {
        color: var(--text-color);
    }

    .contact form .focus {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--second-bg-color);
        border-radius: .6rem;
        z-index: -1;
        transition: .5s;
    }

    .contact form .input-box .input-field input:focus~.focus,
    .contact form .input-box .input-field input:valid.focus,
    .contact form .textarea-field textarea:focus~.focus,
    .contact form .textarea-field textarea:valid.focus {
        width: 100%;
    }

    .contact form .textarea-field {
        position: relative;
        margin: .8rem 0 2.7rem;
        display: flex;
    }

    .contact form .textarea-field textarea {
        resize: none;
    }

    .contact form .btn-box.btns .btn {
        cursor: pointer;
    }


    .footer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 2rem 9%;
        background: var(--second-bg-color);
    }

    .footer-text p {
        font-size: 1.6rem;
    }


    /* BREAKPOINTS */
    @media (max-width: 1200px) {
        html {
            font-size: 55%;
        }

        #home {
            display: flex;
            background: url({{ asset('assets/bust-foto3.png') }}) no-repeat;
            background-size: 400px;
            background-position: right;
        }
    }



    @media (max-width: 991px) {
        .header {
            padding: 5rem 4%;
        }

        #home {
            background-image: url();
        }


        section {
            padding: 10rem 4% 2rem;
        }

        .home {
            padding: 0 4%;
        }

        .footer {
            padding: 2rem 4%;
        }

    }


    @media (max-width: 768px) {

        #home {
            margin-top: 50px;
        }

        #home {
            background-image: url();
        }

        #skills {
            margin-top: 50px;
        }

        #about {
            margin-top: 50px;
        }

        #contact {
            margin-top: 50px;
        }

        .header {
            background: var(--bg-color);
        }

        .footer {
            text-align: center;
        }

        #menu-icon {
            display: block;
        }

        .navbar {
            position: absolute;
            top: 100%;
            left: -100%;
            width: 100%;
            padding: 1rem 4%;
            background: var(--main-color);
            display: flex;
            flex-direction: column;
            text-align: left;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
            z-index: 1;
            transition: none;
            transition-delay: .25s;
        }

        .navbar .active {
            left: 0;
            transition-delay: .0s;
        }

        .navbar .active-nav {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--bg-color);
            border-top: .1rem solid rgba(0, 0, 0, .2);
            z-index: -1;
            transition: .25s ease;
            transition-delay: 0s;
        }

        .navbar.active .active-nav {
            left: 0;
            transition-delay: .22s;
        }

        .navbar a {
            display: block;
            font-size: 2rem;
            margin: 3rem 0;
            transform: translateX(-20rem);
            transition: .25s ease;
            transition-delay: 0s;
        }

        .navbar.active a {
            transform: translateX(0);
            transition-delay: .25s;
        }

    }
</style>




<body>
    <header class="header">
        <a href="{{ url('/') }}" class="logo">LaraTech.</a>
        {{-- <a href="{{ url('/') }}"> <img src="{{ asset('assets/besi.png') }}" alt="logo" class="logo"
                width="60px"></a> --}}

        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="{{ url('/') }}" class="">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/skills') }}">Skills</a>
            <a href="{{ url('/contact') }}">Contact</a>

            <span class="active-nav"></span>

        </nav>

    </header>


    <script>
        const navLinks = document.querySelectorAll('.navbar a');
        const currentUrl = window.location.href;

        navLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    </script>
