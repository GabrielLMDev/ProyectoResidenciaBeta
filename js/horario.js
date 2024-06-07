$('#btn_pdf').click(function () {
  // Crea un nuevo objeto jsPDF
  var doc = new jsPDF();

  // Obtiene los datos de la tabla DataTable
  doc.setFontSize(20);
  doc.text('Horario Escolar', 10, 20);

  // Datos del horario
  const horario = [
    { dia: 'Lunes', hora: '8:00 - 9:00', asignatura: 'Matemáticas'},
    { dia: 'Lunes', hora: '8:00 - 9:00', asignatura: 'Matemáticas'},
    { dia: 'Lunes', hora: '8:00 - 9:00', asignatura: 'Matemáticas'},
    { dia: 'Martes', hora: '9:00 - 10:00', asignatura: 'Historia' },
    { dia: 'Miércoles', hora: '10:00 - 11:00', asignatura: 'Ciencias' },
    // ... Añade más filas de horario según sea necesario
  ];

  // Coordenadas iniciales para dibujar el horario
  let x = 10;
  let y = 30;

  // Iterar sobre los datos del horario y dibujar las filas
  horario.forEach((fila) => {
    doc.setFontSize(12);
    doc.text(fila.dia, x, y);
    doc.text(fila.hora, x + 50, y);
    doc.text(fila.asignatura, x + 100, y);

    // Aumentar la posición vertical para la siguiente fila
    y += 10;
  });

  // Guardar el documento PDF
  doc.save('horario_escolar.pdf');
});

