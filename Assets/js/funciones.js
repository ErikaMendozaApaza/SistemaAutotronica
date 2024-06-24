let tblUsuarios,
  tblClientes,
  tblVehiculos,
  tblServicios,
  tblRepuestos,
  tblAreas,
  tblSucursales,
  tblEmpleados,
  tblMantenimientos;
document.addEventListener("DOMContentLoaded", function () {
  tblUsuarios = $("#tblUsuarios").DataTable({
    ajax: {
      url: base_url + "Usuarios/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "usuario",
      },
      {
        data: "nombre",
      },
      {
        data: "caja",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA USUARIOS
  tblClientes = $("#tblClientes").DataTable({
    ajax: {
      url: base_url + "Clientes/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "ci_cliente",
      },
      {
        data: "nombres",
      },
      {
        data: "apellido_paterno",
      },
      {
        data: "apellido_materno",
      },
      {
        data: "direccion",
      },
      {
        data: "correo",
      },
      {
        data: "telefono",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA CLIENTES
  tblVehiculos = $("#tblVehiculos").DataTable({
    ajax: {
      url: base_url + "Vehiculos/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "placa_vehiculo",
      },
      {
        data: "tipo",
      },
      {
        data: "marca",
      },
      {
        data: "modelo",
      },
      {
        data: "motor",
      },
      {
        data: "chasis",
      },
      {
        data: "color",
      },
      {
        data: "ci_cliente",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA VEHICULOS
  tblServicios = $("#tblServicios").DataTable({
    ajax: {
      url: base_url + "Servicios/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_servicio",
      },
      {
        data: "nombre",
      },
      {
        data: "descripcion",
      },
      {
        data: "tiempo_rapido",
      },
      {
        data: "tiempo_lento",
      },
      {
        data: "tiempo_promedio",
      },
      {
        data: "costo_referencial",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA SERVICIOS
  tblRepuestos = $("#tblRepuestos").DataTable({
    ajax: {
      url: base_url + "Repuestos/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_repuesto",
      },
      {
        data: "nombre",
      },
      {
        data: "descripcion",
      },
      {
        data: "costo_compra",
      },
      {
        data: "precio_venta",
      },
      {
        data: "codigo_categoria",
      },
      {
        data: "cantidad",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA REPUESTOS
  tblAreas = $("#tblAreas").DataTable({
    ajax: {
      url: base_url + "Areas/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_area",
      },
      {
        data: "nombre",
      },
      {
        data: "descripcion",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA AREAS
  tblSucursales = $("#tblSucursales").DataTable({
    ajax: {
      url: base_url + "Sucursales/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_sucursal",
      },
      {
        data: "nombre",
      },
      {
        data: "direccion",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA SUCURSAL
  tblEmpleados = $("#tblEmpleados").DataTable({
    ajax: {
      url: base_url + "Empleados/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_empleado",
      },
      {
        data: "nombre",
      },
      {
        data: "profesion",
      },
      {
        data: "cargo",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA EMPLEADO
  tblMantenimientos = $("#tblMantenimientos").DataTable({
    ajax: {
      url: base_url + "Mantenimientos/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "codigo_mantenimiento",
      },
      {
        data: "codigo_sucursal",
      },
      {
        data: "placa_vehiculo",
      },
      {
        data: "fecha_recepcion",
      },
      {
        data: "fecha_finalizacion",
      },
      {
        data: "fecha_entrega",
      },
      {
        data: "kilometraje_recibido",
      },
      {
        data: "kilometraje_entrega",
      },
      {
        data: "descripcion_problema",
      },
      {
        data: "inventario_vehiculo",
      },
      {
        data: "autorizacion_repuestos",
      },
      {
        data: "costo_total",
      },
      {
        data: "estado_mantenimiento",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
  //FIN DE TABLA EMPLEADO
});
function frmLogin(e) {
  e.preventDefault();
  const usuario = document.getElementById("usuario");
  const clave = document.getElementById("clave");
  if (usuario.value == "") {
    clave.classList.remove("is-invalid");
    usuario.classList.add("is-invalid");
    usuario.focus();
  } else if (clave.value == "") {
    usuario.classList.remove("is-invalid");
    clave.classList.add("is-invalid");
    clave.focus();
  } else {
    const url = base_url + "Usuarios/validar";
    const frm = document.getElementById("frmLogin");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        if (res == "ok") {
          window.location = base_url + "Dashboard";
        } else {
          document.getElementById("alerta").classList.remove("d-none");
          document.getElementById("alerta").innerHTML = res;
        }

        //console.log(this.responseText);
      }
    };
  }
}
function frmUsuario() {
  document.getElementById("title").innerHTML = "Nuevo Usuario";
  document.getElementById("btnAccion").innerHTML = "Registrar";
  document.getElementById("claves").classList.remove("d-none");
  document.getElementById("frmUsuario").reset();
  $("#nuevo_usuario").modal("show");
  document.getElementById("id").value = "";
}
function registrarUser(e) {
  e.preventDefault();
  const usuario = document.getElementById("usuario");
  const nombre = document.getElementById("nombre");
  const clave = document.getElementById("clave");
  const confirmar = document.getElementById("confirmar");
  const caja = document.getElementById("caja");

  if (usuario.value == "" || nombre.vaue == "" || caja.value == "") {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    const url = base_url + "Usuarios/registrar";
    const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Usuario registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_usuario").modal("hide");
          tblUsuarios.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Usuario modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_usuario").modal("hide");
          tblUsuarios.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarUser(id) {
  document.getElementById("title").innerHTML = "Actualizar Usuario";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Usuarios/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("usuario").value = res.usuario;
      document.getElementById("nombre").value = res.nombre;
      //document.getElementById("clave").value=res.clave;
      //document.getElementById("confirmar").value=res.confirmar;
      document.getElementById("caja").value = res.id_caja;
      document.getElementById("claves").classList.add("d-none");
      $("#nuevo_usuario").modal("show");
    }
  };
}
function btnEliminarUser(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El usuario no se eliminara de forma permanente, solo cambiara el usuario a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Usuarios/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Usuario Eliminado con exito.",
              icon: "success",
            });
            tblUsuarios.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarUser(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Usuarios/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Usuario reingresado con exito.",
              icon: "success",
            });
            tblUsuarios.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION USUARIOS *************************

//**************************** SECCION CLIENTES******************************************
function frmCliente() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Cliente"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmCliente").reset(); // Resetea el formulario si es necesario
  $("#nuevo_cliente").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarCliente(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const ci = document.getElementById("ci");
  const nombres = document.getElementById("nombres");
  const apellidopaterno = document.getElementById("apellidopaterno");
  const apellidomaterno = document.getElementById("apellidomaterno");
  const direccion = document.getElementById("direccion");
  const correo = document.getElementById("correo");
  const telefono = document.getElementById("telefono");
  //SECCION DE VALIDACION DEL CARNET,NOMBRES, APELLIDOS, CONTACTOS.
  if (
    ci.value == "" ||
    nombres.vaue == "" ||
    apellidopaterno.value == "" ||
    apellidomaterno.value == "" ||
    direccion.value == "" ||
    correo.value == "" ||
    telefono.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Clientes/registrar";
    const frm = document.getElementById("frmCliente");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Cliente registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_cliente").modal("hide");
          tblClientes.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Cliente modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_cliente").modal("hide");
          tblClientes.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarCliente(id) {
  document.getElementById("title").innerHTML = "Actualizar Cliente";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Clientes/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("ci").value = res.ci_cliente;
      document.getElementById("nombres").value = res.nombres;
      document.getElementById("apellidopaterno").value = res.apellido_paterno;
      document.getElementById("apellidomaterno").value = res.apellido_materno;
      document.getElementById("direccion").value = res.direccion;
      document.getElementById("correo").value = res.correo;
      document.getElementById("telefono").value = res.telefono;
      $("#nuevo_cliente").modal("show");
    }
  };
}
function btnEliminarCliente(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El cliente no se eliminara de forma permanente, solo cambiara el usuario a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Clientes/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Usuario Eliminado con exito.",
              icon: "success",
            });
            tblClientes.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarCliente(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Clientes/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Usuario reingresado con exito.",
              icon: "success",
            });
            tblClientes.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION CLIENTES *************************

//**************************** SECCION VEHICULOS******************************************
function frmVehiculo() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Vehiculo"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmVehiculo").reset(); // Resetea el formulario si es necesario
  $("#nuevo_vehiculo").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarVehiculo(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const placa = document.getElementById("placa");
  const tipo = document.getElementById("tipo");
  const marca = document.getElementById("marca");
  const modelo = document.getElementById("modelo");
  const motor = document.getElementById("motor");
  const chasis = document.getElementById("chasis");
  const color = document.getElementById("color");
  const ci = document.getElementById("ci");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    placa.value == "" ||
    tipo.value == "" ||
    marca.value == "" ||
    modelo.value == "" ||
    motor.value == "" ||
    chasis.value == "" ||
    color.value == "" ||
    ci.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Vehiculos/registrar";
    const frm = document.getElementById("frmVehiculo");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Vehiculo registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_vehiculo").modal("hide");
          tblVehiculos.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Vehiculo modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_vehiculo").modal("hide");
          tblVehiculos.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarVehiculo(id) {
  document.getElementById("title").innerHTML = "Actualizar Vehiculo";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Vehiculos/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("placa").value = res.placa_vehiculo;
      document.getElementById("tipo").value = res.tipo;
      document.getElementById("marca").value = res.marca;
      document.getElementById("modelo").value = res.modelo;
      document.getElementById("motor").value = res.motor;
      document.getElementById("chasis").value = res.chasis;
      document.getElementById("color").value = res.color;
      document.getElementById("ci").value = res.ci_cliente;
      $("#nuevo_vehiculo").modal("show");
    }
  };
}
function btnEliminarVehiculo(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El vehiculo no se eliminara de forma permanente, solo cambiara el usuario a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Vehiculos/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Vehiculo Eliminado con exito.",
              icon: "success",
            });
            tblVehiculos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarVehiculo(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Vehiculos/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Usuario reingresado con exito.",
              icon: "success",
            });
            tblVehiculos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION VEHICULOS *************************

//**************************** SECCION SERVICIOS******************************************
function frmServicio() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Servicio"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmServicio").reset(); // Resetea el formulario si es necesario
  $("#nuevo_servicio").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarServicio(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigoservicio = document.getElementById("codigoservicio");
  const nombre = document.getElementById("nombre");
  const descripcion = document.getElementById("descripcion");
  const tiemporapido = document.getElementById("tiemporapido");
  const tiempolento = document.getElementById("tiempolento");
  const tiempopromedio = document.getElementById("tiempopromedio");
  const costoreferencial = document.getElementById("costoreferencial");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigoservicio.value == "" ||
    nombre.value == "" ||
    descripcion.value == "" ||
    tiemporapido.value == "" ||
    tiempolento.value == "" ||
    tiempopromedio.value == "" ||
    costoreferencial.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Servicios/registrar";
    const frm = document.getElementById("frmServicio");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Servicio registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_servicio").modal("hide");
          tblServicios.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Servicio modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_servicio").modal("hide");
          tblServicios.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarServicio(id) {
  document.getElementById("title").innerHTML = "Actualizar Servicio";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Servicios/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigoservicio").value = res.codigo_servicio;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("descripcion").value = res.descripcion;
      document.getElementById("tiemporapido").value = res.tiempo_rapido;
      document.getElementById("tiempolento").value = res.tiempo_lento;
      document.getElementById("tiempopromedio").value = res.tiempo_promedio;
      document.getElementById("costoreferencial").value = res.costo_referencial;
      $("#nuevo_servicio").modal("show");
    }
  };
}
function btnEliminarServicio(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El servicio no se eliminara de forma permanente, solo cambiara el servicio a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Servicios/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Servicio Eliminado con exito.",
              icon: "success",
            });
            tblServicios.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarServicio(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Servicios/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Servicio reingresado con exito.",
              icon: "success",
            });
            tblServicios.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION SERVICIOS *************************

//**************************** SECCION REPUESTOS******************************************
function frmRepuesto() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Repuesto"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmRepuesto").reset(); // Resetea el formulario si es necesario
  $("#nuevo_repuesto").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarRepuesto(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigorepuesto = document.getElementById("codigorepuesto");
  const nombre = document.getElementById("nombre");
  const descripcion = document.getElementById("descripcion");
  const costocompra = document.getElementById("costocompra");
  const precioventa = document.getElementById("precioventa");
  const codigocategoria = document.getElementById("codigocategoria");
  const cantidad = document.getElementById("cantidad");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigorepuesto.value == "" ||
    nombre.value == "" ||
    descripcion.value == "" ||
    costocompra.value == "" ||
    precioventa.value == "" ||
    codigocategoria.value == "" ||
    cantidad.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Repuestos/registrar";
    const frm = document.getElementById("frmRepuesto");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repuesto registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_repuesto").modal("hide");
          tblRepuestos.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repuesto modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_repuesto").modal("hide");
          tblRepuestos.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarRepuesto(id) {
  document.getElementById("title").innerHTML = "Actualizar Repuesto";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Repuestos/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigorepuesto").value = res.codigo_repuesto;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("descripcion").value = res.descripcion;
      document.getElementById("costocompra").value = res.costo_compra;
      document.getElementById("precioventa").value = res.precio_venta;
      document.getElementById("codigocategoria").value = res.codigo_categoria;
      document.getElementById("cantidad").value = res.cantidad;
      $("#nuevo_repuesto").modal("show");
    }
  };
}
function btnEliminarRepuesto(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El repuesto no se eliminara de forma permanente, solo cambiara el repuesto a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Repuestos/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Repuesto Eliminado con exito.",
              icon: "success",
            });
            tblRepuestos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarRepuesto(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Repuestos/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Repuesto reingresado con exito.",
              icon: "success",
            });
            tblRepuestos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION REPUESTOS *************************

//**************************** SECCION AREA******************************************
function frmArea() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nueva Area"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmArea").reset(); // Resetea el formulario si es necesario
  $("#nuevo_area").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarArea(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigoarea = document.getElementById("codigoarea");
  const nombre = document.getElementById("nombre");
  const descripcion = document.getElementById("descripcion");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (codigoarea.value == "" || nombre.value == "" || descripcion.value == "") {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Areas/registrar";
    const frm = document.getElementById("frmArea");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Area registrada con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_area").modal("hide");
          tblAreas.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Area modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_area").modal("hide");
          tblAreas.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarArea(id) {
  document.getElementById("title").innerHTML = "Actualizar Area";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Areas/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigoarea").value = res.codigo_area;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("descripcion").value = res.descripcion;
      $("#nuevo_area").modal("show");
    }
  };
}
function btnEliminarArea(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El Area no se eliminara de forma permanente, solo cambiara el repuesto a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Areas/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Area Eliminada con exito.",
              icon: "success",
            });
            tblAreas.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarArea(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Areas/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Area reingresada con exito.",
              icon: "success",
            });
            tblAreas.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION AREA *************************

//**************************** SECCION SUCURSAL******************************************
function frmSucursal() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nueva Sucursal"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmSucursal").reset(); // Resetea el formulario si es necesario
  $("#nuevo_sucursal").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarSucursal(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigosucursal = document.getElementById("codigosucursal");
  const nombre = document.getElementById("nombre");
  const direccion = document.getElementById("direccion");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigosucursal.value == "" ||
    nombre.value == "" ||
    direccion.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Sucursales/registrar";
    const frm = document.getElementById("frmSucursal");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Sucursal registrada con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_sucursal").modal("hide");
          tblSucursales.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Sucursal modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_sucursal").modal("hide");
          tblSucursales.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarSucursal(id) {
  document.getElementById("title").innerHTML = "Actualizar Sucursal";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Sucursales/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigosucursal").value = res.codigo_sucursal;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("direccion").value = res.direccion;
      $("#nuevo_sucursal").modal("show");
    }
  };
}
function btnEliminarSucursal(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "La Sucursal no se eliminara de forma permanente, solo cambiara el repuesto a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Sucursales/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Sucursal Eliminada con exito.",
              icon: "success",
            });
            tblSucursales.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarSucursal(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Sucursales/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Sucursal reingresada con exito.",
              icon: "success",
            });
            tblSucursales.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION SUCURSAL *************************

//**************************** SECCION EMPLEADO******************************************
function frmEmpleado() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Empleado"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmEmpleado").reset(); // Resetea el formulario si es necesario
  $("#nuevo_empleado").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarEmpleado(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigoempleado = document.getElementById("codigoempleado");
  const nombre = document.getElementById("nombre");
  const profesion = document.getElementById("profesion");
  const cargo = document.getElementById("cargo");
  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigoempleado.value == "" ||
    nombre.value == "" ||
    profesion.value == "" ||
    cargo.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Empleados/registrar";
    const frm = document.getElementById("frmEmpleado");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Empleado registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_empleado").modal("hide");
          tblEmpleados.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Empleado modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_empleado").modal("hide");
          tblEmpleados.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarEmpleado(id) {
  document.getElementById("title").innerHTML = "Actualizar Empleado";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Empleados/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigoempleado").value = res.codigo_empleado;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("profesion").value = res.profesion;
      document.getElementById("cargo").value = res.cargo;
      $("#nuevo_empleado").modal("show");
    }
  };
}
function btnEliminarEmpleado(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El Empleado no se eliminara de forma permanente, solo cambiara el repuesto a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Empleados/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Empleado Eliminado con exito.",
              icon: "success",
            });
            tblEmpleados.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarEmpleado(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Empleados/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Empleado reingresado con exito.",
              icon: "success",
            });
            tblEmpleados.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION EMPLEADO *************************

