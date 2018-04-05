@extends('customer.layout.auth')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
	<script src="{{ asset('js/modernizr.custom.js') }}"></script>
	<style>
		.side-left{
		    background: #355c7d;
		    background: /* gradient overlay */ linear-gradient( to left, rgba(229, 84, 51, 0.72), /* #171616 */ rgba(74, 59, 67, 0.61) /* #4a3b44 */ ), /* bottom image */ url( {{ asset('img/34081398421_9225e56f8c_b.jpg') }} ) no-repeat left top;
		    background-size: cover;
		}
		.side-right{
		    background: #355c7d;
		    background: /* gradient overlay */ linear-gradient( to left, rgba(229, 84, 51, 0.72), /* #171616 */ rgba(74, 59, 67, 0.61) /* #4a3b44 */ ), /* bottom image */ url( {{ asset('img/call-to-action-bg.jpg') }} ) no-repeat left top;
		    background-size: cover;
		}
	</style>
@stop

@section('content')
<div id="splitlayout" class="splitlayout">
	<div class="intro">
		<div class="side side-left">
			<div class="intro-content">
				<div class="profile"><img src="{{ asset('avatars/default_avatar.png') }}" alt="profile1"></div>
				<h1><span>Proveedor </span><span>texto</span></h1>
			</div>
			<div class="overlay"></div>
		</div>
		<div class="side side-right">
			<div class="intro-content">
				<div class="profile"><img src="{{ asset('avatars/default_avatar.png') }}" alt="profile2"></div>
				<h1><span>Cliente </span><span>texto</span></h1>
			</div>
			<div class="overlay"></div>
		</div>
	</div><!-- /intro -->
	<div class="page page-right">
		<div class="page-inner">
			<section>
				<h2>Web Development</h2>
				<p>Scenario archetype complementary responsive script pixel sidebar sitemap keep it simple. Complementary visuals footer CSS from alan cooper delightful.  Photoshop iconography simplicity user experience affordance narrative ascenders contour.  Slab serif interstitial skeuomorphism illustrator design by committee simplicity alan cooper eye tracking.  Typography contrast mental model typesetting affordance narrative from CSS. Retina simplicity design by committee typography oblique.</p>
				<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
			</section>
			<section>
				<h2>Constraints</h2>
				<p>Card-sorting dropdown constraints alan cooper prägnanz iconography. Stakeholder balsamiq italic vector composition ethnography CSS monospace hierarchy. Eye tracking serif persona focus group.</p>
				<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
				<p>Scenario navigation complementary jony ive helvetica archetype interstitial serif front-end. Constraints pencil usability gestalt design language mockup usability testing affordance jakob nielsen.</p>
			</section>
			<section>
				<h2>Ligature</h2>
				<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
				<p>Paper prototype urbanized headroom typography splash screen pencil modal branding. Retina omnigraffle objectified descender navigation adobe ethnography. Innovate design by committee modern hero message. Contrast user-centered color theory keep it simple visuals bevel adobe descender splash screen. From focus group accessibility sans-serif archetype pixel-perfect complementary skeuomorphism. Focus group iconography figure-ground navigation user-centered omnigraffle from.</p>
			</section>
			<section>
				<h2>Ligature</h2>
				<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
				<p>Paper prototype urbanized headroom typography splash screen pencil modal branding. Retina omnigraffle objectified descender navigation adobe ethnography. Innovate design by committee modern hero message. Contrast user-centered color theory keep it simple visuals bevel adobe descender splash screen. From focus group accessibility sans-serif archetype pixel-perfect complementary skeuomorphism. Focus group iconography figure-ground navigation user-centered omnigraffle from.</p>
			</section>
			<section>
				<h2>Typesetting</h2>
				<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
				<p>Fireworks mobile skeuomorphism sitemap. Workflow iconography interaction design pixel-perfect serif. Mental model monospace typeface behavior change bauhaus from usability testing. Color theory user experience paper prototype narrative palette serif gradient header. Oblique modal 66-character line sketch responsive portfolio. Comic sans fireworks prägnanz monospace gradient design language jakob nielsen. Figure-ground pixel aspect ratio sketches rounded corners jony ive constraints mental model splash screen.</p>
				<p>Placeholder text by <a href="http://www.designeripsum.com/">Designer Ipsum</a>.</p>
				<p>Profile images are licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en">Creative Commons BY-NC-SA 2.0</a> license. The images are from Greg Peverill-Conti's <a href="http://www.flickr.com/photos/gregpc/">1,000 faces project</a>.</p>
			</section>
		</div><!-- /page-inner -->
	</div><!-- /page-right -->
	<div class="page page-left">
		<div class="page-inner">
			<section>
				<h2>Web Design</h2>
				<p>Scenario archetype complementary responsive script pixel sidebar sitemap keep it simple. Complementary visuals footer CSS from alan cooper delightful.  Photoshop iconography simplicity user experience affordance narrative ascenders contour.  Slab serif interstitial skeuomorphism illustrator design by committee simplicity alan cooper eye tracking.  Typography contrast mental model typesetting affordance narrative from CSS. Retina simplicity design by committee typography oblique.</p>
				<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
			</section>
			<section>
				<h2>Responsive</h2>
				<p>Card-sorting dropdown constraints alan cooper prägnanz iconography. Stakeholder balsamiq italic vector composition ethnography CSS monospace hierarchy. Eye tracking serif persona focus group.</p>
				<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
				<p>Scenario navigation complementary jony ive helvetica archetype interstitial serif front-end. Constraints pencil usability gestalt design language mockup usability testing affordance jakob nielsen.</p>
			</section>
			<section>
				<h2>Prototype</h2>
				<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
				<p>Paper prototype urbanized headroom typography splash screen pencil modal branding. Retina omnigraffle objectified descender navigation adobe ethnography. Innovate design by committee modern hero message. Contrast user-centered color theory keep it simple visuals bevel adobe descender splash screen. From focus group accessibility sans-serif archetype pixel-perfect complementary skeuomorphism. Focus group iconography figure-ground navigation user-centered omnigraffle from.</p>
			</section>
			<section>
				<h2>Typography</h2>
				<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
				<p>Fireworks mobile skeuomorphism sitemap. Workflow iconography interaction design pixel-perfect serif. Mental model monospace typeface behavior change bauhaus from usability testing. Color theory user experience paper prototype narrative palette serif gradient header. Oblique modal 66-character line sketch responsive portfolio. Comic sans fireworks prägnanz monospace gradient design language jakob nielsen. Figure-ground pixel aspect ratio sketches rounded corners jony ive constraints mental model splash screen.</p>
				<p>Placeholder text by <a href="http://www.designeripsum.com/">Designer Ipsum</a>.</p>
				<p>Profile images are licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en">Creative Commons BY-NC-SA 2.0</a> license. The images are from Greg Peverill-Conti's <a href="http://www.flickr.com/photos/gregpc/">1,000 faces project</a>.</p>
			</section>
		</div><!-- /page-inner -->
	</div><!-- /page-left -->
	<a href="#" class="back back-right" title="back to intro">&rarr;</a>
	<a href="#" class="back back-left" title="back to intro">&larr;</a>
</div><!-- /splitlayout -->
@endsection

@section('scripts')
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/cbpSplitLayout.js') }}"></script>
@stop