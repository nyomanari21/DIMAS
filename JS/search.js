$(document).ready(function()
{
    load_data();
    
    function load_data(jurusan, keyword)
    {
        $.ajax
        (
            {
                method : "POST",
                url : "data.php",
                data : {jurusan: jurusan, keyword:keyword},
                success : function(hasil)
                {
                    $('.data').html(hasil);
                }
            }
        );
    }

    $('#s_keyword').keyup(function()
    {
        var jurusan = $("#s_jurusan").val();
        var keyword = $("#s_keyword").val();
        load_data(jurusan, keyword);
    });
    $('#s_jurusan').change(function(){
        var jurusan = $("#s_jurusan").val();
        var keyword = $("#s_keyword").val();
        load_data(jurusan, keyword);
    });
});