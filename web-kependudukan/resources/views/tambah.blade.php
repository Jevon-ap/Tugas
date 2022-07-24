@extends('layouts.main')
<?php
 function tanggal(Type $var = null)
{
    # code...
}
?>

@section('body')
    <div class="container ">
        <div class="content bg-white p-1">
            <form action="/data_penduduk" method="POST" class="">
                @csrf
                <div class="row my-3">
                    <div class="col-4 ">NIK</div>
                    <div class="col-8 "><input style="width: 50%" type="text" placeholder="NIK" name="NIK"></div>
                </div>

                <div class="row my-3">
                    <div class="col-4 ">Nama</div>
                    <div class="col-8 "><input style="width: 50%" type="text" placeholder="nama" name="nama"></div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">TTL</div>
                    <div class="col-8 ">
                        <input style="width: 25%" type="text" placeholder="ttl" name="ttl">
                        <input style="width: 25%" type="date" placeholder="ttl" name="ttl">
                    </div>

                </div>
                <div class="row my-3">
                    <div class="col-4 ">Jenis Kelamin</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Desa</div>
                    <div class="col-8 "><input style="width: 50%" type="text" placeholder="Desa" name="desa"></div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">RT</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01">
                            <option selected>Choose...</option>

                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Agama</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghuchu">Konghuchu</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Status Perkawinan</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 background text-black text-center " style="">Kelahiran</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Akte Kelahiran</div>
                    <div class="col-8 "><input style="width: 50%" type="text" placeholder="Akte Kelahiran"
                            name="aktekelahiran"></div>
                </div>
                <div class="row ">
                    <div class="col-12 background text-black text-center " style="">Pernikahan</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Tanggal nikah</div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="datetime-local" name="tanggalkelahiran">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">No buku nikah</div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="nobukunikah">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">KUA</div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="kua">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 background text-black text-center " style="">Kematian</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Tanggal Meninggal</div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="datetime-local" name="tanggalkematian">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Keterangan</div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="keterangan">
                    </div>
                </div>
        </div>
        <br>
        <button type="submit">Simpan</button>
        </form>
        <a href="/"><button class="mx-3">Batal</button></a>

    </div>

@endsection
