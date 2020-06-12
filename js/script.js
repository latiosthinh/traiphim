(function( $ ) {
    const $doc = $( document );

    var bannerSlider = () => {
        $( '.banner-slider' ).slick( {
            autoplay: false,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false,
            fade: true,
            nextArrow: '<button class="next"><span></span></button>',
            prevArrow: '<button class="prev"><span></span></button>',
        } )
    }

    var movieSlider = () => {
        $( '.movie-slider' ).slick( {
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            nextArrow: '<button class="next"><ion-icon name="chevron-forward-outline"></ion-icon></button>',
            prevArrow: '<button class="prev"><ion-icon name="chevron-back-outline"></ion-icon></button>',
        } )
    }

    var actorsSlider = () => {
        $( '.actors-slider' ).each(function() {
            $( this ).slick( {
                slidesToShow: $( this ).hasClass( 'single' ) ? 5 : 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: true,
                nextArrow: '<button class="next"><ion-icon name="chevron-forward-outline"></ion-icon></button>',
                prevArrow: '<button class="prev"><ion-icon name="chevron-back-outline"></ion-icon></button>',
            } )
        })
    }

    var movieSoonSlider = () => {
        $( '.movie-soon-slider' ).slick( {
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            fade: true,
            nextArrow: '<button class="next"><ion-icon name="chevron-forward-outline"></ion-icon></button>',
            prevArrow: '<button class="prev"><ion-icon name="chevron-back-outline"></ion-icon></button>',
        } )
    }

    var filter = () => {
        $( '.filter-by-year' ).select2({})

        const getMovie = function( _data ) {
            $.ajax({
				url     : php_data.ajax_url,
				type    : 'POST',
				dataType: 'json',
                data    : _data,
                success : function( res ) {
                    let html = '';

                    res.data.forEach( e => {
                        html += e;
                    });

                    setTimeout(() => {
                        $( '.movie-list' ).html( html )
                    }, 0);
                }
			})
        }

        $( '.filter-newest' ).on( 'click', function( e ) {
            e.preventDefault();
            
            let _data = {
                'orderby'    : 'newest',
                '_ajax_nonce': php_data.nonce,
				'action'     : 'traiphim_get_posts',
            }

            getMovie( _data );
        } )

        $( '.filter-by-year' ).on( 'change', function() {
            let _data = {
                'year'       : $( '.filter-by-year' ).val(),
                '_ajax_nonce': php_data.nonce,
				'action'     : 'traiphim_get_posts',
            }

            getMovie( _data );
        } )

        let offset = 2;

        $( '.load-more__btn' ).on( 'click', function( e ) {
            e.preventDefault();
            
            let _data = {
                'offset'     : offset,
                '_ajax_nonce': php_data.nonce,
				'action'     : 'traiphim_get_posts',
            }

            $.ajax({
				url     : php_data.ajax_url,
				type    : 'POST',
				dataType: 'json',
                data    : _data,
                success : function( res ) {
                    let html = '';

                    res.data.forEach( e => {
                        html += e;
                    });

                    setTimeout(() => {
                        $( '.movie-list' ).append( html )
                    }, 0);
                }
            })
            
            offset += 1;
        } )
    }

    $doc.ready( () => {
        bannerSlider();
        movieSlider();
        movieSoonSlider();
        actorsSlider();
        filter();

        $( '.open-video' ).click( () => {
            $( '#video' ).addClass( 'active' )
        } )

        $( '.video-bg' ).click( () => {
            $( '#video' ).removeClass( 'active' )
        } )

        $doc.on( 'scroll', function() {
            if ( $doc.scrollTop() > 100 ) {
                $( 'header' ).addClass( 'fixed' )
            } else {
                $( 'header' ).removeClass( 'fixed' )
            }
        } )

        AOS.init();
    } )

})( jQuery )