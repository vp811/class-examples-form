<style>
* {
	margin:0;
	padding: 0;
	border: 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Comfortaa', sans-serif;
}

p {
	font-family: 'Open Sans', sans-sans-serif;
	margin: 15px 0px;
	line-height: 25px;
}

header {
	background: #333;
	padding: 10px 0;
	position: fixed;
	left: 0;
	right: 0;
}

header nav ul li {
	display: inline;
}

header nav a {
	color: white;
	text-decoration: none;
	font-weight: bold;
	font-size: 28px;
	margin: 0 20px;
}

header nav a:hover {
	color: red;
}

.hero-image-section {
	background-image: url("../images/hero-image.jpg");
	background-attachment: fixed;
	background-size: cover;
	padding: 200px 0;
	text-align: center;
}

.container {
	max-width: 900px;
	margin: 0 auto;
}

.band-section {
	padding: 65px 0;
}

.band-section h1 {
	font-size: 40px;
	text-align: center;
}

.members {
	width: 250px;
	display: inline-block;
}

.members img {
	width: 210px;
}

.band-members {
	text-align: center;
}

.section-break {
	background: url("../images/background.jpg");
	background-attachment: fixed;
	background-size: cover;
	background-position: bottom;
	padding:500px 0;
}

.tour {
	padding: 100px 0;
}

.city {
	width: 250px;
	display: inline-block;
	margin-top: 30px;
	padding: 35px 20px;
}

.city img {
	width: 250px;
	border: 1px solid black;
}

.city p:first-of-type{
	color: gray;
}

.city a {
	color: white;
	background: #333;
	padding: 10px 30px;
	border-radius: 5px;
}

.city:hover {
	box-shadow: 1px 1px 1px #333;
}

.tour .city:nth-child(even) {
	background: #f2f2f2;
}

.section-break-bottom {
	background: url("../images/background-lower.jpg");
	background-attachment: fixed;
	background-size: cover;
	background-position: bottom;
	padding:500px 0;
}

.contact-section {
	padding: 100px 0;
	width: 630px;
	margin: 0 auto;
}

footer {
	background: #333;
	text-align: right;
	padding: 10px 30px;
}

footer img {
	width: 40px;
}

:focus {
	outline: none;
}

.circle {
	width: 100px;
	height: 100px;
	background: red;
	color: white;
	border-radius: 50%;
}

.circle p {
    padding: 38px 11px;
		transition: 3s;
}

.circle:hover {
	animation: rotate-icon 3s linear;
	background: blue;
}

</style>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="band" href="#band">Band</a></li>
        <li><a href="#tour">Tour</a></li>
        <li><a href="#contact-us">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <div class="container thank-you">
    <img src="images/foo-fighters.png" alt="Foo Fighters" title="Foo Fighters" width="500" />
    <h1>Thank you for your enquiry</h1>
    <p>Thanks for your interest. we have received your message, and we will be in touch shortly.</p>
  </div>

  <footer>
    <div class="socialmedia">
      <a href="https://twitter.com/foofighters?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="images/twitter.png" alt="twitter" title="twitter" /></a>
      <a href="https://www.facebook.com/foofighters/"><img src="images/facebook.png" alt="facebook" title="facebook" /></a>
      <a href="https://www.instagram.com/foofighters/?hl=en"><img src="images/ig.png" alt="instagram" title="instagram" /></a>
    </div>
  </footer>
</body>
