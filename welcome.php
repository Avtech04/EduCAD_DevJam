<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    :root {
      --header-height: 3rem;
      --nav-width: 68px;
      --first-color: #4723D9;
      --first-color-light: #AFA5D9;
      --white-color: #F7F6FB;
      --body-font: 'Nunito', sans-serif;
      --normal-font-size: 1rem;
      --z-fixed: 100
    }

    :root {
      --heading: rgb(0 10 45);
      --para: #777777;
      --para-tint: #e4e4e4;
      --third: #fff;
      --helper: #8490ff;
      --helper-tint: #f3f4ff;
      --bg: rgb(249 249 255);
      --gradient: linear-gradient(0deg, rgb(132 144 255) 0%, rgb(98 189 252) 100%);
      --shadpw: 0px 0px 20px 0px rgb(132 144 255 / 20%);
    }
    *,
    ::before,
    ::after {
      box-sizing: border-box
    }

    body {
      position: relative;
      margin: var(--header-height) 0 0 0;
      padding: 0 1rem;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      transition: .5s
    }

    a {
      text-decoration: none
    }

    .header {
      width: 100%;
      height: var(--header-height);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      background-color: var(--first-color);
      z-index: var(--z-fixed);
      transition: .5s
    }

    .header_toggle {
      color: white;
      font-size: 2.5rem;
      cursor: pointer;
    }

    .header_img {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden
    }

    .header_img img {
      width: 40px
    }

    .l-navbar {
      position: fixed;
      top: 0;
      left: -30%;
      width: var(--nav-width);
      height: 100%;
      background-color: var(--first-color);
      padding: .5rem 1rem 0 0;
      transition: .5s;
      z-index: var(--z-fixed)
    }

    .nav {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden
    }

    .nav_logo,
    .nav_link {
      display: grid;
      grid-template-columns: max-content max-content;
      align-items: center;
      column-gap: 1rem;
      padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
      margin-bottom: 2rem
    }

    .nav_logo-icon {
      font-size: 1.25rem;
      color: var(--white-color)
    }

    .nav_logo-name {
      color: var(--white-color);
      font-weight: 700
    }

    .nav_link {
      position: relative;
      color: white;
      margin-bottom: 0.8rem;
      transition: .3s
    }

    .nav_link:hover {
      color: white;
    }
    .navbar-link:hover {
      color: yellow;
    }
    .nav_icon {
      font-size: 1.25rem;
    }

    .show {
      left: 0
    }

    .body-pd {
      padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
      color: var(--white-color)
    }

    .active::before {
      content: '';
      position: absolute;
      left: 0;
      width: 2px;
      height: 32px;
      background-color: var(--white-color)
    }

    .height-100 {
      height: 100vh
    }

    @media screen and (min-width: 768px) {
      body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
      }

      .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
      }

      .header_img {
        width: 40px;
        height: 40px
      }

      .header_img img {
        width: 45px
      }

      .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
      }

      .show {
        width: calc(var(--nav-width) + 156px)
      }

      .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
      }
    }

    .navbar-item {
      list-style: none;
      font-size: 1.5rem;
      padding: 13px 2px 0px 2px;
      text-transform: capitalize;
      color: white;
    }

    .navbar-link {
      color: white;
    }

    .hero {
      display: block;
      box-sizing: border-box;
      height: 500px;
      background-color: #2ba6bf;
      clip-path: ellipse(90% 100% at 26.8% 0%);
      position: relative;
      top: 0;
      left: -32px;
      width: 134%
    }

    .content {
      position: absolute;
      top: 5rem;
      left: 14rem;
    }

    .hero_heading {
      font-size: 8rem;
      color: white;
      font-weight: 900;
    }

    .hero_para {
      font-size: 2rem;
      color: white;

    }

    * {
      box-sizing: border-box;
    }


    .content1 {
      padding: 6px 18px;
      outline: none;
      overflow: hidden;
      background-color: #afd4de;
      border-radius: 18px;
      color: black;
      font-size: 15px;
    }

    .faqs {
      width: 70%;
      margin: 40px auto;
      box-shadow: var(--shadpw);
      padding: 9px 38px
    }

    .faqshead {
      text-align: center;
      font-size: 41px;
      font-weight: 900;
    }

    .section-services p {
      max-width: 60rem;
    }

    .section-services .grid {
      margin-top: 3rem;
      row-gap: 4rem;
    }

    .service-box {
      text-align: center;
      box-shadow: var(--shadpw);
      border-radius: 5px;
      padding: 2.4rem 3.4rem;
      transition: all 0.2s linear;
    }

    .service-box:hover {
      transform: translateY(-3rem);
    }

    .service-icon {
      width: 8rem;
      height: 8rem;
      background-color: rgb(144 172 209 / 20%);
      display: inline-block;
      border-radius: 56% 44% 70% 30% / 30% 54% 46% 70%;
      padding: 1.4rem 1.8rem;
      position: relative;
      color: var(--heading);
      animation: water-wave 3s linear infinite;
    }

    .service-icon::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 1px solid rgba(11, 15, 20, 0.9);
      width: 90%;
      height: 90%;
      border-radius: 56% 44% 70% 30% / 30% 54% 46% 70%;
      background-color: transparent;
      animation: water-wave 5s linear infinite alternate;
      font-size: 60px;
    }

    @keyframes water-wave {
      0% {
        border-radius: 56% 44% 70% 30% / 30% 54% 46% 70%;
      }

      50% {
        border-radius: 3% 97% 15% 85% / 72% 0% 100% 28%;
      }

      100% {
        border-radius: 56% 44% 70% 30% / 30% 54% 46% 70%;
      }
    }

    .service-box h3 {
      text-transform: capitalize;
      margin-top: 3rem;
      margin-bottom: 1rem;
    }

    .common-heading {
      font-size: 3.8rem;
      font-weight: 700;
      margin-bottom: 6rem;
      margin-top: 2rem;
      margin-left: 3rem;
      text-transform: capitalize;
      position: relative;
    }

    .common-heading::before {
      content: "";
      position: absolute;
      top: 120%;
      left: 0;
      width: 1.5rem;
      height: 1.5rem;
      border-radius: 50%;
      background: var(--helper);
    }

    .common-heading::after {
      content: "";
      position: absolute;
      top: 128%;
      left: 1.5rem;
      width: 30%;
      height: 0.3rem;
      background: var(--helper);
    }

    .container {
      max-width: 140rem;
      margin: 0 auto;
    }


    .section {
      padding: 3rem 0;
    }

    .grid {
      display: grid;
      gap: 5rem;
    }

    .grid-two-col {
      grid-template-columns: repeat(2, 1fr);
    }

    .grid-three-col {
      grid-template-columns: repeat(3, 1fr);
    }

    .grid-four-col {
      grid-template-columns: repeat(4, 1fr);
    }

    /* chat-bot  css*/

    .chat-bar-collapsible {
      position: fixed;
      bottom: 0;
      right: 50px;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .collapsibleit {
      background-color: rgb(82, 151, 255);
      color: white;
      cursor: pointer;
      padding: 18px;
      width: 300px;
      text-align: left;
      outline: none;
      font-size: 18px;
      border-radius: 10px 10px 0px 0px;
      border: 3px solid white;
      border-bottom: none;
    }

    .contentit {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
      background-color: #f1f1f1;
    }

    .full-chat-block {
      width: 300px;
      background: white;
      text-align: center;
      overflow: auto;
      scrollbar-width: none;
      height: max-content;
      transition: max-height 0.2s ease-out;
    }

    .outer-container {
      min-height: 400px;
      bottom: 0%;
      position: relative;
    }

    .chat-container {
      max-height: 400px;
      width: 100%;
      position: absolute;
      bottom: 0;
      left: 0;
      scroll-behavior: smooth;
      hyphens: auto;
    }

    .chat-container::-webkit-scrollbar {
      display: none;
    }

    .chat-bar-input-block {
      display: flex;
      float: left;
      box-sizing: border-box;
      justify-content: space-between;
      width: 100%;
      align-items: center;
      background-color: rgb(235, 235, 235);
      border-radius: 10px 10px 0px 0px;
      padding: 10px 0px 10px 10px;
    }

    .chat-bar-icons {
      display: flex;
      justify-content: space-evenly;
      box-sizing: border-box;
      width: 25%;
      float: right;
      font-size: 20px;
    }

    #chat-icon:hover {
      opacity: .7;
    }

    /* Chat bubbles */

    #userInput {
      width: 75%;
    }

    .input-box {
      float: left;
      border: none;
      box-sizing: border-box;
      width: 100%;
      border-radius: 10px;
      padding: 10px;
      font-size: 16px;
      color: #000;
      background-color: white;
      outline: none
    }

    .userText {
      color: white;
      font-family: Helvetica;
      font-size: 16px;
      font-weight: normal;
      text-align: right;
      clear: both;
    }

    .userText span {
      line-height: 1.5em;
      display: inline-block;
      background: #5ca6fa;
      padding: 10px;
      border-radius: 8px;
      border-bottom-right-radius: 2px;
      max-width: 80%;
      margin-right: 10px;
      animation: floatup .5s forwards
    }

    .botText {
      color: #000;
      font-family: Helvetica;
      font-weight: normal;
      font-size: 16px;
      text-align: left;
    }

    .botText span {
      line-height: 1.5em;
      display: inline-block;
      background: #e0e0e0;
      padding: 10px;
      border-radius: 8px;
      border-bottom-left-radius: 2px;
      max-width: 80%;
      margin-left: 10px;
      animation: floatup .5s forwards
    }

    @keyframes floatup {
      from {
        transform: translateY(14px);
        opacity: .0;
      }

      to {
        transform: translateY(0px);
        opacity: 1;
      }
    }

    @media (max-width: 568px){
      .content{
        position: absolute;
    top: 5rem;
    left: 4rem;
      }
      .hero_heading {
    font-size: 3rem;
    color: white;
    font-weight: 900;
}
.faqs{
width: 90%;
    margin: 38px auto;
    box-shadow: var(--shadpw);
    padding: 9px 38px;
    }
  
.hero_para {
    font-size: 1.7rem;
    color: white;
}
.chat-bar-collapsible {
    position: fixed;
    bottom: 0;
    right: 2%;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%);
}
.collapsibleit {
    background-color: rgb(82, 151, 255);
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 208px;
    text-align: left;
    outline: none;
    font-size: 18px;
    border-radius: 10px 10px 0px 0px;
    border: 3px solid white;
    border-bottom: none;
}
.outer-container {
    width: 207px;
    min-height: 400px;
    bottom: 0%;
    position: relative;
}
    
}

    @media screen  and (max-width: 686px) and (min-width:569px){
      .content{
        position: absolute;
    top: 5rem;
    left: 4rem;
      }
      .hero_heading {
    font-size: 5rem;
    color: white;
    font-weight: 900;
}
.hero_para {
    font-size: 1.8rem;
    color: white;
}
.chat-bar-collapsible {
    position: fixed;
    bottom: 0;
    right: 12%;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%);
}
.collapsibleit {
    background-color: rgb(82, 151, 255);
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 208px;
    text-align: left;
    outline: none;
    font-size: 18px;
    border-radius: 10px 10px 0px 0px;
    border: 3px solid white;
    border-bottom: none;
}
.outer-container {
    width: 207px;
    min-height: 400px;
    bottom: 0%;
    position: relative;
}
.faqs{
width: 90%;
    margin: 38px auto;
    box-shadow: var(--shadpw);
    padding: 9px 38px;
    }
  }
  </style>
