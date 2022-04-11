<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Data Balita</h3><br>
            <button id="create" class="btn btn-primary">Create New Balita</button>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="create-balita row" style="display: none;">
        <div class="col-lg-5 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 px-3 pt-3">
                        <form action="<?= base_url('Balita') ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama User">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" value="<?= set_value('no_hp') ?>" name="no_hp" class="form-control" id="inputPassword4" placeholder="Masukkan No Telepon">
                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Balita</label>
                                <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="password" value="<?= set_value('password') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mb-3">Save</button>
                            <button id="hide" class="btn btn-danger mb-3">kembali</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">First Name</th>
                                <th scope="col" class="border-0">Last Name</th>
                                <th scope="col" class="border-0">Country</th>
                                <th scope="col" class="border-0">City</th>
                                <th scope="col" class="border-0">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ali</td>
                                <td>Kerry</td>
                                <td>Russian Federation</td>
                                <td>Gdańsk</td>
                                <td>107-0339</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Clark</td>
                                <td>Angela</td>
                                <td>Estonia</td>
                                <td>Borghetto di Vara</td>
                                <td>1-660-850-1647</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jerry</td>
                                <td>Nathan</td>
                                <td>Cyprus</td>
                                <td>Braunau am Inn</td>
                                <td>214-4225</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Colt</td>
                                <td>Angela</td>
                                <td>Liberia</td>
                                <td>Bad Hersfeld</td>
                                <td>1-848-473-7416</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>