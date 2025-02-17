<?php
/**
 * WP HTML Helper
 * 1.0
 *
 */

// image default alt
if( !function_exists( 'foodbook_img_default_alt' ) ){
	function foodbook_img_default_alt( $url = '' ){

		if( $url != '' ){
			// attachment id by URL
			$attachmentid = attachment_url_to_postid( esc_url( $url ) );
		   // attachment alt tag
			$image_alt = get_post_meta( esc_html( $attachmentid ) , '_wp_attachment_image_alt', true );

			if( $image_alt ){
				return $image_alt ;
			}else{
				$filename = pathinfo( esc_url( $url ) );

				$alt = str_replace( '-', ' ', $filename['filename'] );

				return $alt;
			}

		}else{
		   return;
		}

	}
}


// Image Tag
if( !function_exists( 'foodbook_img_tag' ) ){
	function foodbook_img_tag( array $args ){

		$default = array(
			'url' 	 	  => '',
			'alt' 	 	  => '',
			'class'  	  => '',
			'id' 	 	  => '',
			'width'  	  => '',
			'height' 	  => '',
			'srcset' 	  => ''
		);

		$args = wp_parse_args( $args,  $default );

		// Image URL
		$url = $args['url'];

		// image tag alter
		if( !empty( $args['alt'] ) ){
			$alt = $args['alt'];
		}else{
			$alt = foodbook_img_default_alt( $url );
		}

		/**
		 * Optional Attr
		 */

		$attr = '';
		// Image class
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// Image id
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}
		// Image width
		if( !empty( $args['width'] ) ){
			$attr .= ' width="'.esc_attr( $args['width'] ).'"';
		}
		// Image height
		if( !empty( $args['height'] ) ){
			$attr .= ' height="'.esc_attr( $args['height'] ).'"';
		}
		// Image srcset
		if( !empty( $args['srcset'] ) ){
			$attr .= ' srcset="'.esc_attr( $args['srcset'] ).'"';
		}


		return '<img src="'.esc_url( $url ).'" alt="'.esc_attr( $alt ).'" '.wp_kses_post( $attr ).' />';
	}
}

// Anchor Tag
if( !function_exists( 'foodbook_anchor_tag' ) ){
	function foodbook_anchor_tag( array $args ){

		$default = array(
			'url' 	 		=> '',
			'text' 	 		=> 'Click Here',
			'target' 		=> '',
			'title' 		=> '',
			'class'  		=> '',
			'id' 	 		=> '',
			'wrap_before' 	=> '',
			'wrap_after' 	=> '',
		);

		$args = wp_parse_args( $args,  $default );

		// Anchor url
		$url = $args['url'];

		// Anchor Text
		$text = $args['text'];


		/**
		 * Optional Attr
		 */

		$attr = '';
		// class
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}
		// target
		if( !empty( $args['target'] ) ){
			$attr .= ' target="'.esc_attr( $args['target'] ).'"';
		}
		// Title
		if( !empty( $args['title'] ) ){
			$attr .= ' title="'.esc_attr( $args['title'] ).'"';
		}

		$data = '';

		// Wrapper Start
		if( !empty( $args['wrap_before'] ) ){
			$data .= $args['wrap_before'];
		}
			$data .= '<a href="'.$url.'" '. $attr.'>'.$text.'</a>';

		// Wrapper End
		if( !empty( $args['wrap_after'] ) ){
			$data .= $args['wrap_after'];
		}

		return $data;
	}
}

// Heading Tag
if( !function_exists( 'foodbook_heading_tag' ) ){
	function foodbook_heading_tag( array $args ){

		$default = array(
			'tag' 	 	  => 'h1',
			'text' 	 	  => 'Write Something',
			'class'  	  => '',
			'id' 	 	  => '',
			'wrap_before' => '',
			'wrap_after'  => '',
		);

		$args = wp_parse_args( $args,  $default );


		// Tag
		$tag = $args['tag'];

		/**
		 * Optional Attr
		 */

		$attr = '';
		// class
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}

		$data = '';

		// Wrapper Start
		if( !empty( $args['wrap_before'] ) ){
			$data .= $args['wrap_before'];
		}
			$data .= '<'.esc_attr( $tag ).$attr.'>'. $args['text'].'</'.esc_attr( $tag ).'>';

		// Wrapper End
		if( !empty( $args['wrap_after'] ) ){
			$data .= $args['wrap_after'];
		}

		return $data;


	}
}

// Paragraph Tag
if( !function_exists( 'foodbook_paragraph_tag' ) ){
	function foodbook_paragraph_tag( array $args ){

		$default = array(
			'text' 	 	  => 'Write Something',
			'class'  	  => '',
			'id' 	 	  => '',
			'wrap_before' => '',
			'wrap_after'  => '',
		);

		$args = wp_parse_args( $args,  $default );


		/**
		 * Optional Attr
		 */

		$attr = '';
		// class
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}

		$pdata = '';

		// Wrapper Start
		if( !empty( $args['wrap_before'] ) ){
			$pdata .= $args['wrap_before'];
		}
			$pdata .= '<p'.$attr.'>'.$args['text'].'</p>';
		// Wrapper End
		if( !empty( $args['wrap_after'] ) ){
			$pdata .= $args['wrap_after'];
		}

		return $pdata;

	}
}

// Other Tag
if( !function_exists( 'foodbook_span_tag' ) ){
	function foodbook_span_tag( array $args ){

		$default = array(
			'tag' 	 	  => 'span',
			'text' 	 	  => 'Write Something',
			'class'  	  => '',
			'id' 	 	  => '',
			'wrap_before' => '',
			'wrap_after'  => '',
		);

		$args = wp_parse_args( $args,  $default );

		// Tag
		$tag = $args['tag'];

		/**
		 * Optional Attr
		 */

		$attr = '';
		// class
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}

		$tagdata = '';

		// Button Wrapper Start
		if( !empty( $args['wrap_before'] ) ){
			$tagdata .= $args['wrap_before'];
		}
			$tagdata .= '<'.esc_attr( $tag ).$attr.'>'.$args['text'].'</'.esc_attr( $tag ).'>';;
		// Button Wrapper End
		if( !empty( $args['wrap_after'] ) ){
			$tagdata .= $args['wrap_after'];
		}

		return $tagdata;

	}
}