</head>


<!-- Navbar section -->
<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

  
        <ul>
          <li class="navbar-item active">
            <a class="navbar-link" href="#"> <i class="fa-solid fa-user-large"></i>
              <?php echo "   Welcome ". $_SESSION['username']?>
            </a>
          </li>
        </ul>
  </header>

  <!-- Sidebar Section -->
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
            class="nav_logo-name">EDUCAD</span> </a>
        <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
              class="nav_name">Dashboard</span> </a> <a href="video.html" class="nav_link">
            <!-- <i class='bx bx-user nav_icon'></i>  -->
            <i class="fa-solid fa-video"></i><span class="nav_name">Video</span>
          </a> <a href="question.html" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
              class="nav_name">Questions</span> </a> <a href="6test.php" class="nav_link">
            <!-- <i class='bx bx-bookmark nav_icon'></i>  -->
            <i class="fa-solid fa-newspaper"></i> <span class="nav_name">Tests</span>
          </a>
          <a href="note.html" class="nav_link">
            <!-- <i class='bx bx-user nav_icon'></i>  -->
            <i class="fa-regular fa-envelope-open-text"></i><span class="nav_name">Create your Notes</span>
          </a>
          <a href="doubt.php" class="nav_link">
            <!-- <i class='bx bx-folder nav_icon'></i>  -->
            <i class="fa-solid fa-circle-question"></i></i><span class="nav_name">Doubts</span>
          </a> <a href="6stat.php" class="nav_link">
            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
            <span class="nav_name">Performance</span> </a>
          <a href="todo.html" class="nav_link">
            <!-- <i class='bx bx-user nav_icon'></i>  -->
            <i class="fa-solid fa-circle-check"></i><span class="nav_name">To-Do list</span>
          </a>
        </div>
      </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
          class="nav_name">SignOut</span> </a>
    </nav>
  </div>


  <!--Container Main start-->
  <div class="hero">
    <div class="content">
      <h1 class="hero_heading">EDUCAD</h1>
      <p class="hero_para">India`s Best Educational Platform</p>

    </div>
  </div>



  <!--FAQs Section Start-->
  <div class="faqs">
    <h2 class="faqshead">FAQs</h2>

    <button type="button" class="collapsible1">Open Section 1</button>
    <div class="content1">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
    <button type="button" class="collapsible1">Open Section 2</button>
    <div class="content1">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
    <button type="button" class="collapsible1">Open Section 3</button>
    <div class="content1">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
  </div>

  <!-- CHAT BOT -->
  <div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsibleit">Chat with us!
      <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
    </button>

    <div class="contentit">
      <div class="full-chat-block">
        <!-- Message Container -->
        <div class="outer-container">
          <div class="chat-container">
            <!-- Messages -->
            <div id="chatbox">
              <h5 id="chat-timestamp"></h5>
              <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
            </div>

            <!-- User input box -->
            <div class="chat-bar-input-block">
              <div id="userInput">
                <input id="textInput" class="input-box" type="text" name="msg"
                  placeholder="Tap 'Enter' to send a message">
                <p></p>
              </div>

              <div class="chat-bar-icons">
                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
              </div>
            </div>

            <div id="chat-bar-bottom">
              <p></p>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>




  <script src="https://kit.fontawesome.com/8df4627fa1.js" crossorigin="anonymous"></script>
  <script>

//for sidebar

    document.addEventListener("DOMContentLoaded", function (event) {

      const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
          toggle.addEventListener('click', () => {
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
          })
        }
      }

      showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')

      function colorLink() {
        if (linkColor) {
          linkColor.forEach(l => l.classList.remove('active'))
          this.classList.add('active')
        }
      }
      linkColor.forEach(l => l.addEventListener('click', colorLink))

 
    });
    

    
    // CHAT bot

    function getBotResponse(input) {

    

      // Simple responses
      if (input == "hello") {
        return "Hello there!";
      } else if (input == "where i can give test") {
        return " you need to go in test section and then you can attempt it";
      }
      else if (input == "i have a doubt") {
        return "Please, ask your doubt";
      } else {
        return "Try asking something else!";
      }
    }


    // Collapsible
    var coll = document.getElementsByClassName("collapsibleit");

    for (let i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }

      });
    }

    function getTime() {
      let today = new Date();
      hours = today.getHours();
      minutes = today.getMinutes();

      if (hours < 10) {
        hours = "0" + hours;
      }

      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      let time = hours + ":" + minutes;
      return time;
    }

    // Gets the first message
    function firstBotMessage() {
      let firstMessage = "How's it going?"
      document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

      let time = getTime();

      $("#chat-timestamp").append(time);
      document.getElementById("userInput").scrollIntoView(false);
    }

    firstBotMessage();

    // Retrieves the response
    function getHardResponse(userText) {
      let botResponse = getBotResponse(userText);
      let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
      $("#chatbox").append(botHtml);

      document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }

    //Gets the text text from the input box and processes it
    function getResponse() {
      let userText = $("#textInput").val();

      if (userText == "") {
        userText = "I love Code Palace!";
      }

      let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

      $("#textInput").val("");
      $("#chatbox").append(userHtml);
      document.getElementById("chat-bar-bottom").scrollIntoView(true);

      setTimeout(() => {
        getHardResponse(userText);
      }, 1000)

    }

    // Handles sending text via button clicks
    function buttonSendText(sampleText) {
      let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

      $("#textInput").val("");
      $("#chatbox").append(userHtml);
      document.getElementById("chat-bar-bottom").scrollIntoView(true);

    }

    function sendButton() {
      getResponse();
    }

    function heartButton() {
      buttonSendText("Heart clicked!")
    }

    // Press enter to send a message
    $("#textInput").keypress(function (e) {
      if (e.which == 13) {
        getResponse();
      }
    });

  </script>

  <script src="  https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>