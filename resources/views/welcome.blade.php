@extends('layout')

@section('content')
<div class="container-fluid mt-1">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Pending</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Expired</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Compeleted</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container-fluid tab-pane active"><br>
      <table class="table todolist"  class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach($allList as $all)
                    <tr>
                        <td>{{$all->title}}</td>
                        <td>{{$all->date}}</td>
                        <td>{{$all->discription}}</td>
                        <td class="OpenStatusWin" style="cursor: pointer;" id="{{$all->id}}"
                        data-title="{{$all->title}}" data-status="{{$all->status}}">
                        @if ($all->status==1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($all->status==2)
                            <span class="badge badge-danger">Expired</span>
                        @elseif($all->status==3)
                            <span class="badge badge-success">Compeleted</span>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="menu1" class="container-fluid tab-pane fade"><br>
      <table class="table todolist"  class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach($PendingList as $all)
                    <tr>
                        <td>{{$all->title}}</td>
                        <td>{{$all->date}}</td>
                        <td>{{$all->discription}}</td>
                        <td>
                        @if ($all->status==1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($all->status==2)
                            <span class="badge badge-danger">Expired</span>
                        @elseif($all->status==3)
                            <span class="badge badge-success">Compeleted</span>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="menu2" class="container-fluid tab-pane fade"><br>
      <table class="table todolist"  class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach($ExpiredList as $all)
                    <tr>
                        <td>{{$all->title}}</td>
                        <td>{{$all->date}}</td>
                        <td>{{$all->discription}}</td>
                        <td>
                        @if ($all->status==1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($all->status==2)
                            <span class="badge badge-danger">Expired</span>
                        @elseif($all->status==3)
                            <span class="badge badge-success">Compeleted</span>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="menu3" class="container-fluid tab-pane fade"><br>
      <table class="table todolist"  class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th width="400">Discription</th>
                    <th>Status</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach($CompeletedList as $all)
                    <tr>
                        <td>{{$all->title}}</td>
                        <td>{{$all->date}}</td>
                        <td>{{$all->discription}}</td>
                        <td>
                        @if ($all->status==1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($all->status==2)
                            <span class="badge badge-danger">Expired</span>
                        @elseif($all->status==3)
                            <span class="badge badge-success">Compeleted</span>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
