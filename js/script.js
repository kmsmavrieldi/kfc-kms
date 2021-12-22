displayMenus();
function displayMenus() {
    $.getJSON('files/kfc-kms.json', function(data){
            let menus='';
        $.each(data.menu, function(i, result){
            menus +=
            '<div class="col-md-4 mb-3">'+
                '<div class="card" style="width: 18rem;">'+
                    '<img src="'+result.image+'" class="card-img-top" alt="...">'+
                    '<div class="card-body">'+
                        '<h5 class="card-title">'+result.name+'</h5>'+
                        '<h5 class="card-title">$ '+result.price+'</h5>'+
                        '<ul class="card-text">';
            $.each(result.content, function(j, row){
            menus +=
                                    '<li class="list"> '+row+' </li>';
            });               
            menus +=                
                            '</ul>'+
                            '<a href="#" class="btn btn-primary">Pesan Sekarang</a>'+
                        '</div>'+
                '</div>'+
                '</div>';
            $('#menus').html(menus);
        });
        
    });
};

$('h1').html('All Menu');

$('.nav-link').on('click', function(){
    let category = $(this).html()
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
    $('h1').html(category);

    if(category == 'All Menus'){   
     displayMenus()
     $('#menus').html('');
    }

    $.getJSON('files/kfc-kms.json', function(data){
        let menus ='';
        $.each(data.menu, function(i, result){
            if(result.category == category.toLowerCase()){            
            menus +=
                '<div class="col-md-4 mb-3">'+
                    '<div class="card" style="width: 18rem;">'+
                        '<img src="'+result.image+'" class="card-img-top" alt="...">'+
                        '<div class="card-body">'+
                            '<h5 class="card-title">'+result.name+'</h5>'+
                            '<h5 class="card-title">$ '+result.price+'</h5>'+
                            '<ul class="card-text">';
            $.each(result.content, function(j, row){
            menus +=
                                    '<li class="list"> '+row+' </li>';
            });               
            menus +=                
                            '</ul>'+
                            '<a href="#" class="btn btn-primary">Pesan Sekarang</a>'+
                        '</div>'+
                   '</div>'+
                '</div>';
            $('#menus').html(menus);    
            }
        });
        
    });


})