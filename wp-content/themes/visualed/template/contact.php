<?php 

/* Template Name: contact
*/
get_header();
?>
	<?php
	/****************** START GETTING DATA FROM CUSTOM FIELD ABOUT CONTACT BANNER **********************/
		$service=get_post_meta(6,"contact_banner_image",true);
		$thumb = wp_get_attachment_image_src($service, 'contact_banner_img' );	
		$url = $thumb['0'];
	?>
 <div class="content_header contact_banner cont_page animatedParent" style="background-image:url(<?php echo $url;?>)">
        <div class="inner_banner_cntct">
            <div class="container">
                <div class="display_table">
                    <div class="upper_contn text-center animated fadeInDown">
                        <h1><?php the_field('contact_banner_title',6);?></h1>
                        <p><?php the_field('contact_banner_subtitle',6);?></p>
	<!---------END OF GETTING DATA FROM CUSTOM FIELD CONTACT BANNER---------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_cntnt display_block animatedParent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 contact_lft animated fadeInLeftShort">
	<!---------START GETTING DATA FROM CUSTOM FIELD CONTACT US---------------------->
                    <h4 class=""><?php the_field('contact_us',6);?></h4>
                    <div class="map display_block animated fadeInUp">
					<?php
					$service=get_post_meta(6,"map_image",true);
					$thumb = wp_get_attachment_image_src($service, 'contact_banner_img' );	
					$url = $thumb['0'];?>
                        <div class="image_map" style="background-image: url(<?php echo $url;?>)">
                            <!--img src="images/map-image.jpg" alt="image"-->
                            <h4 class="map_heading"><?php the_field('afex_park',6);?></h4>
                        </div>
                        <div class="map-iframe" style="display:block;">
                            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3379.5744702707993!2d34.9662473146891!3d32.10778452511365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d30c142e66321%3A0xe616e824b91652eb!2sAfek+industrial+park!5e0!3m2!1sen!2sin!4v1465033818846" frameborder="0" style="border:0" allowfullscreen></iframe>-->
							<?php 
								$location = get_field('map');	
								if( !empty($location) ):	
							?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
							<?php 
								endif;
							?>
                        </div>
                        <div class="cross" style="display:none;">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>


                    <!--div class="upper_contact ">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus generators. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.
                        </p>
                    </div-->
                    <div class="contact_info display_block">
                        <ul>
                            <li>
                                <div class="icon_contact display_block"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                                <p><a href="mailto:<?php the_field('contact_email',6);?>" target="_top"><?php the_field('contact_email',6);?></a></p>
                            </li>
                            <li>
                                <div class="icon_contact display_block"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <p><?php the_field('contact_address',6);?></p>
                            </li>
                            <li>
                                <div class="icon_contact display_block"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <p><a href="tel:<?php the_field('contact_telephone',6);?>">Tel.: <?php the_field('contact_telephone',6);?></a></p>
                            </li>
                            <li>
                                <div class="icon_contact display_block"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <p><a href="tel:<?php the_field('contact_cell',6);?>">Cell: <?php the_field('contact_cell',6);?></a></p>
                            </li>
                        </ul>
                        <div class="btn_map conatct_button">
                            <button type="button" class="custom bg_transparent click_map"> <i class="fa fa-map" aria-hidden="true"></i> Map</button>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 form_contact pull-right animated fadeInRightShort">
                    <h4 class=""><?php the_field('get_in_touch',6);?></h4>
		<!---------END OF GETTING DATA FROM CUSTOM FIELD CONTACT US---------------------->
                    <?php echo do_shortcode( '[contact-form-7 id="90" title="Contact form 1"]' ); ?>
                </div>
            </div>

        </div>
    </div>
<style type="text/css">

.acf-map {
    width: 700px;
    height: 250px;
    border: #ccc solid 1px;
    margin: 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                <script type="text/javascript">
                    (function ($) {

                        /*
                         *  render_map
                         *
                         *  This function will render a Google Map onto the selected jQuery element
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$el (jQuery element)
                         *  @return	n/a
                         */

                        function render_map($el) {

                            // var
                            var $markers = $el.find('.marker');

                            // vars
                            var args = {
                                zoom: 30,
                                center: new google.maps.LatLng(0, 0),
								//scrollwheel:false;
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };

                            // create map	        	
                            var map = new google.maps.Map($el[0], args);

                            // add a markers reference
                            map.markers = [];

                            // add markers
                            $markers.each(function () {

                                add_marker($(this), map);

                            });

                            // center map
                            center_map(map);

                        }

                        /*
                         *  add_marker
                         *
                         *  This function will add a marker to the selected Google Map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$marker (jQuery element)
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function add_marker($marker, map) {

                            // var
                            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

                            // create marker
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });

                            // add to array
                            map.markers.push(marker);

                            // if marker contains HTML, add it to an infoWindow
                            if ($marker.html()) {
                                // create info window
                                var infowindow = new google.maps.InfoWindow({
                                    content: $marker.html()
                                });

                                // show info window when marker is clicked
                                google.maps.event.addListener(marker, 'click', function () {

                                    infowindow.open(map, marker);

                                });
                            }

                        }

                        /*
                         *  center_map
                         *
                         *  This function will center the map, showing all markers attached to this map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function center_map(map) {

                            // vars
                            var bounds = new google.maps.LatLngBounds();

                            // loop through all markers and create bounds
                            $.each(map.markers, function (i, marker) {

                                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

                                bounds.extend(latlng);

                            });

                            // only 1 marker?
                            if (map.markers.length == 1) {
                                // set center of map
                                map.setCenter(bounds.getCenter());
                                map.setZoom(15);
                            } else {
                                // fit to bounds
                                map.fitBounds(bounds);
                            }

                        }

                        /*
                         *  document ready
                         *
                         *  This function will render each map when the document is ready (page has loaded)
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	5.0.0
                         *
                         *  @param	n/a
                         *  @return	n/a
                         */

                        $(document).ready(function () {

                            $('.acf-map').each(function () {

                                render_map($(this));

                            });

                        });

                    })(jQuery);
                </script>
<?php
get_footer();
?>