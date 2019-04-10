@extends('layouts.app')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner.</p></div>

        <div class="card-body">
            <form id="contact-form" class="contact-form" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input name="Name" type="Name" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection