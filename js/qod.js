(function ($) {


    $(function () {


        // $('body').append('hello world');


        //you ajax and other javascript code will go here

        //1: get request for wp/v2/posts

        $('#new-quote-button').on('click', function (event) {
            event.preventDefault();

            $.ajax({
                method: 'get',
                url: qod_api.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
            }).done(function (data) {
                console.log(data);
            }).fail(function (err) {
                console.log('error', err);
            });

            //2: post request for wp/v2/posts


        }); //end of ready
    });

})(jQuery);