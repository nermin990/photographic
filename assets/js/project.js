$ = jQuery;

function filterCpt(className, trigger) {

    $(className).on(trigger, function() {

        switch (className) {
            case '.single_category' :
                $('.single_category').removeClass('active');
                $(this).addClass('active');
                $('.load_more_button').data('paged', 1);
                break;
            case '.load_more_button' :
                let newPaged = parseInt($(this).data('paged')) + 1;
                $(this).data('paged', newPaged);
                break;
        }


        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'filter_projects',
                category: $('.single_category.active').data('slug'),
                paged: $('.load_more_button').data('paged'),
            },
            success: function(res) {
                if(res === "No posts found") {

                } else {
                    let result = JSON.parse(res);

                    if(className === ".load_more_button") {
                        $('.projects').append(result.html);
                    } else {
                        $('.projects').html(result.html);
                    }

                    if(result.max_pagination === parseInt($('.load_more_button').data('paged'))) {
                        $('.load_more_button').hide();
                    } else {
                        $('.load_more_button').show();
                    }
                }


            }
        })
    });

}

filterCpt('.single_category', 'click');
filterCpt('.load_more_button', 'click');

