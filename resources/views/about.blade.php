@extends('layout')

@section('content')
    <style>
        #about-section {
            padding: 20px;
            background-color: #000000;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #about-section h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        #about-section h3 {
            font-size: 1.5rem;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        #about-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        #about-section ul {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-left: 20px;
        }

        #about-section ul li {
            margin-bottom: 5px;
        }
    </style>

    <div id="about-section">
        <h2>BASKETBALL PLAYER DRAFT</h2>
        <p>Welcome to the premier destination for all things basketball! Whether you're a seasoned player, a passionate fan, or someone just getting started with the sport, our community is here to support and inspire you.</p>

        <h3>Our Mission</h3>
        <p>Our mission is to celebrate and promote the sport of basketball at every level. We strive to provide comprehensive resources, engaging content, and a platform for enthusiasts to connect and share their love for the game.</p>

        <h3>Player Profiles</h3>
        <ul>
            <li><strong>Detailed Stats</strong>: Comprehensive statistics for each player, including points, rebounds, assists, and more.</li>
            <li><strong>Biographies</strong>: Background information and career highlights of players.</li>
            <li><strong>Search Functionality</strong>: Allows users to quickly find specific players or information.</li>
            <li><strong>Responsive Design</strong>: Ensures the platform is accessible on various devices, including desktops, tablets, and smartphones.</li>
            <li><strong>Secure Access</strong>: Protects sensitive information with secure user authentication.</li>
        </ul>

        <h3>Technological Stack</h3>
        <p>This project is built using modern web development technologies to ensure a robust and scalable application:</p>
        <ul>
            <li><strong>Front-End</strong>: HTML5, CSS3, JavaScript, and Bootstrap for responsive design.</li>
            <li><strong>Back-End</strong>: Laravel framework for server-side logic and database management.</li>
            <li><strong>Database</strong>: MySQL for storing player profiles and related data.</li>
            <li><strong>Version Control</strong>: Git for source code management and collaboration.</li>
        </ul>

        <h3>Future Enhancements</h3>
        <p>We plan to introduce additional features in the future, including:</p>
        <ul>
            <li><strong>Interactive Maps</strong>: Display the geographical locations of basketball games and events.</li>
            <li><strong>Event Management</strong>: Announce and manage basketball games, tournaments, and events.</li>
            <li><strong>Fan Feedback System</strong>: Enable fans to provide feedback and suggestions for their favorite players and teams.</li>
        </ul>
    </div>
@endsection
