<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>

    <title>NodeJS Datatable</title>
  </head>
  <body style="background-color: rgb(230, 228, 228)">
    <div class="container mt-2" style="background-color: rgb(255, 255, 255)">
      <div class="row">
        <div class="col">
          <div class="table-responsive mt-5">
            <table class="table table-bordered table-striped table-hover users-table mb-2">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Level</th>
                  <th>Cvss</th>
                  <th>Title</th>
                  <th>vulnerability</th>
                  <th>solution</th>
                  <th>reference</th>
                </tr>
              </thead>
              <tfoot>
               
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"
    />

    <script
      type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
      $('.users-table').DataTable({
          scrollY: 400,
          processing: true,
          serverSide: true,
          ajax: "http://localhost:3000/data",
          
      });
      } );
    </script>
  </body>
</html>