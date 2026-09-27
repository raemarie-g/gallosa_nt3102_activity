$(document).ready(function () {

    // error message style
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

// Custom rule: at least 8 chars, 1 uppercase, 1 number, 1 symbol
    $.validator.addMethod("strongPassword", function (value, element) {
        return this.optional(element) ||
            /^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/.test(value);
    }, "Password must be at least 8 characters and include an uppercase letter, a number, and a symbol.");

    // Custom rule: officials use their real name/title, e.g. "Captain Juan"
    $.validator.addMethod("officialName", function (value, element) {
        return this.optional(element) || /^[A-Za-z.'-]+(?: [A-Za-z.'-]+)*$/.test(value);
    }, "Use your real name or title, e.g. \"Captain Juan\" (letters and spaces only).");

// username/email must literally be "admin"
    $.validator.addMethod("isAdminUser", function (value, element) {
        return this.optional(element) || value.trim().toLowerCase() === "admin";
    }, "Invalid email/username or password.");

// password must literally be "1234"
    $.validator.addMethod("isAdminPass", function (value, element) {
        return this.optional(element) || value === "1234";
    }, "Invalid email/username or password.");
   
    if ($("#residentRegisterForm").length) {
        $("#residentRegisterForm").validate($.extend({}, commonSettings,{
            rules: {
                email: {
                    required: true,
                    email: true
                },
                username: {
                    required: true
                },
                password: {
                    required: true,
                    strongPassword: true
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#resPassword"
                }
            },
            messages: {
                email: {
                    required: "Email is required.",
                    email: "Enter a valid email address."
                },
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                },
                confirmPassword: {
                    required: "Please confirm your password.",
                    equalTo: "Passwords do not match."
                }
            }
        }));
    }

    if ($("#officialRegisterForm").length) {
        $("#officialRegisterForm").validate($.extend({}, commonSettings,{
            rules: {
                position: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                username: {
                    required: true,
                    officialName: true
                },
                password: {
                    required: true,
                    strongPassword: true
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#offPassword"
                }
            },
            messages: {
                position: {
                    required: "Please select your position."
                },
                email: {
                    required: "Email is required.",
                    email: "Enter a valid email address."
                },
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                },
                confirmPassword: {
                    required: "Please confirm your password.",
                    equalTo: "Passwords do not match."
                }
            }
        }));
    }

    if ($("#residentLoginForm").length) {
        $("#residentLoginForm").validate($.extend({}, commonSettings,{
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
                login: {
                    required: "Email or username is required."
                },
                password: {
                    required: "Password is required."
                }
            },
            submitHandler: function (form) {
                window.location.href = "dashboard.html";
            }
        }));
    }
    if ($("#officialLoginForm").length) {
        $("#officialLoginForm").validate($.extend({}, commonSettings,{
            rules: {
                position: {
                    required: true
                },
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
                position: {
                    required: "Please select your position."
                },
                login: {
                    required: "Email or username is required."
                },
                password: {
                    required: "Password is required."
                }
            },
            submitHandler: function (form) {
                window.location.href = "dashboard.html";
            }
        }));
    }

});