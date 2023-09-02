"use strict";
var KTModalCreateProjectTargets = (function () {
  var e, t, a, r, o;
  return {
    init: function () {
      (r = KTModalCreateProject.getForm()),
        (o = KTModalCreateProject.getStepperObj()),
        (t = KTModalCreateProject.getStepper().querySelector(
          '[data-kt-element="targets-previous"]'
        )),
        new Tagify(r.querySelector('[name="target_tags"]'), {
          whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
          maxTags: 5,
          dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 },
        }).on("change", function () {
          a.revalidateField("tags");
        }),
        $(r.querySelector('[name="target_due_date"]')).flatpickr({
          enableTime: !0,
          dateFormat: "d, M Y, H:i",
        }),
        $(r.querySelector('[name="target_assign"]')).on("change", function () {
          a.revalidateField("target_assign");
        }),
        (a = FormValidation.formValidation(r, {
          fields: {
            target_title: {
              validators: { notEmpty: { message: "Target title is required" } },
            },
            target_assign: {
              validators: { notEmpty: { message: "Customer is required" } },
            },
            target_due_date: {
              validators: { notEmpty: { message: "Due date is required" } },
            },
            target_tags: {
              validators: { notEmpty: { message: "Target tags are required" } },
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
        t.addEventListener("click", function () {
          o.goPrevious();
        });
    },
  };
})();
"undefined" != typeof module &&
  void 0 !== module.exports &&
  (window.KTModalCreateProjectTargets = module.exports =
    KTModalCreateProjectTargets);
