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
      <div class="container">
        <div class="hero-container fade-in">
          <div class="hero-content">
            <div class="hero-image">
              <img
                src="{{ asset('assets/images/home.png') }}"
                alt="DIP SARKER"
                class="profile-photo mouse-follower"
              />
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
              <a href="#contact" class="btn-outline fill-effect"
                >Get In Touch</a
              >
              <div class="social-btn">
                <a
                  class="sbtn fill-effect"
                  href="https://www.linkedin.com/in/dip-sarker-3ba1b9321/"
                  target="_blank"
                >
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a
                  class="sbtn fill-effect"
                  href="https://github.com/DIP-SARKER"
                  target="_blank"
                >
                  <i class="fab fa-github"></i>
                </a>
                <a
                  class="sbtn fill-effect"
                  href="https://x.com/NiloyDs"
                  target="_blank"
                >
                  <i class="fab fa-twitter"></i>
                </a>
                <a
                  class="sbtn fill-effect"
                  href="https://www.facebook.com/dipsarkerniloy/"
                  target="_blank"
                >
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
  <div><span class="keyword">import</span> <span class="default">fs</span> <span class="keyword">from</span> <span class="string">'fs'</span><span class="symbol">;</span></div>
  <div><span class="keyword">const</span> <span class="variable">app</span> <span class="symbol">=</span> <span class="function">initializeApp</span><span class="symbol">(</span><span class="string">'./core/init.js'</span><span class="symbol">);</span></div>
  <div><span class="function">console</span><span class="symbol">.</span><span class="method">log</span><span class="symbol">(</span><span class="string">'> Bootstrapping application...'</span><span class="symbol">);</span></div>
