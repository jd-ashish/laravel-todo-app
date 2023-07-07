<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" />

        <title>Laravel</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
        <img class="navbar-brand" src="http://acmsocc.github.io/2016/assets/img/googlelogo_color_324x112dp.png" id="logo_custom" width="10%"  alt="logo">
        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <a class="nav-link" href="/"><b>Home </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add-task" ><b>Add task</b></a>
            </li>
            </ul>
        </div>
    </nav>

<section style="margin-top:85px">
@yield('content')

</section>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title titleTest" ></h4>
          <button type="button" class="close closeModel">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <input type="hidden" class="changedStatusId" />
        <div id="div"></div>
          <select class="form-control changedStatus" name="status" required>
                <option >Select status</option>
                <option value="1">Pending</option>
                <option value="2">Expired</option>
                <option value="3">Compeleted</option>
            </select>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger ChangeStatus">Change status</button>
        </div>

      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>




  <script>


$(document).ready(function() {

    $(".closeModel").on('click', function(){
        $('#myModal').modal('hide');
    });
    $(".ChangeStatus").on('click', function(){

        let csrfToken = "{{ csrf_token() }}";

        let reqData = {
            "id": $(".changedStatusId").val(),
            "status": $(".changedStatus").val(),
        }


       const xhttp = new XMLHttpRequest();


        xhttp.onload = function() {
            document.getElementById("div1").innerHTML = this.responseText;
            }
        xhttp.open("POST", "/update-status", true);
        xhttp.setRequestHeader('x-csrf-token', csrfToken)
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(JSON.stringify(reqData));


    })

    $(".OpenStatusWin").on('click', function(){
        let id = $(this).attr("id");
        let titleTest = $(this).attr("data-title");
        let status = $(this).attr("data-status");
        $('#myModal').modal('show');
        $(".changedStatusId").val(id);
        $(".titleTest").text(titleTest.substring(0,10)+"...")
        $("#changeStatus").val(status);
    });

  var table = $('.todolist').DataTable({

    });//End of create main table


  $('#example tbody').on( 'click', 'tr', function () {

    alert(table.row( this ).data()[0]);

} );
});
  </script>
  </body>
</html>
