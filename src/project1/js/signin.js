function login(){

    if(validationLogin()){
            $.ajax({
                    url: "local:8080/project1/signin.php", 
                    type: "POST",
                    data: {"email": email, 
                           "password": password, 
                           },
                    dataType: "html",
                    cache: false,
                    beforeSend: function() {    
                        console.log("Processing...");
                    },
                    success: 
                          function(data){
                            if(data == "OK"){
                                alert("asd");
                            }else{
                                alert("sss");

                            }
                        }
    
            });
    
        }else{
            //alert("Incorrect data");
        }
    }
    