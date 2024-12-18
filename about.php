<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Page for JRCNJ Team.">
    <title>About JRCNJ</title>
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
        font-weight: 500;
    }

    section {
        padding: 80px 0;
    }

    section#about {
        background: linear-gradient(135deg, #00bcd4, #121212);
        color: #fff;
    }

    .team-member {
        background-color: #1e1e1e;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        margin-bottom: 30px;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: scale(1.05);
    }

    .team-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .team-member h3 {
        font-size: 1.8rem;
        font-weight: 60;
    }

    .team-member p {
        font-size: 1.2rem;
        color: #ccc;
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
    </style>
</head>

<body>

    <header>
        <div class="container">
            <h1>About JRCNJ Team</h1>
            <p class="lead">Meet our talented team members</p>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row">
                <!-- Programmer Section -->
                <div class="col-12 mb-4">
                    <div class="team-member text-center">
                        <img src="images/1.jpg" alt="Programmer">
                        <h3>Ypilan Carl</h3>
                        <p><strong>Role:</strong> Programmer</p>
                        <p>Carl specializes in full-stack web development, with a focus on backend technologies.</p>
                    </div>
                </div>
                <!-- Leader Section -->
                <div class="col-12 mb-4">
                    <div class="team-member text-center">
                        <img src="images/2.jpg" alt="Leader">
                        <h3>Justin Villaflor</h3>
                        <p><strong>Role:</strong> Team Leader</p>
                        <p>Justin leads the team with a vision for growth and success, ensuring smooth project
                            execution.
                        </p>
                    </div>
                </div>
                <!-- Designer Section -->
                <div class="col-12 mb-4">
                    <div class="team-member text-center">
                        <img src="images/3.jpg" alt="Designer">
                        <h3>Odang Judelyn</h3>
                        <p><strong>Role:</strong> Designer</p>
                        <p>Judelyn is responsible for the creative design and user experience, crafting visually
                            stunning interfaces.</p>
                    </div>
                </div>
                <!-- Researcher Section (Updated to Data Analyst) -->
                <div class="col-12 mb-4">
                    <div class="team-member text-center">
                        <img src="images/4.jpg" alt="Data Analyst">
                        <h3>Perdido Roderick</h3>
                        <p><strong>Role:</strong> Researcher</p>
                        <p>Roderick specializes in analyzing data to drive business decisions, ensuring data-driven
                            strategies are implemented effectively.</p>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="team-member text-center">
                        <img src="images/5.jpg" alt="Data Analyst">
                        <h3>Olama Noralin</h3>
                        <p><strong>Role:</strong> Researcher</p>
                        <p>Noralin specializes in analyzing data to drive business decisions, ensuring data-driven
                            strategies are implemented effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button onclick="window.history.back()" class="btn btn-secondary">Go Back</button>

    <footer>
        <p>&copy; 2024 JRCNJ Team. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>