//**************************** SECCION MANTENIMIENTO******************************************
function frmMantenimiento() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Mantenimiento"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmMantenimiento").reset(); // Resetea el formulario si es necesario
  $("#nuevo_mantenimiento").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
}
function registrarMantenimiento(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigomantenimiento = document.getElementById("codigomantenimiento");
  const codigosucursal = document.getElementById("codigosucursal");
  const placavehiculo = document.getElementById("placavehiculo");
  const fecharecepcion = document.getElementById("fecharecepcion");
  const kilometrajerecibido = document.getElementById("kilometrajerecibido");
  const descripcionproblema = document.getElementById("descripcionproblema");
  const inventariovehiculo = document.getElementById("inventariovehiculo");
  const autorizacionrepuestos = document.getElementById(
    "autorizacionrepuestos"
  );

  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigomantenimiento.value == "" ||
    codigosucursal.value == "" ||
    placavehiculo.value == "" ||
    fecharecepcion.value == "" ||
    kilometrajerecibido.value == "" ||
    descripcionproblema.value == "" ||
    inventariovehiculo.value == "" ||
    autorizacionrepuestos.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Mantenimientos/registrar";
    const frm = document.getElementById("frmMantenimiento");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res == "si") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Mantenimiento registrado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#nuevo_mantenimiento").modal("hide");
          tblMantenimientos.ajax.reload();
          //window.location=base_url+"Usuarios";
        } else if (res == "modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Mantenimiento modificado con exito",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#nuevo_mantenimiento").modal("hide");
          tblMantenimientos.ajax.reload();
        } else {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          //document.getElementById("alerta").classList.remove("d-none")
          //document.getElementById("alerta").innerHTML=res;
        }
      }
    };
  }
}
function btnEditarMantenimiento(id) {
  document.getElementById("title").innerHTML = "Actualizar Mantenimiento";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "Mantenimientos/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("codigomantenimiento").value =
        res.codigo_mantenimiento;
      document.getElementById("codigosucursal").value = res.codigo_sucursal;
      document.getElementById("placavehiculo").value = res.placa_vehiculo;
      document.getElementById("fecharecepcion").value = res.fecha_recepcion;
      document.getElementById("kilometrajerecibido").value =
        res.kilometraje_recibido;
      document.getElementById("descripcionproblema").value =
        res.descripcion_problema;
      document.getElementById("inventariovehiculo").value =
        res.inventario_vehiculo;
      document.getElementById("autorizacionrepuestos").value =
        res.autorizacion_repuestos;
      $("#nuevo_mantenimiento").modal("show");
    }
  };
}
function btnEliminarMantenimiento(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de eliminar?",
    text: "El Mantenimiento no se eliminara de forma permanente, solo cambiara el repuesto a inactivo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Mantenimientos/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Mantenimiento Eliminado con exito.",
              icon: "success",
            });
            tblMantenimientos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
