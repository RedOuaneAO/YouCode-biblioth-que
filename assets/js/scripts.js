function popUp(id){
    $('#addModal').modal('show');
    // var id_input = document.getElementById("bookId");
    // id_input.value = id;
    var titleInput = document.getElementById("titleId");
    var authorInput = document.getElementById("authorId");
    var priceInput = document.getElementById("priceId");

    var title = document.getElementById(id).querySelector('.book-title').innerHTML;
    titleInput.value=title;

    var author = document.getElementById(id).querySelector('.book-author').innerHTML;
    authorInput.value=author;
    
    var price = document.getElementById(id).querySelector('.book-price').innerHTML;
    priceInput.value=price;    
    
}



