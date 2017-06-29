@extends('layouts.app')
@section('directive')
<div class="head-text">
    <img class="img-responsive main-logo-img" src="{{asset('images/main-logo.gif')}}" />
    <h1>Welcome to BBEAU.CA</h1>
    <h2>Show your work,&nbsp<br>beautifully</h2>
    <!--
    <p>Get Bryn to class up your website</a>
        <br />
        or develop tools that make your work easier. </p>
         -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
@section('styles')
<style>
.wrapper {
    width:300px;
    text-align:center;
    border:none;
    margin:.5em auto;
    overflow:hidden
  }

  .wrapper a img {
    margin:0 -100%;
    vertical-align:middle;
  }

  .feature .image {
    display: inline-block;
    height: 100%;
    /* overflow: hidden; */
    position: relative;
    width: 100;
}

  @media screen and (max-width: 1680px){

    #main * .row > * {
        padding-left: 0px;
    }
}
</style>
@endsection
@section('content')
            <!-- Main -->
            <div id="main">
                <header class="major container 75%" style="margin-bottom: 0px;">
                  <h2>About BBEAU</h2>
                  <p>Bryn is a web developer working in Vancouver, British Columbia <br><br>He has access to a community of talented young developers, to tackle your larger projects</p>
                </header>

                <header class="major container 75%" style="margin-bottom: 0px;">

                  <h2>Bryn's Github Activity</h2>
                  <br>
                  <img class="img-responsive" src="http://ghchart.rshah.org/brynbeaudry" alt="Bryn's Github chart" />
                  <br>
                  <h4>Bryn has been conducting working on many projects this year.</h4>
                </header>
                <header class="major container 75%" style="margin-bottom: 0px;">
                  <h2>Projects</h2>
                  <h4>Click a project image to learn more</h4>
                </header>
                <!--alternate between feature left and feature right -->
                @if(isset($projects) && count($projects) > 0)
                @foreach($projects as $key => $project)
                <div class="box alt container" style="margin-bottom: 0px;">
                    @if($key%2==0)
                    <section class="feature left">
                    @else
                    <section class="feature right">
                    @endif
                        <a href="/projects/{{$project['id']}}" class="image thumbnail"><img src="{{$project['img']}}" style="" alt="" /></a>
                        <div class="content">
                            <h3>{{$project['title']}}</h3>
                            <h4><small>{{$project['tagline']}}</small></h5>
                            @if($project['url'] != "NULL")
                            <h5>{{$project['url']}}</h5>
                            @endif
                            <p>{{substr($project['desc'], 0 ,150) . '...'}}</p>
                        </div>
                    </section>
                  </div>
                  @endforeach
                  @endif
                  <div class="box container" style="margin-bottom : 0px;">
                    <header>
                      <h2>Technologies used</h2>
                      <h4><small>Over all of the projects combined</small></h4>
          					</header>
                    <section>
                      <p class="text-center">Click an image to learn more</p>
                    </section>
                    <section>

                        <div class="row">
                          @if(isset($technologies) && count($technologies) > 0)
                          @foreach($technologies as $key => $tech)
                          <!--<p> LHS {{ (1+$key) * 3}}  >  RHS {{ (int)(count($technologies)*3/12)*12 }}   OFFSET {{count($technologies)*3%12/2}} </p>-->
                          @if( (1+$key) * 3 > (int)(count($technologies)*3/12)*12 )
                          <div class="col-md-3 col-md-push-{{count($technologies)*3%12/2}} col-xs-12">
                          @else
                          <div class="col-md-3 col-xs-12">
                          @endif
                            <div class="wrapper">
                              <h4 class="hidden-xs">{{ $tech['name'] }}</h4>
                              <a href="{{$tech['url']}}"><img src="{{$tech['img']}}" style="width: 150px; height: 150px;"  class="" alt=""></a>
                              <!--style="width: 200px height: 200px" -->
                            </div>
                          </div>
                          @endforeach
                          @endif
                        </div>

                    </section>
                  </div>



                  <!--  <section class="feature right">
                        <div class="content">
                        <a href="#" class="image icon fa-code"><img src="images/pic02.jpg" alt="" /></a>
                            <h3>The Second Thing</h3>
                            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
                        </div>
                    </section>
                    <section class="feature left">
                        <a href="#" class="image icon fa-mobile"><img src="images/pic03.jpg" alt="" /></a>
                        <div class="content">
                            <h3>The Third Thing</h3>
                            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
                        </div>
                    </section>
                </div>
                 -->

            <!--
				<div class="box container">
					<header>
						<h2>A lot of generic stuff</h2>
					</header>
					<section>
						<header>
							<h3>Paragraph</h3>
							<p>This is the subtitle for this particular heading</p>
						</header>
						<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
						habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
						leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
						amet risus elit.</p>
					</section>
					<section>
						<header>
							<h3>Blockquote</h3>
						</header>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
						tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
					</section>
					<section>
						<header>
							<h3>Divider</h3>
						</header>
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
						<hr />
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
					</section>
					<section>
						<header>
							<h3>Unordered List</h3>
						</header>
						<ul class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ul>
					</section>
					<section>
						<header>
							<h3>Ordered List</h3>
						</header>
						<ol class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ol>
					</section>
					<section>
						<header>
							<h3>Table</h3>
						</header>
						<div class="table-wrapper">
							<table class="default">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>
					<section>
						<header>
							<h3>Form</h3>
						</header>
						<form method="post" action="#">
							<div class="row">
								<div class="6u 12u(mobilep)">
									<label for="name">Name</label>
									<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
								</div>
								<div class="6u 12u(mobilep)">
									<label for="email">Email</label>
									<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">Subject</label>
									<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">Message</label>
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="Send" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
				-->
<!--
                <footer class="major container 75%">
                    <h3>Get shady with science</h3>
                    <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Join our crew</a></li>
                    </ul>
                </footer>
-->
            </div>
@endsection
