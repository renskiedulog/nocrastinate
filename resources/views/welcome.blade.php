<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nocrastinate</title>

    <!-- External -->

    <!-- CSS And JS -->
    @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])
</head>

<body>
    <div class="global-container">
        <input type="checkbox" id="menu-bar-checkbox">
        <div class="navbar" id="navbar">
            <a href="{{ url('/') }}" class="logo"><span>No</span>Crastinate</a>
            <label for="menu-bar-checkbox">
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>
            <div class="menu">
                <a href="#about">About</a>
                <a href="#About">Services</a>
                <a href="#About">Contact Us</a>
            </div>
            @if (Route::has('login'))
            <div class="log-user">
                @auth
                @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

        <!-- About Section -->
        <section id="about">
            <p href="{{ url('/') }}" class="logo"><span>No</span>Crastinate</p>
            <p class="hero-desc">
                In a world filled with distractions, staying focused and managing your tasks efficiently can feel like an
                impossible feat. That's where we come in. Nocrastinate is your ultimate solution for mastering time
                management and conquering your to-do list.
            </p>
            <div class="benefits">
                <p>
                    <svg fill="#000000" width="800px" height="800px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.67 10.73a3.52 3.52 0 0 0-.94 1.93 5 5 0 0 0-.07 1.1v.58h.8a5.05 5.05 0 0 0 .88-.08 3.46 3.46 0 0 0 1.93-.94 1.76 1.76 0 0 0-.14-2.48 1.76 1.76 0 0 0-2.46-.11zm1.74 1.73a2.26 2.26 0 0 1-1.26.6h-.22v-.22a2.26 2.26 0 0 1 .6-1.26.36.36 0 0 1 .24-.08.67.67 0 0 1 .47.22.54.54 0 0 1 .17.74zM14.65 2.24a.91.91 0 0 0-.89-.89A8.75 8.75 0 0 0 7.27 3.5L5.64 5.4l-2.4-.5a1 1 0 0 0-.92.27l-.68.68a1 1 0 0 0-.28.81 1 1 0 0 0 .45.74l2.06 1.32.13.08 3.2 3.25.08.08 1.32 2.06a1 1 0 0 0 .74.45h.11a1 1 0 0 0 .7-.29l.68-.68a1 1 0 0 0 .27-.92l-.5-2.39 1.84-1.58a8.79 8.79 0 0 0 2.21-6.54zM3.11 6.15l1.32.28-.64.75-1-.67zm6.38 7.1-.67-1 .75-.64.28 1.32zm2.39-5.11.18.17zm-.28-.28L7.92 11 5 8.08 8.14 4.4a7.44 7.44 0 0 1 5.26-1.8 7.48 7.48 0 0 1-1.8 5.26z" />
                        <path d="M11.13 6.63a1.19 1.19 0 0 0-.06-1.7 1.16 1.16 0 1 0-1.64 1.63 1.2 1.2 0 0 0 1.7.07z" />
                    </svg>
                    Boost Your Productivity
                </p>
                <p>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 9H21M9 15L11 17L15 13M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>Effective Task Management
                </p>
                <p>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 18H9M14 6H10M20 3H19M19 3H5M19 3C19 5.51022 17.7877 7.86592 15.7451 9.32495L12 12M5 3H4M5 3C5 5.51022 6.21228 7.86592 8.25493 9.32495L12 12M20 21H19M19 21H5M19 21C19 18.4898 17.7877 16.1341 15.7451 14.675L12 12M5 21H4M5 21C5 18.4898 6.21228 16.1341 8.25493 14.675L12 12"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>Time is Money
                </p>
                <p>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5766 8.70419C11.2099 7.56806 11.5266 7 12 7C12.4734 7 12.7901 7.56806 13.4234 8.70419L13.5873 8.99812C13.7672 9.32097 13.8572 9.48239 13.9975 9.5889C14.1378 9.69541 14.3126 9.73495 14.6621 9.81402L14.9802 9.88601C16.2101 10.1643 16.825 10.3034 16.9713 10.7739C17.1176 11.2443 16.6984 11.7345 15.86 12.715L15.643 12.9686C15.4048 13.2472 15.2857 13.3865 15.2321 13.5589C15.1785 13.7312 15.1965 13.9171 15.2325 14.2888L15.2653 14.6272C15.3921 15.9353 15.4554 16.5894 15.0724 16.8801C14.6894 17.1709 14.1137 16.9058 12.9622 16.3756L12.6643 16.2384C12.337 16.0878 12.1734 16.0124 12 16.0124C11.8266 16.0124 11.663 16.0878 11.3357 16.2384L11.0378 16.3756C9.88634 16.9058 9.31059 17.1709 8.92757 16.8801C8.54456 16.5894 8.60794 15.9353 8.7347 14.6272L8.76749 14.2888C8.80351 13.9171 8.82152 13.7312 8.76793 13.5589C8.71434 13.3865 8.59521 13.2472 8.35696 12.9686L8.14005 12.715C7.30162 11.7345 6.88241 11.2443 7.02871 10.7739C7.17501 10.3034 7.78993 10.1643 9.01977 9.88601L9.33794 9.81402C9.68743 9.73495 9.86217 9.69541 10.0025 9.5889C10.1428 9.48239 10.2328 9.32097 10.4127 8.99812L10.5766 8.70419Z"
                            fill="#1C274C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 1.25C12.4142 1.25 12.75 1.58579 12.75 2V4C12.75 4.41421 12.4142 4.75 12 4.75C11.5858 4.75 11.25 4.41421 11.25 4V2C11.25 1.58579 11.5858 1.25 12 1.25ZM18.5304 5.46955C18.8233 5.76245 18.8233 6.23732 18.5304 6.53021L18.1872 6.87348C17.8943 7.16637 17.4194 7.16637 17.1265 6.87348C16.8336 6.58058 16.8336 6.10571 17.1265 5.81282L17.4698 5.46955C17.7627 5.17666 18.2376 5.17666 18.5304 5.46955ZM5.46967 5.46967C5.76256 5.17678 6.23744 5.17678 6.53033 5.46967L6.87359 5.81293C7.16648 6.10582 7.16648 6.5807 6.87359 6.87359C6.5807 7.16648 6.10582 7.16648 5.81293 6.87359L5.46967 6.53033C5.17678 6.23744 5.17678 5.76256 5.46967 5.46967ZM1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H4C4.41421 11.25 4.75 11.5858 4.75 12C4.75 12.4142 4.41421 12.75 4 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12ZM19.25 12C19.25 11.5858 19.5858 11.25 20 11.25H22C22.4142 11.25 22.75 11.5858 22.75 12C22.75 12.4142 22.4142 12.75 22 12.75H20C19.5858 12.75 19.25 12.4142 19.25 12ZM6.87348 17.1265C7.16637 17.4194 7.16637 17.8943 6.87348 18.1872L6.53043 18.5302C6.23754 18.8231 5.76266 18.8231 5.46977 18.5302C5.17688 18.2373 5.17688 17.7625 5.46977 17.4696L5.81282 17.1265C6.10571 16.8336 6.58058 16.8336 6.87348 17.1265ZM17.1265 17.1267C17.4194 16.8339 17.8943 16.8339 18.1872 17.1267L18.5302 17.4698C18.8231 17.7627 18.8231 18.2376 18.5302 18.5305C18.2373 18.8233 17.7624 18.8233 17.4695 18.5305L17.1265 18.1874C16.8336 17.8945 16.8336 17.4196 17.1265 17.1267ZM12 19.25C12.4142 19.25 12.75 19.5858 12.75 20V22C12.75 22.4142 12.4142 22.75 12 22.75C11.5858 22.75 11.25 22.4142 11.25 22V20C11.25 19.5858 11.5858 19.25 12 19.25Z"
                            fill="#1C274C" />
                    </svg>Achieve Your Goals
                </p>
            </div>
            <div class="features">
                <h1>Features</h1>
                <div class="container">
                    <div>
                        <img src="{{ asset('images/calendar.jpg') }}" alt="calendar">
                        <h1>Scheduling</h1>
                        <p>That's where we come in. Nocrastinate is your ultimate solution for mastering time
                management and conquering your to-do l</p>
                        <button>More</button>
                    </div>
                    <div>
                        <img src="{{ asset('images/todo.jpg') }}" alt="to-do">
                        <h1>To-Do</h1>
                        <p>That's where we come in. Nocrastinate is your ultimate solution for mastering time
                management and conquering your to-do l</p>
                        <button>More</button>
                    </div>
                    <div>
                        <img src="{{ asset('images/alarm-clock.jpg') }}" alt="alarm">
                        <h1>Notifications</h1>
                        <p>That's where we come in. Nocrastinate is your ultimate solution for mastering time
                management and conquering your to-do l</p>
                        <button>More</button>
                    </div>
                    <div>
                        <img src="{{ asset('images/files.jpg') }}" alt="calendar">
                        <h1>File Inventory</h1>
                        <p>That's where we come in. Nocrastinate is your ultimate solution for mastering time
                management and conquering your to-do l</p>
                        <button>More</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>