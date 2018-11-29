$( document ).ready(function() {
    console.log( "ready!" );
    // let red_vars = red_vars;
    console.log( red_vars );

    $(".new-quote").on("click", function(event) {
        event.preventDefault();
        console.log("button was clicked");

        // AJAX Request
        $.ajax({ 
            method: "GET",
            url: red_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1"
            
            })
            .done(result => {
                //where too put the interaction with the database
            
                console.log("This is the result from the endpoint", result);
                
                $(".quote").html(result[0].content.rendered);
                if (result[0]._qod_quote_source){
                    if(result[0]._qod_quote_source_url){
                        $(".author").html(result[0].title.rendered + "," + "&nbsp" + "<a href='" + result[0]._qod_quote_source_url + "'>" + result[0]._qod_quote_source + "</a>");
                    }else{
                        $(".author").html(result[0].title.rendered + ", " + result[0]._qod_quote_source);
                    }
                }else{
                    $(".author").html(result[0].title.rendered);
                }

            })
            .fail(error => {//where to put the error message
                $("div.error").html("Oh no ")
                console.error("An Error Occured with AJAX");
                
                // quote.html("hola"); 
                // author.html("harry potter");
            }); 
        
    })
    //add a new quote to the database
    $('#submit').on('click', function(event) {
        event.preventDefault();//prevents page from refreshing

        const author = $('.quote-author').val();
        const quote = $('.quote-quote').val();
        const source = $('.quote-source').val();
        const proof = $('.quote-proof').val();


        $.ajax({
           method: 'POST',
           url: red_vars.rest_url + 'wp/v2/posts',
           data: {
               title: author,
               content: quote,
               _qod_quote_source: source,
               _qod_quote_source_url: proof
           },
           beforeSend: function(xhr) {
              xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
           }
        }).done( function(response) {
           alert('Success! Thanks for adding to this awesome database of knowlegde');
        }).fail(function(){
            alert("Something is wrong here : (")
        })
     });
});