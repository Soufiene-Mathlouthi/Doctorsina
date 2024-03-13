<script src="{{url('assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{url('assets/js/popper.min.js')}}"></script>
		<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
		<!-- Datetimepicker JS -->
		<script src="{{url('assets/js/moment.min.js')}}"></script>
		<script src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		<script src="{{url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
		<!-- Full Calendar JS -->
        <script src="{{url('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{url('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{url('assets/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
		<!-- Sticky Sidebar JS -->
        <script src="{{url('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{url('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		<!-- Select2 JS -->
		<script src="{{url('assets/plugins/select2/js/select2.min.js')}}"></script>
			<!-- Fancybox JS -->
			<script src="{{url('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
		<!-- Dropzone JS -->
		<script src="{{url('assets/plugins/dropzone/dropzone.min.js')}}"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="{{url('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
		
		<!-- Profile Settings JS -->
		<script src="{{url('assets/js/profile-settings.js')}}"></script>
		<!-- Circle Progress JS -->
		<script src="{{url('assets/js/circle-progress.min.js')}}"></script>
		<!-- Slick JS -->
		<script src="{{url('assets/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('assets/js/script.js')}}"></script>
		@if(Route::is(['map-grid','map-list']))
		<script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I')}}"></script>
		<script src="{{url('assets/js/map.js')}}"></script>
		@endif
