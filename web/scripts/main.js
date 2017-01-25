// listen click, open modal and .load content
$('#modalButton').click(function (){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});

// serialize form, render response and close modal
function submitForm($form) {
    $.post(
            $form.attr("action"), // serialize Yii2 form
            $form.serialize()
        )
        .done(function(result) {
            $form.parent().html(result.message);
            $('#modal').modal('hide');
        })
        .fail(function() {
            console.log("server error");
            $form.replaceWith('<button class="newType">Fail</button>').fadeOut()
        });
    return false;
}