
var txt1 = '<form class="form-inline"><div><input type="text" class="input" id="input" name="text" style="height: 0%"><button type="file" name="myFile"> Browse...</button><input type="file" class="input" id="file" name="text" style="height: 0%; display: none"></div><div class="Drop-down pl-3"><select name="dropdown" class="drop-down"><option value="primary image">Primary Image</option><option value="secondary image">Secondary Image</option><option value="secondary image">Secondary Image</option><option value="secondary image">Secondary Image</option></select></div><p class="remove"> Remove</p></form>'; 


$(document).ready(function(){
    $(".add").click(function(){
        $(".none").append($(txt1));
       
    }); 
    
    $('.col-md-9').on('click', '.remove', function(){
        $(this).parents('.form-inline').remove();
     });

     $('.col-md-9').on('click', 'button', function(event){
        $(this).closest("form.form-inline").find("input#file").trigger("click");
        event.preventDefault();
     });

    
});
 