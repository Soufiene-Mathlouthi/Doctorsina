

<!--Header-->
	@include("frontend.layouts.exeption_template.header")
<!-- /header -->

<body>
		<!--Header-->
			@include("frontend.layouts.exeption_template.top")
		<!-- /header -->

		<!--Header-->
			@include("frontend.layouts.exeption_template.slider")
			@include("frontend.layouts.exeption_template.services")
			@include("frontend.layouts.exeption_template.testimony")
			@include("frontend.layouts.exeption_template.offres")
		<!-- /header -->

		<!--content
				@yield('slider')
				@yield('services')
				@yield('testimony')
				@yield('offres')-->
		{{--@include("layouts.exeption_template.content")--}}
		<!-- /content -->

		<!--Header-->
			@include("frontend.layouts.exeption_template.footer")
		<!-- /header -->
</body>
</html>