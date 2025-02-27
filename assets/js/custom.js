function successSweetAlert(msg = "", timer = 2000) {
  Swal.fire({
    icon: "success",
    title: "Opération réussie",
    text: msg,
    showConfirmButton: false,
    timer: timer,
  }).then(function () {
    location.reload();
  });
}

function errorSweetAlert(msg = "") {
  Swal.fire({
    icon: "error",
    title: "Erreur",
    text: msg,
    confirmButtonText: "Ok",
  }).then((out) => {});
}

function customSweetAlert(msg = "", timer = 2000, icon = "success") {
  return Swal.fire({
    icon: icon,
    title: "Opération réussie",
    text: msg,
    showConfirmButton: false,
    timer: timer,
  });
}

function confirmSweetAlert(msg = "") {
  return Swal.fire({
    icon: "question",
    title: "Confirmation",
    text: msg,
    showConfirmButton: true,
    showDenyButton: true,
    confirmButtonText: "Oui",
    denyButtonText: "Non",
  });
}
