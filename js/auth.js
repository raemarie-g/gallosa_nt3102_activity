$(document).ready(function(){
            $("#myForm").validate({

                rules:{

                    name:{
                        required: true,
                        minlength: 5,
                        maxlength: 15
                    },

                    email:{
                        required: true,
                    },

                    password:{
                        required: true,
                        minlength: 8,
                        maxlength: 15
                    }
                },

                messages:{

                    name:{
                        required: "par bawal yan",
                        minlength: "mas mahaba pa dyan par",
                        maxlength: "oops sobra na"
                    },

                    email:{
                        required: "eto din par",
                        email: "tama ba yan?"
                    },

                    password:{
                        required: "maglagay ka ngani",
                        minlength: "habaan mo pa",
                        maxlength: "sobrang haba naman"
                    }
                },

    

            });

        });