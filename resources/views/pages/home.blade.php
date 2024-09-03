<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        /* Reset some default browser styles */
body, h1, h2, h3, p, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    max-width: 1200px;
}

header {
    background: #333;
    color: #fff;
    padding: 1em 0;
}

header h1 {
    margin: 0;
    font-size: 2em;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: flex-end;
}

nav ul li {
    margin-left: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.hero {
    background: #3498db;
    color: #fff;
    padding: 2em 0;
    text-align: center;
}

.hero h2 {
    margin-bottom: 0.5em;
}

.cta-button {
    display: inline-block;
    background: #fff;
    color: #3498db;
    padding: 0.7em 1.5em;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}

.content {
    padding: 2em 0;
}

.content article {
    background: #fff;
    padding: 1.5em;
    margin-bottom: 1em;
    border-radius: 5px;
}

footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

footer p {
    margin: 0;
}

    </style>
</head>
<body>
    <header>
        <h1>Laravel!</h1>
        Home | <a href="{{url('/profile')}}">Profile</a>
    </header>
    <main>
        <section class="hero">
            <h2>Welcome to My Website</h2>
            <p>Your journey to excellence starts here.</p>
            <a href="#" class="cta-button">Learn More</a>
        </section>
        <section class="content">
            <div class="container">
                <article>
                    <h3>Latest News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut eros eu metus ultricies interdum.</p>
                </article>
                <article>
                    <h3>Upcoming Events</h3>
                    <p>Vestibulum at ligula sit amet libero convallis auctor. Sed euismod turpis eu lectus dictum, ac venenatis lorem efficitur.</p>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>