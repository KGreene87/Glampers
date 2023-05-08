const validation = new JustValidate ("#signup");

validation
.addfield ("#name",[
    {
        rule:"required"
    }
])
.addfield ("#email",[
    {
        rule:"required"
    },
    {
        rule:"email"
    },
    {
        validator: (value) => () =>{
           return fetch("Validate-email.php?email=" + encodeURIComponent(value))
            .then(function(response) {
                return response.json();
             })
             .then(function(json) {
                return json.available;
             });

        },
        errorMessage:"Email already taken"
    }
])
.addfield("#password",[
    {
        rule:"required"
    },
    {
        rule:"password"
    }
    
])
.addfield("#password_confirmation",[
    {
        validator: (value, fields)=> {
            return value == fields["#password"].elem.value;
        },
        errorMessage:"Passwords must match"
    }
])
.onSuccess((event) =>{
    document.getElementById("signup") .submit();

});