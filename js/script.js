(function( $ ) {
    const $doc = $( document );

    var bannerSlider = () => {
        $( '.banner-slider' ).slick( {
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            nextArrow: '<button class="next"><span></span></button>',
            prevArrow: '<button class="prev"><span></span></button>',
            asNavFor: $( '.banner-title .content' )
        } )
    }

    var guongmatSlider = () => {
        $( '.guong-mat_slider' ).slick( {
            dots: true,
            nextArrow: '<button class="next"><svg width="21" height="39" viewBox="0 0 21 39" fill="none"><line x1="1.35355" y1="0.646447" x2="20.3536" y2="19.6464" stroke="#9C9C9C"/><line x1="0.646447" y1="38.6464" x2="19.6464" y2="19.6464" stroke="#9C9C9C"/></svg></button>',
            prevArrow: '<button class="prev"><svg width="21" height="39" viewBox="0 0 21 39" fill="none"><line x1="19.6464" y1="38.3536" x2="0.646448" y2="19.3536" stroke="#9C9C9C"/><line x1="20.3536" y1="0.353553" x2="1.35355" y2="19.3536" stroke="#9C9C9C"/></svg></button>',
        } )
    }

    var profileSlider = () => {
        $( '.profile-slider' ).slick({
            dots: true,
            appendDots: $( '.dots' )
        })
    }

    var bannerTitleSlider = () => {
        $( '.banner-title .content' ).slick({
            dots: false,
            arrows: false,
            fade: true,
        })
    }

    $doc.ready( () => {
        $( '.banner' ).css( 'margin-top', $( 'header' ).innerHeight() + 'px' )

        if ( $( window ).width() < 1200 ) {
            $( '.banner' ).css( 'margin-top', '40px' )
        }
        
        bannerSlider();
        bannerTitleSlider();
        guongmatSlider();
        profileSlider();

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