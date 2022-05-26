
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
      color: white
    }

    .nav_icon {
      font-size: 1.25rem
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

    .common-heading {
      margin-top: 80px;
      color: black;
      text-decoration: none;
    }

    .common-heading1 {
      margin-top: 10px;
      color: black;
      text-decoration: none;
      font-size: 25px;
    }

    .grid-two-col {
      grid-template-columns: repeat(2, 1fr);
    }

    .grid-three-col {
      grid-template-columns: repeat(3, 1fr);
      margin-top: 2rem;
    }

    .grid {
      display: grid;
      gap: 1rem;
      text-align: center;
      border-radius: 16px;
      box-shadow: var(--shadpw);
      padding: 20px 20px;
      margin-top: 10px;
    }

    .btn {
      background: -webkit-linear-gradient(0deg,
          rgb(132 144 255) 0%,
          rgb(98 189 252) 100%);
      max-width: 90%;
      padding: 1.6rem 5.2rem;
      border: none;
      color: rgb(255 255 255);
      display: inline-block;
      font-size: 0.8rem;
      text-transform: uppercase;
      font-weight: 500;
      position: relative;
      -webkit-transition: all 0.3s ease 0s;
      -moz-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
      cursor: pointer;
      position: relative;
    }

    .container {
      height: 350px;
      width: 430px;
      position: relative;
    }

    .container .wrapper {
      position: relative;
      height: 300px;
      width: 100%;
      border-radius: 10px;
      background: #fff;
      border: 2px dashed #c2cdda;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .wrapper.active {
      border: none;
    }

    .wrapper .image {
      position: absolute;
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrapper img {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .wrapper .icon {
      font-size: 100px;
      color: #9658fe;
    }

    .wrapper .text {
      font-size: 20px;
      font-weight: 500;
      color: #5B5B7B;
    }

    .wrapper #cancel-btn i {
      position: absolute;
      font-size: 20px;
      right: 15px;
      top: 15px;
      color: #9658fe;
      cursor: pointer;
      display: none;
    }

    .wrapper.active:hover #cancel-btn i {
      display: block;
    }

    .wrapper #cancel-btn i:hover {
      color: #e74c3c;
    }

    .wrapper .file-name {
      position: absolute;
      bottom: 0px;
      width: 100%;
      padding: 8px 0;
      font-size: 18px;
      color: #fff;
      display: none;
      background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
    }

    .wrapper.active:hover .file-name {
      display: block;
    }

    .container #custom-btn {
      margin-top: 30px;
      display: block;
      width: 100%;
      height: 50px;
      border: none;
      outline: none;
      border-radius: 25px;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      text-transform: uppercase;
      cursor: pointer;
      background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
    }

    .custom-btn {
      margin-top: 30px;
      display: block;
      width: 100%;
      height: 50px;
      border: none;
      outline: none;
      border-radius: 25px;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      text-transform: uppercase;
      cursor: pointer;
      background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
    }

    #question {
      height: 49vh;
      width: 98%;
      outline: none;
    }
  </style>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
            class="nav_logo-name">EDUCAD</span> </a>
        <div class="nav_list"> <a href="welcome.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>
            <span class="nav_name">Dashboard</span> </a> <a href="video.html" class="nav_link">
            
            <i class="fa-solid fa-video"></i><span class="nav_name">Video</span>
          </a> <a href="question.html" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
              class="nav_name">Questions</span> </a> <a href="testview.html" class="nav_link">
            <i class="fa-solid fa-newspaper"></i> <span class="nav_name">Tests</span>
          </a>
          <a href="note.html" class="nav_link">
            
            <i class="fa-regular fa-envelope-open-text"></i><span class="nav_name">Create your Notes</span>
          </a>
          <a href="doubt.php" class="nav_link">
           
            <i class="fa-solid fa-circle-question"></i></i><span class="nav_name">Doubts</span>
          </a> <a href="stat.html" class="nav_link">
            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
            <span class="nav_name">Performance</span> </a>
          <a href="todo.html" class="nav_link">
            
            <i class="fa-solid fa-circle-check"></i><span class="nav_name">To-Do list</span>
          </a>
        </div>
      </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
          class="nav_name">SignOut</span> </a>
    </nav>
  </div>

  <h1 class="common-heading">Ask your doubt</h1>

  <div class="grid grid-two-col">
    <div>
      <h1 class="common-heading1">Type your doubt</h1>
      <form action="">

        <div>
          <textarea name="message" id="question" placeholder="Type your doubt"></textarea>
        </div>

        <div>
          <input type="submit" value="submit" class="custom-btn" />

        </div>
      </form>
    </div>
    <div>
      <h1 class="common-heading1">Upload image</h1>
      <div class="container">
        <div class="wrapper">
          <div class="image">
            <img src="" alt="">
          </div>
          <div class="content">
            <div class="icon">
              <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <div class="text">
              No file chosen, yet!
            </div>
          </div>
          <div id="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <div class="file-name">
            File name here
          </div>
        </div>
        <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
        <input id="default-btn" type="file" hidden>
      </div>

    </div>


    <script src="https://kit.fontawesome.com/8df4627fa1.js" crossorigin="anonymous"></script>
    <script>
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

        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
          if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
          }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

      });
      

      const wrapper = document.querySelector(".wrapper");
      const fileName = document.querySelector(".file-name");
      const defaultBtn = document.querySelector("#default-btn");
      const customBtn = document.querySelector("#custom-btn");
      const cancelBtn = document.querySelector("#cancel-btn i");
      const img = document.querySelector("img");
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      function defaultBtnActive() {
        defaultBtn.click();
      }
      defaultBtn.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function () {
            const result = reader.result;
            img.src = result;
            wrapper.classList.add("active");
          }
          cancelBtn.addEventListener("click", function () {
            img.src = "";
            wrapper.classList.remove("active");
          })
          reader.readAsDataURL(file);
        }
        if (this.value) {
          let valueStore = this.value.match(regExp);
          fileName.textContent = valueStore;
        }
      });




    </script>

    <script src="  https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>