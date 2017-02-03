$(document).ready(function() {
            $('#tg').datepicker({
                format:"yyyy/m/dd",
                todayHighlight:true,
                clearBtn:true 
            });
            $('#main').DataTable();
            $(".push_menu").click(function(){
            $(".wrapper").toggleClass("active");
            });
        });

$(document).on('change','.fk_category',function(){
            var tipe = $('.fk_category option:selected').attr('tipe');
            $('.tipe').val(tipe);
});