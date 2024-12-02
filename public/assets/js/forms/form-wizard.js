// Basic Example
$("#example-basic").steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  autoFocus: true,
  labels: {
    cancel: "Cancelar",
    current: "Etapa atual:",
    pagination: "Paginação",
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  }
});

// Basic Example with form
var form = $("#example-form");
form.validate({
  errorPlacement: function errorPlacement(error, element) {
    element.before(error);
  },
  rules: {
    confirm: {
      equalTo: "#password",
    },
  },
});
form.children("div").steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  labels: {
    cancel: "Cancelar",
    current: "Etapa atual:",
    pagination: "Paginação",
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  },
  onStepChanging: function (event, currentIndex, newIndex) {
    form.validate().settings.ignore = ":disabled,:hidden";
    return form.valid();
  },
  onFinishing: function (event, currentIndex) {
    form.validate().settings.ignore = ":disabled";
    return form.valid();
  },
  onFinished: function (event, currentIndex) {
    alert("Formulário enviado!");
  },
});

// Advance Example
var advanced_form = $("#example-advanced-form").show();

advanced_form
  .steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    labels: {
      cancel: "Cancelar",
      current: "Etapa atual:",
      pagination: "Paginação",
      finish: "Concluir",
      next: "Próximo",
      previous: "Anterior",
      loading: "Carregando..."
    },
    onStepChanging: function (event, currentIndex, newIndex) {
      if (currentIndex > newIndex) {
        return true;
      }
      if (newIndex === 3 && Number($("#age-2").val()) < 18) {
        return false;
      }
      if (currentIndex < newIndex) {
        advanced_form.find(".body:eq(" + newIndex + ") label.error").remove();
        advanced_form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
      }
      advanced_form.validate().settings.ignore = ":disabled,:hidden";
      return advanced_form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
        advanced_form.steps("Próximo");
      }
      if (currentIndex === 2 && priorIndex === 3) {
        advanced_form.steps("Anterior");
      }
    },
    onFinishing: function (event, currentIndex) {
      advanced_form.validate().settings.ignore = ":disabled";
      return advanced_form.valid();
    },
    onFinished: function (event, currentIndex) {
      alert("Formulário enviado!");
    },
  })
  .validate({
    errorPlacement: function errorPlacement(error, element) {
      element.before(error);
    },
    rules: {
      confirm: {
        equalTo: "#password-2",
      },
    },
  });

// Dynamic Manipulation
$("#example-manipulation").steps({
  headerTag: "h3",
  bodyTag: "section",
  enableAllSteps: true,
  enablePagination: false,
  labels: {
    cancel: "Cancelar",
    current: "Etapa atual:",
    pagination: "Paginação",
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  }
});

// Vertical Steps
$("#example-vertical").steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  stepsOrientation: "vertical",
  labels: {
    cancel: "Cancelar",
    current: "Etapa atual:",
    pagination: "Paginação",
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  }
});

// Custom design form example
$(".tab-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  },
  onFinished: function (event, currentIndex) {
    swal(
      "Formulário enviado!",
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
    );
  },
});

var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    finish: "Concluir",
    next: "Próximo",
    previous: "Anterior",
    loading: "Carregando..."
  },
  onStepChanging: function (event, currentIndex, newIndex) {
    return (
      currentIndex > newIndex ||
      (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
        (currentIndex < newIndex &&
          (form.find(".body:eq(" + newIndex + ") label.error").remove(),
          form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
        (form.validate().settings.ignore = ":disabled,:hidden"),
        form.valid()))
    );
  },
  onFinishing: function (event, currentIndex) {
    return (form.validate().settings.ignore = ":disabled"), form.valid();
  },
  onFinished: function (event, currentIndex) {
    swal(
      "Formulário enviado!",
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
    );
  },
}),
  $(".validation-wizard").validate({
    ignore: "input[type=hidden]",
    errorClass: "text-danger",
    successClass: "text-success",
    highlight: function (element, errorClass) {
      $(element).removeClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
      $(element).removeClass(errorClass);
    },
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    rules: {
      email: {
        email: !0,
      },
    },
  });
