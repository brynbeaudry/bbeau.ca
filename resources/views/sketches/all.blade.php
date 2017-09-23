@extends('layouts.app')
@section('directive')
<div class="head-text" style="margin-bottom : 0px;">
    <h1 style="">Sketches</h1>
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

  .feature .image img {
      display: block;
      height: 100%;
      width: 100%;
      object-fit: contain;
      position: absolute;
  }

  h1 {
   color: black;
   -webkit-text-fill-color: white; /* Will override color (regardless of order) */
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #422a04;
}

  @media screen and (max-width: 1680px){

    #main * .row > * {
        padding-left: 0px;
    }
    #header > div > h1 {
      font-size: 2.5em;
    }
}

@media screen and (max-width: 767px){

  #main * .row > * {
      padding-left: 0px;
  }

  #header > div > h1 {
    font-size: 2em;
  }
}
</style>
@endsection
@section('content')
     <!--[if lte IE 8]><script src="{{asset('js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('/css/ie8.css')}}" /><![endif]-->
    <link href="{{asset('css/bbeau.css') }}" rel="stylesheet"/>
            <!-- Main -->
            <div id="main">
                <!--Italics -->
                <div class="box container" style="margin-bottom: 0px;">
                <div class="content">
                  <p><i>"I have a black notebook and an engineering pad that I write and sketch in when planning to make a design for a graphic, or a software component. Doing rough planning this way is how I think through a design problem before executing on it. My notebook is filled with ideas like these from end to end, but these are the most recent and relevant sketches pertaining to projects on this site."</i></p>

                  <p class="text-center">Click an image to see the full size version</p>
                </div>
              </div>
                <!--alternate between feature left and feature right -->
                @if(isset($sketches) && count($sketches) > 0)
                @foreach($sketches as $key => $sketch)
                <div class="box alt container" style="margin-bottom : 0px;">
                    @if($key%2==0)
                    <section class="feature left">
                    @else
                    <section class="feature right">
                    @endif
                      <a href="/sketches/{{$sketch['id']}}" class="image img-responsive img-rounded"><img src="{{$sketch['img']}}" style="" alt="" /></a>
                        <div class="content">
                          @if(strlen($sketch['desc']) > 175)
                            <p>{{substr($sketch['desc'], 0 ,175) . '...'}} <a href="/sketches/{{$sketch['id']}}">continue reading</a></p>
                          @else
                            <p>{{$sketch['desc']}}</p>
                          @endif
                        </div>
                    </section>
                  </div>
                  @endforeach
                  @endif


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

            </div>
@endsection
