$( document ).ready(function() {
    console.log( "ready!" );
    const quote = $(".hotdog");
    const author = $(".burger");
    $(".ketchup").on("click", function() {
        $.ajax({ url: "api/getQuotes", method: "GET" })
            .done(data => {
                //where too put the interaction with the database
                
                // quote.html(data.quote); 
                // author.html(data.author);
            })
            .fail(err => {//where ot put the error message
                quote.html("hola"); 
                author.html("harry potter");
            });
    })
});