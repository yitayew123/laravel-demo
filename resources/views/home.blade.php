<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            margin: 10px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #4CAF50;
        }
        .container {
            padding: 20px;
        }
        .services {
            display: flex;
            gap: 20px;
        }
        .service {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Welcome to My Website {{$name}}</h1>
        <p>Your one-stop solution for all services</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <section id="home">
            <h2>About Us</h2>
            <p>We offer a range of services to help you achieve the results you're after. Not sure what you need, or what it costs? We can explain what services are right for you and tell you more about our fees.</p>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <div class="services">
                <div class="service">
                    <h3>Web Development</h3>
                    <p>High-quality web development to boost your online presence.</p>
                </div>
                <div class="service">
                    <h3>SEO Optimization</h3>
                    <p>Optimize your website to rank higher on search engines.</p>
                </div>
                <div class="service">
                    <h3>Consulting</h3>
                    <p>Professional advice to help your business grow.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

</body>
</html>
