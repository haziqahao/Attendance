<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F6F6F5;
                color: #636b6f;
                font-family: Roboto, bold;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                max-width: 100%;
                overflow-x: hidden;
            }

             /* The sidebar menu */
            .sidenav {
                height: 100%; /* Full-height: remove this if you want "auto" height */
                width: 200px; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #FF5A74; /* Pink red */
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 40px;
            }

            .PB {
                padding: 10px 10px 10px 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold;
                font-size: 14px;
                position: relative;
                top:-110px;
             
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 20px 20px 20px 40px;
                text-decoration: none;
                font-size: 13px;
                font-family: Roboto;
                color: #FFFFFF;
                display: block;
                position: relative;
                top: -80px;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #FF5A74;
                font-weight: bold;
                background-color: #F6F6F5;

            }

            .sidenav a.current {      /* THIS ONE UNTUK HIGHLIGHT CURRENT PAGE ++++++++++++++++++++++++++++++++++++++++*/
                color: #FF5A74;
                font-weight: bold;
                background-color: #F6F6F5;

            } 

            /* Style page content */
            .main {
                margin-left: 160px; /* Same as the width of the sidebar */
                padding: 0px 10px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            .header-box {
                margin-left: 200px;
                position: relative;
                padding-top: 5px;
                width: 100%;
                height:80px;
                max-width: 100%;
                background-color: #FFFFFF;
                box-shadow: 2px 2px 2px #A09E9E;
            }

            .dashboardtext {
                position: relative;
                top: -15px;
                padding-left: 20px;
                color: #D6D4D4;
                font-family: Roboto;
                font-weight:bold;
            }

            .nominatedGC {
                position: absolute;
                top: 42px;
                left: 133px;
                color: #81C8CE;
                font-family: Roboto;
                font-weight:bold;
            }

            .text {
                position: absolute;
                top: 85px;
                left: 20px;
                color: #565353;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
            }

            .textGC {
                position: absolute;
                top: 85px;
                left: 130px;
                color: #81C8CE;
                font-family: Roboto;
                font-weight: bold;
                font-style: italic;
                font-size: 13px;
            }

            .text1 {
                position: absolute;
                top: 85px;
                left: 240px;
                color: #565353;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
            }

            .logout-box {
                position: relative;
                left: 900px;
                top: 10px;
                max-width: 100%;
                background-color: #F6F6F5;
                width: 150px;
                height: 40px;
                
            }
            .username {
                position: relative;
                left: 20px;
                top: 5px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;

            }

            .user-status {
                position: relative;
                left: 20px;
                top: -5px;
                color: #18BBD5;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 8px;

            }

            .img {
                position: relative;
                top: -34px;
                left: 15px;
             
            }

            .img-sort {
                position: absolute;
                top: 43px;
                left: 1030px;
            }

            .course {
                position: relative;
                top: 80px;
                left: -145px;
                color: #837B7B;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                
            }

            .group{
                position: relative;
                top: 100px;
                left: -145px;
                color: #837B7B;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                
            }

            .groupcoordinator {
                position: relative;
                top: 120px;
                left: -145px;
                color: #837B7B;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                
            }

            .groupcourse-box {
                position: relative;
                left: 40px;
                top: -15px;
                background-color: #FFFFFF;
                width: 250px;
                height: 30px;
                cursor: pointer;
                
            }

            .groupcode-box {
                position: relative;
                left: 0px;
                top: 20px;
                background-color: #FFFFFF;
                width: 250px;
                height: 30px;
                cursor: pointer;
                
            }

            .groupcoordinator-box {
                position: relative;
                left: 0px;
                top: 25px;
                background-color: #FFFFFF;
                width: 250px;
                height: 30px;
                cursor: pointer;
                
            }

            .groupcourse {
                position: relative;
                top: 8px;
                left: 18px;
                color: #837B7B;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold;
                font-size: 13px;
                
            }

            .groupcode {
                position: relative;
                top: 8px;
                left: 18px;
                color: #837B7B;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold;
                font-size: 13px;
                
            }

            .gc {
                position: relative;
                top: 8px;
                left: 18px;
                color: #837B7B;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold;
                font-size: 13px;
                
            }

            .save {
                position: absolute;
                top: px;
                left: 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px; 
            }
            .save-button {
                position: absolute;
                left: 220px;
                top: 350px;
                background-color: #81C8CE;
                width: 200px;
                height: 40px;
                 
            }

        
            .form {
                position: absolute;
                left: 400px;
                
            }

            /* Dropdown */
            .dropdown{
               left: 30px;
            }

            #img-sort {
                position: absolute;
                top: 43px;
                left: 1030px;
            }

            .logout-box {
                position: relative;
                left: 900px;
                top: 10px;
                background-color: #F6F6F5;
                width: 150px;
                height: 40px;
                
            }

             .dropdown{
               left: 30px;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                left: 900px;
                top: 65px;
                background-color: #F6F6F5;
                min-width: 150px;
                overflow: auto;
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                font-size: 12px;
                text-decoration: none;
                display: block;
            }
            
            .dropdown a:hover {
                background-color: #FF5A74;
            }

            .show {
                display: block;
            }

            .save {
                position: absolute;
                top: px;
                left: 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px; 
            }
            
            .save-button {             /*+++++++++++++++++++++++++++++++++++++++++++++++++*/
                position: absolute;
                left: 600px;
                top: 550px;
                background-color: #81C8CE;
                width: 200px;
                height: 40px;
                 
            }
			.save-button:hover {   /*+++++++++++++++++++++++++++++++++++++++++++++++++*/
                position: absolute;
                left: 600px;
                top: 550px;
                background-color: DodgerBlue;
				cursor: pointer;
                width: 200px;
                height: 40px;
                 
            }

			.group-name {        /*+++++++++++++++++++++++++++++++++++++++++++++++++*/
				position: relative;
				top: 60px;
				left: 220px;
				font-family: Roboto;
                font-weight: bold;
                font-size: 13px;
                color: #837B7B;
			}

			.custom-select {    /*dari sini sampai CSS CODE ENDED ++++++++++++++++++++++++++++++++++++*/
				position: relative;
				top: 11px;
				left: 440px;
				font-family: Roboto;
                color: #837B7B;
                font-style: italic;
                font-weight: bold;
                font-size: 13px;
                color: #837B7B;
			}
			
			.custom-select select {
				display: none; /*hide original SELECT element:*/
			}
			
			.select-selected {
				background-color: #fefefe;
			}
			
			/*style the arrow inside the select element:*/
			.select-selected:after {
				position: absolute;
				content: "";
				top: 14px;
				right: 10px;
				width: 0;
				height: 0;
				border: 6px solid transparent;
				border-color: #fff transparent transparent transparent;
			}
			
			/*point the arrow upwards when the select box is open (active):*/
			.select-selected.select-arrow-active:after {
				border-color: transparent transparent #fff transparent;
					top: 7px;
			}
			
			/*style the items (options), including the selected item:*/
			.select-items div,.select-selected {
				color:  #81C8CE;
				font-weight: bold;
				padding: 8px 16px;
				border: 1px solid transparent;
				border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
				cursor: pointer;
				user-select: none;
			}
			
			/*style items (options):*/
			.select-items {
				position: absolute;
				background-color: #fefefe;
				top: 100%;
				left: 0;
				right: 0;
				z-index: 99;
			}
			
				/*hide the items when the select box is closed:*/
				.select-hide {
				display: none;
			}
			
				.select-items div:hover, .same-as-selected {
				background-color: rgba(0, 0, 0, 0.1);
			}
     
        </style>
    </head>
    <body>
       
        <!-- Side Navigation -->
        <div class="sidenav">
        <img class="img" src="img/pblogo.png" style="width: 40px; height: 85px;">
          <p class="PB"> Politeknik Brunei</p>  
          <a href="admindash">Dashboard</a>
          <a href="#">Attendance</a>
          <a href="#">Schedule</a>
          <a href="adminprof">Profile</a>
        </div>


        <!-- Top header -->
        <div class="header-box">
          <div class="logout-box">
            <p class="username">Ashraf Sinclair</p>
            <p class="user-status">Admin</p>

          </div>
          <p class="dashboardtext">Dashboard &nbsp; &#9658;</p>
          <p class="nominatedGC">Nominated Group Coordinator</p>
          <div class="dropdown">
                    <img id="img-sort" class="dropbtn" src="img/sort.png" onclick="myFunction()" style="width: 6px; height: 6px;">
                <div id="myDropdown" class="dropdown-content">
                    <a href="adminprof">Profile</a>
                    <a href="adminwelcome">Logout</a>
                </div>
            </div>

          <p class="text">Please choose your</p>
          <p class="textGC">Group Coordinator</p>
          <p class="text1">for the class.</p>
          
         
        </div>

        <!-- Page Content -->
        <div class="group-name">
            <h4>Group</h4>
        </div>
                   
        <div class="custom-select" style="width: 200px;">
		<select>
            <option value="0">DiICT(INS)0216/02</option>
            <option value="1">DiICT(NWS)0216/02</option>
            <option value="2">DiICT(WBD)0216/02</option>
        </select>
        </div>

        <div class="group-name">
            <h4>Lecturer Name</h4>
        </div>
                   
        <div class="custom-select" style="width: 200px;">
		<select>
            <option value="0">Siti Nur Afifah Sait</option>
            <option value="1">Bahit Hamid</option>
            <option value="2">Atiqah Musfirah Leong</option>
        </select>
        </div>


            <div class="save-button">
                <p class="save">Save Changes</p>
            </div>
        </div>  
        <script> <!-- THIS ONE JAVASCRIPT UNTUK DROP DOWN, MAKE SURE SIMPAN BEFORE TAG "</body>"-->
        var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
         a = document.createElement("DIV");
         a.setAttribute("class", "select-selected");
         a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
         x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element, create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
    /*when an item is clicked, update the original select box, and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
        </script>
    </body>
</html>