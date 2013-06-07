
/* 

    +------------------+
    |sn3cf             |
    |p+=*              |
    |-j1               |
    |=+                |
    |f          #  ##  |
    |           # #    |
    |           #  ##  |
    |        #  #    # |
    |         ##   ##  |
    +------------------+
    jsstyle.github.com 

    =============================================

    G5Framework

    =============================================

    TO
    O : Concatenate & Minify JS Pre-production

    ---------------------------------------------

    00 jQuery 1.9.0

        01 jQuery Metadata
        02 Utility
        03 Tabs

    ==============================================

*/

(function(){

    //Strict within entire scope
    'use strict';

    //Console.log Fallback
    if ( !window.console ) { 
        window.console = function(){
            this.log = function(str) {};
            this.dir = function(str) {};
        };
    }

    //Load Primary Assets (From CDN, fallback to local version)
    yepnope([
        {
            load: [
                'assets/js/libs/jquery-1.9.0.min.js'
            ]
        },
        {
            load: [
          //      'assets/js/libs/jquery.metadata.js',
         //       'assets/js/utility.js',
                'assets/js/tabs.js',
                'assets/flexslider/jquery.flexslider.js'
            ],
            complete: function(){

                //Ready
                $(function(){

                   yepnope([
                        {
                            load: [
                                'assets/js/index.js'
                            ],
                            complete: function(){
                                console.log('G5: index JS Loaded');
                            }
                        }
                    ]);

                });

            }
        }
        
    ]);

})();