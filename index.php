<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal Portfolio of Your Name.">
    <title>JRCNJ</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom CSS */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #121212;
        color: #ffffff;
    }

    header {
        background-color: #1c1c1c;
        color: #ffffff;
        padding: 80px 0;
        text-align: center;
        animation: fadeIn 3s ease-in-out;
    }

    header h1 {
        font-size: 3.5rem;
        font-weight: 700;
    }

    .navbar {
        background-color: #00bcd4;
    }

    .navbar-nav .nav-link {
        color: #fff;
        padding: 15px 25px;
        font-size: 1.2rem;
    }

    .navbar-nav .nav-link:hover {
        background-color: #006064;
    }

    section {
        padding: 80px 0;
    }

    section#about {
        background: linear-gradient(135deg, #00bcd4, #121212);
        color: #fff;
    }

    section#skills {
        background-color: #1e1e1e;
    }

    section#projects {
        background-color: #2d2d2d;
    }

    .project-card {
        transition: transform 0.3s ease;
    }

    .project-card:hover {
        transform: scale(1.05);
    }

    .skills-item {
        background-color: #00796b;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        margin: 10px;
        animation: pulse 1.5s infinite ease-in-out;
    }

    .skills-item:hover {
        background-color: #004d40;
    }

    footer {
        background-color: #121212;
        text-align: center;
        padding: 20px;
        color: #ddd;
    }

    /* Animation Keyframes */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <img src="images/logo.png" class="img-fluid mb-3" alt="JRCNJ Logo" style="width: 80px; height: auto;">

            <h1>JRCNJ</h1>
            <p class="lead">Innovative Web Solutions | Developer | Designer</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about">
        <div class="container text-center">
            <h2>About Me</h2>
            <p class="lead">I'm a passionate web developer with a deep interest in creating seamless digital
                experiences. My goal is to build powerful web applications that solve real-world problems.</p>
        </div>
    </section>

    <section id="skills">
        <div class="container text-center">
            <h2>Skills</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="skills-item">PHP</div>
                <div class="skills-item">HTML</div>
                <div class="skills-item">CSS</div>
                <div class="skills-item">JavaScript</div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container text-center">
            <h2>Projects</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card project-card">
                        <img src="images/pic1.jpg" class="card-img-top" alt="Payrates">
                        <div class="card-body">
                            <h5 class="card-title">Payrates</h5>
                            <p class="card-text">Employee management, attendance, and payroll system.</p>
                            <a href="#" class="btn btn-primary">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card project-card">
                        <img src="images/pic2.jpg" class="card-img-top" alt="Big Brew POS">
                        <div class="card-body">
                            <h5 class="card-title">Big Brew Point Of Sale</h5>
                            <p class="card-text">A full-stack application using Express and MongoDB.</p>
                            <a href="#" class="btn btn-primary">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card project-card">
                        <img src="images/logo2.png" class="card-img-top" alt="RGM MPH">
                        <div class="card-body">
                            <h5 class="card-title">RGM MPH</h5>
                            <p class="card-text">Responsive website designed using HTML, CSS, and JavaScript.</p>
                            <a href="#" class="btn btn-primary">View on GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container text-center">
            <h2>Contact</h2>
            <p class="lead">Get in touch if you'd like to collaborate or just have a chat!</p>
            <p>Email: <a href="ypilancarl@immaculada.edu.ph"
                    class="text-decoration-none">ypilancarl@immaculada.edu.ph</a></p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/JRCNJ/" target="_blank"
                    class="text-decoration-none">linkedin.com/in/JRCNJ</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 JRCNJ. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>