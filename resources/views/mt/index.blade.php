<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATERIAL TRANSACTION</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <span class="navbar-brand"><b>Material Transaction</b></span>
            </div>
        </div>
    </nav>
    <br/>
    <div class="container" id="appVue">
        <div class="row">
            <div class="col-md-12">
                <br/><br/>
                <a href="{{ route('add_mt') }}" class="btn btn-lg btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SLIP NO</th>
                                <th>SLIP DATE</th>
                                <th>AMOUNT</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="mt in data_mt">
                                <tr>
                                    <td>@{{ mt . mt_no }}</td>
                                    <td>@{{ mt . mt_date }}</td>
                                    <td>@{{ mt . amount }}</td>
                                    <td>@{{ mt . nik }}</td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        var vue = new Vue({
            el: "#appVue",
            data: {
                data_mt: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    var url = "{{ url('mt-data') }}";

                    axios.get(url)
                        .then(resp => {
                            console.log(resp);
                            this.data_mt = resp.data;
                        })
                        .catch(err => {
                            console.log(err);
                        })
                        .finally(() => {

                        })
                }
            }
        })
    </script>
</body>

</html>