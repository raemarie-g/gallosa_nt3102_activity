$(document).ready(function () {

    // Shared validation styling and error placement.
    var commonSettings = {
        errorClass: "invalid-feedback d-block",
        validClass: "is-valid",
        errorElement: "div",
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
        errorPlacement: function (error, element) {
            var wrap = element.closest(".auth-password-wrap");
            if (wrap.length) {
                error.insertAfter(wrap);
            } else {
                error.insertAfter(element);
            }
        }
    };

    // Password requirements: 8 characters, 1 uppercase letter, 1 number, and 1 symbol.
    $.validator.addMethod("strongPassword", function (value, element) {
        return this.optional(element) ||
            /^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/.test(value);
    }, "Password must be at least 8 characters and include an uppercase letter, a number, and a symbol.");

    // Official names may contain letters, spaces, periods, apostrophes, and hyphens.
    $.validator.addMethod("officialName", function (value, element) {
        return this.optional(element) || /^[A-Za-z.'-]+(?: [A-Za-z.'-]+)*$/.test(value);
    }, "Use your real name or title, e.g. \"Captain Juan\" (letters and spaces only).");

    // Demo login username.
    $.validator.addMethod("isAdminUser", function (value, element) {
        return this.optional(element) || value.trim().toLowerCase() === "admin";
    }, "Invalid email/username or password.");

    // Demo login password.
    $.validator.addMethod("isAdminPass", function (value, element) {
        return this.optional(element) || value === "12345";
    }, "Invalid email/username or password.");

    // Rules and messages shared by both registration forms.
    var registrationSettings = {
        rules: {
            email: {

                required: true,

                email: true

            },
            username: { required: true },
            password: {

                required: true,

                strongPassword: true

            },
            confirmPassword: { required: true }
        },
        messages: {
            email: {
                required: "Email is required.",
                email: "Enter a valid email address."
            },
            username: { required: "Username is required." },
            password: { required: "Password is required." },
            confirmPassword: {
                required: "Please confirm your password.",
                equalTo: "Passwords do not match."
            }
        },
        submitHandler: function (form) {
            alert("Account created successfully! You can now log in.");
            window.location.href = "login.php";
        }
    };

    // Rules and messages shared by both login forms.
    var loginSettings = {
        rules: {
            login: {

                required: true,

                isAdminUser: true

            },
            password: {

                required: true,

                isAdminPass: true

            }
        },
        messages: {
            login: { required: "Email or username is required." },
            password: { required: "Password is required." }
        }
    };

    // Additional requirements for official forms.
    var officialSettings = {
        rules: { position: { required: true } },
        messages: { position: { required: "Please select your position." } }
    };

    // Deep-copy settings so form-specific overrides do not change shared rules.
    function setupValidation(selector, settings, overrides) {
        var form = $(selector);

        if (!form.length) return;

        form.validate($.extend(true, {}, commonSettings, settings, overrides));
    }

    // Reuse login behavior with the username field belonging to each form.
    function loginHandler(usernameSelector) {
        return function (form) {
            sessionStorage.setItem("loggedIn", "true");
            sessionStorage.setItem("username", $(usernameSelector).val());
            window.location.href = "dashboard.php";
        };
    }

    // Connect each form to its shared settings and specific requirements.
    setupValidation("#residentRegisterForm", registrationSettings, {
        rules: { confirmPassword: { equalTo: "#resPassword" } }
    });

    setupValidation(
        "#officialRegisterForm",
        registrationSettings,
        $.extend(true, {}, officialSettings, {
            rules: {
                username: { officialName: true },
                confirmPassword: { equalTo: "#offPassword" }
            }
        })
    );

    setupValidation("#residentLoginForm", loginSettings, {
        submitHandler: loginHandler("#residentLogin")
    });

    setupValidation(
        "#officialLoginForm",
        loginSettings,
        $.extend(true, {}, officialSettings, {
            submitHandler: loginHandler("#officialLogin")
        })
    );

});
