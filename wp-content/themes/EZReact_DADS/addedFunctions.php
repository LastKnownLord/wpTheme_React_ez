<?php

	// load scripts and styles

	function scriptsAndStyles() {
		// REACT, react-dom, jquery, bootstrap, babel-core, react js file.
		/*
		https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/cjs/react.development.js

		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/cjs/react.development.js" integrity="sha256-bVNfrlDlObbOJ3++0akQzV/YlLQHBeJeprJ+Z8rD7cI=" crossorigin="anonymous"></script>
		
		
		https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/cjs/react.production.min.js

		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/cjs/react.production.min.js" integrity="sha256-oTABb6ke88mAAjkyf2gQcEnhdaQiE28BBX//lMeFpUY=" crossorigin="anonymous"></script>

		https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/umd/react.development.js

		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/umd/react.development.js" integrity="sha256-s4xjpfNLyFo6uEJP3/OXxMoi8LZBCaB2weyDvhAbs1c=" crossorigin="anonymous"></script>

		<REACT.PRODUCTION>
		https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/umd/react.production.min.js

		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/umd/react.production.min.js" integrity="sha256-R9mHnFtrqNBSv0u7IGrwrn8TxfZaWD0UjHo9xvqDHSM=" crossorigin="anonymous"></script>

		<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
		<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>

		<BOOTSTRAP FOR REACT>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/react-bootstrap/0.32.1/react-bootstrap.min.js"></script>

		*/
		wp_enqueue_style("style".get_stylesheet_uri() );
		wp_enqueue_style("bootstrap".get_stylesheet_uri() );
		wp_enqueue_script("react","https://cdnjs.cloudflare.com/ajax/libs/react/16.3.2/cjs/react.production.min.js");
		wp_enqueue_script("react-dom","https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.3.2/cjs/react-dom.production.min.js");
		wp_enqueue_script("babel","https://cdnjs.cloudflare.com/ajax/libs/babel-core/6.1.19/browser.min.js");
		wp_enqueue_script("main", get_template_directory_uri() . "/scripts/main.js", array("react","react-dom","babel"));

	}



?>
