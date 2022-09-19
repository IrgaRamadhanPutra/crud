@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="content">
                            <div class="title m-b-md">
                                Selamat Datang, {{ Auth::user()->name }}
                            </div>
                            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                                        class="app-menu__icon fa fa-briefcase"></i><span
                                        class="app-menu__label">Product</span><i
                                        class="treeview-indicator fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a class="treeview-item" href="{{ url('barang') }}"><i
                                                class="icon fa fa-circle-o"></i>
                                            Tabel Barang</a></li>
                                </ul>
                                <ul class="treeview-menu">
                                    <li><a class="treeview-item" href="{{ url('pegawai') }}"><i
                                                class="icon fa fa-circle-o"></i>
                                            Tabel pegawai</a></li>

                                </ul>
                                <ul class="treeview-menu">
                                    <li><a class="treeview-item" href="{{ url('posts') }}"><i
                                                class="icon fa fa-circle-o"></i>
                                            Tabel Post</a></li>

                                </ul>
                                {{-- </li>
                            <div class="links">
                                <a href="{{ url('barang') }}">Table Barang</a>
                            </div>

                            <div class="links">
                                <a href="{{ url('pegawai') }}">Table Pegawai</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
