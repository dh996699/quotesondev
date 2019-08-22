import { CLIENT_RENEG_LIMIT } from "tls";

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


                const newdata = data[0];
                let newcontent = newdata.content.rendered;
                // console.log(newcontent);

                console.log('tdhf');

            }).fail(function (err) {
                console.log('error', err);
            })

        }); //end of ready

        //2: post request for wp/v2/posts

    });

})(jQuery);