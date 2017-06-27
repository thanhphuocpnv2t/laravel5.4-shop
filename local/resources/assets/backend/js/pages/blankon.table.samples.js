var BlankonTableSamples = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonTableSamples.tabTable();
        },

        // =========================================================================
        // TABS TABLE
        // =========================================================================
        tabTable: function () {
            (function($, window, document, undefined) {
                'use strict';

                // init cubeportfolio unfold
                $('#js-grid-tabs-unfold').cubeportfolio({
                    filters: '#js-filters-tabs-unfold',
                    defaultFilter: '.tab-1',
                    animationType: 'unfold',
                    gridAdjustment: 'default',
                    displayType: 'default'
                });

            })(jQuery, window, document);
        }

    };

}();

// Call main app init
BlankonTableSamples.init();