"use strict";
var KTUsersAddPermission = (function() {
    const t = document.getElementById("kt_modal_add_permission"),
        e = t.querySelector("#kt_modal_add_permission_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function() {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        permission_name: {
                            validators: {
                                notEmpty: {
                                    message: "Permission name is required",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                });
                t
                    .querySelector('[data-kt-permissions-modal-action="close"]')
                    .addEventListener("click", (t) => {
                        t.preventDefault(),
                            Swal.fire({
                                text: "Are you sure you would like to close?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, close it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light",
                                },
                            }).then(function(t) {
                                t.value && n.hide();
                            });
                    }),
                    t
                    .querySelector(
                        '[data-kt-permissions-modal-action="cancel"]'
                    )
                    .addEventListener("click", (t) => {
                        t.preventDefault(),
                            Swal.fire({
                                text: "Are you sure you would like to cancel?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, cancel it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light",
                                },
                            }).then(function(t) {
                                t.value ?
                                    (e.reset(), n.hide()) :
                                    "cancel" === t.dismiss &&
                                    Swal.fire({
                                        text: "Your form has not been cancelled!.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    });
                            });
                    });
                const i = t.querySelector(
                    '[data-kt-permissions-modal-action="submit"]'
                );
                const input = e.querySelector(
                    "input[name = 'permission_name']"
                );
                i.addEventListener("click", function(t) {
                    t.preventDefault(),
                        o &&
                        o.validate().then(function(t) {
                            console.log("validated!"),
                                "Valid" == t ?
                                (
                                    i.setAttribute(
                                        "data-kt-indicator",
                                        "on"
                                    ),
                                    console.log("checking " + input.value),
                                    $.ajax({
                                        type: 'GET',
                                        url: '/admin/permission/check',
                                        data: {
                                            'name': input.value
                                        },
                                        success: function(response) {
                                            if (response.status == 'taken') {
                                                Swal.fire({
                                                    text: "Sorry, That Permission name is already taken",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary",
                                                    },
                                                });
                                                i.removeAttribute("data-kt-indicator");
                                            } else if (response.status == 'available') {
                                                e.submit();
                                            } else {
                                                Swal.fire({
                                                    text: "Sorry, Something Went Wrong 😥",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary",
                                                    },
                                                });
                                                i.removeAttribute("data-kt-indicator");
                                            }
                                        }
                                    })


                                ) :
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                        });
                });
            })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function() {
    KTUsersAddPermission.init();
});