function btnReingresarMantenimiento(id) {
  //alert(id);
  Swal.fire({
    title: "Esta seguro de reingresar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //esta seccion elimina el usuario
      const url = base_url + "Mantenimientos/reingresar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              title: "Mensaje!",
              text: "Mantenimiento reingresado con exito.",
              icon: "success",
            });
            tblMantenimientos.ajax.reload();
          } else {
            Swal.fire({
              title: "Mensaje!",
              text: res,
              icon: "error",
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION MANTENIMIENTO *************************

//**************************** SECCION GESTION DE MANTENIMIENTO *************************
//*****************************    Subseccion Mantenimiento********************************* */
/* function buscarCodigomantenimiento(e) {
  e.preventDefault(); //PARA PREVENIRLO
  if (e.which == 13) {
    //cuando presionemos enter
    const cod = document.getElementById("codigomantenimiento").value;
    const url =
      base_url + "Gestionmantenimientos/buscarCodigomantenimiento/" + cod;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res) {
          document.getElementById("codigosucursal").value = res.nombre_sucursal;
          document.getElementById("placavehiculo").value = res.placa_vehiculo;
          document.getElementById("carnetcliente").value =
            res.carnet_nombre_Propietario;
          document.getElementById("idmantenimiento").value = res.id;
          document.getElementById("codigomantenimiento1").value =
            res.codigo_mantenimiento;
          document.getElementById("codigomantenimientoh").value =
            res.codigo_mantenimiento;
          cargarDetalleservicios(); //CARGA LA TABLA DETALLE SERVICIOS
          cargarDetallerepuestos(); //CARGA LA TABLA DETALLE REPUESTOS
          //document.getElementById("totalmantenimiento").value=999;
        } else {
          //alert("Producto no existe");
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: "El Codigo de Mantenimiento no Existe",
            showConfirmButton: false,
            timer: 2000,
          });
          document.getElementById("codigosucursal").value = "";
          document.getElementById("placavehiculo").value = "";
          document.getElementById("carnetcliente").value = "";
          document.getElementById("idmantenimiento").value = "";
          document.getElementById("codigomantenimiento1").value = "";
          document.getElementById("codigomantenimientoh").value = "";
          document.getElementById("codigosucursal").focus();
        }
      }
    };
  }
} */
function buscarCodigomantenimiento(e) {
  if (e) {
    e.preventDefault(); // Prevenir el comportamiento predeterminado si se pasó un evento
    if (e.which && e.which !== 13) return; // Si se pasó un evento y no es la tecla Enter, salir de la función
  }
  // Lógica para buscar el código de mantenimiento
  const cod = document.getElementById("codigomantenimiento").value;
  const url =
    base_url + "Gestionmantenimientos/buscarCodigomantenimiento/" + cod;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res) {
        // Llenar los campos con la información obtenida
        document.getElementById("codigosucursal").value = res.nombre_sucursal;
        document.getElementById("placavehiculo").value = res.placa_vehiculo;
        document.getElementById("carnetcliente").value =
          res.carnet_nombre_Propietario;
        document.getElementById("idmantenimiento").value = res.id;
        document.getElementById("codigomantenimiento1").value =
          res.codigo_mantenimiento;
        document.getElementById("codigomantenimientoh").value =
          res.codigo_mantenimiento;
        cargarDetalleservicios(); // Cargar la tabla de detalles de servicios
        cargarDetallerepuestos(); // Cargar la tabla de detalles de repuestos
      } else {
        // Si no se encontró el código de mantenimiento, mostrar mensaje de error
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "El Codigo de Mantenimiento no Existe",
          showConfirmButton: false,
          timer: 2000,
        });
        // Limpiar campos y enfocar en el campo de código de sucursal
        document.getElementById("codigosucursal").value = "";
        document.getElementById("placavehiculo").value = "";
        document.getElementById("carnetcliente").value = "";
        document.getElementById("idmantenimiento").value = "";
        document.getElementById("codigomantenimiento").value = "";
        document.getElementById("codigomantenimiento1").value = "";
        document.getElementById("codigomantenimientoh").value = "";
        cargarDetalleservicios();
        cargarDetallerepuestos();
        document.getElementById("codigomantenimiento").focus();
      }
    }
  };
}

