@extends('layots.master')

@section('layots.content')
    {{-- home section design --}}

    <section class="home" id="home">

        <div class="home-content">
            <h1>Hi, i'm <span>Besjan Bardhollari</span></h1>
            <div class="text-animate">
                <h3>Web Developer</h3>
            </div>
            <p>As a web developer with expertise in PHP and Laravel, I have a passion for creating efficient, scalable, and
                user-friendly web applications.
                My expertise lies in developing robust and scalable web applications that are both functional and visually
                appealing. I am a team player with a strong work ethic and a commitment to delivering high-quality work on
                time. I am always looking for ways to improve my skills and stay up-to-date with the latest trends and
                technologies in the industry.
            </p>
            <div class="d-flex align-items-center">
                <div class="btn-box">

                    <a href="{{ url('/contact') }}" class="btn">Hire me</a>
                    <a href="{{ asset('cv/Besjan_Bardhollari_-_Web_Developer.pdf') }}" class="btn" download="">Download
                        CV</a>

                </div>
                <div class="ml-5">
                    <a href="https://www.buymeacoffee.com/besjan1388V" target="_blank" class="btn ml-2"><img
                            src="https://cdn.buymeacoffee.com/buttons/v2/default-blue.png" alt="Buy Me A Coffee"
                            style="height: 50px !important;width: 217px !important; "></a>
                </div>
            </div>

        </div>
        {{-- <div>
            <img src="{{ asset('assets/bust-foto1.png') }}" alt="" style="display:flex; justify-content: end;">

        </div> --}}
        <div class="home-sci">
            <a href="https://github.com/bling1388" target="_blank">
                <i class='bx bxl-github'></i>
            </a>
            <a href="https://www.linkedin.com/in/besjan-bardhollari-253660208/" target="_blank">
                <i class='bx bxl-linkedin'></i>
            </a>
            <a href="https://twitter.com/Besjan1388" target="_blank">
                <i class='bx bxl-twitter'></i>
            </a>

        </div>

        <div class="home-imgHover"></div>

    </section>
@endsection
