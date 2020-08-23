"use strict";

$(document).ready(function () {

    const articleBlock = $('#article');
    const commentForm = $('#comment');

    if (articleBlock.length){

        setTimeout(sendView,5000);

        $('#likeBlock').click(function (e) {
            e.preventDefault();
            sendLike();
        });

        commentForm.submit(function (e) {
            e.preventDefault();
            sendComment();
        })


    }

    function sendView(){

        let articleViewUrl = articleBlock.attr('data-article-view');
        let articleId = articleBlock.attr('data-article-id');
        let data = {'id':articleId};
        let viewBlockCount = $('.viewBlockCount');

        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            url: articleViewUrl,
            method:'POST',
            data: data,
            async: false,
            timeout: 3000,
            success: function (response) {

                console.log(response);

                if(response.views) {
                    viewBlockCount.text(response.views)
                } else {

                }},

            error: function () {alert('');}

        });
    }

    function sendLike(){

        let articleViewUrl = articleBlock.attr('data-article-like');
        let articleId = articleBlock.attr('data-article-id');
        let data = {'id':articleId};
        let likeBlockCount = $('.likeBlockCount');

        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            url: articleViewUrl,
            method:'POST',
            data: data,
            async: false,
            timeout: 5000,
            success: function (response) {

                console.log(response);

                if(response.like) {
                    likeBlockCount.text(response.like)
                } else {

                }},

            error: function () {alert('');}

        });
    }

    function sendComment() {

        let articleCommentUrl = articleBlock.attr('data-article-comment');
        let articleId = articleBlock.attr('data-article-id');
        let data  = commentForm.serializeArray();
        let commentFormBlock = $('#commentFormBlock');

        data.push({name:'id',value:articleId});

        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            url: articleCommentUrl,
            method:'POST',
            data: data,
            async: false,
            timeout: 5000,
            success: function (response) {



                commentFormBlock.empty();
                commentFormBlock.prepend('<div class="alert alert-success"> <strong>Оповещение!</strong> Ваше сообщение успешно отправлено</div>');

               },error: function (response) {}

        });

    }


});


