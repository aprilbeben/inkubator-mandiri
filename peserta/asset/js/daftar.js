$(function() {

    $("#daftarForm input,#daftarForm textarea,#daftarForm select").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        
                success: function() {
                    // Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>berhasil di simpan </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#daftarForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
            
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#daftarForm').trigger("reset");
                },
            },
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#nama').focus(function() {
    $('#success').html('');
});
