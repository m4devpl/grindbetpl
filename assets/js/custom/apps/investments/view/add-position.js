"use strict";
var KTModalNewTradingPosition = (function () {
    var t, e, n, a, o, i;
    return {
        init: function () {
            (i = document.querySelector("#kt_modal_new_trading_position")) &&
                ((o = new bootstrap.Modal(i)),
                (a = document.querySelector("#kt_modal_new_trading_position_form")),
                (t = document.getElementById("kt_modal_new_trading_position_submit")),
                (e = document.getElementById("kt_modal_new_trading_position_cancel")),
                $(a.querySelector('[name="position_exec_date"]')).flatpickr({ enableTime: 0, dateFormat: "Y-m-d" }),
                (n = FormValidation.formValidation(a, {
                    fields: {
                        position_currency_pair: { validators: { notEmpty: { message: "Currency Pair is required" } } },
                        position_state: { validators: { notEmpty: { message: "Position State is required" } } },
                        position_exec_date: { validators: { notEmpty: { message: "Execution Date is required" } } },
                        position_rr: { validators: { notEmpty: { message: "Risk Reward Ratio is required" } } },
                        position_profit: { validators: { notEmpty: { message: "Profit / Lose is required" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),
                t.addEventListener("click", function (e) {
                    e.preventDefault(),
                        n &&
                            n.validate().then(function (e) {
                                console.log("validated!"),
                                    "Valid" == e
                                        ? (t.setAttribute("data-kt-indicator", "on"),
                                          (t.disabled = !0),
                                          setTimeout(function () {
                                              t.removeAttribute("data-kt-indicator"),
                                                  (t.disabled = !1),
                                                  Swal.fire({ text: "Form has been successfully submitted!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then(
                                                      function (t) {
                                                         a.submit();
                                                      }
                                                  );
                                          }, 2e3))
                                        : Swal.fire({
                                              text: "Sorry, looks like there are some errors detected, please try again.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: { confirmButton: "btn btn-primary" },
                                          });
                            });
                }),
                e.addEventListener("click", function (t) {
                    t.preventDefault(),
                        Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
                        }).then(function (t) {
                            t.value
                                ? (a.reset(), o.hide())
                                : "cancel" === t.dismiss && Swal.fire({ text: "Your form has not been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                        });
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalNewTradingPosition.init();
});
