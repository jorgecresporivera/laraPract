@extends('layouts.master')
@section('content')

    <!-- Services Section -->
    <section id="services">

        <div class="container">
        
            @if (count($phpTeam) > 0)
            @foreach($phpTeam as $member)
            <li>{{$member}}</li>
            @endforeach
            @endif

        
            <br> 
            
            @if ($students)
            @foreach($students as $student)
            <li>
                <h3>Name: </h3><a>{{$student->name}}</a>
            </li>
            <li>
                <h3>Last Name: </h3><a>{{$student->lastname}}</a>
            </li>
            <li>
                <h3>GPA: </h3><a>{{$student->gpa}}</a>
            </li>
            <li>
                <h3>Gender: </h3><a>{{$student->gender}}</a>
            </li>
            <li>
                <h3>Race: </h3><a>{{$student->race}}</a>
            </li>
            <li>
                <h3>Address: </h3><a>{{$student->address}}</a>
            </li>
            <li>
                <h3>Country: </h3><a>{{$student->country}}</a>
            </li>
            <li>
                <h3>City: </h3><a>{{$student->city}}</a>
            </li>
            <li>
                <h3>Zipcode: </h3><a>{{$student->zipcode}}</a>
            </li>
            
            <br> 
            @endforeach 
            
            @else
            <br> 
            <section class="home-section share-section desktop-only">
                <div class="section-content home-section-content">
                    <section id="text-4" class="widget widget_text">
                        <div class="textwidget">
                            <a href="/sign-up" title="Newsletter">
                                <div class="share-section-widget signup-widget">
                                    <div class="share-section-widget-content signup-widget-content">
                                        <h2>Sign Up</h2>
                                        <p>Get UPRAA news in your inbox</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section id="text-5" class="widget widget_text">
                        <div class="textwidget">
                            <a href="https://www.facebook.com/UPRAA" title="Facebook">
                                <div class="share-section-widget facebook-widget">
                                    <div class="share-section-widget-content facebook-widget-content">
                                        <h2>Like Us</h2>
                                        <p>Keep in touch and view all of our photos.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section id="text-6" class="widget widget_text">
                        <div class="textwidget">
                            <a href="https://twitter.com/UPRAA_DC" title="Twitter">
                                <div class="share-section-widget twitter-widget">
                                    <div class="share-section-widget-content twitter-widget-content">
                                        <h2>Follow Us</h2>
                                        <p>Get the most up-to-date news about UPRAA.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
            </section>
            @endif

        </div>
    </section>

@endsection