  @extends('index')
  @push('style')
  <title>ＤＩＰ</title>
  @endpush
  
  @section('main-content')
  <!-- Hero Section -->
  <header class="hero">
    <div class="hero-image">
    <img 
      src="assets\images\home.png" 
      alt="Profile Photo" 
      class="profile-photo"
    />
    </div>
    
    <h1 id="animated-text">DIP SARKER</h1>
    <p class="tagline"> CSE Student • Software Developer • Tech Enthusiast</p>
    <div class="btn-sci">
      <a
        href="https://drive.google.com/file/d/1TpLjBllEDzLKQLBidjpwkzop3wHa2-gh/view?usp=sharing"
        class="btn"
        >Download CV</a>
      <div class="sci">
        <a
          href="https://www.linkedin.com/in/dip-sarker-3ba1b9321/"
          target="_blank"
          ><i class="bx bxl-linkedin"></i
        ></a>
        <a href="https://github.com/DIP-SARKER" target="_blank"
          ><i class="bx bxl-github"></i
        ></a>
        <a href="https://x.com/NiloyDs" target="_blank"
          ><i class="bx bxl-twitter"></i
        ></a>
        <a href="https://www.facebook.com/ds.niloy.872767" target="_blank"
          ><i class="bx bxl-facebook"></i
        ></a>
      </div>
    </div>
  </header>

  <main class="content">
  <section id="about" class="about sectionpart">
  <h2>About Me</h2>
  <p>
    I'm a passionate web developer focused on creating beautiful and functional user experiences.
    With over 5 years in the industry, I specialize in front-end development and UI/UX design.
    When I'm not coding, I enjoy hiking and photography.
  </p>

  <h3>Education</h3>
  <ul>
    <li>Bachelor of Science in Computer Science – University of Technology, 2015-2019</li>
    <li>Certified Front-End Developer – Code Academy, 2020</li>
  </ul>

  <h3>Hobbies</h3>
  <p>
    Outside of work, I love exploring nature through hiking, capturing moments with photography, and experimenting with new web technologies.
  </p>
</section>


<section id="skills" class="skills sectionpart">
  <h2>Skills</h2>

  <h3>Technical Skills</h3>
  <ul>
    <li>
      <strong>HTML5 & CSS3:</strong> Expert in creating semantic, accessible, and responsive web layouts.
    </li>
    <li>
      <strong>JavaScript (ES6+):</strong> Proficient in modern JavaScript features and asynchronous programming.
    </li>
    <li>
      <strong>React & Vue.js:</strong> Experienced in building dynamic single-page applications using component-based frameworks.
    </li>
    <li>
      <strong>UI/UX Design:</strong> Skilled in wireframing, prototyping, and creating user-centric interfaces.
    </li>
    <li>
      <strong>Version Control (Git):</strong> Comfortable managing code repositories and collaboration workflows using Git and GitHub.
    </li>
    <li>
      <strong>Responsive Web Design:</strong> Ensures websites work flawlessly across all devices and screen sizes.
    </li>
  </ul>

  <h3>Soft Skills</h3>
  <ul>
    <li><strong>Communication:</strong> Clear and effective communicator, able to explain complex technical concepts to non-technical stakeholders.</li>
    <li><strong>Problem Solving:</strong> Analytical thinker who enjoys tackling challenging bugs and finding efficient solutions.</li>
    <li><strong>Teamwork:</strong> Collaborative team player who contributes positively to group projects and agile workflows.</li>
    <li><strong>Adaptability:</strong> Quick to learn new technologies and adjust to changing project requirements.</li>
    <li><strong>Time Management:</strong> Skilled at prioritizing tasks and meeting deadlines in fast-paced environments.</li>
  </ul>
</section>


<section id="projects" class="projects sectionpart">
  <h2>Projects</h2>

  <div class="project">
    <h3>Portfolio Website</h3>
    <img src="https://s3-ap-south-1.amazonaws.com/static.awfis.com/wp-content/uploads/2017/07/07184649/ProjectManagement.jpg" alt="Portfolio Website Screenshot" />
    <p>
      A personal portfolio website showcasing my projects, skills, and experience. Built with modern web technologies to ensure responsiveness and fast performance.
    </p>
    <p>
      <strong>Technologies Used:</strong> HTML5, CSS3, JavaScript, React
    </p>
    <p>
      <a href="https://github.com/username/portfolio-website" target="_blank" rel="noopener noreferrer">GitHub Repository</a>
    </p>
  </div>
</section>


  <section id="contact" class="contact sectionpart">
  <div class="contact-info">
    <h2>Contact Information</h2>
    <p>Email: <a href="mailto:sarker15-5274@diu.edu.bd">sarker15-5274@diu.edu.bd</a></p>
    <p>LinkedIn: <a href="https://linkedin.com/in/demo-profile" target="_blank" rel="noopener noreferrer">linkedin.com/in/demo-profile</a></p>
    <p>Phone: (+880) 1863540808</p>
  </div>

  <div class="contact-form">
    <h2>Let's Connect</h2>
    <form action="#" method="post">
      <label for="name">Name:</label><br />
      <input type="text" id="name" name="name" required /><br /><br />

      <label for="email">Email:</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="message">Message:</label><br />
      <textarea id="message" name="message" rows="5" required></textarea><br /><br />

      <button type="submit">Send Message</button>
    </form>
  </div>
</section>


</main>

  @endsection