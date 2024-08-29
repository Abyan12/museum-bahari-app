@extends('layouts.admin')

@section('adminkoleksi')

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p style="margin-top: -40px; margin-left: 30px; font-size: 26px;">Halo, User</p>
  <a href="#dasbor">Dashboard</a>
  <a href="#kategori">Kategori</a>
  <a href="#kolek">Koleksi</a>
  <a href="#visual data">Visualisasi Data</a>
  <br>
  <a href="#user">User</a>
  <a href="#role">Role</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">User 🡃
      </button>
      <div class="dropdown-content">
        <a href="#">Logout</a>
        
      </div>
    </div> 
  </div>

  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
 

@endsection