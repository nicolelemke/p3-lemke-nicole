<link rel="stylesheet" href="https://use.typekit.net/izw1gbm.css">


<style type="text/css">


* {
  border: 0;
  margin: 0;
  padding: 0;
  font-family: brandon-grotesque, sans-serif;
}

body, main {
  overflow-x: hidden;
}

h1 {
  text-align: left;
  font-family: source-sans-pro, sans-serif;
  font-size: 65px;
  font-weight: 400;
  color: white;
  margin: 0;
  padding: 0;
}

p {
  text-align: center;
  font-family: brandon-grotesque, sans-serif;
}

p {
  font-weight: 400;
  font-size: 20px;
  line-height: 32px;
}

p::selection, h1::selection, a::selection, img::selection {
  background: #F8AC9A;
}

.contactheader {
  background-color: white;
  height: 135px;
  position: relative;
}

.contactheader h2 {
  float: right;
  padding-right: 50px;
  padding-top: 35px;
  font-size: 45px;
  font-weight: 400;
  color: #2E2D2B;
}

.formmain {
  position: relative;
  height: 700px;
  width: 100%;
  background-color: #DB7758;
  width: 100%;
}

.formmain h1 {
  color: #2E2D2B;
  text-align: center;
}

footer {
  position: relative;
  background: #2E2D2B;
  bottom: 0;
  height: 160px;
  width: 100%;
}

footer ul li {
  display: inline;
}

footer a {
  color: #EEBF9C;
  font-family: source-sans-pro, sans-serif;
  font-size: 28px;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
}

a {
  color: #EEBF9C;
  font-family: source-sans-pro, sans-serif;
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
}

ul {
  text-align: center;
  font-size: 24px;
  color: #F8AC9A;
  text-transform: uppercase;
}

a:hover {
  color: #2E2D2B;
  font-weight: 600;
}


.formfooter {
  position: relative;
  background-color: white;
  height: 100px;
  width: 100%;
  text-align: center;
  padding-top: 50px;
  bottom: 0;
}

.formfooter {
  position: relative;
  background-color: white;
  height: 100px;
  text-align: center;
  padding-top: 50px;
}

.formfooter a {
  color: #2E2D2B;
}

.formfooter a:hover{
  color: #F8AC9A;
  }

.contactsection {
    position: relative;
    max-width: 800px;
    margin: auto;
  }

.contactlogo {
  text-align: center;
  margin: auto;
  padding: 30px;
}

.contacthome {
  float: left;
  padding-left: 50px;
}

.contactabout {
  float: right;
  padding-right: 50px;
}

.title {
  padding-top: 50px;
}

</style>




<header class="contactheader">
  <h2>NICOLE LEMKE</h2>
</header>

<div class="formmain">
  <div class="contactselection">
    <h1 class="title">MISSING FIELDS</h1>
    <p>Sorry, you have not completed all of the required fields.</p>
    <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

    <ul>
    <?php
    	for($i=0; $i<count($this->missing_required_fields); $i++){
    		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
    	}
    ?>
    </ul>

    <p><a href= "../formpage.html">Back To Form</a></p>

    <div class="contactlogo">
      <img src="images/logo3.png" alt="NL Mtn Logo" title="NL Mtn Logo" width="300" />
    </div>
  </div>
</div>

<footer class="formfooter">

  <nav>
    <ul>
      <li class="contacthome"><a href="index.html">HOME</a></li>
      <li><a href="work/work.html">WORK</a></li>
      <li class="contactabout"><a href="about/about.html">ABOUT</a></li>
    </ul>
  </nav>

</footer>
