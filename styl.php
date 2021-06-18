<?php
    header("Content-type: text/css; charset: UTF-8");
?>
body {
  font-family: "Montserrat";
 background-image: images.jpg;
 background-color: lightblue;
}
#Middle{
position:auto;
}
ul{
  list-style: none;
}
#title {
  text-align: center;
  background-color: red;
}
h1 {
  font-family: "Montserrat-Black";
  font-size: 3.5rem;
  line-height: 1.5;
}
h2 {
  font-family: "Montserrat-Bold";
  font-size: 3rem;
  line-height: 1.5;
}
h3 {
  font-family: "Montserrat-Bold";
  font-size: 1.5rem;
}
p {
  color: #8f8f8f;
}
.container-fluid {
  padding: 3% 5% 5%;

}

.navbar {
  padding: 1 1 1 1rem;
}
.navbar-brand {
  font-family: "Ubuntu";
  font-size: 2.5rem;
  font-weight: bold;
}
.nav-item {
  padding: 0 18px;
}
.nav-link {
  font-size: 1.2rem;
  font-family: "Montserrat-light"
}
.img{
   position: absolute;
  left: 60%;
  bottom: 55px;
  height: 60%;
  width: 30%;
}

.social-icon {
  margin: 20px 10px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
#foot{
  padding:20 1 1 0;
}
.row{
  margin:0;

}
.social-icons li{
    list-style: none;
    display: inline;
    padding: 0.5rem;

}
.img-about{
  padding:10;
}
.logohp{
/* width: auto ; */
padding-left: 20px;
padding-bottom: 40px;
max-width: 85% ;
height: auto ;
}
