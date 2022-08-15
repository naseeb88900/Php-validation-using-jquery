
$("#update_process").validate({

    rules: {
        name: {
            required: true,
        },
        password: {
            required: true,
            number: true,
            min: 3
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            number: true
        },
        age: {
            required: true,
            number: true
        }

    },

    messages : {
        name: {
            required: "Name is required",

        },
        password: {
            required: "Please enter your password",
            number: "Please enter your password as a numerical value",
            min: "Password must be at least 3 characters long"
        },
        email: {
            email: "The email should be in the format: abc@domain.tld"
        },
        phone: {
            number: "Phone number must be a number",
            min: "Phone must be at least 10 characters long"
        },
        age:{
            required: "Age must be a number",

        }

    },
});



