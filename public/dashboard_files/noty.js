$(document).ready(function () {

        //delete
// image preview
$(".image").change(function () {

    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
    }

});// image preview



$('.delete').click(function (e) {

    var that = $(this)

    e.preventDefault();

    var n = new Noty({
        text: "Confirm Delete",
        type: "warning",
        killer: true,
        buttons: [
            Noty.button("Yes", 'btn btn-success mr-2', function () {
                that.closest('form').submit();
            }),

            Noty.button("No", 'btn btn-primary mr-2', function () {
                n.close();
            })
        ]
    });

    n.show();

});//end of delete    

    
    
});//end of ready