// Función para manejar el clic en el botón
function buscarCodigomantenimientoDesdeBoton() {
  buscarCodigomantenimiento(); // Llamar a la función principal
}

//*****************************   Fin Subseccion Mantenimiento********************************* */

//*****************************    Subseccion DetalleServicio********************************* */

function frmDetalleservicio() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Servicio"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmDetalleservicio").reset(); // Resetea el formulario si es necesario
  $("#nuevo_detalleservicio").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
  document.getElementById("codigomantenimiento2").value =
    document.getElementById("codigomantenimiento1").value;
}
function buscarCodigoservicio() {
  const cod = document.getElementById("codigoserviciobuscar").value;
  const url = base_url + "Gestionmantenimientos/buscarCodigoservicio/" + cod;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res) {
        document.getElementById("codigomantenimiento2").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigomantenimiento2h").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigoservicio").value = res.codigo_servicio;
        document.getElementById("codigoservicioh").value = res.codigo_servicio;
        document.getElementById("nombreservicio").value = res.nombre;
        document.getElementById("nombreservicioh").value = res.nombre;
        document.getElementById("descripcionservicio").value = res.descripcion;
        document.getElementById("descripcionservicioh").value = res.descripcion;
        document.getElementById("precioservicio").value = res.costo_referencial;
        document.getElementById("precioservicioh").value =
          res.costo_referencial;
        document.getElementById("cantidadservicio").value = 1;
        document.getElementById("subtotalservicio").value =
          res.costo_referencial *
          document.getElementById("cantidadservicio").value;
        document.getElementById("subtotalservicioh").value =
          res.costo_referencial *
          document.getElementById("cantidadservicio").value;
        //document.getElementById("idmantenimiento").value = res.id;
        document.getElementById("cantidadservicio").focus();
      } else {
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "El Codigo de servicio no Existe",
          showConfirmButton: false,
          timer: 2000,
        });
        document.getElementById("codigomantenimiento2").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigomantenimiento2h").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigoservicio").value = "";
        document.getElementById("codigoservicioh").value = "";
        document.getElementById("nombreservicio").value = "";
        document.getElementById("nombreservicioh").value = "";
        document.getElementById("descripcionservicio").value = "";
        document.getElementById("descripcionservicioh").value = "";
        document.getElementById("precioservicio").value = "";
        document.getElementById("precioservicioh").value = "";
        document.getElementById("cantidadservicio").value = "";
        document.getElementById("subtotalservicio").value = "";
        document.getElementById("subtotalservicioh").value = "";
        document.getElementById("codigoserviciobuscar").focus();
      }
    }
  };
}
function calculasubtotalDetalleservicios(e) {
  e.preventDefault(); //PARA PREVENIRLO
  const precioservicio = document.getElementById("precioservicio").value;
  const cantidadservicio = document.getElementById("cantidadservicio").value;
  document.getElementById("subtotalservicio").value =
    precioservicio * cantidadservicio;
  document.getElementById("subtotalservicioh").value =
    precioservicio * cantidadservicio;
}
function registrarDetalleservicio(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigomantenimiento = document.getElementById("codigomantenimiento2h");
  const codigoservicio = document.getElementById("codigoservicioh");
  //const codigoarea = document.getElementById("codigomantenimiento");
  //const codigoempleado = document.getElementById("codigomantenimiento");
  const descripcionservicio = document.getElementById("descripcionservicioh");
  //const fecharepuesto = 'HOY';
  const cantidadservicio = document.getElementById("cantidadservicio");
  const precioservicio = document.getElementById("precioservicioh");
  const subtotalservicio = document.getElementById("subtotalservicioh");

  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigomantenimiento.value == "" ||
    codigoservicio.value == "" ||
    cantidadservicio.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Gestionmantenimientos/registrarServicio";
    const frm = document.getElementById("frmDetalleservicio");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);

        /*  const res=JSON.parse(this.responseText);
                 if(res=="si"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Mantenimiento registrado con exito",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    frm.reset();
                    $("#nuevo_mantenimiento").modal("hide");
                    tblMantenimientos.ajax.reload();
                    //window.location=base_url+"Usuarios";
                }else if(res=="modificado"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Mantenimiento modificado con exito",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $("#nuevo_mantenimiento").modal("hide");
                    tblMantenimientos.ajax.reload();
                }
                else{
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    //document.getElementById("alerta").classList.remove("d-none")
                    //document.getElementById("alerta").innerHTML=res;
                }      */
      }
    };
  }
  cargarDetalleservicios();
  cargarDetallerepuestos();
}
function cargarDetalleservicios() {
  const url = base_url + "Gestionmantenimientos/listarServicios";
  const frm = document.getElementById("frmGestionmantenimiento");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(new FormData(frm));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      let html = "";
      res["detalleservicios"].forEach((row) => {
        html += `<tr>
                <td>${row["id"]}</td>
                <td>${row["codigo_servicio"]}</td>                    
                <td>${row["nombre_servicio"]}</td>
                <td>${row["descripcion_servicio"]}</td>
                <td>${row["codigo_area"]}</td>
                <td>${row["codigo_empleado"]}</td>
                <td>${row["cantidad_servicio"]}</td>
                <td>${row["precio_servicio"]}</td>
                <td>${row["subtotal_servicio"]}</td>
                <td>
                    <button class="btn btn-danger" type="button" onclick="deleteDetalleservicio(${row["id"]});"><i class="fas fa-trash-alt"></i></button>
                </td>
                </tr>`;
      });
      document.getElementById("tblDetalleservicios").innerHTML = html;
      document.getElementById("totalserviciosh").value =
        res["totalservicios"].total_servicios;
      let valorServicios = document.getElementById("totalserviciosh").value;
      let totalServicios = parseFloat(valorServicios); // parseFloat para números decimales
      if (!isNaN(totalServicios)) {
        document.getElementById("totalserviciosh").value =
          res["totalservicios"].total_servicios;
        document.getElementById("totalservicios").value =
          document.getElementById("totalserviciosh").value;
      } else {
        document.getElementById("totalserviciosh").value = 0;
        document.getElementById("totalservicios").value =
          document.getElementById("totalserviciosh").value;
      }
    }
  };
}

