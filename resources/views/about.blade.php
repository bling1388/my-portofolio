@extends('layots.master')
@section('layots.content')
    <section class="about" id="about">
        <h2 class="heading">About <span>me</span> </h2>

        <div class="about-img">
            <img src="{{ asset('assets/bust-foto.png') }}">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3>Web Developer!</h3>
            <p>As a Web developer with experience in Laravel, I have a keen eye for detail and a strong understanding of
                the inner workings of web applications. I am proficient in PHP, MySQL, and other server-side technologies.
                My expertise lies in building scalable and efficient web applications that can handle large amounts of
                traffic and data. I am skilled in developing RESTful APIs, creating database schemas, and optimizing
                database queries.

                In addition to my technical skills, I am a strong communicator and collaborator. I am able to work
                effectively with other team members, and I am able to understand and solve complex technical issues in a
                timely manner. I am also a team player, and I am able to work independently and as part of a team to achieve
                project goals.
            </p>
            <div class="btn-box btns">
                <a href="{{ url('/contact') }}" class="btn">Contact me</a>
            </div>

        </div>
    </section>
@endsection
