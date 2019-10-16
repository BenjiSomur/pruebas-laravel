 $(document).ready(function(){
        $('select[name="country"]').on('change', function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    url: 'dropdownlist/getstates/'+countryID,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                        console.log(data);
                        $('select[name="state"]').empty();
                        $.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            } else{
                $('select[name="state"]').empty();
            }
        });
      });