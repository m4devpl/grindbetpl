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
                        position_currency_pair: { validators: { notEmpty: { message: "Currency Pair is invalid." } } },
                        position_state: { validators: { notEmpty: { message: "Position State is invalid." } } },
                        position_exec_date: { validators: { notEmpty: { message: "Execution Date is invalid." } } },
                        position_rr: { validators: { notEmpty: { message: "Risk Reward Ratio is invalid." } } },
                        position_profit: { validators: { notEmpty: { message: "Profit / Lose is invalid." } } },
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

                                                         a.submit();
                                          }, 500))
                                        : Swal.fire({
                                              text: "Sorry, looks like there are some errors detected, please try again.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: { confirmButton: "btn btn-primary" },
                                          });
                            });
                })
            );
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalNewTradingPosition.init();
});
