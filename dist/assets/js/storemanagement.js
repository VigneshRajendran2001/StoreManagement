function fetchCategoriesData() {
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
    var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/category';
    $.ajax({
        type: 'GET',
        url: apiurl,
        dataType: 'json',
        contentType: 'application/json',
        headers: {
            'apikey': apikey,
            'pkey': pkey,
        },
        success: function (data) {

            $('#add-subcategory-category').empty();

            $('#add-subcategory-category').append('<option value="">Select a category</option>');

            data.forEach(function (category) {
                $('#add-subcategory-category').append('<option value="' + category.id + '">' + category.category_name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error fetching categories:', error);
        }
    });
}