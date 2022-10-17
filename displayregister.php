<?php
$host="localhost";
$dbusername="root";
  $dbpassword="";
  $dbname="job";
  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);


$query="select * from register";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>


<head>
  <style>
    table, td, th {
  border: 2px solid black;
    padding: 7px;
}

table {
  border-collapse: collapse;
  width: 50%;
}

th {
  text-align: left;
  color:red;

}
tr{
  color:blue;
}
body{
background-color: red;
background-image: url(ret.jpg);
}



a {
  background-color: red;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  float: right;
}

a:hover {
  background-color: #ddd;
  color: black;
}
    .register-wrapper {
  background-image: -webkit-linear-gradient(135deg, #0eeff0 30%, #088f90 90%);
  background-image:         linear-gradient(135deg, #0eeff0 30%, #088f90 90%);
  position: relative;
  z-index: 3;
  padding: 100px;
  color: #999;
  font-size: 1rem;
}

.register-wrapper * {
  box-sizing: border-box;
}

.register-wrapper form input {
  display: inline-block;
  width: 100%;
  padding: 0 20px;
  line-height: 50px;
  height: 50px;
  background: white;
  border: solid 1px #e6e6e6;
  border-bottom-width: 3px;
  border-radius: 5px;
  -webkit-transition: all ease 0.3s;
  transition:         all ease 0.3s;
  outline: none;
}

.register-wrapper form input:not(:last-child) {
  margin-bottom: 20px;
}

.register-wrapper form input[type="email"]:focus,
.register-wrapper form input[type="email"]:active,
.register-wrapper form input[type="password"]:focus,
.register-wrapper form input[type="password"]:active {
  border-color: #ccc;
}

.register-wrapper form input[type="submit"] {
  position: relative;
  z-index: 1;
  display: inline-block;
  padding: 0 20px;
  background-color: #f2395a;
  background-size: 20px 20px;
  background-image: -webkit-linear-gradient(45deg,
                                            rgba(255,255,255,0.15) 25%,
                                            rgba(0,0,0,0) 25%,
                                            rgba(0,0,0,0) 50%,
                                            rgba(255,255,255,0.15) 50%,
                                            rgba(255,255,255,0.15) 75%,
                                            rgba(0,0,0,0) 75%,
                                            rgba(0,0,0,0)
    );
  background-image:         linear-gradient(45deg,
                                            rgba(255,255,255,0.15) 25%,
                                            rgba(0,0,0,0) 25%,
                                            rgba(0,0,0,0) 50%,
                                            rgba(255,255,255,0.15) 50%,
                                            rgba(255,255,255,0.15) 75%,
                                            rgba(0,0,0,0) 75%,
                                            rgba(0,0,0,0)
    );
    border: solid 1px #f02146;
    border-bottom-width: 3px;
    color: white;
    outline: none;
    cursor: pointer;
    -webkit-transition: all ease 0.3s;
    transition:         all ease 0.3s;
}

  .register-wrapper form input[type="submit"]:hover {
    background-size: 40px 40px;
  }

.register-title {
  font-size: 1.2rem;
  padding-bottom: 20px;
  margin: 0 0 20px;
  border-bottom: dashed 1px #e6e6e6;
}

.register-block {
  position: relative;
  display: block;
  width: 100%;
  max-width: 300px;
  margin: 0 auto;
  padding: 30px;
  background: white;
  box-shadow: 0 0 50px rgba(0,0,0,0.2);
  border-radius: 5px;
}

  .register-block::before,
  .register-block::after {
    position: absolute;
    z-index: -1;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    content: "";
    background: white;
    border: solid 1px #e6e6e6;
    border-radius: 5px;
    -webkit-transform:  scale(0.9) translate(0,0);
    transform:          scale(0.9) translate(0,0);
    transition: all ease 0.3s;
  }

    .register-block:hover::before {
      z-index: -1;
      -webkit-transform:  scale(0.96) translate(0,16px);
      transform:          scale(0.96) translate(0,16px);
    }

  .register-block::after {
    transition-delay: 0.05s
  }

    .register-block:hover::after {
      z-index: -2;
      -webkit-transform:  scale(0.92) translate(0,32px);
      transform:          scale(0.92) translate(0,32px);
    }












/**********************************
***********************************
/* THEME CSS */
/**********************************
***********************************/

body {
  font-family: 'Roboto Condensed', "Helvetica Neue", Helvetica, Arial, sans-serif;

  /* DARK PINK */
  background: #f2395a;

  /*TEAL*/
  /*background: #00B3B4;*/

  font-size: 20px;
  line-height: 28px;
  color: #323b40;
  margin: 40px 0;
}

  body::before {
    position: fixed;
    content: "";
    height: 400px;
    width: 400px;
    top: 20px;
    right: 30px;
    background: url('../_theme-styles/img/CSS30_Logo.png') no-repeat;
    background-size: 100%;
    opacity: .2;
  }


h1,h2,h3,h4,h5,h6 {
  font-family: 'Bubblegum Sans', cursive;
}

  h1 {
    width: 60%;
    max-width: 960px;
    margin: 0 auto 60px;
    transform: rotate(-3deg);
    color: white;
    text-align: left;
    font-size: 2.1rem;
    line-height: 2.1rem;
    text-shadow:  0 1px 0 hsl(52,7%,20%),
                  0 2px 0 hsl(52,7%,18%),
                  0 3px 0 hsl(52,7%,16%),
                  0 4px 0 hsl(52,7%,14%),
                  0 5px 0 hsl(52,7%,12%),
                  0 6px 0 hsl(52,7%,10%),
                  0 7px 0 hsl(52,7%,8%),
                  0 8px 0 hsl(52,7%,6%),

                  0 0 5px rgba(0,0,0,.05),
                  0 1px 3px rgba(0,0,0,.2),
                  0 3px 5px rgba(0,0,0,.2),
                  0 5px 10px rgba(0,0,0,.2),
                  0 10px 10px rgba(0,0,0,.2),
                  0 20px 20px rgba(0,0,0,.3);
  }

    h1 small {
      font-size: 1.5rem;
      display: block;
      color: #fa90a3;
      text-shadow: none;
    }


  h2 {
    color: white;
  }

    h2 small {
      font-weight: normal;
      font-size: 0.7rem;
      display: block;
      color: #323b40;
    }

  h3 small {
    font-weight: normal;
    font-family: 'Roboto Condensed', "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #888;
    display: block;
  }

  h4 {
    margin: 1rem 0
  }


a:link, a:visited {
  color: #00B3B4;
  text-decoration: none;
  border-bottom: dotted 1px #00B3B4;
}
  a:hover {
    background: #00B3B4;
    color: white;
    text-decoration: none;
  }


button {
  font-size: 1rem;
}


code {
  background: #fd6000;
  color: white;
  padding: 4px 6px;
  font-family: 'Nova Mono', monospace;
  font-size: 1rem;
  border-radius: 2px;
  box-shadow: inset 0 1px 2px #5e2400;
  display: inline-block;
}


section {
  position: relative;
  border-top: solid 1px #f9f9f9;
  border-bottom: solid 1px #ddd;
  padding: 25px 0;
}

  section:first-child::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 1px;
    border-top: solid 1px #ddd;
    top: -2px;
    left: 0;
  }

  section:last-child::after {
    position: absolute;
    content: "";
    width: 100%;
    border-top: solid 1px white;
    bottom: -2px;
    left: 0;
  }

  section footer {
    margin: inherit;
    width: inherit;
    color: inherit;
    font-size: inherit;
  }

  section header,
  section article,
  section nav,
  section aside,
  section footer,
  section .logo,
  section .articles {
    background: rgba(140, 204, 231, 0.2);
    border: solid 1px rgba(140, 204, 231, 0.3);
    padding: 2%;
    margin: 0 0 2%;
    font-size: 1rem;
    box-sizing: border-box;
  }

  section ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

    section ul li {
      display: inline-block;
      margin: 0 2% 0 0;
    }


.course-files {
  text-align: center;
}


a.button-theme {
  color: white;
  font-weight: bold;
  text-transform: uppercase;
}


.button-theme {
  position: relative;
  display: inline-block;
  padding: 10px 30px;
  text-align: center;
  color: white;

  text-shadow:-1px -1px 0 #2C7982;
  background: #00B3B4;
  border:1px solid #379AA4;

  -webkit-border-radius:4px;
  -moz-border-radius:4px;
  border-radius:4px;

  -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
  -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
  box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
}

  .button-theme::before {
    background:#fa90a3;
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ef758b), to(#fa90a3));

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;

    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .3) inset, 0 1px 0 rgba(255, 255, 255, .5);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .3) inset, 0 1px 0 rgba(255, 255, 255, .5);
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3) inset, 0 1px 0 rgba(255, 255, 255, .5);

    position: absolute;
    content: "";
    left: -15px;
    right: -15px;
    top: -14px;
    bottom: -17px;
    z-index: -1;
  }

  .button-theme:active {
    -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 2px 0 #338A94, 0 2px 2px rgba(0, 0, 0, .5);
    -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 2px 0 #338A94, 0 2px 2px rgba(0, 0, 0, .5);
    box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 2px 0 #338A94, 0 2px 2px rgba(0, 0, 0, .5);
    top: 4px;
  }

  .button-theme:active::before{
    top: -18px;
    bottom: -13px;
  }

  .button-theme:hover {
    background: #0bbfc0;
  }

  .button-theme small {
    display: block;
    color: #007a7b;
    text-shadow: none;
  }


