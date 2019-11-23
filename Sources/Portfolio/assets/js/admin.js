var category_form = document.getElementById('category-form');
var new_category = document.getElementById('new_category');

new_category.onclick = function() {

    input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'name[]');
    input.setAttribute('class', 'form-control mb-3');
    category_form.insertBefore(input, category_form.lastElementChild);
    return false;
}