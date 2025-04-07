<?php
if (isset($_GET['download']) && $_GET['download'] === 'resume') {
    $file = 'resume.pdf'; // Make sure this file is in the same folder

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Content-Length: ' . filesize($file));
        flush();
        readfile($file);
        exit;
    } else {
        echo "Sorry, the file was not found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Raman Dangol | Portfolio</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f9;
      color: #333;
    }
    header {
      background: linear-gradient(45deg, #0088ff, #00c6ff);
      padding: 30px 20px;
      color: white;
      text-align: center;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid white;
      margin-top: 20px;
      object-fit: cover;
    }
    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }
    h2 {
      border-bottom: 2px solid #00bfff;
      padding-bottom: 5px;
      margin-top: 40px;
    }
    .section {
      margin-bottom: 30px;
    }
    .btn {
      background: #00bfff;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 25px;
      display: inline-block;
      margin-top: 15px;
      transition: 0.3s ease;
    }
    .btn:hover {
      background: #007acc;
    }
    footer {
      background: #111;
      color: #ccc;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
    footer a {
      color: #00ffff;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <h1>Raman Dangol</h1>
    <p>Web Developer | Frontend & Backend Enthusiast</p>
    <img src="your-profile-image.jpg" alt="Raman Dangol" class="profile-img"/>
    <br/>
    <a class="btn" href="?download=resume">📄 Download Resume</a>
  </header>

  <div class="container">
    <div class="section">
      <h2>Profile</h2>
      <p>Frontend Developer with experience in creating dynamic user interfaces. Revamped a site layout and boosted engagement by 30%. Currently pursuing a frontend developer role. Skilled in HTML, CSS, JS, PHP, and more. Always passionate about coding and new AI innovations.</p>
    </div>

    <div class="section">
      <h2>Work Experience</h2>
      <p><strong>Frontend Developer at MMSS</strong> (05/2024 – 11/2023, Hetauda, Nepal)<br/>
        6 months OJT on a News Portal Website project. Learned HTML, CSS, JS, PHP, and SQL.
      </p>
    </div>

    <div class="section">
      <h2>Skills</h2>
      <ul>
        <li>JavaScript – Full</li>
        <li>PHP – Limited</li>
        <li>HTML, CSS – Advanced</li>
        <li>SQL – Intermediate</li>
      </ul>
    </div>

    <div class="section">
      <h2>Education</h2>
      <p><strong>Computer Engineering (05/2020 – 05/2024)</strong><br/>
        Mahendra Maheshdev Secondary School, Nuwakot – GPA: 3.52
      </p>
      <p><strong>Bachelor of Information Technology (12/2024 – present)</strong><br/>
        Texas College of Management and IT, Kathmandu
      </p>
    </div>

    <div class="section">
      <h2>Contact</h2>
      <p>📍 Bhatathok, Nuwakot 44900, Nepal<br/>
         📞 9763774451<br/>
         📧 <a href="mailto:dangolraman843@gmail.com">dangolraman843@gmail.com</a><br/>
         🌐 <a href="https://globalgkwww.blogspot.com/" target="_blank">globalgkwww.blogspot.com</a></p>
    </div>
  </div>

  <footer>
    <p>Powered by <a href="https://raman1224.github.io/DANGOL_AI/" target="_blank">DANGOL AI</a></p>
  </footer>

  <script>
    console.log("Welcome to Raman Dangol's AI-powered Portfolio!");
  </script>

</body>
</html>
