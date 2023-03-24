$(document).ready(function() {
    $('#no_of_children').change(function() {
        var numChildren = $(this).val();
        $('#child-fields').empty();
        for (var i = 1; i <= numChildren; i++) {
            $('#child-fields').append('<div class="form-group"><label for="child_name_' + i + '">Child ' + i + ' Name</label><input type="text" class="form-control" id="child_name_' + i + '" name="child_name_' + i + '"><label for="child_age_' + i + '">Child ' + i + ' Age</label><input type="text" class="form-control" id="child_age_' + i + '" name="child_age_' + i + '"></div>');
        }
    });
});
