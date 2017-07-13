<?php
/**
 * WP-Amazon-S3-API (http://docs.aws.amazon.com/AmazonS3/latest/API/Welcome.html)
 *
 * @package WP-Amazon-S3-API
 */
/*
* Plugin Name: WP Amazon S3 API
* Plugin URI: https://github.com/wp-api-libraries/wp-amazon-s3-api
* Description: Perform API requests to Amazon S3 in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-amazon-s3-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'AmazonS3API' ) ) {
	
	/**
	 * AmazonS3 API Class.
	 */
	class AmazonS3API {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 's3.amazonaws.com';

		/**
		 * Construct.
		 *
		 * @access public
		 * @param mixed $output Output.
		 * @return void
		 */
		public function __construct() {
		}
		
		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {
			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-amazon-s3-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}

		
		/* AUTH. */
		
		
		/* BUCKETS. */
		
		public function delete_bucket() {
			
		}
		
		public function delete_bucket_analytics() {
			
		}
				
	} // End AmazonS3API().
} // Endif.