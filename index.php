<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Bloom's Taxonomy of Tech. Integration</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
	function show_google_authenticated_apps() 
		{
		$('.fade').fadeOut('medium');
		$('.google').fadeIn('medium');
		}	
	function show_all_apps() 
		{
		$('.google').fadeOut('medium', function(){
			$('.fade').fadeIn('medium');
		});
		}
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-38674908-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	
</head>

<body>

<!-- TITLE BAR -->

	<div id="title">
		<div id="in-front">
			<h1 class="rotate"><a href="http://mmacfadden.com/bloom">Bloom's <br/> Taxonomy <br/> of Tech. <br/> Integration</a></h1>
			<p><a href="http://www.schrockguide.net/bloomin-apps.html" target="_blank">Inspired by the work <br/>of Kathy Shrock</a></p>
			<p id="mike"><a href="http://mmacfadden.com" target="_blank">Cobbled together <br/>by Mike Macfadden</a></p>
			
			<img src="images/google_button.png" id="google_apps" title="Log in to these apps with a Google Account" onclick="show_google_authenticated_apps()"/>
			<img src="images/all_apps_button.png" id="all_apps" title="All Apps" onclick="show_all_apps()"/>

			<textarea style="margin-top:40px;" onclick="this.focus(); this.select();">&lt;iframe src="http://mmacfadden.com/bloom" frameborder="0" height="620" width="940"&gt; &lt;/iframe&gt;</textarea>	
				
		</div>
		<p id="bottom-of-title">*Optimized for<br/>Chrome and FireFox</p>
	</div>

<!-- CREATING - LEVEL 6 -->
	
	<div id="wrapper">

		<div id="creating" class="levels">
			<div class="label">
				<h2>Creating</h2>
			</div>

			<a href="http://www.goanimate.com" target="_blank"><img src="images/goanimate.png" title="GoAnimate.com" class="fade google" /></a>
			<a href="http://www.mmacfadden.com/blog/one-shot-video/" target="_blank"><img src="images/flip.png" title="Flip Cams" class="fade" /></a>
			<a href="http://www.prezi.com/" target="_blank"><img src="images/prezi.png" title="Prezi.com" class="fade" /></a>
			<a href="http://www.smore.com" target="_blank"><img src="images/smore.png" title="Smore.com" class="fade" /></a>
			<a href="http://www.wevideo.com/" target="_blank"><img src="images/wevideo.png" title="WeVideo.com" class="fade google" /></a>
			<a href="http://www.mmacfadden.com/google-earth/" target="_blank"><img src="images/googleearth.jpg" title="Google Earth" class="fade" /></a>
		</div>

<!-- EVALUTING - LEVEL 5 -->
		
		<div id="evaluating" class="levels">
			<div class="label">
				<h2>Evaluating</h2>
			</div>

			<a href="http://www.screenr.com" target="_blank"><img src="images/screenr.png" title="Screenr.com" class="fade google" /></a>
			<a href="http://www.checkthis.com" target="_blank"><img src="images/checkthis.png" title="CheckThis.com" class="fade google" /></a>
			<a href="http://www.edmodo.com" target="_blank"><img src="images/edmodo.png" title="Edmodo.com" class="fade" /></a>
			<a href="http://www.flashdraft.org" target="_blank"><img src="images/flashdraft.png" title="FlashDraft.org" class="fade" /></a>
		</div>

<!-- ANALYZING - LEVEL 4 -->

		<div id="analyzing" class="levels">
			<div class="label">
				<h2>Analyzing</h2>
			</div>
			
			<a href="http://www.blogger.com" target="_blank"><img src="images/blogger.png" title="Blogger.com" class="fade google" /></a>
			<a href="http://www.flisti.com" target="_blank"><img src="images/flisti.png" title="Flisti.com" class="fade" /></a>
			<a href="http://www.kidblog.com" target="_blank"><img src="images/kidblog.png" title="KidBlog.com" class="fade google" /></a>
			<a href="http://www.surveymonkey.com" target="_blank"><img src="images/surveymonkey.png" title="SurveyMonkey.com" class="fade google" /></a>
		</div>

<!-- APPLYING - LEVEL 3 -->
		
		<div id="applying" class="levels">
			<div class="label">
				<h2>Applying</h2>
			</div>

			<a href="http://www.pixton.com" target="_blank"><img src="images/pixton.png" title="Pixton.com" class="fade google" /></a>
			<a href="http://www.mangahigh.com" target="_blank"><img src="images/mangahigh.png"title="MangaHigh.com" class="fade" /></a>
			<a href="http://www.scootpad.com" target="_blank"><img src="images/scootpad.png" title="ScootPad.com" class="fade google" /></a>
			<a href="http://www.khanacademy.org" target="_blank"><img src="images/khan.png" title="KhanAcademy.org" class="fade google" /></a>
		</div>

<!-- UNDERSTANDING - LEVEL 2 -->
		
		<div id="understanding" class="levels">
			<div class="label">
				<h2>Understanding</h2>
			</div>

			<a href="http://www.udacity.com/" target="_blank"><img src="images/udacity.png" title="Udacity" class="fade google" /></a>
			<a href="http://www.youtube.com/user/smartclassrooms" target="_blank"><img src="images/notebook.png" title="SMART Notebook" class="fade" /></a>
			<a href="https://www.pearsonsuccessnet.com/snpapp/login/login.jsp?showLoginPage=true" target="_blank"><img src="images/envisionmath.png" title=" Envision Math" class="fade" /></a>
		</div>

<!-- REMEMBERING - LEVEL 1 -->

		<div id="remembering" class="levels"></a>
			<div class="label">
				<h2>Remembering</h2>
			</div>

			<a href="http://www.quizlet.com" target="_blank"><img src="images/quizlet.png" title="Quizlet.com" class="fade" /></a>
			<a href="http://www.wordle.net" target="_blank"><img src="images/wordle.png" title="Wordle.net" class="fade" /></a>
			<a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png" title="YouTube.com" class="fade google" /></a>
			<a href="http://www.schooltube.com" target="_blank"><img src="images/schooltube.png" title="SchoolTube.com" class="fade google" /></a>
			<a href="http://www.teachertube.com" target="_blank"><img src="images/teachertube.png" title="TeacherTube.com" class="fade" /></a>
			<a href="http://www.weebly.com" target="_blank"><img src="images/weebly.png" title="Weebly.com" class="fade" /></a>
			<a href="http://www.viewpure.com" target="_blank"><img src="images/viewpure.png" title="ViewPure.com" class="fade" /></a>
		</div>

	</div>

<!-- Blogger, Pixton, YouTube, xtranormal, SlideRocket, PowToon, KidBlog,Udacity -->

</body>
</html>
