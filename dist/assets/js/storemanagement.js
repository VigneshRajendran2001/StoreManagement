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

function fetchingStoreDetails(){
      
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
         var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
       var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/store'; 

       $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
             success:function(data){
                  $('#add-storeName').empty();
                  $('#add-storeName').append('<option value="">Select the storeName</option>');

                  data.forEach(function(stores){

                      $('#add-storeName').append('<option value="' + stores.store_name + '">' + stores.store_name + '</option>');
                  });
                  
            },
            error: function(xhr,status,error){
               console.error('Error Fetching Users details:', error);
            }
       });
}


function fetchingUsersDetails(){
      
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
         var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
       var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/users'; 

       $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
             success:function(data){
                  $('#add-storeManager').empty();
                  $('#add-storeManager').append('<option value="">Select the Manager</option>');

                  data.forEach(function(users){

                      $('#add-storeManager').append('<option value="' + users.name + '">' + users.name + '</option>');
                  });
                  
            },
            error: function(xhr,status,error){
               console.error('Error Fetching Users details:', error);
            }
       });
}



function fetchingProductDetails(){
                
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
        var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
        var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/products'; 

        $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
            success:function(data){
                    $('#add-product').empty();
                    $('#add-product').append('<option value="">Select the Product</option>');

                    data.forEach(function(products){

                        $('#add-product').append('<option value="' + products.product_name + '">' + products.product_name + '</option>');
                    });
                    
            },
            error: function(xhr,status,error){
                console.error('Error Fetching Users details:', error);
            }
        });
}


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
      success: function(data) {
          
          $('#add-category').empty();
          
          $('#add-category').append('<option value="">Select a category</option>');
         
          data.forEach(function(category) {
              $('#add-category').append('<option value="' + category.category_name + '">' + category.category_name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching categories:', error);
      }
  });
}


function fetchSubCategoriesData() {
         
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
  var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/subcategory'; 
  $.ajax({
      type: 'GET',
      url: apiurl,
      dataType: 'json',
      contentType: 'application/json',
      headers: {
        'apikey': apikey,
        'pkey': pkey,
      },
      success: function(data) {
          
          $('#add-subcategory').empty();
          
          $('#add-subcategory').append('<option value="">Select a Sub category</option>');
         
          data.forEach(function(subcategory) {
              $('#add-subcategory').append('<option value="' + subcategory.sub_category_name + '">' + subcategory.sub_category_name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching categories:', error);
      }
  });
}



/*############################################################################################################################################################################### */

/*************************************************************EDIT DEATILS******************************************************************************/

function StoreDetails(){
      
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
         var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
       var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/store'; 

       $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
             success:function(data){
                  $('#edit-storeName').empty();
                  $('#edit-storeName').append('<option value="">Select the storeName</option>');

                  data.forEach(function(stores){

                      $('#edit-storeName').append('<option value="' + stores.store_name + '">' + stores.store_name + '</option>');
                  });
                  
            },
            error: function(xhr,status,error){
               console.error('Error Fetching Users details:', error);
            }
       });
}


function UsersDetails(){
      
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
         var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
       var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/users'; 

       $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
             success:function(data){
                  $('#edit-storeManager').empty();
                  $('#edit-storeManager').append('<option value="">Select the Manager</option>');

                  data.forEach(function(users){

                      $('#edit-storeManager').append('<option value="' + users.name + '">' + users.name + '</option>');
                  });
                  
            },
            error: function(xhr,status,error){
               console.error('Error Fetching Users details:', error);
            }
       });
}



function ProductDetails(){
                
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
        var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
        var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/products'; 

        $.ajax({
            url : apiurl,
            type : 'GET',
            dataType :'json',
            contentType:'application/json',
            headers:{
                'apikey':apikey,
                'pkey': pkey,
            },
            success:function(data){
                    $('#edit-product').empty();
                    $('#edit-product').append('<option value="">Select the Product</option>');

                    data.forEach(function(products){

                        $('#edit-product').append('<option value="' + products.product_name + '">' + products.product_name + '</option>');
                    });
                    
            },
            error: function(xhr,status,error){
                console.error('Error Fetching Users details:', error);
            }
        });
}


function CategoriesData() {
         
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
      success: function(data) {
          
          $('#edit-category').empty();
          
          $('#edit-category').append('<option value="">Select a category</option>');
         
          data.forEach(function(category) {
              $('#edit-category').append('<option value="' + category.category_name + '">' + category.category_name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching categories:', error);
      }
  });
}


function SubCategoriesData() {
         
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
  var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/subcategory'; 
  $.ajax({
      type: 'GET',
      url: apiurl,
      dataType: 'json',
      contentType: 'application/json',
      headers: {
        'apikey': apikey,
        'pkey': pkey,
      },
      success: function(data) {
          
          $('#edit-subcategory').empty();
          
          $('#edit-subcategory').append('<option value="">Select a Sub category</option>');
         
          data.forEach(function(subcategory) {
              $('#edit-subcategory').append('<option value="' + subcategory.sub_category_name + '">' + subcategory.sub_category_name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching categories:', error);
      }
  });
}


function selectedStoreName(selectedStoreName = []) {
    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
    var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/store'; 

    $.ajax({
        url: apiurl,
        type: 'GET',
        dataType: 'json',
        contentType: 'application/json',
        headers: {
            'apikey': apikey,
            'pkey': pkey,
        },
        success: function(data) {
            $('#edit-storeName').empty();
            data.forEach(function(store) {
                var isSelected = selectedStoreName.includes(store.store_name) ? 'selected' : '';
                $('#edit-storeName').append('<option value="' + store.store_name + '" ' + isSelected + '>' + store.store_name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Error Fetching Store details:', error);
        }
    });
}



/*******************************************************************************TOASTER*********************************/

  function showToaster(message, type) {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });

    Toast.fire({
      icon: type,
      title: message
    });
  }

