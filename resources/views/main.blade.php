  @extends('index')
  @push('style')
      <title>ＤＩＰ</title>
  @endpush

  @section('main-content')
      {{-- Preloader --}}
      <div class="preloader-container" id="preloader">
          <div class="progress-container">
              <div class="progress-bar" id="progressBar"></div>
          </div>

          <div class="loading-text" id="loadingText">
              Compiling portfolio components...
          </div>

          <div class="loader-info">
              <div class="info-item">
                  <span class="info-icon">⚡</span>
                  <span>Optimizing assets</span>
              </div>
              <div class="info-item">
                  <span class="info-icon">🧠</span>
                  <span>Processing algorithms</span>
              </div>
              <div class="info-item">
                  <span class="info-icon">🚀</span>
                  <span>Launching soon</span>
              </div>
          </div>
      </div>
      {{-- Main-Content --}}
      <div class="web-content">
          <!-- Hero Section -->
          <section class="hero" id="home">
              <div class="floating"></div>
              <div class="floating"></div>
              <div class="floating"></div>
              <div class="floating"></div>
              <div class="container">
                  <div class="hero-container fade-in">
                      <div class="hero-content">
                          <div class="hero-image">
                              <img src="{{ asset('assets/images/home.png') }}" alt="DIP SARKER"
                                  class="profile-photo mouse-follower" />
                          </div>
                          <div class="hero-text">
                              <h1>DIP <span>SARKER</span></h1>
                              <p class="tagline">
                                  CSE Student •
                                  <span class="highlight">Software Developer</span> • Tech
                                  Enthusiast
                              </p>
                          </div>
                          <div class="hero-btns">
                              <a href="#contact" class="btn-outline fill-effect">Get In Touch</a>
                              <div class="social-btn">
                                  <a class="sbtn fill-effect" href="https://www.linkedin.com/in/dip-sarker-3ba1b9321/"
                                      target="_blank">
                                      <i class="fab fa-linkedin-in"></i>
                                  </a>
                                  <a class="sbtn fill-effect" href="https://github.com/DIP-SARKER" target="_blank">
                                      <i class="fab fa-github"></i>
                                  </a>
                                  <a class="sbtn fill-effect" href="https://x.com/NiloyDs" target="_blank">
                                      <i class="fab fa-twitter"></i>
                                  </a>
                                  <a class="sbtn fill-effect" href="https://www.facebook.com/dipsarkerniloy/"
                                      target="_blank">
                                      <i class="fab fa-facebook-f"></i>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="terminal-container">
                          <div class="terminal-content">
                              <div class="terminal">
                                  <div class="terminal-header">
                                      <div class="dot red"></div>
                                      <div class="dot yellow"></div>
                                      <div class="dot green"></div>
                                      portfolio.js
                                  </div>
                                  <div class="code" id="terminalOutput">
                                  </div>
                              </div>

                              <div class="t-buttons">
                                  <button class="btn-outline fill-effect" id="toggleBtn">
                                      Pause
                                  </button>
                                  <button class="btn-outline fill-effect" id="restartBtn">
                                      Restart
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- About Section -->
          <section class="about" id="about">
              <div class="container">
                  <div class="section-title fade-in">
                      <h2>Origin Story</h2>
                  </div>
                  <div class="about-content">
                      <div class="about-text fade-in">
                          <h3>Hello! I'm DIP SARKER</h3>
                          <p>
                              A dedicated full-stack developer, UI/UX designer, and
                              final-year CSE student with a deep passion for building meaningful digital
                              solutions. My journey began with curiosity in programming and has grown
                              through hands-on projects, academic research, and freelance
                              collaborations.
                          </p>
                          <p>
                              I specialize in developing responsive, accessible, and
                              performance-optimized web and mobile applications using modern frameworks
                              like React, Flutter, and Laravel. My design philosophy is rooted in clean
                              aesthetics, intuitive interactions, and user-centric problem solving.
                          </p>
                          <p>
                              Beyond development, I’m deeply involved in AI, automation, and IoT-based
                              systems — always exploring how technology can improve everyday life. When
                              I’m not coding, I enjoy reading design theory, experimenting with new
                              tools, or sharing insights with the tech community.
                          </p>
                          <div class="about-stats">
                              <div class="stat-item fade-in">
                                  <i class="fas fa-code"></i>
                                  <h4>250k+</h4>
                                  <p>Lines of Code</p>
                              </div>
                              <div class="stat-item fade-in">
                                  <i class="fas fa-project-diagram"></i>
                                  <h4>85+</h4>
                                  <p>Projects Completed</p>
                              </div>
                              <div class="stat-item fade-in">
                                  <i class="fas fa-users"></i>
                                  <h4>42+</h4>
                                  <p>Happy Clients</p>
                              </div>
                              <div class="stat-item fade-in">
                                  <i class="fas fa-award"></i>
                                  <h4>12</h4>
                                  <p>Awards Won</p>
                              </div>
                          </div>
                      </div>
                      <div class="about-image fade-in mouse-follower">
                          <img src="{{ asset('assets/images/about_me.png') }}" alt="DIP SARKER" />
                      </div>
                  </div>
              </div>
          </section>

          <!-- Education Section -->
          <section class="education" id="education">
              <div class="container">
                  <div class="section-title fade-in">
                      <h2>Education</h2>
                  </div>
                  <div class="education-content fade-in">
                      <p>
                          My professional journey includes working with innovative startups
                          and established tech companies, where I've contributed to diverse
                          projects and honed my skills.
                      </p>

                      <div class="timeline">
                          <div class="timeline-item">
                              <div class="timeline-content mouse-follower">
                                  <span class="timeline-date">2022 - Present</span>
                                  <h3>BSc Computer Science & Engineering</h3>
                                  <div class="timeline-details">
                                      <h4>Daffodil International University</h4>
                                      <p>
                                          Leading frontend development for enterprise SaaS products,
                                          implementing design systems, and mentoring junior
                                          developers.
                                      </p>
                                  </div>
                              </div>
                          </div>

                          <div class="timeline-item">
                              <div class="timeline-content mouse-follower">
                                  <span class="timeline-date">2017 - 2020</span>
                                  <h3>Higher Secondary School Certificate</h3>
                                  <div class="timeline-details">
                                      <h4>Bilchalan Shahid Shamsuzzoha Govt. College</h4>
                                      <p>
                                          Developed full-stack applications using React, Node.js,
                                          and MongoDB. Collaborated on UI/UX design and implemented
                                          REST APIs.
                                      </p>
                                  </div>
                              </div>
                          </div>

                          <div class="timeline-item">
                              <div class="timeline-content mouse-follower">
                                  <span class="timeline-date">2016 - 2017</span>
                                  <h3>Secondary School Certificate</h3>
                                  <div class="timeline-details">
                                      <h4>Momena Ali Biggan School</h4>
                                      <p>
                                          Designed and implemented responsive websites and web
                                          applications for diverse clients across multiple
                                          industries.
                                      </p>
                                  </div>
                              </div>
                          </div>

                          <div class="timeline-item">
                              <div class="timeline-content mouse-follower">
                                  <span class="timeline-date">2014</span>
                                  <h3>Junior School Certificate</h3>
                                  <div class="timeline-details">
                                      <h4>Momena Ali Biggan School</h4>
                                      <p>
                                          Built and maintained client websites using HTML, CSS,
                                          JavaScript and WordPress. Assisted in UX research and
                                          design implementation.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="https://drive.google.com/file/d/1TpLjBllEDzLKQLBidjpwkzop3wHa2-gh/view?usp=sharing"
                          class="btn-outline fill-effect long-button"><i class="fas fa-download"></i> Download Resume</a>
                  </div>
              </div>
          </section>

          <!-- Skills Section -->
          <section class="skills" id="skills">
              <div class="container">
                  <div class="section-title fade-in">
                      <h2>My Skills</h2>
                  </div>

                  <div class="tabs fade-in" id="skillsTabs">
                      <button class="tab-btn active" data-tab="soft">Soft Skills</button>
                      <button class="tab-btn" data-tab="technical">
                          Technical Skills
                      </button>
                      <button class="tab-btn" data-tab="tools">
                          Tools & Technologies
                      </button>
                  </div>


                  <div class="skills-container active" id="soft-skills">
                      <div class="skills-grid">
                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-comments"></i>
                              </div>
                              <h3 class="skill-title">Communication</h3>
                              <p class="skill-desc">
                                  Articulating complex ideas clearly to both technical and
                                  non-technical audiences through presentations and
                                  documentation.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-users"></i>
                              </div>
                              <h3 class="skill-title">Team Collaboration</h3>
                              <p class="skill-desc">
                                  Working effectively in diverse teams, facilitating
                                  productive discussions, and building consensus across
                                  disciplines.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-lightbulb"></i>
                              </div>
                              <h3 class="skill-title">Problem Solving</h3>
                              <p class="skill-desc">
                                  Analytical approach to breaking down complex challenges and
                                  developing innovative, practical solutions.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-tasks"></i>
                              </div>
                              <h3 class="skill-title">Project Management</h3>
                              <p class="skill-desc">
                                  Planning, executing, and delivering projects on time while
                                  managing resources and stakeholder expectations.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-sync-alt"></i>
                              </div>
                              <h3 class="skill-title">Adaptability</h3>
                              <p class="skill-desc">
                                  Quickly adjusting to changing requirements, technologies,
                                  and priorities in fast-paced environments.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-chart-line"></i>
                              </div>
                              <h3 class="skill-title">Strategic Thinking</h3>
                              <p class="skill-desc">
                                  Aligning daily work with long-term goals and anticipating
                                  future challenges and opportunities.
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="skills-container" id="technical-skills">
                      <div class="skills-grid">
                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fab fa-js"></i>
                              </div>
                              <h3 class="skill-title">JavaScript</h3>
                              <p class="skill-desc">
                                  Advanced ES6+ features, functional programming, and modern
                                  frameworks like React and Vue.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fab fa-python"></i>
                              </div>
                              <h3 class="skill-title">Python</h3>
                              <p class="skill-desc">
                                  Data analysis with Pandas, web development with
                                  Django/Flask, and automation scripting.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-database"></i>
                              </div>
                              <h3 class="skill-title">Database Systems</h3>
                              <p class="skill-desc">
                                  SQL, NoSQL (MongoDB), database design, optimization, and
                                  administration.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fab fa-react"></i>
                              </div>
                              <h3 class="skill-title">React.js</h3>
                              <p class="skill-desc">
                                  Building responsive UIs with hooks, context API, Redux, and
                                  Next.js for SSR applications.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-cloud"></i>
                              </div>
                              <h3 class="skill-title">Cloud Services</h3>
                              <p class="skill-desc">
                                  AWS (EC2, S3, Lambda), Azure, and Google Cloud Platform
                                  deployment and management.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-mobile-alt"></i>
                              </div>
                              <h3 class="skill-title">Responsive Design</h3>
                              <p class="skill-desc">
                                  Creating mobile-first, accessible web applications with
                                  modern CSS frameworks.
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="skills-container" id="tools-skills">
                      <div class="skills-grid">
                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fab fa-git-alt"></i>
                              </div>
                              <h3 class="skill-title">Git & GitHub</h3>
                              <p class="skill-desc">
                                  Version control, branching strategies, and collaborative
                                  workflows.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-terminal"></i>
                              </div>
                              <h3 class="skill-title">CLI Tools</h3>
                              <p class="skill-desc">
                                  Bash/Zsh scripting, package managers, and development
                                  toolchains.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-tasks"></i>
                              </div>
                              <h3 class="skill-title">Jira & Trello</h3>
                              <p class="skill-desc">
                                  Agile project management, sprint planning, and workflow
                                  automation.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-paint-brush"></i>
                              </div>
                              <h3 class="skill-title">Figma & Adobe XD</h3>
                              <p class="skill-desc">
                                  UI/UX design, prototyping, and developer handoff processes.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-vial"></i>
                              </div>
                              <h3 class="skill-title">Testing Frameworks</h3>
                              <p class="skill-desc">
                                  Jest, Cypress, Pytest for unit, integration, and end-to-end
                                  testing.
                              </p>
                          </div>

                          <div class="skill-card">
                              <div class="skill-icon">
                                  <i class="fas fa-server"></i>
                              </div>
                              <h3 class="skill-title">Docker & Kubernetes</h3>
                              <p class="skill-desc">
                                  Containerization, orchestration, and deployment automation.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Projects Section -->
          <section class="projects" id="projects">
              <div class="section-title fade-in">
                  <h2>Featured Projects</h2>
              </div>
              <div class="carousel-container fade-in">
                  <div class="projects-container" id="projectsContainer">
                      <!-- Project 1 -->
                      <div class="project-card">
                          <div class="project-image">
                              <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                  alt="Finance Dashboard" />
                          </div>
                          <div class="project-content">
                              <div class="project-tags">
                                  <span class="project-tag">React</span>
                                  <span class="project-tag">Node.js</span>
                                  <span class="project-tag">D3.js</span>
                              </div>
                              <h3>Financial Analytics Dashboard</h3>
                              <p>
                                  A comprehensive dashboard for financial data visualization
                                  with real-time updates and predictive analytics capabilities.
                              </p>
                              <div class="project-links">
                                  <a href="#"><i class="fas fa-external-link-alt"></i>
                                      <div class="link-title">
                                          Live Demo</div>
                                  </a>
                                  <a href="#"><i class="fab fa-github"></i>
                                      <div class="link-title">Source Code</div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <!-- Project 2 -->
                      <div class="project-card">
                          <div class="project-image">
                              <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                  alt="Eco Shopping" />
                          </div>
                          <div class="project-content">
                              <div class="project-tags">
                                  <span class="project-tag">Vue.js</span>
                                  <span class="project-tag">Firebase</span>
                                  <span class="project-tag">Stripe API</span>
                              </div>
                              <h3>Eco-Friendly E-Commerce Platform</h3>
                              <p>
                                  An online marketplace for sustainable products with carbon
                                  footprint tracking and eco-friendly shipping options.
                              </p>
                              <div class="project-links">
                                  <a href="#"><i class="fas fa-external-link-alt"></i>
                                      <div class="link-title">
                                          Live Demo</div>
                                  </a>
                                  <a href="#"><i class="fab fa-github"></i>
                                      <div class="link-title">Source Code</div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <!-- Project 3 -->
                      <div class="project-card active">
                          <div class="project-image">
                              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                  alt="Health App" />
                          </div>
                          <div class="project-content">
                              <div class="project-tags">
                                  <span class="project-tag">React Native</span>
                                  <span class="project-tag">GraphQL</span>
                                  <span class="project-tag">MongoDB</span>
                              </div>
                              <h3>Health & Wellness Tracker</h3>
                              <p>
                                  A mobile application that tracks nutrition, exercise, and
                                  mental health with personalized recommendations.
                              </p>
                              <div class="project-links">
                                  <a href="#"><i class="fas fa-external-link-alt"></i>
                                      <div class="link-title">
                                          Live Demo</div>
                                  </a>
                                  <a href="#"><i class="fab fa-github"></i>
                                      <div class="link-title">Source Code</div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <!-- Project 4 -->
                      <div class="project-card">
                          <div class="project-image">
                              <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-4.0.3&auto=format&fit=crop&w=870&q=80"
                                  alt="Smart Home Controller" />
                          </div>
                          <div class="project-content">
                              <div class="project-tags">
                                  <span class="project-tag">Flutter</span>
                                  <span class="project-tag">Firebase</span>
                                  <span class="project-tag">IoT</span>
                              </div>
                              <h3>Smart Home Automation</h3>
                              <p>
                                  A mobile app to control lights, temperature, and security
                                  systems using Flutter and Firebase Cloud Functions with
                                  real-time sync.
                              </p>
                              <div class="project-links">
                                  <a href="#"><i class="fas fa-external-link-alt"></i>
                                      <div class="link-title">
                                          Live Demo</div>
                                  </a>
                                  <a href="#"><i class="fab fa-github"></i>
                                      <div class="link-title">Source Code</div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <!-- Project 5 -->
                      <div class="project-card">
                          <div class="project-image">
                              <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixlib=rb-4.0.3&auto=format&fit=crop&w=870&q=80"
                                  alt="E-learning Platform" />
                          </div>
                          <div class="project-content">
                              <div class="project-tags">
                                  <span class="project-tag">Vue.js</span>
                                  <span class="project-tag">Laravel</span>
                                  <span class="project-tag">MySQL</span>
                              </div>
                              <h3>Interactive E-learning Portal</h3>
                              <p>
                                  A platform enabling students to access video lessons, track
                                  progress, and interact with quizzes and forums. Built for
                                  scalability.
                              </p>
                              <div class="project-links">
                                  <a href="#"><i class="fas fa-external-link-alt"></i>
                                      <div class="link-title">
                                          Live Demo</div>
                                  </a>
                                  <a href="#"><i class="fab fa-github"></i>
                                      <div class="link-title">Source Code</div>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="indicators" id="indicators">
                      <div class="indicator" data-index="0"></div>
                      <div class="indicator" data-index="1"></div>
                      <div class="indicator active" data-index="2"></div>
                      <div class="indicator" data-index="3"></div>
                      <div class="indicator" data-index="4"></div>
                  </div>

                  <div class="project-progress-container">
                      <div class="project-progress-bar" id="projectProgressBar"></div>
                  </div>

                  <div class="carousel-nav">
                      <button class="carousel-btn fill-effect" id="prevBtn">
                          <i class="fas fa-chevron-left"></i>
                      </button>
                      <button class="carousel-btn fill-effect" id="nextBtn">
                          <i class="fas fa-chevron-right"></i>
                      </button>
                  </div>
              </div>
          </section>

          <!-- Contact Section -->
          <section class="contact" id="contact">
              <div class="container">
                  <div class="section-title fade-in">
                      <h2>Get In Touch</h2>
                  </div>
                  <div class="contact-container">
                      <div class="contact-info fade-in">
                          <div class="contact-item">
                              <div class="contact-icon">
                                  <i class="fas fa-envelope"></i>
                              </div>
                              <div class="contact-text">
                                  <h3>Email</h3>
                                  <a href="mailto:hello@alexmorgan.dev">hello@alexmorgan.dev</a>
                              </div>
                          </div>

                          <div class="contact-item">
                              <div class="contact-icon">
                                  <i class="fas fa-phone"></i>
                              </div>
                              <div class="contact-text">
                                  <h3>Phone</h3>
                                  <a href="tel:+8801863540808">+1 (123) 456-7890</a>
                              </div>
                          </div>

                          <div class="contact-item">
                              <div class="contact-icon">
                                  <i class="fas fa-map-marker-alt"></i>
                              </div>
                              <div class="contact-text">
                                  <h3>Location</h3>
                                  <a href="https://maps.app.goo.gl/iaRfQopeQEhPUAxg7" target="_blank">San Francisco,
                                      California</a>
                              </div>
                          </div>
                      </div>

                      <div class="contact-form fade-in">
                          <form id="contactForm">
                              <div class="form-group">
                                  <label for="name">Full Name</label>
                                  <input type="text" id="name" class="form-control"
                                      placeholder="Enter your name" required />
                              </div>
                              <div class="form-group">
                                  <label for="email">Email Address</label>
                                  <input type="email" id="email" class="form-control"
                                      placeholder="Enter your email" required />
                              </div>
                              <div class="form-group">
                                  <label for="subject">Subject</label>
                                  <input type="text" id="subject" class="form-control"
                                      placeholder="What's this about?" required />
                              </div>
                              <div class="form-group">
                                  <label for="message">Message</label>
                                  <textarea id="message" class="form-control" placeholder="Your message here..." required></textarea>
                              </div>
                              <button type="submit" class="btn-outline fill-effect">
                                  Send Message
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </section>
      </div>
  @endsection
