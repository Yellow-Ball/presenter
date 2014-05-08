

    <!-- Core Scripts - Include with every page -->
	{{ HTML::script( asset('js/jquery-1.10.2.js')) }}

	{{ HTML::script( asset('js/bootstrap.min.js')) }}
	{{ HTML::script( asset('js/plugins/metisMenu/jquery.metisMenu.js')) }}

    <!-- Page-Level Plugin Scripts - Grid -->

    <!-- SB Admin Scripts - Include with every page -->
	{{ HTML::script( asset('js/sb-admin.js')) }}
	{{ HTML::script( asset('js/dropzone.js')) }}

    <!-- Page-Level Demo Scripts - Grid - Use for reference -->
    @yield('footer', '')

</body>

</html>
