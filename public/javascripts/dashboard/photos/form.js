(function($){
    var $subcategorySelect,
        $categorySelect;

    $(document).ready(function(){
        $categorySelect = $('#category_id');
        $subcategorySelect = $('#subcategory_id');

        $categorySelect.change(function(e){
            var category = getCategory($categorySelect.val());
            setSubcategoryOptions(category.subcategories);
        }).change();
    });

    function setSubcategoryOptions(subcategories) {
        var html = '';
        if(subcategories.length > 0) {
            $.each(subcategories, function(index, subcategory){
                html += '<option value="' + subcategory.id + '">' + subcategory.name + '</option>';
            });    
            $subcategorySelect.prop('disabled', false);
        }
        else {
            html = '<option>Sin subcategoría</option>';
            $subcategorySelect.prop('disabled', true);
        }
        $subcategorySelect.html(html);
    }

    function getCategory(id) {
        var result = null;
        $.each(categories, function(index, category){
            if(category.id == id) 
                result = category;
        });
        return result;
    }
})(jQuery);