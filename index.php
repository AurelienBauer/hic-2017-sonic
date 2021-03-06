<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Overview - Redmine</title>
    <meta name="description" content="Redmine" />
    <meta name="keywords" content="issue,bug,tracker" />
    <meta content="authenticity_token" name="csrf-param" />
    <meta content="TPiPnUsNZkh7nNNI24IUni0cLWpY47rvo6xUrID63eM=" name="csrf-token" />
    <link rel='shortcut icon' href='/public/favicon.ico' />
    <link href="/public/stylesheets/jquery/jquery-ui-1.11.0.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/public/stylesheets/application.css" media="all" rel="stylesheet" type="text/css" />

    <script src="/public/javascripts/jquery-1.11.1-ui-1.11.0-ujs-3.1.4.js" type="text/javascript"></script>
    <script src="/public/javascripts/application.js?1396109606" type="text/javascript"></script>
    <script type="text/javascript">
      //<![CDATA[
$(window).load(function(){ warnLeavingUnsaved('The current page contains unsaved text that will be lost if you leave this page.'); });
//]]>
    </script>


    <!-- page specific tags -->
  </head>
  <body class="theme-Redmine project-redmine controller-wiki action-show">
    <div id="wrapper">
      <div id="wrapper2">
	<div id="wrapper3">
	  <div id="top-menu">
	    <div id="account">
	      <ul><li><a href="/login" class="login">Sign in</a></li>
		<li><a href="/account/register" class="register">Register</a></li></ul>    </div>

	    <ul><li><a href="/" class="home">Home</a></li>
	      <li><a href="/projects" class="projects">Projects</a></li>
	      <li><a href="http://www.redmine.org/guide" class="help">Help</a></li></ul></div>

	  <div id="header">
	    <div id="quick-search">
	      <form accept-charset="UTF-8" action="/projects/redmine/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
		<input name="wiki_pages" type="hidden" value="1" />
		<label for='q'>
		  <a href="/projects/redmine/search" accesskey="4">Search</a>:
		</label>
		<input accesskey="f" class="small" id="q" name="q" size="20" type="text" />
	      </form>
	    </div>

	    <h1>Redmine</h1>

	    <div id="main-menu">
	      <ul><li><a href="/projects/redmine" class="overview">Overview</a></li>
		<li><a href="/projects/redmine/wiki/Download" class="download">Download</a></li>
		<li><a href="/projects/redmine/activity" class="activity">Activity</a></li>
		<li><a href="/projects/redmine/roadmap" class="roadmap">Roadmap</a></li>
		<li><a href="/projects/redmine/issues" class="issues">Issues</a></li>
		<li><a href="/projects/redmine/news" class="news">News</a></li>
		<li><a href="/projects/redmine/wiki" class="wiki selected">Wiki</a></li>
		<li><a href="/projects/redmine/boards" class="boards">Forums</a></li>
		<li><a href="/projects/redmine/repository" class="repository">Repository</a></li></ul>
	    </div>
	  </div>

	  <div id="main" class="">
	    <div id="sidebar">
	      <a name="Latest-releases"></a>
	      <h3 >Latest releases<a href="#Latest-releases" class="wiki-anchor">&para;</a></h3>


	      <p><a href="/projects/redmine/wiki/Download" class="wiki-page">3.4.2 (2017-07-16)</a><br /><a href="/projects/redmine/wiki/Download" class="wiki-page">3.3.4 (2017-07-02)</a><br /><a href="/projects/redmine/wiki/Download" class="wiki-page">3.2.7 (2017-07-02)</a></p>


	      <a name="Resources"></a>
	      <h3 >Resources<a href="#Resources" class="wiki-anchor">&para;</a></h3>


	      <p><a href="/projects/redmine/wiki/Guide" class="wiki-page">User's Guide</a>, <a href="/projects/redmine/wiki/PrivacyPolicy" class="wiki-page">Privacy Policy</a><br /><a href="/projects/redmine/wiki/Developer_Guide" class="wiki-page">Developer's Guide</a><br /><a href="/projects/redmine/wiki/Changelog" class="wiki-page">Changelog</a>, <a href="/projects/redmine/wiki/Security_Advisories" class="wiki-page">Security</a><br /><a href="/projects/redmine/wiki/FAQ" class="wiki-page">FAQ</a>, <a href="/projects/redmine/wiki/HowTos" class="wiki-page">HowTo's</a><br /><a href="/plugins">Plugins</a>, <a href="/projects/redmine/wiki/Theme_List" class="wiki-page">Themes</a></p>

	      <h3>Wiki</h3>
	      <ul>
		<li><a href="/">Start page</a></li>
		<li><a href="/projects/redmine/wiki/index">Index by title</a></li>
		<li><a href="/projects/redmine/wiki/date_index">Index by date</a></li>
	      </ul>

	      <br />
	      <script type="text/javascript"><!--
						 google_ad_client = "pub-0447284344517370";
						 google_alternate_color = "FFFFFF";
						 google_ad_width = 160;
						 google_ad_height = 600;
						 google_ad_format = "160x600_as";
						 google_ad_type = "text_image";
						 google_ad_channel = "";
						 google_color_border = "EEEEEE";
						 google_color_bg = "FFFFFF";
						 google_color_link = "484848";
						 google_color_text = "484848";
						 google_color_url = "2A5685";
						 //-->
	      </script>
	      <script type="text/javascript"
		      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	      </script>
	      <br />


	    </div>

	    <div id="content">

	      <div class="contextual">






		<a href="/projects/redmine/wiki/Overview/history" class="icon icon-history">History</a>
	      </div>




	      <div class="wiki wiki-page">
		<a name="Redmine"></a>
		<h1 >Redmine<a href="#Redmine" class="wiki-anchor">&para;</a></h1>


		<p>Redmine is a flexible project management web application. Written using the Ruby on Rails framework, it is cross-platform and cross-database.</p>


		<p>Redmine is open source and released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html" class="external">GNU General Public License v2</a> (GPL).</p>


		<a name="Features"></a>
		<h2 >Features<a href="#Features" class="wiki-anchor">&para;</a></h2>


		<p>Some of the main features of Redmine are:</p>


		<ul>
		  <li>Multiple projects support</li>
		  <li>Flexible role based access control</li>
		  <li>Flexible issue tracking system</li>
		  <li>Gantt chart and calendar</li>
		  <li>News, documents &#38; files management</li>
		  <li>Feeds &#38; email notifications</li>
		  <li>Per project wiki</li>
		  <li>Per project forums</li>
		  <li>Time tracking</li>
		  <li>Custom fields for issues, time-entries, projects and users</li>
		  <li>SCM integration (SVN, CVS, Git, Mercurial and Bazaar)</li>
		  <li>Issue creation via email</li>
		  <li>Multiple LDAP authentication support</li>
		  <li>User self-registration support</li>
		  <li>Multilanguage support</li>
		  <li>Multiple databases support</li>
		</ul>


		<p>Read more about <a href="/projects/redmine/wiki/Features" class="wiki-page">Redmine features</a>.</p>


		<a name="Documentation"></a>
		<h2 >Documentation<a href="#Documentation" class="wiki-anchor">&para;</a></h2>


		<p>You can read the <a href="/projects/redmine/wiki/Guide" class="wiki-page">Redmine guide</a>.</p>


		Other resources:
		<ul>
		  <li><a href="/projects/redmine/wiki/Changelog" class="wiki-page">Changelog</a></li>
		  <li><a href="/projects/redmine/wiki/FAQ" class="wiki-page">Frequently Asked Questions</a></li>
		  <li><a href="/projects/redmine/wiki/HowTos" class="wiki-page">HowTos</a></li>
		  <li><a href="/projects/redmine/wiki/Plugins" class="wiki-page">Plugins</a></li>
		  <li><a href="/projects/redmine/wiki/Themes" class="wiki-page">Themes</a></li>
		  <li><a href="/projects/redmine/wiki/Logo" class="wiki-page">Logo and Icon</a></li>
		  <li><a href="/projects/redmine/wiki/ThirdPartyTools" class="wiki-page">Third Party Tools</a></li>
		</ul>


		<a name="Online-demo"></a>
		<h2 >Online demo<a href="#Online-demo" class="wiki-anchor">&para;</a></h2>


		<p>A shared online demo can be found at <a class="external" href="http://demo.redmine.org/">http://demo.redmine.org/</a>. It's been setup to give registered users the ability to create their own projects. This means once you register, you can create your own project on there and try out the project administration features.</p>


		<p>Alternatively, you can get your own Redmine demo environment at <a class="external" href="http://m.redmine.org">http://m.redmine.org</a> with full administrator privileges after filling a simple form.</p>


		<a name="Support-38-getting-help"></a>
		<h2 >Support &#38; getting help<a href="#Support-38-getting-help" class="wiki-anchor">&para;</a></h2>


		<p>For getting help or discussing about Redmine, you can browse the <a href="http://www.redmine.org/projects/redmine/boards" class="external">Redmine forums</a> hosted right here in Redmine. We also have a fairly <a href="/projects/redmine/wiki/IRC" class="wiki-page">active chatroom</a> -  join #redmine on the <a href="http://freenode.net/irc_servers.shtml" class="external">freenode</a> IRC network. Some more information about <a href="/projects/redmine/wiki/IRC" class="wiki-page">IRC</a> <a href="/projects/redmine/wiki/IRC" class="wiki-page">is here</a></p>


		<p>Before submitting a bug report, a patch or a feature request here, please read the <a href="/projects/redmine/wiki/Submissions" class="wiki-page">Submission guidelines</a>.</p>


		<a name="Contributing-and-helping-out"></a>
		<h2 >Contributing and helping out<a href="#Contributing-and-helping-out" class="wiki-anchor">&para;</a></h2>


		<p>Redmine is built and maintained by community volunteers. If you enjoy using it and would like to give back to the community, the <a href="/projects/redmine/wiki/Contribute" class="wiki-page">Contribute</a> page has several ideas. Software development experience is not required. Check out the <a href="/projects/redmine/wiki/Teams" class="wiki-page">Teams</a> Page if you are interested in a specific area to contribute regularly.</p>


		<p>You can also make a donation and get listed on the <a href="/projects/redmine/wiki/Donors" class="wiki-page">Redmine Donors page</a>.</p>


		<a name="Who-uses-Redmine"></a>
		<h2 >Who uses Redmine?<a href="#Who-uses-Redmine" class="wiki-anchor">&para;</a></h2>


		<p><a href="/projects/redmine/wiki/WeAreUsingRedmine" class="wiki-page">This page lists</a> some companies and projects using Redmine.</p>


		<a name="Redmine-books"></a>
		<h2 >Redmine books<a href="#Redmine-books" class="wiki-anchor">&para;</a></h2>


		<table style="width: 80%;" class="noborder">
		  <tr>
		    <td style="text-align:center;"><a href="http://www.packtpub.com/mastering-redmine/book"><img src="/attachments/download/8856/mastering_redmine.jpg" style="width:80px;padding:1em;" alt="" /></a></td>
		    <td style="text-align:center;"><a href="http://www.packtpub.com/redmine-plugin-extension-and-development/book"><img src="/attachments/download/13894/plugin_dev.png" style="width:80px;padding:1em;" alt="" /></a></td>
		    <td style="text-align:center;"><a href="https://www.packtpub.com/big-data-and-business-intelligence/redmine-cookbook"><img src="/attachments/download/14647/redmine_cookbook.png" style="width:80px;padding:1em;" alt="" /></a></td>
		  </tr>
		  <tr>
		    <td style="width: 30%;padding:1em;"><em>Mastering Redmine</em> is a comprehensive guide with tips, tricks and best practices for using Redmine.<br />You can <a href="http://www.packtpub.com/mastering-redmine/book" class="external">buy it online</a>.</td>
		    <td style="width: 30%;padding:1em;"><em>Redmine Plugin Extension and Development</em> provides an overview of the tools available to developers who want to extend Redmine to work their way.<br />You can <a href="http://www.packtpub.com/redmine-plugin-extension-and-development/book" class="external">buy it online</a>.</td>
		    <td style="width: 30%;padding:1em;"><em>Redmine Cookbook</em>: over 80 hands-on recipes to improve your skills in project management, team management, process improvement, and Redmine administration.<br />You can <a href="https://www.packtpub.com/big-data-and-business-intelligence/redmine-cookbook" class="external">buy it online</a>.</td>
		  </tr>
		</table>
	      </div>









	      <div style="clear:both;"></div>
	    </div>
	  </div>
	</div>

	<div id="ajax-indicator" style="display:none;"><span>Loading...</span></div>
	<div id="ajax-modal" style="display:none;"></div>

	<div id="footer">
	  <div class="bgl"><div class="bgr">
	      Powered by <a href="http://www.redmine.org/">Redmine</a> &copy; 2006-2014 Jean-Philippe Lang
	  </div></div>
	</div>
      </div>
    </div>

  </body>
</html>
