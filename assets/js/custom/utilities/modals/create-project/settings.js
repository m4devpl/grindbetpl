"use strict";
var KTModalCreateProjectSettings = (function () {
  var e, t, i, o, r;
  return {
    init: function () {
      (o = KTModalCreateProject.getForm()),
        (r = KTModalCreateProject.getStepperObj()),
        (e = KTModalCreateProject.getStepper().querySelector(
          '[data-kt-element="settings-next"]'
        )),
        (t = KTModalCreateProject.getStepper().querySelector(
          '[data-kt-element="settings-previous"]'
        )),
        $(o.querySelector('[name="settings_release_date"]')).flatpickr({
          enableTime: !0,
          dateFormat: "M d ,Y",
        }),
        $(o.querySelector('[name="settings_customer"]')).on(
          "change",
          function () {
            i.revalidateField("settings_customer");
          }
        ),
        (i = FormValidation.formValidation(o, {
          fields: {
            settings_picture: {
              validators: { notEmpty: { message: "Project Picture is required" } },
            },
            settings_name: {
              validators: { notEmpty: { message: "Project name is required" } },
            },
            settings_customer: {
              validators: { notEmpty: { message: "Customer is required" } },
            },
            settings_description: {
              validators: { notEmpty: { message: "Description is required" } },
            },
            settings_release_date: {
              validators: { notEmpty: { message: "Release date is required" } },
            },
            "settings_notifications[]": {
              validators: {
                notEmpty: { message: "Notifications are required" },
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
        })),
        e.addEventListener("click", function (t) {
          t.preventDefault(),
            (e.disabled = !0),
            i &&
              i.validate().then(function (t) {
                console.log("validated!"),
                  "Valid" == t
                    ? (e.setAttribute("data-kt-indicator", "on"),
                      setTimeout(function () {
                        e.removeAttribute("data-kt-indicator"),
                          (e.disabled = !1),
                          r.goNext();
                      }, 1500))
                    : ((e.disabled = !1),
                      Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" },
                      }));
              });
        }),
        t.addEventListener("click", function () {
          r.goPrevious();
        });
    },
  };
})();
"undefined" != typeof module &&
  void 0 !== module.exports &&
  (window.KTModalCreateProjectSettings = module.exports =
    KTModalCreateProjectSettings);
