@extends('layots.master')

@section('layots.content')
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="#">
            <div class="input-box ">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email Adress" required>
                    <span class="focus"></span>
                </div>

            </div>
            <div class="input-box ">
                <div class="input-field">
                    <input type="text" placeholder="Phone Number" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Location. ex: City/State" required>
                    <span class="focus"></span>
                </div>

            </div>
            <div class="textarea-field">
                <textarea type="text" cols="30" rows="10" placeholder="Your message" required></textarea>
                <span class="focus"></span>
            </div>
            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>
@endsection
