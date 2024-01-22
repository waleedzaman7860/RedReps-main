@extends('layouts.admin')
@section('content')
    {{-- <div class="container-fluid py-4">
        <div class="mt-3 kanban-container">
            <div class="py-2 min-vh-100 d-inline-flex" style="overflow-x: auto">
                <div id="myKanban"></div>
            </div>
        </div>
        <div class="modal fade" id="new-board-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="h5 modal-title">Choose your new Board Name</h5>
                        <button type="button" class="btn close pe-1" data-dismiss="modal" data-target="#new-board-modal"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="pt-4 modal-body">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="far fa-edit"></i>
                            </span>
                            <input class="form-control" placeholder="Board Name" type="text"
                                id="jkanban-new-board-name" />
                        </div>
                        <div class="text-end">
                            <button class="m-1 btn btn-primary" id="jkanban-add-new-board" data-toggle="modal"
                                data-target="#new-board-modal">
                                Save changes
                            </button>
                            <button class="m-1 btn btn-secondary" data-dismiss="modal" data-target="#new-board-modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="new-board-modal-backdrop"></div>
        <div class="modal fade" id="jkanban-info-modal" style="display: none" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="h5 modal-title">Task details</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="pt-4 modal-body">
                        <input id="jkanban-task-id" class="d-none" />
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="far fa-edit"></i>
                            </span>
                            <input class="form-control" placeholder="Task Title" type="text" id="jkanban-task-title" />
                        </div>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="form-control" placeholder="Task Assignee" type="text"
                                id="jkanban-task-assignee" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Task Description" id="jkanban-task-description" rows="4"></textarea>
                        </div>
                        <div class="alert alert-success d-none">Changes saved!</div>
                        <div class="text-end">
                            <button class="m-1 btn btn-primary" id="jkanban-update-task" data-toggle="modal"
                                data-target="#jkanban-info-modal">
                                Save changes
                            </button>
                            <button class="m-1 btn btn-secondary" data-dismiss="modal" data-target="#jkanban-info-modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="jkanban-info-modal-backdrop"></div>
    </div> --}}

    <div class="container pt-3 pb-3 bg-white mt-3 border-radius-xl" id="section-styling">

        <div class="row">
            <div class="col-md-3">
                <div class="d-flex gap-4 text-black background-icon">

                    <div class="user-icon">

                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="text-icon">

                        <h5>Total Users</h5>
                        <p>5,320</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="d-flex gap-4 text-black background-icon">

                    <div class="user-icon">

                        {{-- <i class="fa-solid fa-gears"></i> --}}
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="text-icon">

                        <h5>Total Serices</h5>
                        <p>7 per</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="d-flex gap-4 text-black background-icon">

                    <div class="user-icon">

                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="text-icon">

                        <h5>Total Hours</h5>
                        <p>5hrs</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="d-flex gap-4 text-black background-icon">

                    <div class="user-icon">

                        {{-- <i class="fa-solid fa-user"></i> --}}
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <div class="text-icon">

                        <h5>Total Sales</h5>
                        <p>3,320</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        {{-- <h1>Laravel ChartJS Chart Example - ItSolutionStuff.com</h1> --}}
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChart"></canvas>
            </div>

            <div class="col-md-6">
                {{-- <h3>Adeel Rehman</h3> --}}
                <div>
                    <canvas id="myChart2"></canvas>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <canvas id="chartAreaBorder">Chart.js Line Chart - Cubic interpolation mode</canvas>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



        <script type="text/javascript">
            var labels = {{ Js::from($labels) }};
            var users = {{ Js::from($data) }};

            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: users,
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

        <script>
            const ctx = document.getElementById('myChart2');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>



<script>
    const config = {
  type: 'line',
  data: data,
  options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Line Chart - Cubic interpolation mode'
      },
    },
    interaction: {
      intersect: false,
    },
    scales: {
      x: {
        display: true,
        title: {
          display: true
        }
      },
      y: {
        display: true,
        title: {
          display: true,
          text: 'Value'
        },
        suggestedMin: -10,
        suggestedMax: 200
      }
    }
  },
};
 const DATA_COUNT = 12;
const labels = [];
for (let i = 0; i < DATA_COUNT; ++i) {
  labels.push(i.toString());
}
const datapoints = [0, 20, 20, 60, 60, 120, NaN, 180, 120, 125, 105, 110, 170];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Cubic interpolation (monotone)',
      data: datapoints,
      borderColor: Utils.CHART_COLORS.red,
      fill: false,
      cubicInterpolationMode: 'monotone',
      tension: 0.4
    }, {
      label: 'Cubic interpolation',
      data: datapoints,
      borderColor: Utils.CHART_COLORS.blue,
      fill: false,
      tension: 0.4
    }, {
      label: 'Linear interpolation (default)',
      data: datapoints,
      borderColor: Utils.CHART_COLORS.green,
      fill: false
    }
  ]
};


</script>
    @endpush
