
(function ($, root, undefined) {
    
    $(function () {
        
        'use strict';
        
        var $window = $(window);
        var $body = $('body');
        
        
        
        
        // mobile menu button
        var $menu_button = $('#menu_button');
        var $nav = $('nav ul');
        $menu_button.on('click', function(e){
            e.preventDefault();
            $nav.toggleClass('menu_visible');
            toggleBodyScroll();
        });
        
        // if press escape key, hide menu
        $(document).on('keydown', function(e){
            if(e.keyCode == 27 ){
                $nav.removeClass('menu_visible');
                toggleBodyScroll();
            }
        })
        
        $('#main').on('click', function() {
            $nav.removeClass('menu_visible');
            toggleBodyScroll();
        });
        
        function toggleBodyScroll(){
            if ($nav.hasClass('menu_visible')) {
                $('#dont_scroll').show();
            } else {
                $('#dont_scroll').hide();
            }
        }
        
        
        
        
        //News slider
        $(".slickslider").slick({
            
            // normal options...
            infinite: true,
            autoplay: true,
            variableWidth: true,
            dots: false,
            // slidesToShow: 3,
            
            // the magic
            responsive: [{
                
                breakpoint: 992,
                // settings: {
                //     slidesToShow: 2,
                // }
                
            }, {
                breakpoint: 768,
                // settings: {
                //     slidesToShow: 1
                // }
                
            }]
        });
        
        
        
        var $arrow = $('#arrow');
        var $person_boxes = $('.person_box')
        $person_boxes.hide();
        $person_boxes.first().show();
        $('#services_for li').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $person = $this.data('person');
            
            $person_boxes.hide();
            $('#' + $person).show();
            
            var $cont_width =  $('.container').width();
            var $screen_width = $window.width();
            var $offset = $this.offset();
            var $left = e.clientX - (($screen_width - $cont_width ) /2) - 20;
            $left = Math.round($left / 20) * 20 ; // fix to grid of 20px
            $left = Math.max($left, 20);
            $left = Math.min($left,  $cont_width - 50 );
            $arrow.css({ left: $left });
        })
        
        
        // MAP
        // MEMBERS MAP
        if (typeof google != 'undefined'){
            if (typeof map_location != 'undefined') {
                
                var map_theme = [{"featureType": "administrative","elementType": "all","stylers": [{"saturation": "-100"}]},{"featureType": "administrative.province","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "landscape","elementType": "all","stylers": [{"saturation": -100},{"lightness": 65},{"visibility": "on"}]},{"featureType": "poi","elementType": "all","stylers": [{"saturation": -100},{"lightness": "50"},{"visibility": "simplified"}]},{"featureType": "road","elementType": "all","stylers": [{"saturation": "-100"}]},{"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},{"featureType": "road.arterial","elementType": "all","stylers": [{"lightness": "30"}]},{"featureType": "road.local","elementType": "all","stylers": [{"lightness": "40"}]},{"featureType": "transit","elementType": "all","stylers": [{"saturation": -100},{"visibility": "simplified"}]},{"featureType": "water","elementType": "geometry","stylers": [{"hue": "#ffff00"},{"lightness": -25},{"saturation": -97}]},{"featureType": "water","elementType": "labels","stylers": [{"lightness": -25},{"saturation": -100}]}];
                
                var map_options = {
                    zoom: 15,
                    mapTypeControl: true,
                    scrollwheel: false,
                    draggable: true,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: map_theme
                };
                
                
                var location_map_container = $('#map_container');
                location_map_container.css({
                    width : '100%'
                })
                
                var location_map = new google.maps.Map(location_map_container.get(0), map_options);
                var latlng = new google.maps.LatLng(  map_location.lat, map_location.lng   );
                var infowindow = new google.maps.InfoWindow({content: ''});
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: location_map,
                    optimized: false
                });
                
                marker.addListener('click', function(){
                    infowindow.setContent( map_location.title );
                    infowindow.open(location_map, this);
                })
                
                location_map.setCenter( latlng );
                
                
                
            };
        }; // if google is defined
        // END OF MAP
        
        
        
        
        
        
        
    });
    
})(jQuery, this);
