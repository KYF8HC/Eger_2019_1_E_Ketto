// ---------------
// JSON
// ---------------
var categorys;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        categorys = JSON.parse(this.responseText);
    }
};
xhttp.open("GET", "json", true);
xhttp.send();

// ---------------
// Add row
// ---------------

var category_form = document.getElementById('category-form');
var new_category = document.getElementById('new_category');
var new_category = document.getElementById('new-category');

new_category.onclick = function() {

    input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'name[]');
    input.setAttribute('class', 'form-control mb-3');
    category_form.insertBefore(input, category_form.lastElementChild);

    return false;
}

var image_form = document.getElementById('image-form');
var new_image = document.getElementById('new-image');

new_image.onclick = function() {
    row = document.createElement('div');
    row.setAttribute('class', 'row');
    image_form.insertBefore(row, image_form.lastElementChild);

    col_lg_3 = document.createElement('div');
    col_lg_3.setAttribute('class', 'col-lg-3');
    row.appendChild(col_lg_3);

    input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('name', 'location[]');
    input.setAttributeNode(document.createAttribute('required'));
    col_lg_3.appendChild(input);

    col_lg_9 = document.createElement('div');
    col_lg_9.setAttribute('class', 'col-lg-9 text-right');
    row.appendChild(col_lg_9);

    input_group = document.createElement('div');
    input_group.setAttribute('class', 'input-group mb-3');
    col_lg_9.appendChild(input_group);

    input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('class', 'form-control');
    input.setAttribute('name', 'name[]');
    input.setAttribute('placeholder', 'Enter title');
    input.setAttributeNode(document.createAttribute('required'));
    input_group.appendChild(input);

    select = document.createElement('select');
    select.setAttribute('name', 'category_id[]');
    select.setAttribute('class', 'form-control');
    input_group.appendChild(select);

    categorys.forEach(category => {
        option = document.createElement('option');
        option.setAttribute('value', category['id']);
        option.innerHTML = category['name'];
        select.appendChild(option);
    });

    description = document.createElement('input');
    description.setAttribute('type', 'text');
    description.setAttribute('class', 'form-control mb-3');
    description.setAttribute('name', 'description[]');
    description.setAttribute('placeholder', 'Enter description');
    col_lg_9.appendChild(description);

    return false;
} 