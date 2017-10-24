<?php

namespace Mauko;

/**
* 
*/
class Ajax
{
	private $render;
	
	public function __construct( $content_type = "Application/JSON")
	{
		$this -> render= $content_type;
	

	public function post( $url, $data )
	{
		?>
		<script type="text/javascript">
			$(function(){

			    $.ajax({
			      url: <?php echo( $url ) ?>,
			      type: 'post',
			      data: <?php json_encode( $data ),
			      success: function(data, status) {
			        if(data == "ok") {
			          $('#followbtncontainer').html('<p><em>Following!</em></p>');
			          var numfollowers = parseInt($('#followercnt').html()) + 1;
			          $('#followercnt').html(numfollowers);
			        }
			      },
			      error: function(xhr, desc, err) {
			        console.log(xhr);
			        console.log("Details: " + desc + "\nError:" + err);
			      }
			    }); // end ajax call
			  });
		</script>
		<?php
	}

	public function put( $url )
	{
		# code...
	}

	public function get( $url )
	{
		# code...
	}

	public function delete( $url )
	{
		# code...
	}


} 