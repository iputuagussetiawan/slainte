let newsSortBy=document.querySelector('#newsSortBy');
let formSortBy=document.querySelector('#frmSubmit');
newsSortBy.addEventListener("change", function(event){
    formSortBy.submit();
});