.sandbox,
.final-result,
.info {
  position: relative;
  background: #e7eef1;
  width: 60%;
  max-width: 960px;
  margin: 60px auto;
  padding: 40px 40px 60px;
  box-sizing: border-box;
  border-radius: 2px;
  box-shadow: 0 12px 0 -6px #fa90a3;
}

  

.button{
      cursor: pointer;
    }

.next {
  background-color: #4CAF50;
  color: white;
}a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  float: right;
}
.previous {
  background-color: #9999ff;
  color: black;
  float:left;
}
  </style>
</head><body> <a href="dashboard.php" class="previous">&laquo;<font color="white"> Back to Dashboard</a><h1><small> <b>Registration Details<a href="displaycontact.php" class="next"><font color="white"> check next>></a></b></small>Clients </h1>
<div class="sandbox">
      <div class="content">
          <div class="register-wrapper">
           
              
              <div class="container">
  
              
  <table >
    <thead>
      <tr>
      
       <font size="10%" ><th>Name</b></th>
        <th>Gender</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
       
     </font>
        
        
      </tr>
    </thead>
    <tbody>
      <?php
     while($result=mysqli_fetch_assoc($data))
     {
      echo  "<tr>
        
        <td>".$result['name']."</td>       
         <td>".$result['gender']."</td>
         <td>".$result['email']."</td>
        <td>".$result['password']."</td>
        <td>".$result['mobile']."</td>
        
        
      </tr>";
     }
   }

     else
     {
      echo "No Record Found!!!!!";
     }
     ?>
    </tbody>
  </table></center>
</div>
            </div>
          </div>

        </section>

      </div>
    </div>

</body></html>