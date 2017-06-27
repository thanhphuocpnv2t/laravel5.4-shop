var BlankonBlogType2 = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonBlogType2.CubeportfolioPost();
        },

        // =========================================================================
        // CUBEPORTFOLIO POST
        // =========================================================================
        CubeportfolioPost: function () {
            (function($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#grid-container').cubeportfolio({
                    filters: '#filters-container',
                    loadMore: '#loadMore-container1',
                    loadMoreAction: 'click',
                    defaultFilter: '*',
                    animationType: '3dflip',
                    gapHorizontal: 70,
                    gapVertical: 20,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                        width: 800,
                        cols: 3
                    }, {
                        width: 500,
                        cols: 2
                    }, {
                        width: 320,
                        cols: 1
                    }],
                    caption: 'revealBottom',
                    displayType: 'lazyLoading',
                    displayTypeSpeed: 400,
                });

            })(jQuery, window, document);
        }

    };

}();

// Call main app init
BlankonBlogType2.init();