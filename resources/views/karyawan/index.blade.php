<!DOCTYPE html>
<html>

<head>
    <title>sangcahaya.id</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" id="appVue">
        <div class="row">
            <div class="col-md-12">
                <br/><br/>
                <button class="btn btn-lg btn-primary" v-on:click.prevent="tambahData">Tambah Data</button>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Departemen</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="item in data_siswa">
                                <tr>
                                    <td>@{{ item . nama }}</td>
                                    <td>@{{ item . alamat }}</td>
                                    <td>@{{ item . created_at }}</td>
                                    <td>@{{ item . updated_at }}</td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTambahData" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Warning</h4>
                </div>

                <div class="modal-body">
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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
                data_siswa: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    var url = "{{ url('datakaryawan') }}";

                    axios.get(url)
                        .then(resp => {
                            console.log(resp);
                            this.data_siswa = resp.data;
                        })
                        .catch(err => {
                            console.log(err);
                        })
                        .finally(() => {

                        })
                },
                tambahData: function() {
                    $('#modalTambahData').modal('show');
                }
            }
        })
    </script>
</body>

</html>