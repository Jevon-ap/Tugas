<?php
function FunctionName($jumlah = 0, $judul = null)
{
    echo '<div class="col ">
      <div class="card  nav-link purp-bg">
        <div class="card-body text-start">
          <h5 class="card-title">',
        $jumlah,
        '</h5>
          <p class="card-text">',
        $judul,
        '</p>
        </div>
      </div>
    </div>';
}
?>
@extends('layouts.main')
@section('body')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col ">
                <div class="dropdown">
                    <button class="btn bg-grey btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn bg-grey btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn bg-grey btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-xxl-3 bg-white radius">
            <?php FunctionName($jumlah,  $bagian1 ); ?>
            <?php FunctionName(100, 'Kepala Keluarga'); ?>
            <?php FunctionName(400, 'Laki-laki'); ?>
            <?php FunctionName(325, 'Perempuan'); ?>
            <?php FunctionName(29, 'Lahir'); ?>
            <?php FunctionName('', 'Menikah'); ?>
            <?php FunctionName('', 'Pindah'); ?>
            <?php FunctionName('', 'Pendatang'); ?>
            <?php FunctionName('', 'Pendidikan'); ?>
        </div>
    @endsection
