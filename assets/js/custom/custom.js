jQuery(document).ready(function ($){
    var portfolio = $('.container-fluid');
    var row = $('.uza-portfolio');
    var out = '';
    var uzaUrl = 'http://192.168.100.4:3000/wp-json/uza_rest/v1/portfolio';

    $('.port_cat_btn').on('click', function(e){
        cleanPortfolio();
        var portCatName = e.target.innerText;
 
        $.getJSON( uzaUrl, function(posts){

            portfolio.append(
                `
                 <div class="row uza-portfolio">
                     ${posts.map(
                         item =>(portCatName === item.term) ?
                         `<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                             <div class="single-portfolio-slide">
                                 <img src="${item.image_url}" alt="">
                                 <!-- Overlay Effect -->
                                 <div class="overlay-effect">
                                     <h4>${item.title}</h4>
                                     <p>${item.content}</p>
                                 </div>
                                 <!-- View More -->
                                 <div class="view-more-btn">
                                     <a href="${item.link}"><i class="arrow_right"></i></a>
                                 </div>
                             </div>
                         </div>` : ``
                     ).join('')}
                 </div>
                 `
            );

        });

        function cleanPortfolio(){
            portfolio.html('');
        }

    });

    $('#all_btn').on('click', function(e){
        cleanPortfolio();
        var portCatName = e.target.innerText;

        $.getJSON( uzaUrl, function(posts){

            portfolio.append(
                `
                 <div class="row uza-portfolio">
                     ${posts.map(
                         item =>
                         `<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                             <div class="single-portfolio-slide">
                                 <img src="${item.image_url}" alt="">
                                 <!-- Overlay Effect -->
                                 <div class="overlay-effect">
                                     <h4>${item.title}</h4>
                                     <p>${item.content}</p>
                                 </div>
                                 <!-- View More -->
                                 <div class="view-more-btn">
                                     <a href="${item.link}"><i class="arrow_right"></i></a>
                                 </div>
                             </div>
                         </div>`
                     ).join('')}
                 </div>
                 `
            );

        });

        function cleanPortfolio(){
            portfolio.html('');
        }

    });

    $('#load_more_btn').on('click', function(){

        $.getJSON( uzaUrl, posts => {

            portfolio.append(
               `
                <div class="row uza-portfolio">
                    ${posts.map(item =>
                        `<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                            <div class="single-portfolio-slide">
                                <img src="${item.image_url}" alt="">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4>${item.title}</h4>
                                    <p>${item.content}</p>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="${item.link}"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>`
                    ).join('')}
                </div>
                `
             );
        });
    });

});
