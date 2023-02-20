<html>
<head>
<meta name="viewport" content="initial-scale=1,user-scalable=no" >
</head>
<body>
<main>
<a href="#"  onclick="document.querySelector('.slide1').style.display='block';" ><div class="box"  >IMAGE</div></a>
<div class="slide slide1" >
<button class="btn-close"onclick="document.querySelector('.slide1').style.display='none';">CLOSE</button><br><br>
<?php
foreach(glob("*.jpeg") as $i){
echo "
   <div class='boximg'>
   <img class='img' loading='lazy' src='".$i."'></img><span>$i</span>
   <a href='".$i."'><button class='btn' >Open</button>
   <form action='#' method='post' >
   <input type='submit' name='ags' value='Delete' >
   </form>
   </button>
   </div>";
   if(isset($_POST['ags'])){
   unlink($i);
   }
}
?>
</div>
<div class="box" onclick="document.querySelector('.slide2').style.display='block';">video</div>
<div class="slide slide2" >
<button class="btn-close"onclick="document.querySelector('.slide2').style.display='none';">CLOSE</button><br><br>
<?php
foreach(glob("*.mp4") as $i){
echo "<div class='boxvid'>
 <video
 id='my-video'
 controls
 class='video-js'
 preload='auto'
 width='640'
 height='264'
 poster=''
 data-setup='{}'
 disablePictureInPicture='true'controlList='nodownload'playsinline
 src='".$i."'>
 </video><a href='".$i."'></div>";
 }
?>
</div>
</div>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
.box {
width:250px;
height:40px;
border-radius:5px;
padding:15px 0 12px 0;
background:#ddd;
text-align:center;
background:rgba(0,0,0,0.5);
color:#fff;
border:1px solid #ccc;
margin-right:2%;
}
@media(max-width:1500px){.box{float:left;margin:0 auto;}}
@media(max-width:800px){.box{display:block;}main{margin:0}}
*{margin:0;
padding:0;
}
.w3-small{}
span{font-family: 'Roboto', sans-serif;font-size:15px;text-align:left;padding:10px;color:#FFFDFA;}
.slide {
position:fixed;
background:black;
height:100%;
width:100%;
top:0;
display:none;
overflow:auto;
}
body{background:url("bg/bg.jpeg");
background-repeat:no-repeat;
background-size:cover;
background-position:center;
font-family: 'Open Sans', sans-serif;
font-family: 'Roboto', sans-serif;
}
.boximg{width:98%;
height:90px;
background:#2E2E2E;
border-radius:16px;
margin:1%;
padding:5px;
border:0;

}
.img{
width:auto;
height:100%;
outline:none;
float:right;
border-radius:12px;
background:#454545;
border:1px solid #ccc;
}
a{cursor:none;
text-decoration:none;
color:#fff;
}
.btn-close{background:#454545;
cursor:none;
height:40px;
width:60px;
float:right;
border:0;
color:#fff;}
.btn{background:#737373;
cursor:none;
height:40px;
width:60px;
float:left;
border:0;
margin-top:25px;
margin-right:2%;
color:#fff;}
.boxvid{
border-radius:8px;
background:url(vid.gif);
background-repeat:no-repeat;
background-size:100px;
border:1px solid #ccc;
margin:0;
}
.vid{background:url("bg/bg.jpeg");}
.danger{background:#FF5C5C;}
video{background:url("bg/bg.jpeg");}
</style>
</div>

<?php
foreach(glob("*") as $i){
if(is_dir($i)){
echo "<a href='$i'  onclick='document.querySelector('.slide1').style.display='block';' ><div class='box'  >$i</div></a>
<div class='slide slide3' >
<button class='btn-close'onclick='document.querySelector('.slide3').style.display='none';'>CLOSE</button><br><br>
</div>
</div>
";
}}
?>
</main>
</body>
</html>
