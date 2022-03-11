@extends('layout')

@section('main_content')
    <div class="row">
        <div class="col bg-warning p-5">
            <h2>Главная страница</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. minima nulla officia possimus quam rem reprehenderit sed temporibus ullam!</p>
        </div>
    </div>
    <div class="row mt-5 ">
        <div class="col bg-light border border-dark me-2 p-3">
            <h2>Информация №1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. minima nulla officia possimus quam rem reprehenderit sed temporibus ullam!</p>
        </div>
        <div class="col bg-light border border-dark me-2 p-3">
            <h2>Информация №2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. minima nulla officia possimus quam rem reprehenderit sed temporibus ullam!</p>
        </div>
        <div class="col bg-light border border-dark p-3">
            <h2>Информация №3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. minima nulla officia possimus quam rem reprehenderit sed temporibus ullam!</p>
        </div>
    </div>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://imgholder.ru/1000px/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
@endsection
