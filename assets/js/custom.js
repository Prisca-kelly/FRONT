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

function errorSweetAlert(msg = "", timer = 2000) {
  Swal.fire({
    icon: "error",
    title: "Erreur",
    text: msg,
    confirmButtonText: "Ok",
    timer: timer,
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
