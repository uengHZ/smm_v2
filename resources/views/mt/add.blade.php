<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Material Transaction</title>

    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <span class="navbar-brand"><b>Add Material Transaction</b></span>
            </div>
        </div>
    </nav>
    <hr/>
    <br/>
    <div class="container" id="appVue">
        {{-- <form class="" method="post" @submit.prevent="postNow"> --}}
        {{-- <form @submit.prevent="submitForm" method="post" enctype="multipart/form-data"> --}}
        <form>
        @csrf
        <template>
        <div class="row">
            <div class="col-md-4">
                <label @error('nik') class="text-danger" @enderror>NIK Peminta <span style="color:red">*</span>@error('nik'){{ $message }}@enderror</label>
            </div>
            <div class="col-md-4">
                <label>Nama</label>
            </div>
            <div class="col-md-4">
                <label>Departemen</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <select class="form-control form-control-sm" v-model="selectedNIK" @change="onChange($event)">
                    <option value="">Select NIK</option>
                    <template v-for="nik in data_k">
                        <option :value="nik.nik">@{{ nik.nik }}</option>
                    </template>
                </select>
            </div>
            <div class="col-md-4">
                <input readonly v-model="nama_nik" class="form-control form-control-sm" type="text" name="nnik_nama">
            </div>
            <div class="col-md-4">
                <input readonly v-model="departemen_nik" class="form-control form-control-sm" type="text" name="nik_departemen">
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <label>Tanggal Permintaan</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{-- <div class='input-group date' id='datetimepicker1'> --}}
                    <vuejs-datepicker format="yyyy-MM-dd" v-model="mt_date"></vuejs-datepicker>
                    {{-- <input type='text' class="form-control" v-model="mt_date"/>
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div> --}}
            </div>
        </div>
        <hr>
        <span><b>Daftar Barang</b></span>
        <hr><br/>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">                        
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Barang</th>
                            <th>Lokasi</th>
                            <th>Stock</th>
                            <th>Quantity</th>
                            <th hidden="true">Price</th>
                            <th>UoM</th>
                            <th>Remark</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(mt_details, index) in mt_details" :key="index">
                            <td scope="row" class="trashIconContainer">
                                <input readonly class="form-control" type="text" v-model="mt_details.no" style="width: 35px;" />
                            </td>
                            <td>
                                <select class="form-control form-control-sm" v-model="mt_details.selectedBarang"  @change="onChangeItem($event, mt_details, index)">
                                    <option value="">Pilih Barang</option>
                                    <template v-for="barang in data_b">
                                        <option :value="barang.item_no">@{{ barang . item }}</option>
                                    </template>
                                </select>
                            </td>
                            <td>
                                <input readonly class="form-control" type="text" v-model="mt_details.lokasi" />
                            </td>
                            <td>
                                <input readonly class="form-control" type="text" v-model="mt_details.stock"/>
                            </td>
                            <td>
                                <input class="form-control text-right" type="number" min="0" step=".01" v-model="mt_details.qty" @change="calculateLineTotal(mt_details, index)"/>
                            </td>
                            <td hidden="true">
                                <input readonly class="form-control" type="text" v-model="mt_details.standard_price" />
                            </td>
                            <td>
                                <input readonly class="form-control" type="text" v-model="mt_details.unit" />
                            </td>
                            <td>
                                <input class="form-control" type="text" v-model="mt_details.remark" />
                            </td>
                            <td>
                                <input readonly class="form-control" type="text" v-model="mt_details.status" />
                            </td>   
                            <td scope="row" class="trashIconContainer">
                                <a href="#" class="btn btn-danger" @click="deleteRow(index)">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    
                    <button type='button' class="btn btn-info" @click="addNewRow">
                        <i class="fa fa-plus"></i>
                        Add
                    </button>
                </div>
            </div>
        </div>
        <br/><br/><hr>
        {{-- @{{ allDetails }} --}}
        <div class="card-footer" align="center">
            <button type="button" class="btn btn-primary" @click="submitForm">Submit</button>{{-- // @click="submitForm" --}}
            <a href="{{ route('mt') }}" class="btn btn-danger">Cancel</a>
        </div>
        </template>
        </form>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vuejs-datepicker@1.6.2/dist/vuejs-datepicker.min.js"></script>

    <script type="text/javascript">
        // $(function () {
        //     // $('#datetimepicker1').datetimepicker();
        //     $('#datetimepicker1').datetimepicker({
        //         format: 'Y-MM-D'
        //     });
        // });
    </script>

    <script>
        // $(function () {
        //     $('#datetimepicker1').datetimepicker({
        //         format: 'Y-MM-D'
        //     });
        // });
        
        var app = new Vue({
            el: "#appVue",
            components: {
                vuejsDatepicker
            },
            data: {
                selectedNIK:'',
                nama_nik:'',
                departemen_nik:'',
                mt_date:'',

                mt_details: [{
                    no:1,
                    selectedBarang:'',
                    lokasi: '',
                    stock: '',
                    qty: 0,
                    standard_price: 0,
                    unit: '',
                    status: ''
                }],
                
                data_b: [],
                data_k: [],
                allDetails: []
            },
            mounted() {
                this.getData();

                $('#datetimepicker1').datetimepicker({
                    format: 'Y-MM-D'
                });
            },
            methods: {
                getData: function() {
                    var url = "{{ url('mt-add-data') }}";

                    axios.get(url).then(resp => {
                        this.data_b = resp.data['data_b'];
                        this.data_k = resp.data['data_k'];
                    }).catch(err => {
                        console.log(err);
                    })
                },
                
                onChange(event) {
                    var nik = event.target.value;
                    var url = 'http://localhost:8000/'+nik+'/details-karyawan';

                    axios.get(url).then(resp => {
                        this.nama_nik = resp.data['nama'];
                        this.departemen_nik = resp.data['departemen'];
                    }).catch(err => {
                        console.log(err);
                    })
                },

                addNewRow() {
                    var no = parseInt(this.mt_details.length)+1;
                    this.mt_details.push({
                        no:no,
                        selectedBarang:'',
                        lokasi: '',
                        stock: '',
                        qty: 0,
                        standard_price: 0,
                        unit: '',
                        status: ''
                    });
                },

                onChangeItem(event, mt_details, index) {
                    var brg = event.target.value;
                    var url = 'http://localhost:8000/'+brg+'/details-barang';

                    axios.get(url).then(resp => {
                        mt_details.lokasi = resp.data['lokasi'];
                        mt_details.stock = resp.data['saldo_akhir'];
                        mt_details.unit = resp.data['satuan'];
                        mt_details.standard_price = resp.data['standard_price'];
                    }).catch(err => {
                        console.log(err);
                    }).finally(() => {

                    })
                },

                calculateLineTotal(mt_details, index) {
                    if (mt_details.qty <= mt_details.stock){
                        return mt_details.status = "terpenuhi";
                    }else{
                        return mt_details.status = "tidak terpenuhi";
                    }
                },

                postNow() {
                    axios.post('http://localhost:3030/api/new/post', {
                        headers: {
                            'Content-type': 'application/x-www-form-urlencoded',
                        },
                            body: this.name,
                    });
                },

                // submitForm(){
                //     save = [{
                //         'nik': this.selectedNIK,
                //         'mt_date': this.mt_date,
                //         'mt_details': this.mt_details
                //     }];

                //     console.log(save);

                //     axios.post('http://localhost:8000/save', {
                //         headers: {'Content-type': 'application/x-www-form-urlencoded'},
                //         body: save
                //     });

                    // axios.post('/save', this.form).then((res) => {
                    //     //Perform Success Action
                    //     console.log(res);
                    // }).catch((error) => {
                    //     console.log(error);
                    //     // error.response.status Check status code
                    // });
                // },

                submitForm() {
                    save = [{
                        'nik': this.selectedNIK,
                        'mt_date': this.mt_date,
                        'mt_details': this.mt_details
                    }]

                    console.log(JSON.stringify(save));

                    // console.log(this.item);
                    // let uri = "/save";

                    // axios.post('http://localhost:8000/save', save).then(function (response) {
                    //     console.log(response);
                    // }).catch(function (error) {
                    //     console.log(error);
                    // });

                    axios
                    .post('/save/save', {
                        id: save
                    })
                    .then(response => {
                        console.log('from handle submit', response);
                    });

                    // this.axios.post('http://127.0.0.1:8000/api/products', this.product)
                    // .then(response => {
                    //     this.$router.push({ name: 'ProductIndex' })
                    // })
                    // .catch(error=>{
                    //     console.log(error)
                    // })

                    // this.axios.post(uri, this.item).then(response => {
                    //     this.$router.push(JSON.stringify(save));
                    // });
                    
                    // axios.post('api/user', this.form).then(response => {
                    //     toast.fire({
                    //         type: 'success',
                    //         title: 'User Created',
                    //         position: 'top-end',
                    //     })
                    //     this.$Progress.finish();
                    // }).catch(error => {
                    //     this.$Progress.finish();
                    // });
                },
                
                deleteRow(index) {
                    this.mt_details.splice(index,1);
                }        
            }
        });
    </script>
</body>

</html>