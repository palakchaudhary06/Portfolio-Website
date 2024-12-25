<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="script.js"></script>
</head>

<body>
    <?php
// Include database connection
include('connection.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize inputs
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);

    // Insert data into the database
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

    <div class="portfolio-container" id="about">
        <ul class="navlist">
            <li><a href="#about">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="left-container">
            <div class="icons">
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-github"></i>
            </div>
            <div class="content">
                <p class="intro">Hi ! I am <span>Palak Chaudhary</span></p>
                <h1>Software Developer.</h1>
                <p class="detail">I hold a Bachelor of Computer Applications (BCA) degree from Banasthali University and
                    a Master of Computer Applications (MCA) degree from Galgotias University. Currently, I am working as
                    a Software Developer at Lloyd College, where I leverage my skills and experience to contribute to
                    innovative software solutions. My background in software development and academic achievements have
                    equipped me with a strong foundation in technology and problem-solving.</p>
                <div class="btn-container">
                    <a href="#contact"><button>Hire Me</button></a>
                    <button>Download CV</button>
                </div>
            </div>
        </div>
        <div class="right-container"></div>
        <div class="design">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
    <div class="about-container" id="projects">
        <div class="overlay-1">
            <h1>My Projects</h1>
            <p class="detail">Explore a collection of my most recent work, where creativity meets functionality. Each
                project showcases my skills in [your relevant skills or technologies], from concept to execution. Dive
                into these examples to see how I tackle challenges, solve problems, and deliver high-quality results.
            </p>
            <div class="h-line"></div>

        </div>
        <div class="cards-container">
            <div class="card">
                <img src="images/project-1.png" alt="Project 1">
                <h2>Agricania</h2>
                <p>It is an E-Farming website contains everything about agriculture.</p>
                <div class="btn-container-card">
                    <button>View Project</button>
                </div>
            </div>
            <div class="card">
                <img src="images/project-1.png" alt="Project 2">
                <h2>Employee Management System</h2>
                <p>A data storage system of all the employees for Registration.</p>
                <div class="btn-container-card">
                    <button>View Project</button>
                </div>
            </div>
            <div class="card">
                <img src="images/project-1.png" alt="Project 3">
                <h2>Hostel Management System</h2>
                <p>To store, access edit and update the data of Hostel Students.</p>
                <div class="btn-container-card">
                    <button>View Project</button>
                </div>
            </div>
            <div class="card">
                <img src="images/project-1.png" alt="Project 4">
                <h2>Online Food Delivering</h2>
                <p>Online food ordering and delivering web application.</p>
                <div class="btn-container-card">
                    <button>View Project</button>
                </div>
            </div>
        </div>
        <div class="work-container" id="work">
            <div class="overlay-1">
                <h1>Work & Details</h1>
                <div class="h-line"></div>
            </div>
            <div class="card-work">
                <div class="w-card">
                    <h2>Software Developer</h2>
                    <p>Lloyd Group of Institutions</p>
                    <p>Oct 2023 - Currently working</p>
                    <p>Software Developer with 1 year of experience in designing, developing and implementing robust
                        software solutions.</p>
                    <p>My exppertise spans across Full Stack Development, Back-end Development, Front-end Development
                        and UI/UX Design.</p>
                </div>
                <div class="w-card">
                    <!-- <h2>Job Title 2</h2>
                    <p>Company Name</p>
                    <p>Duration</p> -->
                    <p><strong>1. </strong>Developed and Implemented Live Projects provided comprehensive solutions by handling backend,
                        frontend, and database management across projects, ensuring end-to-end functionality.</p>
                    <p><strong>2. </strong>Experience includes working on ERP and CRM systems, optimizing internal operations and user
                        experience.</p>
                    <p><strong>3. </strong>Implemented MVC Framework and all CRUDE ooperations, Store and destroy Sessions, SQL queries,
                        etc.</p>
                    <p><strong>4. </strong>Proficient in Java, C, C++, Javascript, CSS, HTML, PHP, Codeigniter, Python, MySQL, Flutter and
                        Figma.</p>
                </div>
                <div class="w-card">
                    <!-- <h2>Job Title 3</h2>
                    <p>Company Name</p>
                    <p>Duration</p> -->
                    <p><strong>1. </strong>Optimize applications for speed and efficiency, resulting in reduced response times and improved
                        overall system performance.</p>
                    <p><strong>2. </strong>Responsible for designing the look and feel for the updated website which increased the traffic
                        by 40%, page views by 60% and average session time by 90%.</p>
                </div>
                <!-- <div class="w-card">
                    <h2>Job Title 4</h2>
                    <p>Company Name</p>
                    <p>Duration</p>
                    <p>Description of the job role and responsibilities.</p>
                </div> -->
            </div>
        </div>

    </div>
    <div class="service-container" id="service">
        <div class="overlay-1">
            <h1>Services</h1>
            <p class="detail">I offer a range of services designed to meet diverse technological needs. My expertise
                includes developing robust and scalable software solutions, crafting intuitive web and mobile
                applications, and optimizing existing systems for enhanced performance. I specialize in leveraging
                modern programming languages and frameworks to deliver high-quality, user-centric solutions.
            </p>
            <div class="h-line"></div>
        </div>
        <div class="service-grid">
            <div class="service-card">
                <img src="images/service-1.jpg" alt="service 1">
                <div class="shutter">
                    <div class="shutter-text">Software Developer/Full stack Developer</div>
                </div>
            </div>
            <div class="service-card">
                <img src="images/service-2.jpg" alt="service 2">
                <div class="shutter">
                    <div class="shutter-text">Back-end Developer/Database Management</div>
                </div>
            </div>
            <div class="service-card">
                <img src="images/service-3.jpg" alt="service 3">
                <div class="shutter">
                    <div class="shutter-text">Front-end Developer</div>
                </div>
            </div>
            <div class="service-card">
                <img src="images/service-4.jpg" alt="service 4">
                <div class="shutter">
                    <div class="shutter-text">Java full stack Developer</div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-container" id="contact">
        <div class="overlay-1">
            <h1>Contact Me</h1>
            <div class="h-line"></div>
            <div class="form-container">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder=" " required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder=" " required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <textarea type="textarea" name="message" id="message" placeholder=" " required></textarea>
                        <label for="textarea">Message</label>
                    </div>
                    <button class="btn-sub" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>