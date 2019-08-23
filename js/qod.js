(function ($) {


    $(function () {

        //TODO history API page variable

        let lastPage = '';



        //you ajax and other javascript code will go here

        //1: get request for wp/v2/posts

        $('#new-quote-button').on('click', function (event) {
            event.preventDefault();

            console.log('click');

            lastPage = document.URL;

            $.ajax({
                method: 'get',
                url: qod_api.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
            }).done(function (data) {

                // the post data returned from wp-json
                const post = data[0];
                console.log(post);

                const slug = post.slug;

                //TODO add url with home_url and slug
                const url = qod_api.home_url + '/' + slug + '/';

                let newcontent = post.content.rendered;
                let newtitle = post.title.rendered;
                let newquotesource = post._qod_quote_source;
                let newquotesourceurl = post._qod_quote_source_url;

                if (newquotesource.length > 0 && newquotesourceurl.length > 0) {
                    console.log('quote source and source url exist');
                    $('.source').html('<a class=“source-url” href=“' + newquotesourceurl + '”>, ' + newquotesource + ' </a>');
                }
                // else if(){

                // }
                // else {

                // }

                $('.entry-article').html(newcontent);
                $('.entry-title').html(newtitle);
                // $('.source').html(newquotesource);
                // $('.source-url').html(newquotesourceurl);

                // console.log(newtitle);
                console.log(newquotesource);
                console.log(newquotesourceurl);

                //TODO update the browser url with history.pushState
                history.pushState(null, null, url);

            }).fail(function (err) {
                console.log('error', err);
            });

            //TODO add history api popstate for forward and back buttons in the browser
            $(window).on('popstate', function () {
                window.location.replace(lastPage)
            });

        }); //end of ready

        //2: post request for wp/v2/posts

        $('#quote-submission-form').on('submit', function (event) {
            event.preventDefault();

            // let newauthor = document.getElementById('quote-author').value;
            let newAuthor = $('#quote-author').val();
            let newContent = $('#quote-content').val();
            let newSource = $('#quote-source').val();
            let newSourceUrl = $('#quote-source-url').val();

            console.log(newAuthor);
            console.log(newContent);
            console.log(newSource);
            console.log(newSourceUrl);

            $.ajax({
                method: 'post',
                url: qod_api.rest_url + 'wp/v2/posts',
                data: {
                    title: newAuthor,
                    content: newContent,
                    _qod_quote_source: newSource,
                    _qod_quote_source_url: newSourceUrl,
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', qod_api.wpapi_nonce);
                }
            }).done(function () {
                // newauthor => $title.rendered;

                // TODO slideUp the form and append a message saying your quote has been submitted
                $('#quote-submission-form').slideUp();
                // TODO add a message for user feedback so they know the form was submitted
                $('#quote-submission-form').slideUp();
            }).fail(function (error) {
                console.log('error', error);
                // TODO append a user message or alert a message saying an error happened
            });
        });



    });

})(jQuery);