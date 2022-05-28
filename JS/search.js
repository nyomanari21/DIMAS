function searchInventory(URL, idSearch)
{
    $(document).ready(function()
    {
        load_data();
        
        function load_data(keyword)
        {   
            $.ajax(
            {
                method : "POST",
                url : URL,
                data : {keyword:keyword},
                success : function(hasil)
                {
                    $('.data').html(hasil);
                }
            });
        }
    
        $('#s_inventory').keyup(function()
        {
            var search = $(idSearch).val();
            load_data(search);
        });
    });
}