$(document).ready(function() {
     // link
     $(".link-img").click(function(){
        var inputc = document.body.appendChild(document.createElement("input"));
        inputc.value = window.location.href;
        inputc.focus();
        inputc.select();
        document.execCommand('copy');
        inputc.parentNode.removeChild(inputc);
        alert("URL Copied.");
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera    
    });

    const tags = $("meta[name=content_tag]").attr("content");
    var tags_array = tags.split(',');
    for(var i = 0; i < tags_array.length; i++) {
        tags_array[i] = tags_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
        $('.tags-cont').append("<h4>" + tags_array[i] + "</h4>");
    }

    const $allArticles = {data: JSON.parse(document.querySelector('[data-side="front"]').dataset.params)};

    var $currID=0;
    var $currArt=0;
    $('h2, h3').each(function(){
        if($(this).is('h2')){
            $('.table-content .list').append('<span class="heading2" id='+$currID+'>'+$(this).text()+"</span><br>");
            $('#'+$currID).data("pos", $(this).offset().top);
        }
        else if($(this).is('h3')){
            $('.table-content .list').append('<span class="heading3" id='+$currID+'>'+$(this).text()+"</span><br>");
            $('#'+$currID).data("pos", $(this).offset().top);
        }
        if(($currID%5==0 && $currID!=0) || $currID==1 ){
            $(this).prev().append('<div class="readMore readMore'+$currID+'"><div class="title">Baca Juga</div>');
            for(var i = $currArt; i<=$currArt+2; i++){
                $('.readMore'+$currID).append('<div><a href="artikel/'+$allArticles.data[i].article_slug+'">'+$allArticles.data[i].article_visibletitle+'</a></div>');
            }
            $currArt+=3;
        }
        $currID++;
    });

    $('.table-content .list span').click(function(){
        $('html, body').scrollTop(0);
        $('html, body').animate({
            scrollTop: $(this).data("pos") 
        },'fast');
    });

    

});