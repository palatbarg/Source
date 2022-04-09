$(document).ready(function () {
    
    $('.dot:nth-child(1)').click(function(){
        $('.inside').animate({
            'width' : '16.6%'
        }, 500);
        $('#nav1').tab('show');
        $('.dot').removeClass('dott');
        $(this).addClass('dott');
    });
    $('.dot:nth-child(2)').click(function(){
        $('.inside').animate({
            'width' : '33.2%'
        }, 500);
        $('#nav2').tab('show');
        $('.dot').removeClass('dott');
        $(this).addClass('dott');
    });
    $('.dot:nth-child(3)').click(function(){
        $('.inside').animate({
            'width' : '49.8%'
        }, 500);
        $('#nav3').tab('show');
        $('.dot').removeClass('dott');
        $(this).addClass('dott');
    });
    $('.dot:nth-child(4)').click(function(){
        $('.inside').animate({
            'width' : '66.4%'
        }, 500);
        $('#nav4').tab('show');
        $('.dot').removeClass('dott');
        $(this).addClass('dott');
    });
    $('.dot:nth-child(5)').click(function(){
        $('.inside').animate({
            'width' : '83%'
        }, 500);
        $('#nav5').tab('show');
        $('.dot').removeClass('dott');
        $(this).addClass('dott');
    });

    $('.dot').click(function(){
    })

    // $('.modal').unwrap('<div class="mask"></div>');
    // $('.modal').hide();
    // $('.modal').addClass('nobox');
    // $('.dot').click(function(){
    //     var modal = $(this).attr('id');
    //     $('article.nobox').hide()
    //     $('article.nobox.' + modal).fadeIn(200)
    // });


    
});