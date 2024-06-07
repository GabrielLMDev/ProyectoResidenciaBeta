$('#btn_pdf').click(function() {
    // Crea un nuevo objeto jsPDF
    var doc = new jsPDF();
  
    // Obtiene los datos de la tabla DataTable
    var tableData = $('#dataTable').DataTable().data().toArray();
  
    // Crea un arreglo para almacenar los encabezados de columna
    var headers = [];
    $('#dataTable thead th').each(function() {
      headers.push($(this).text());
    });
  
    // Crea un arreglo para almacenar los datos de la tabla
    var data = [];
    $.each(tableData, function(index, rowData) {
      var tableRowData = [];
      $.each(rowData, function(colIndex, colData) {
        tableRowData.push(colData);
      });
      data.push(tableRowData);
    });
  
    // Agrega los encabezados de columna y los datos a la página PDF
    doc.autoTable(headers, data);
  
    // Guarda el archivo PDF
    doc.save('tabla.pdf');
  });
  $('#btn_pdf_big').click(function() {
    // Crea un nuevo objeto jsPDF
    var doc = new jsPDF();
  
    // Obtiene los datos de la tabla DataTable
    var tableData = $('#dataTable').DataTable().data().toArray();
  
    // Crea un arreglo para almacenar los encabezados de columna
    var headers = [];
    $('#dataTable thead th').each(function() {
      headers.push($(this).text());
    });
  
    // Crea un arreglo para almacenar los datos de la tabla
    var data = [];
    $.each(tableData, function(index, rowData) {
      var tableRowData = [];
      $.each(rowData, function(colIndex, colData) {
        tableRowData.push(colData);
      });
      data.push(tableRowData);
    });
  
    // Agrega los encabezados de columna y los datos a la página PDF
    doc.autoTable(headers, data);
  
    // Guarda el archivo PDF
    doc.save('tabla.pdf');
  });
  
