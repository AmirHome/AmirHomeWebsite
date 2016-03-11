/*    $(document).ready(function(){
 
        //hides the default paginator
        // $('ul.pagination:visible:first').hide();
 
        //init jscroll and tell it a few key configuration details
        //nextSelector - this will look for the automatically created {{$data->links()}}
        //contentSelector - this is the element wrapper which is cloned and appended with new paginated data
        $('div#scroll').jscroll({
            debug: true,
            autoTrigger: true,
            callback: false,
            loadingHtml: '<img src="resources/images/icons/loading-grey.gif" alt="Loading" />',
            // nextSelector: '.pagination li.active + li a',
            nextSelector: 'ul.pagination li.active + li a',
            contentSelector: 'article',
            callback: function() {
 
                //again hide the paginator from view
                $('ul.pagination:visible:first').hide();
 
            }
        });
    });*/

    
$(document).ready(function() {
    //hides the default paginator
    $('ul.pagination:visible:first').hide();
    var loading_options = {
        finishedMsg: "<div class='end-msg'>Congratulations! You've reached the end of the internet</div>",
        msgText: "Loading ...",
        img: 'resources/images/icons/loading-grey.gif'
    };
    $('#scroll').infinitescroll({
        loading: loading_options,
        navSelector: "ul.pagination",
        nextSelector: "ul.pagination a:first",
        itemSelector: "#scroll article",
        // onBeforePageLoad: Grid.init(),
        // onAfterPageLoad: Grid.init()
        }
        // ,
        // Grid.imagesLoaded().done(function(instance) {
        //     console.log('DONE  - all images have been successfully loaded');
        // })
    );
});
