<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portofolio Website</title>
    <link rel="stylesheet" href="style.css"></a>
    <script src="https://kit.fontawesome.com/8b55ece00f.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="porto-header">
    <div class="container">
        <nav>
            <img src="img/logo.png" class="logo">
            <ul id="toggle">
                <li><a href=".porto-header">Home</a></li>
                <li><a href="#porto-about">About</a></li>
                <li><a href="#porto-services">Services</a></li>
                <li><a href="#porto-portfolio">portfolio</a></li>
                <li><a href="#porto-contact">Contact</a></li>
                <i class="fas fa-times" onclick="closeMenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openMenu()"></i>
        </nav>
        <div class="porto-header-text">
            <p>UI/UX Designer</p>
            <h1>Hi, my name is <span>Theodorus</span><br>From University of Surabaya</h1>
        </div>
    </div>
</div>

<div id="porto-about">
    <div class="container">
        <div class="row">
            <div class="porto-about-row-col-1">
                <img src="img/foto.jpeg" alt="">
            </div>

            <div class="porto-about-row-col-2">
                <h1 class="sub-title">About me</h1>
                <p> A 5th semester student undergraduate from Department
                    Informatics Engineering specialization Information
                    Management & Enterprise System
                    University of Surabaya which has
                    Experience in several craftsmanship
                    Project related to the field of informatics.
                    I have a sufficient knowledge about PHP ,Python ,C# ,Java ,Angular Ionic ,and Kotlin. 
                    Nevertheless i have discover an interest in PHP Frontend Developer</p>

                <div class="tab-title">
                    <p class="links active-title" onclick="opentab('skills',event)">Skills</p>
                    <p class="links" onclick="opentab('experience',event)">Experience</p>
                    <p class="links" onclick="opentab('education',event)">Education</p>   
                </div>

                <div class="tab-content active-content" id="skills">
                    <ul>
                        <li><span>UI/UX Design</span><br>Design an applications interface</li>
                        <li><span>Frontend Developer</span><br>Web design interface</li>
                    </ul>
                </div>

                <div class="tab-content" id="experience">
                    <ul>
                        <li><span>2022</span><br>Team member from, Project Human Computer Interaction Subject</li>
                        <li><span>2022</span><br>Team member from, Project Software Engineering Subject</li>
                        <li><span>2023</span><br>Team member from, Project AI Fundamental Subject</li>
                        <li><span>2023 - Current</span><br>Team member from, Project Software Engineering Workshop Subject</li>
                        <li><span>2023 - Current</span><br>Team leader from, Project Phisically Based Animation Subject</li>
                    </ul>
                </div>

                <div class="tab-content" id="education">
                    <ul>
                        <li><span>2021 - Current</span><br>University of Surabaya Student semester 5</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="porto-services">
    <div class="container">
        <h1 class ="sub-title">My Services</h1>
        <div class="porto-services-list">
            <div>
                <i class="fa-brands fa-figma"></i>
                <h2>UI/UX Design</h2>
                <p>i'm focusing to create a smooth and intuitive experience when users use the website or application. </p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-window-maximize"></i>
                <h2>Web Designer</h2>
                <p>I possess a moderate proficiency in crafting visually captivating and user-friendly websites.</p>
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>
</div>

<div id="porto-portfolio">
    <div class="container">
        <h1 class ="sub-title">My Work</h1>
        <div class="porto-work-list">
            <div class="porto-work">
                <img src="img/work1.png">
                <div class="layer">
                    <h3>Food Review App</h3>
                    <p>This application design can be used to see the location of the nearest street vendors and also a list of foods.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="porto-work">
                <img src="img/work2.png">
                <div class="layer">
                    <h3>Management Application</h3>
                    <p>This application design can be used to display a 
                        list of items available from a shop. In this application, 
                        there are also features that can add, delete and update data</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="porto-work">
                <img src="img/work3.png">
                <div class="layer">
                    <h3>Food Ordering Application</h3>
                    <p>This application design can be used to find the nearest place to eat, order food, and also make payments</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <a href="#" class="button">See More</a>
    </div>
</div>

<div id="porto-contact">
    <div class="container">
        <div class="row">
            <div class="left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-envelope"></i> theohoesin@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>    08112630589</p>
                <div class="sosmed">
                    <a href="https://www.facebook.com/theodorus.hoesin"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/lymphovieere?igshid=ZGNjOWZkYTE3MQ=="><i class="fab fa-instagram"></i></a>
                </div>
                <a href="img/cv.pdf" download class="button button2">Download CV</a>
            </div>
            <div class="right">
                <form name="submit-to-google-sheet">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="10" placeholder="Your Message"></textarea>
                    <button type="submit" class="button button2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    var links = document.getElementsByClassName("links");
    var contents = document.getElementsByClassName("tab-content");

    function opentab(tabname, event){
        for(link of links){
            link.classList.remove("active-title");
        }
        for(content of contents){
            content.classList.remove("active-content");
        }
        event.currentTarget.classList.add("active-title");
        document.getElementById(tabname).classList.add("active-content");
    }
</script>

<script>
        var menu = document.getElementById("toggle");

        function openMenu(){
            menu.style.right= "0";
        }
        function closeMenu(){
            menu.style.right= "-200px";
        }
</script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbznVLmWxzN63vl2oLn5RnBLe3M0WnQ_zhHOkx1HF6hhXhn_V35ONfocKdNnYXE23QnQWQ/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>

</body>
</html>