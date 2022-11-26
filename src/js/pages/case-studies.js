let caseStudiesSortBy=document.querySelector('#caseStudiesSortBy');
let caseStudiesCategories=document.querySelector('#caseStudiesCategories');

let formCaseStudies=document.querySelector('#frmCaseStudies');
caseStudiesSortBy.addEventListener("change", function(event){
    formCaseStudies.submit();
});

caseStudiesCategories.addEventListener("change", function(event){
    formCaseStudies.submit();
});