function deleteDetalleservicio(id) {
  Swal.fire({
    title: "Estas seguro de eliminar este Servicio?",
    text: "Esta accion no se podra revertir!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //alert(id);
      const url = base_url + "Gestionmantenimientos/eliminarServicio/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Servicio eliminado",
              showConfirmButton: false,
              timer: 3000,
            });
            cargarDetalleservicios();
            cargarDetallerepuestos();
          } else {
            Swal.fire({
              position: "top-end",
              icon: "error",
              title: "Error al eliminar",
              showConfirmButton: false,
              timer: 3000,
            });
          }
        }
      };
    }
  });
}
//*****************************   Fin Subseccion Detalle Servicios********************************* */

//*****************************    Subseccion DetalleRepuestos********************************* */

function frmDetallerepuesto() {
  //console.log('Función frmCliente ejecutada');
  document.getElementById("title").innerHTML = "Nuevo Repuesto"; // Actualiza el título del modal
  document.getElementById("btnAccion").innerHTML = "Registrar"; // Actualiza el texto del botón de acción
  document.getElementById("frmDetallerepuesto").reset(); // Resetea el formulario si es necesario
  $("#nuevo_detallerepuesto").modal("show"); // Muestra el modal usando jQuery
  document.getElementById("id").value = ""; //Asigna el valor vacio al campo id
  document.getElementById("codigomantenimiento3").value =
    document.getElementById("codigomantenimiento1").value;
}
function buscarCodigorepuesto() {
  const cod = document.getElementById("codigorepuestobuscar").value;
  const url = base_url + "Gestionmantenimientos/buscarCodigorepuesto/" + cod;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res) {
        document.getElementById("codigomantenimiento3").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigomantenimiento3h").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigorepuesto").value = res.codigo_repuesto;
        document.getElementById("codigorepuestoh").value = res.codigo_repuesto;
        document.getElementById("nombrerepuesto").value = res.nombre;
        document.getElementById("nombrerepuestoh").value = res.nombre;
        document.getElementById("descripcionrepuesto").value = res.descripcion;
        document.getElementById("descripcionrepuestoh").value = res.descripcion;
        document.getElementById("preciorepuesto").value = res.precio_venta;
        document.getElementById("preciorepuestoh").value = res.precio_venta;
        document.getElementById("cantidadrepuesto").value = 1;
        document.getElementById("subtotalrepuesto").value =
          res.precio_venta * document.getElementById("cantidadrepuesto").value;
        document.getElementById("subtotalrepuestoh").value =
          res.precio_venta * document.getElementById("cantidadrepuesto").value;
        //document.getElementById("idmantenimiento").value = res.id;
        document.getElementById("cantidadrepuesto").focus();
      } else {
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "El Codigo de repuesto no Existe",
          showConfirmButton: false,
          timer: 2000,
        });
        document.getElementById("codigomantenimiento3").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigomantenimiento3h").value =
          document.getElementById("codigomantenimiento1").value;
        document.getElementById("codigorepuesto").value = "";
        document.getElementById("codigorepuestoh").value = "";
        document.getElementById("nombrerepuesto").value = "";
        document.getElementById("nombrerepuestoh").value = "";
        document.getElementById("descripcionrepuesto").value = "";
        document.getElementById("descripcionrepuestoh").value = "";
        document.getElementById("preciorepuesto").value = "";
        document.getElementById("preciorepuestoh").value = "";
        document.getElementById("cantidadrepuesto").value = "";
        document.getElementById("subtotalrepuesto").value = "";
        document.getElementById("subtotalrepuestoh").value = "";
        document.getElementById("codigorepuestobuscar").focus();
      }
    }
  };
}
function calculasubtotalDetallerepuestos(e) {
  e.preventDefault(); //PARA PREVENIRLO
  const preciorepuesto = document.getElementById("preciorepuesto").value;
  const cantidadrepuesto = document.getElementById("cantidadrepuesto").value;
  document.getElementById("subtotalrepuesto").value =
    preciorepuesto * cantidadrepuesto;
  document.getElementById("subtotalrepuestoh").value =
    preciorepuesto * cantidadrepuesto;
}
function registrarDetallerepuesto(e) {
  //SECCION DE CAPTURA DE DATOS
  e.preventDefault();
  const codigomantenimiento = document.getElementById("codigomantenimiento3h");
  const codigorepuesto = document.getElementById("codigorepuestoh");
  //const codigoarea = document.getElementById("codigomantenimiento");
  //const codigoempleado = document.getElementById("codigomantenimiento");
  const descripcionrepuesto = document.getElementById("descripcionrepuestoh");
  //const fecharepuesto = 'HOY';
  const cantidadrepuesto = document.getElementById("cantidadrepuesto");
  const preciorepuesto = document.getElementById("preciorepuestoh");
  const subtotalrepuesto = document.getElementById("subtotalrepuestoh");

  //SECCION DE VALIDACION DE LA PLACA, TIPO, MARCA, MODELO, MOTOR, CHASIS, COLOR, CI.
  if (
    codigomantenimiento.value == "" ||
    codigorepuesto.value == "" ||
    cantidadrepuesto.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  }
  //SECCION PARA DIRECCIONAR AL CONTROLADOR
  else {
    const url = base_url + "Gestionmantenimientos/registrarRepuesto";
    const frm = document.getElementById("frmDetallerepuesto");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);

        /*  const res=JSON.parse(this.responseText);
                 if(res=="si"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Mantenimiento registrado con exito",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    frm.reset();
                    $("#nuevo_mantenimiento").modal("hide");
                    tblMantenimientos.ajax.reload();
                    //window.location=base_url+"Usuarios";
                }else if(res=="modificado"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Mantenimiento modificado con exito",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $("#nuevo_mantenimiento").modal("hide");
                    tblMantenimientos.ajax.reload();
                }
                else{
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    //document.getElementById("alerta").classList.remove("d-none")
                    //document.getElementById("alerta").innerHTML=res;
                }      */
      }
    };
  }
  cargarDetalleservicios();
  cargarDetallerepuestos();
}
function cargarDetallerepuestos() {
  const url = base_url + "Gestionmantenimientos/listarRepuestos";
  const frm = document.getElementById("frmGestionmantenimiento");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(new FormData(frm));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      let html = "";
      res["detallerepuestos"].forEach((row) => {
        html += `<tr>
                    <td>${row["id"]}</td>
                    <td>${row["codigo_repuesto"]}</td>                    
                    <td>${row["nombre_repuesto"]}</td>
                    <td>${row["descripcion_repuesto"]}</td>
                    <td>${row["codigo_area"]}</td>
                    <td>${row["codigo_empleado"]}</td>
                    <td>${row["cantidad_repuesto"]}</td>
                    <td>${row["precio_repuesto"]}</td>
                    <td>${row["subtotal_repuesto"]}</td>
                    <td>
                        <button class="btn btn-danger" type="button" onclick="deleteDetallerepuesto(${row["id"]});"><i class="fas fa-trash-alt"></i></button>
                    </td>
                    </tr>`;
      });
      document.getElementById("tblDetallerepuestos").innerHTML = html;
      document.getElementById("totalrepuestosh").value =
        res["totalrepuestos"].total_repuestos;

      let valorRepuestos = document.getElementById("totalrepuestosh").value;
      let totalRepuestos = parseFloat(valorRepuestos); // parseFloat para números decimales
      if (!isNaN(totalRepuestos)) {
        document.getElementById("totalrepuestosh").value = totalRepuestos;
        document.getElementById("totalrepuestos").value =
          document.getElementById("totalrepuestosh").value;
      } else {
        document.getElementById("totalrepuestosh").value = 0;
        document.getElementById("totalrepuestos").value =
          document.getElementById("totalrepuestosh").value;
      }

      let valorServicios = document.getElementById("totalserviciosh").value;
      // Convertir los valores de cadena a números usando parseFloat o parseInt
      let totalServicios = parseFloat(valorServicios); // parseFloat para números decimales
      // Verificar si los valores convertidos son números válidos
      if (!isNaN(totalRepuestos) && !isNaN(totalServicios)) {
        // Realizar la suma
        let totalMantenimiento = totalRepuestos + totalServicios;
        // Asignar el resultado de la suma de vuelta al input
        document.getElementById("totalmantenimientoh").value =
          totalMantenimiento;
        document.getElementById("totalmantenimiento").value =
          document.getElementById("totalmantenimientoh").value;
      } else if (!isNaN(totalRepuestos) && isNaN(totalServicios)) {
        // Manejar el caso en que los valores no sean números válidos
        let totalMantenimiento = totalRepuestos;
        // Asignar el resultado de la suma de vuelta al input
        document.getElementById("totalmantenimientoh").value =
          totalMantenimiento;
        document.getElementById("totalmantenimiento").value =
          document.getElementById("totalmantenimientoh").value;
      } else if (isNaN(totalRepuestos) && !isNaN(totalServicios)) {
        // Manejar el caso en que los valores no sean números válidos
        let totalMantenimiento = totalServicios;
        // Asignar el resultado de la suma de vuelta al input
        document.getElementById("totalmantenimientoh").value =
          totalMantenimiento;
        document.getElementById("totalmantenimiento").value =
          document.getElementById("totalmantenimientoh").value;
      } else {
        console.log("Uno o ambos valores no son números válidos");
      }
    }
  };
}

function deleteDetallerepuesto(id) {
  Swal.fire({
    title: "Estas seguro de eliminar este Repuesto?",
    text: "Esta accion no se podra revertir!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      //alert(id);
      const url = base_url + "Gestionmantenimientos/eliminarRepuesto/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res == "ok") {
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Repuesto eliminado",
              showConfirmButton: false,
              timer: 3000,
            });
            cargarDetalleservicios();
            cargarDetallerepuestos();
          } else {
            Swal.fire({
              position: "top-end",
              icon: "error",
              title: "Error al eliminar",
              showConfirmButton: false,
              timer: 3000,
            });
          }
        }
      };
    }
  });
}
//****************************HASTA AQUI ES LA SECCION DE GESTION DE MANTENIMIENTO *************************

//******************************************** SECCION DE DASHHBOARD *************************

//****************************HASTA AQUI ES LA SECCION DE DASHHBOARD *************************
