function fetchCategoriesData() {
    var apiurl = 'https://example.com/api/categories'; // Replace with your API endpoint
    $.ajax({
        type: 'GET',
        url: apiurl,
        dataType: 'json',
        success: function(data) {
            // Clear existing options
            $('#add-subcategory-category').empty();
            // Add default option
            $('#add-subcategory-category').append('<option value="">Select a category</option>');
            // Add each category as an option
            data.forEach(function(category) {
                $('#add-subcategory-category').append('<option value="' + category.id + '">' + category.name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching categories:', error);
        }
    });
}