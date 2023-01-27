<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
input[type=text] {
  width: 350px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  background-color: transparent;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 10px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  margin-top: 15px;

}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 0.5; /* Firefox */
}


</style>
</head>
<body>

<form action="proses/dapet_id.php" method="POST">
    <input type="text" name="country" id="country" placeholder="Masukkan Nama Artis" style="color: white;"/>  
    <div id="countryList"></div>
</form>
         <script>
            $(document).ready(function(){  
            $('#country').keyup(function(){  
                 var query = $(this).val();  
                 if(query != '')  
                 {  
                      $.ajax({  
                           url:"proses/search.php",  
                           method:"POST",  
                           data:{query:query},  
                           success:function(data)  
                           {  
                                $('#countryList').fadeIn();  
                                $('#countryList').html(data);  
                           }  
                      });  
                 }  
            });  
            $(document).on('click', 'li', function(){  
                 $('#country').val($(this).text());  
                 $('#countryList').fadeOut();  
            });  
       });  
      </script>
</body>
</html>
