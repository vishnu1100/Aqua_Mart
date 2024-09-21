<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            scroll-behavior: smooth; /* Smooth scrolling */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
       
        .logo {
            color: white;
            font-size: 1.5rem;
        }

        .navbar ul {
            display: flex;
            list-style-type: none;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .bar {
            height: 3px;
            width: 25px;
            background-color: white;
            margin: 4px 0;
        }

        section {
            padding: 100px 20px;
            min-height: 100vh;
        }

        /* Media Queries */
        @media screen and (max-width: 768px) {
            .navbar ul {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 60px; /* Adjust based on header height */
                left: 0;
                background-color: #333;
            }

            .navbar ul.active {
                display: flex;
            }

            .menu-toggle {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">My Logo</div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact"  >Contact</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>

    <!-- Sections for the single page -->
   

    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navbar = document.querySelector('.navbar ul');

        mobileMenu.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>
