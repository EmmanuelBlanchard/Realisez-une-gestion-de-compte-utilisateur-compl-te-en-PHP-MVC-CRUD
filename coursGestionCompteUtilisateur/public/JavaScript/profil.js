let btnModificationMail = document.querySelector("#btnModificationMail");
let btnValidModificationMail = document.querySelector("#btnValidModificationMail");
let divMail = document.querySelector("#mail");
let divModificationMail = document.querySelector("#modificationMail");

btnModificationMail.addEventListener("click", function() {
    divMail.classList.add("d-none");
    divModificationMail.classList.remove("d-none");
})