</div>
    </div>

    <div class="t-buttons">
  <button class="btn-outline fill-effect" id="toggleBtn">Pause</button>
  <button class="btn-outline fill-effect" id="restartBtn">Restart</button>
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
          <h2>About Me</h2>
        </div>
        <div class="about-content">
          <div class="about-text fade-in">
            <h3>Hello! I'm DIP SARKER</h3>
            <p>
              I'm a passionate full-stack developer and UI/UX designer with 5+
              years of experience creating digital products. My journey began
              with a computer science degree and evolved through working with
              startups and tech companies.
            </p>
            <p>
              I specialize in creating responsive, accessible, and performant
              web applications with a focus on user experience. My design
              approach combines aesthetics with functionality to create
              meaningful interactions.
            </p>
            <p>
              When I'm not coding, you can find me hiking, reading design books,
              or experimenting with new technologies.
            </p>

            <div class="about-stats ">
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
            <img
              src="{{ asset('assets/images/about_me.png') }}"
              alt="DIP SARKER"
            />
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
                  implementing design systems, and mentoring junior developers.
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
                  Developed full-stack applications using React, Node.js, and
                  MongoDB. Collaborated on UI/UX design and implemented REST
                  APIs.
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
                  applications for diverse clients across multiple industries.
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
                  JavaScript and WordPress. Assisted in UX research and design
                  implementation.
                </p>
              </div>
              </div>
            </div>
          </div>
          <a href="https://drive.google.com/file/d/1TpLjBllEDzLKQLBidjpwkzop3wHa2-gh/view?usp=sharing" class="btn-outline fill-effect long-button"
            ><i class="fas fa-download"></i> Download Resume</a>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="skills" id="skills">
      <div class="container">
        <div class="section-title fade-in">
          <h2>My Skills</h2>
        </div>
        <div class="skills-container">
          <div class="skill-category fade-in mouse-follower">
            <h3><i class="fas fa-laptop-code"></i> Frontend Development</h3>
            <div class="skill-item">
              <div class="skill-info">
                <span>HTML5 & CSS3</span>
                <span>95%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 95%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>JavaScript</span>
                <span>90%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 90%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>React.js</span>
                <span>92%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 92%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>Vue.js</span>
                <span>85%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 85%"></div>
              </div>
            </div>
          </div>

          <div class="skill-category fade-in mouse-follower">
            <h3><i class="fas fa-server"></i> Backend & Database</h3>
            <div class="skill-item">
              <div class="skill-info">
                <span>Node.js</span>
                <span>88%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 88%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>Python</span>
                <span>80%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 80%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>MongoDB</span>
                <span>85%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 85%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>PostgreSQL</span>
                <span>82%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 82%"></div>
              </div>
            </div>
          </div>

          <div class="skill-category fade-in mouse-follower">
            <h3><i class="fas fa-paint-brush"></i> UI/UX Design</h3>
            <div class="skill-item">
              <div class="skill-info">
                <span>Figma</span>
                <span>90%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 90%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>Adobe XD</span>
                <span>88%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 88%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>User Research</span>
                <span>85%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 85%"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="skill-info">
                <span>Prototyping</span>
                <span>92%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 92%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
            <div class="section-title  fade-in">
                <h2>Featured Projects</h2>
            </div>
            <div class="carousel-container  fade-in">
                <div class="projects-container" id="projectsContainer">
                    <!-- Project 1 -->
                    <div class="project-card mouse-follower">
                        <div class="project-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Finance Dashboard">
                        </div>
                        <div class="project-content">
                            <div class="project-tags">
                                <span class="project-tag">React</span>
                                <span class="project-tag">Node.js</span>
                                <span class="project-tag">D3.js</span>
                            </div>
                            <h3>Financial Analytics Dashboard</h3>
                            <p>
                                A comprehensive dashboard for financial data visualization with real-time updates and predictive analytics capabilities.
                            </p>
                            <div class="project-links">
                                <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="#"><i class="fab fa-github"></i> Source Code</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card mouse-follower">
                        <div class="project-image">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Eco Shopping">
                        </div>
                        <div class="project-content">
                            <div class="project-tags">
                                <span class="project-tag">Vue.js</span>
                                <span class="project-tag">Firebase</span>
                                <span class="project-tag">Stripe API</span>
                            </div>
                            <h3>Eco-Friendly E-Commerce Platform</h3>
                            <p>
                                An online marketplace for sustainable products with carbon footprint tracking and eco-friendly shipping options.
                            </p>
                            <div class="project-links">
                                <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="#"><i class="fab fa-github"></i> Source Code</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-card active mouse-follower">
                        <div class="project-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Health App">
                        </div>
                        <div class="project-content">
                            <div class="project-tags">
                                <span class="project-tag">React Native</span>
                                <span class="project-tag">GraphQL</span>
                                <span class="project-tag">MongoDB</span>
                            </div>
                            <h3>Health & Wellness Tracker</h3>
                            <p>
                                A mobile application that tracks nutrition, exercise, and mental health with personalized recommendations.
                            </p>
                            <div class="project-links">
                                <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="#"><i class="fab fa-github"></i> Source Code</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 4 -->
                    <div class="project-card mouse-follower">
                        <div class="project-image">
                            <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-4.0.3&auto=format&fit=crop&w=870&q=80" alt="Smart Home Controller">
                        </div>
                        <div class="project-content">
                            <div class="project-tags">
                                <span class="project-tag">Flutter</span>
                                <span class="project-tag">Firebase</span>
                                <span class="project-tag">IoT</span>
                            </div>
                            <h3>Smart Home Automation</h3>
                            <p>
                                A mobile app to control lights, temperature, and security systems using Flutter and Firebase Cloud Functions with real-time sync.
                            </p>
                            <div class="project-links">
                                <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="#"><i class="fab fa-github"></i> Source Code</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="project-card mouse-follower">
                        <div class="project-image">
                            <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixlib=rb-4.0.3&auto=format&fit=crop&w=870&q=80" alt="E-learning Platform">
                        </div>
                        <div class="project-content">
                            <div class="project-tags">
                                <span class="project-tag">Vue.js</span>
                                <span class="project-tag">Laravel</span>
                                <span class="project-tag">MySQL</span>
                            </div>
                            <h3>Interactive E-learning Portal</h3>
                            <p>
                                A platform enabling students to access video lessons, track progress, and interact with quizzes and forums. Built for scalability.
                            </p>
                            <div class="project-links">
                                <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="#"><i class="fab fa-github"></i> Source Code</a>
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
                <a href="tel:+11234567890">+1 (123) 456-7890</a>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-text">
                <h3>Location</h3>
                <p>San Francisco, California</p>
              </div>
            </div>
          </div>

          <div class="contact-form fade-in">
            <form id="contactForm">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input
                  type="text"
                  id="name"
                  class="form-control"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  id="email"
                  class="form-control"
                  placeholder="Enter your email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input
                  type="text"
                  id="subject"
                  class="form-control"
                  placeholder="What's this about?"
                  required
                />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea
                  id="message"
                  class="form-control"
                  placeholder="Your message here..."
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn-outline fill-effect">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection